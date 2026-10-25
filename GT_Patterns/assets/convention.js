/* GT_Patterns — convention pages. Countdown, room-gallery tabs and FAQ accordion. Everything else is CSS. */
(function () {
	'use strict';

	function pad(n) { return n < 10 ? '0' + n : String(n); }

	/* ---------- Countdown ---------- */
	function initCountdown() {
		var boxes = document.querySelectorAll('.gtc-countdown[data-date]');
		if (!boxes.length) return;

		function tick() {
			var now = Date.now();
			for (var i = 0; i < boxes.length; i++) {
				var el = boxes[i];
				var end = Date.parse(el.getAttribute('data-date'));
				if (isNaN(end)) continue;
				var s = Math.max(0, Math.floor((end - now) / 1000));
				if (end - now <= 0) { el.classList.add('is-done'); continue; }
				var v = { d: Math.floor(s / 86400), h: Math.floor(s % 86400 / 3600), m: Math.floor(s % 3600 / 60), s: s % 60 };
				for (var k in v) {
					var b = el.querySelector('[data-u="' + k + '"]');
					if (b) b.textContent = k === 'd' ? String(v[k]) : pad(v[k]);
				}
			}
		}
		tick();
		setInterval(tick, 1000);
	}

	/* ---------- Room gallery tabs ----------
	   Every .gtc-room inside a .gtc-rooms becomes a tab, labelled by its .gtc-room__title.
	   The tabs use the theme's own button markup (.wp-block-buttons / .wp-block-button), so they
	   look exactly like your other buttons: solid = selected, outline = the others.
	   Without JS (or in the block editor) every room stays visible, stacked. */
	function initRooms(g, gi) {
		if (g.classList.contains('is-js')) return;
		var rooms = Array.prototype.slice.call(g.querySelectorAll('.gtc-room'));
		if (rooms.length < 2) return;

		var bar = document.createElement('div');
		bar.className = 'wp-block-buttons gtc-tabs';
		bar.setAttribute('role', 'tablist');
		bar.setAttribute('aria-label', 'Room types');
		var tabs = [], wraps = [];

		function select(n, focus) {
			for (var j = 0; j < rooms.length; j++) {
				var on = j === n;
				rooms[j].classList.toggle('is-active', on);
				wraps[j].classList.toggle('is-style-outline', !on);
				tabs[j].setAttribute('aria-selected', on ? 'true' : 'false');
				tabs[j].setAttribute('tabindex', on ? '0' : '-1');
			}
			if (focus) tabs[n].focus();
		}

		rooms.forEach(function (room, i) {
			var title = room.querySelector('.gtc-room__title');
			var pid = 'gtc-room-' + gi + '-' + i;
			var wrap = document.createElement('div');
			wrap.className = 'wp-block-button is-style-outline';
			wrap.setAttribute('role', 'presentation');
			var btn = document.createElement('button');
			btn.type = 'button';
			btn.className = 'wp-block-button__link wp-element-button';
			btn.id = pid + '-tab';
			btn.setAttribute('role', 'tab');
			btn.setAttribute('aria-controls', pid);
			btn.textContent = title ? title.textContent.replace(/\s+/g, ' ').trim() : 'Room ' + (i + 1);
			room.id = pid;
			room.setAttribute('role', 'tabpanel');
			room.setAttribute('aria-labelledby', btn.id);
			btn.addEventListener('click', function () { select(i, false); });
			wrap.appendChild(btn);
			bar.appendChild(wrap);
			tabs.push(btn);
			wraps.push(wrap);
		});

		bar.addEventListener('keydown', function (e) {
			var cur = tabs.indexOf(document.activeElement);
			if (cur < 0) return;
			var n = null;
			if (e.key === 'ArrowRight') n = (cur + 1) % tabs.length;
			else if (e.key === 'ArrowLeft') n = (cur - 1 + tabs.length) % tabs.length;
			else if (e.key === 'Home') n = 0;
			else if (e.key === 'End') n = tabs.length - 1;
			if (n === null) return;
			e.preventDefault();
			select(n, true);
		});

		rooms[0].parentNode.insertBefore(bar, rooms[0]);
		g.classList.add('is-js');
		select(0, false);
	}

	function initAll() {
		initCountdown();
		var galleries = document.querySelectorAll('.gtc-rooms');
		for (var gi = 0; gi < galleries.length; gi++) initRooms(galleries[gi], gi);
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initAll);
	} else {
		initAll();
	}

	/* ---------- FAQ accordion (event delegation, works for any number of .gtc-faq blocks) ---------- */
	if (window.gtcFaqBound) return;
	window.gtcFaqBound = true;

	document.addEventListener('click', function (e) {
		var btn = e.target.closest ? e.target.closest('.gtc-faq__question') : null;
		if (!btn) return;
		var item = btn.closest('.gtc-faq__item');
		var answer = item && item.querySelector('.gtc-faq__answer');
		if (!answer) return;
		var open = btn.getAttribute('aria-expanded') === 'true';
		btn.setAttribute('aria-expanded', open ? 'false' : 'true');
		answer.classList.toggle('is-open', !open);
		if (open) { answer.setAttribute('hidden', ''); } else { answer.removeAttribute('hidden'); }
	});
})();

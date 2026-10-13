/* GT_Patterns front-end helpers: scroll reveal, number counters, countdown, rotating words.
   Everything degrades gracefully: with no JS (or reduced motion) content is simply visible. */
(function () {
	'use strict';
	window.gtOK = true;
	var root = document.documentElement;
	var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	var hasIO = 'IntersectionObserver' in window;

	function each(list, fn) { Array.prototype.forEach.call(list, fn); }

	function reveal() {
		if (!hasIO || reduce || !root.classList.contains('gt-js')) { root.classList.remove('gt-js'); return; }
		var els = document.querySelectorAll('.gt-s>*:not(.gt-grid),.gt-grid>*');
		each(els, function (el) {
			var p = el.parentNode;
			if (p.classList && p.classList.contains('gt-grid')) {
				var i = Array.prototype.indexOf.call(p.children, el);
				el.style.setProperty('--gt-d', Math.min(i, 6) * 0.08 + 's');
			}
		});
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (e) {
				if (!e.isIntersecting && e.boundingClientRect.top > 0) { return; } // still below the fold
				var el = e.target;
				io.unobserve(el);
				el.classList.add('gt-in');
				setTimeout(function () {
					el.classList.add('gt-done');
					el.classList.remove('gt-in');
					el.style.removeProperty('--gt-d');
				}, 1200);
			});
		}, { threshold: 0.1, rootMargin: '0px 0px -5% 0px' });
		each(els, function (el) { io.observe(el); });
	}

	function counters() {
		if (!hasIO || reduce) { return; }
		var co = new IntersectionObserver(function (entries) {
			entries.forEach(function (e) {
				if (!e.isIntersecting) { return; }
				co.unobserve(e.target);
				run(e.target);
			});
		}, { threshold: 0.6 });
		function run(el) {
			var m = el.textContent.trim().match(/^([^\d]*)(\d[\d,.]*)(.*)$/);
			if (!m) { return; }
			var raw = m[2], end = parseFloat(raw.replace(/,/g, ''));
			if (isNaN(end)) { return; }
			if (!/,/.test(raw) && /^(19|20)\d\d$/.test(raw)) { return; } // looks like a year
			if (/^\//.test(m[3])) { return; } // e.g. 24/7
			var dec = (raw.split('.')[1] || '').length, commas = /,/.test(raw), t0 = null, dur = 1300;
			function fmt(v) {
				var s = v.toFixed(dec);
				return commas ? Number(s).toLocaleString('en-US', { minimumFractionDigits: dec, maximumFractionDigits: dec }) : s;
			}
			function step(ts) {
				if (t0 === null) { t0 = ts; }
				var p = Math.min((ts - t0) / dur, 1), eased = 1 - Math.pow(1 - p, 3);
				el.textContent = m[1] + fmt(end * eased) + m[3];
				if (p < 1) { requestAnimationFrame(step); } else { el.textContent = m[1] + raw + m[3]; }
			}
			requestAnimationFrame(step);
		}
		each(document.querySelectorAll('.gt-stat-num'), function (el) { co.observe(el); });
	}

	function countdowns() {
		each(document.querySelectorAll('.gt-countdown'), function (el) {
			var label = el.textContent.trim();
			var target = new Date(label.replace(' ', 'T')).getTime();
			if (isNaN(target)) { return; }
			el.setAttribute('aria-label', 'Countdown to ' + label);
			function box(u, n) { return '<span class="gt-cd"><b>' + n + '</b><i>' + u + '</i></span>'; }
			function tick() {
				var d = Math.max(0, target - Date.now()), s = Math.floor(d / 1000);
				el.innerHTML = box('Days', Math.floor(s / 86400)) + box('Hours', Math.floor(s % 86400 / 3600)) +
					box('Minutes', Math.floor(s % 3600 / 60)) + box('Seconds', s % 60);
			}
			tick();
			setInterval(tick, 1000);
		});
	}

	function rotators() {
		each(document.querySelectorAll('.gt-rotate'), function (el) {
			var words = el.textContent.split('|').map(function (w) { return w.trim(); }).filter(Boolean);
			if (words.length < 2) { return; }
			el.setAttribute('aria-label', words.join(', '));
			if (reduce) { el.textContent = words.join(' · '); return; }
			var span = document.createElement('span'), i = 0;
			span.textContent = words[0];
			el.textContent = '';
			el.appendChild(span);
			setInterval(function () {
				span.className = 'gt-rot-out';
				setTimeout(function () { i = (i + 1) % words.length; span.textContent = words[i]; span.className = ''; }, 350);
			}, 2800);
		});
	}

	function init() { reveal(); counters(); countdowns(); rotators(); }
	if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', init); } else { init(); }
})();

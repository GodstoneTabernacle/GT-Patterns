<?php
return array(
	'title'       => 'Convention page – general information',
	'categories'  => array( 'gt-convention', 'gt-pages' ),
	'description' => 'Welcome page: shared hero, slim countdown bar, key facts, three booking steps, Godstone notice and a closing call to action. Full-width bands.',
	'keywords'    => array( 'convention', 'general information', 'welcome', 'home' ),
	'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"gtc-band gtc-dark gtc-hero"} -->
<div class="wp-block-group alignfull gtc-band gtc-dark gtc-hero">
<!-- wp:group {"className":"gtc-hero__in"} -->
<div class="wp-block-group gtc-hero__in">
<!-- wp:paragraph {"className":"gtc-kicker"} -->
<p class="gtc-kicker">29 July – 1 August 2027</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Welcome to Birmingham 2027</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">You are warmly invited to the Hilton Birmingham Metropole hotel for special meetings, from Thursday, 29th July to Sunday, 1st August 2027.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#register">Start registration</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Accommodation</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gtc-band gtc-dark gtc-countdown-band"} -->
<div class="wp-block-group alignfull gtc-band gtc-dark gtc-countdown-band">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-cdbar"} -->
<div class="wp-block-group gtc-cdbar">
<!-- wp:paragraph {"className":"gtc-cdbar__label"} -->
<p class="gtc-cdbar__label">Convention starts in</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="gtc-countdown" data-date="2027-07-29T10:00:00+01:00" role="timer"><div class="gtc-cd"><b data-u="d">–</b><span>days</span></div><div class="gtc-cd"><b data-u="h">–</b><span>hours</span></div><div class="gtc-cd"><b data-u="m">–</b><span>minutes</span></div><div class="gtc-cd"><b data-u="s">–</b><span>seconds</span></div><p class="gtc-countdown__done">The convention has begun.</p></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gtc-band"} -->
<div class="wp-block-group alignfull gtc-band">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-grid gtc-g4"} -->
<div class="wp-block-group gtc-grid gtc-g4">
<!-- wp:group {"className":"gtc-fact"} -->
<div class="wp-block-group gtc-fact">
{{icon:pin}}

<!-- wp:paragraph {"className":"gtc-fact__label"} -->
<p class="gtc-fact__label">Location</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Hilton Birmingham Metropole</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">Pendigo Way, Marston Green, Birmingham B40 1PP</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-fact"} -->
<div class="wp-block-group gtc-fact">
{{icon:calendar}}

<!-- wp:paragraph {"className":"gtc-fact__label"} -->
<p class="gtc-fact__label">Check-in</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Wed 28th July (PM)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">Check-out: Monday 2nd August (AM)</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-fact"} -->
<div class="wp-block-group gtc-fact">
{{icon:bed}}

<!-- wp:paragraph {"className":"gtc-fact__label"} -->
<p class="gtc-fact__label">Extended stay</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Sun 25 July – Wed 4 Aug</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">Same rate, 3 nights before / 2 nights after</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-fact"} -->
<div class="wp-block-group gtc-fact">
{{icon:church}}

<!-- wp:paragraph {"className":"gtc-fact__label"} -->
<p class="gtc-fact__label">Godstone Tabernacle</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Services cancelled</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">Sun 25 July &amp; Wed 4 August</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"steps","align":"full","className":"gtc-band gtc-grey"} -->
<div id="steps" class="wp-block-group alignfull gtc-band gtc-grey">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">Convention booking instructions</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Three simple steps, in order, to get everything in place before July.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-grid gtc-g3"} -->
<div class="wp-block-group gtc-grid gtc-g3">
<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
<!-- wp:paragraph {"className":"gtc-num"} -->
<p class="gtc-num">1</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Convention registration form</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Please register via the “Home” page. This unlocks the next two steps.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#register">Register now</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
<!-- wp:paragraph {"className":"gtc-num"} -->
<p class="gtc-num">2</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Accommodation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>You won’t be able to book a room without first completing registration. Then book via the “Accommodation” page.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Book accommodation</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
<!-- wp:paragraph {"className":"gtc-num"} -->
<p class="gtc-num">3</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Visa letter form (if applicable)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Available after registration. Complete it via the “ETA/Visa Information” page if you need an invitation letter.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">ETA/Visa information</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gtc-band gtc-tight"} -->
<div class="wp-block-group alignfull gtc-band gtc-tight">
<!-- wp:group {"className":"gtc-wrap gtc-wrap--narrow"} -->
<div class="wp-block-group gtc-wrap gtc-wrap--narrow">
<!-- wp:group {"className":"gtc-notice"} -->
<div class="wp-block-group gtc-notice">
{{icon:church}}

<!-- wp:group {"className":"gtc-notice__body"} -->
<div class="wp-block-group gtc-notice__body">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Godstone Tabernacle services</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Please note, services held at Godstone Tabernacle on Sunday, 25th July and Wednesday, 4th August will be cancelled. More information on Godstone Tabernacle services before and after the convention will be announced closer to the time.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"register","align":"full","className":"gtc-band gtc-dark gtc-cta"} -->
<div id="register" class="wp-block-group alignfull gtc-band gtc-dark gtc-cta">
<!-- wp:group {"className":"gtc-wrap gtc-wrap--narrow"} -->
<div class="wp-block-group gtc-wrap gtc-wrap--narrow">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">Ready to begin?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Start with the registration form. Accommodation and visa letters follow once you’re registered.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Start registration</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	,
);

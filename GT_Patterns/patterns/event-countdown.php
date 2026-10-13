<?php
return array(
	'title'       => 'Event countdown',
	'categories'  => array( 'gt-events' ),
	'description' => 'Live countdown. Edit the date in format YYYY-MM-DD HH:MM.',
	'keywords'    => array( 'countdown', 'event' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-center gt-grad"} -->
<div class="wp-block-group gt-s gt-center gt-grad"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Coming soon</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Annual Convention 2027</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-countdown"} -->
<p class="gt-countdown">2027-06-12 09:00</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Register now</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

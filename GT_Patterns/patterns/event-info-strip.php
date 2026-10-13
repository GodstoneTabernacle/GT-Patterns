<?php
return array(
	'title'       => 'Event info strip',
	'categories'  => array( 'gt-events' ),
	'description' => 'Date, time and venue at a glance.',
	'keywords'    => array( 'event', 'details' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-compact"} -->
<div class="wp-block-group gt-s gt-compact"><!-- wp:group {"className":"gt-grid gt-g3"} -->
<div class="wp-block-group gt-grid gt-g3"><!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">📅</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Date</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Saturday, 12 June 2027</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">🕘</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Time</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>9:00 am – 5:00 pm</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">📍</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Venue</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Venue name, Your City</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

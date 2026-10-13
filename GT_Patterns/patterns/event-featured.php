<?php
return array(
	'title'       => 'Featured event',
	'categories'  => array( 'gt-events' ),
	'description' => 'Image with date, time, venue and register button.',
	'keywords'    => array( 'event', 'featured' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Featured event</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Annual Convention 2027</h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"gt-plain"} -->
<ul class="wp-block-list gt-plain"><!-- wp:list-item -->
<li>📅  Saturday, 12 June 2027</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>🕘  9:00 am – 5:00 pm</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>📍  Venue name, Your City</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>A short description goes here. Keep it to two or three clear sentences.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Register now</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Event details</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

<?php
return array(
	'title'       => 'Venue information',
	'categories'  => array( 'gt-events' ),
	'description' => 'Venue image with practical details.',
	'keywords'    => array( 'venue', 'location' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Venue</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Where to find us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Venue name, 123 Main Street, Your City</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gt-check"} -->
<ul class="wp-block-list gt-check"><!-- wp:list-item -->
<li>Free on-site parking</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Step-free access throughout</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hotels nearby – ask us for rates</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Public transport: bus 12 stops outside</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get directions</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

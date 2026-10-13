<?php
return array(
	'title'       => 'Directions & parking',
	'categories'  => array( 'gt-visit' ),
	'description' => 'Address, parking checklist and map image.',
	'keywords'    => array( 'directions', 'parking', 'map' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Find us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Directions & parking</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>123 Main Street, Your City, AB1 2CD</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gt-check"} -->
<ul class="wp-block-list gt-check"><!-- wp:list-item -->
<li>Free parking on site</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Accessible entrances and seating</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Overflow parking on Church Road</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Open in Maps</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

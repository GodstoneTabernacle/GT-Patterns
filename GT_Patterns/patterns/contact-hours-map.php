<?php
return array(
	'title'       => 'Contact – hours and map',
	'categories'  => array( 'gt-contact' ),
	'description' => 'Opening hours with an image slot for a map or photo.',
	'keywords'    => array( 'contact', 'hours', 'map' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Visit</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Find us here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>123 Main Street, Your City</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Mon–Fri: 9:00 – 17:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Saturday: 10:00 – 14:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sunday: Closed</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get directions</a></div>
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

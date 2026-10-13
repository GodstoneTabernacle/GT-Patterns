<?php
return array(
	'title'       => 'Hero – image and text',
	'categories'  => array( 'gt-hero' ),
	'description' => 'Image on the left, headline and buttons on the right.',
	'keywords'    => array( 'hero', 'image' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-hero"} -->
<div class="wp-block-group gt-s gt-hero"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"className":"gt-img gt-img--tall"} -->
<figure class="wp-block-image gt-img gt-img--tall"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">New · Now available</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">A clear headline that says what you do</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">A short, friendly sentence that explains what you do and who it is for. Keep it clear and keep it human.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">See how it works</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">✓ No credit card needed   ✓ Cancel anytime</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

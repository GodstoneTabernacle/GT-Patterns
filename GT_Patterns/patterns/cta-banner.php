<?php
return array(
	'title'       => 'CTA – primary banner',
	'categories'  => array( 'gt-cta' ),
	'description' => 'Solid primary-color banner with two buttons.',
	'keywords'    => array( 'cta', 'banner' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-center gt-primary"} -->
<div class="wp-block-group gt-s gt-center gt-primary"><!-- wp:heading -->
<h2 class="wp-block-heading">Ready to get started?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">A short line encouraging people to take the next step.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Contact us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

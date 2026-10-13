<?php
return array(
	'title'       => 'CTA – dark',
	'categories'  => array( 'gt-cta' ),
	'description' => 'Centered call to action on dark.',
	'keywords'    => array( 'cta', 'dark' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-center gt-dark"} -->
<div class="wp-block-group gt-s gt-center gt-dark"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Don’t wait</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Join thousands of happy customers today</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Start free, upgrade when you’re ready.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Create account</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Talk to sales</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

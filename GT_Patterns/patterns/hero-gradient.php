<?php
return array(
	'title'       => 'Hero – gradient',
	'categories'  => array( 'gt-hero' ),
	'description' => 'Bold centered hero on a gradient of your primary color.',
	'keywords'    => array( 'hero', 'gradient' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-hero gt-center gt-grad"} -->
<div class="wp-block-group gt-s gt-hero gt-center gt-grad"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Introducing something new</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Big ideas deserve a bold first impression</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Use this space for one confident sentence that makes visitors want to scroll further.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Start free</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Talk to us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

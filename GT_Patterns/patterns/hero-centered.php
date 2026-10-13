<?php
return array(
	'title'       => 'Hero – centered',
	'categories'  => array( 'gt-hero' ),
	'description' => 'Centered headline, short text and two buttons on a soft background.',
	'keywords'    => array( 'hero', 'banner', 'header' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-hero gt-center gt-soft"} -->
<div class="wp-block-group gt-s gt-hero gt-center gt-soft"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Welcome</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Build something your visitors will love</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">A short, friendly sentence that explains what you do and who it is for. Keep it clear and keep it human.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

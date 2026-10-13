<?php
return array(
	'title'       => 'Full-width image banner',
	'categories'  => array( 'gt-media' ),
	'description' => 'Photo banner with a short message and button.',
	'keywords'    => array( 'banner', 'image' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-overlay gt-dark gt-center gt-banner"} -->
<div class="wp-block-group gt-s gt-overlay gt-dark gt-center gt-banner"><!-- wp:image {"className":"gt-img gt-ov-img"} -->
<figure class="wp-block-image gt-img gt-ov-img"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Join us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Be part of something bigger</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Plan your visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

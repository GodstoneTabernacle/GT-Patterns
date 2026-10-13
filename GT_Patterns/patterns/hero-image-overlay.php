<?php
return array(
	'title'       => 'Hero – full image with overlay',
	'categories'  => array( 'gt-hero' ),
	'description' => 'Full-width photo with dark overlay and text. Click the section background to set the image.',
	'keywords'    => array( 'hero', 'image', 'overlay', 'church' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-overlay gt-dark gt-hero"} -->
<div class="wp-block-group gt-s gt-overlay gt-dark gt-hero"><!-- wp:image {"className":"gt-img gt-ov-img"} -->
<figure class="wp-block-image gt-img gt-ov-img"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Welcome to Your Church</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">A place to belong, grow and serve</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">A short, friendly sentence that explains what you do and who it is for. Keep it clear and keep it human.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Plan your visit</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Watch online</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

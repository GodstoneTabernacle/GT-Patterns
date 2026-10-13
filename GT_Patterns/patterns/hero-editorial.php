<?php
return array(
	'title'       => 'Hero – editorial',
	'categories'  => array( 'gt-hero' ),
	'description' => 'Oversized headline with text and buttons beside it.',
	'keywords'    => array( 'hero', 'minimal' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-hero gt-line"} -->
<div class="wp-block-group gt-s gt-hero gt-line"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"className":"gt-xl"} -->
<h1 class="wp-block-heading gt-xl">Simple ideas, beautifully done</h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">A short, friendly sentence that explains what you do and who it is for. Keep it clear and keep it human.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get in touch</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Our work</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

<?php
return array(
	'title'       => 'Page header – with image',
	'categories'  => array( 'gt-headers' ),
	'description' => 'Title and intro beside an image.',
	'keywords'    => array( 'page title', 'header', 'image' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-pagehead"} -->
<div class="wp-block-group gt-s gt-pagehead"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-crumb"} -->
<p class="gt-crumb">Home  /  About</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">About our company</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">A short introduction to who you are and what you do.</p>
<!-- /wp:paragraph --></div>
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

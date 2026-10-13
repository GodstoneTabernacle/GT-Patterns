<?php
return array(
	'title'       => 'Gallery – 3 images',
	'categories'  => array( 'gt-gallery' ),
	'description' => 'Three square images in a row.',
	'keywords'    => array( 'gallery', 'images' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Gallery</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">A closer look</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g3"} -->
<div class="wp-block-group gt-grid gt-g3"><!-- wp:image {"className":"gt-img gt-img--sq"} -->
<figure class="wp-block-image gt-img gt-img--sq"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img gt-img--sq"} -->
<figure class="wp-block-image gt-img gt-img--sq"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img gt-img--sq"} -->
<figure class="wp-block-image gt-img gt-img--sq"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

<?php
return array(
	'title'       => 'Gallery – masonry',
	'categories'  => array( 'gt-media' ),
	'description' => 'Photos of mixed sizes in flowing columns.',
	'keywords'    => array( 'gallery', 'masonry' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Gallery</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Life at our church</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-masonry"} -->
<div class="wp-block-group gt-masonry"><!-- wp:image {"className":"gt-img gt-img--tall"} -->
<figure class="wp-block-image gt-img gt-img--tall"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img gt-img--sq"} -->
<figure class="wp-block-image gt-img gt-img--sq"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img gt-img--sq"} -->
<figure class="wp-block-image gt-img gt-img--sq"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img gt-img--tall"} -->
<figure class="wp-block-image gt-img gt-img--tall"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

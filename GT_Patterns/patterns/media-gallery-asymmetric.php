<?php
return array(
	'title'       => 'Gallery – asymmetric collage',
	'categories'  => array( 'gt-media' ),
	'description' => 'One large photo with four smaller ones.',
	'keywords'    => array( 'gallery', 'collage' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Gallery</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Moments we love</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-asym"} -->
<div class="wp-block-group gt-grid gt-asym"><!-- wp:image {"className":"gt-img"} -->
<figure class="wp-block-image gt-img"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img"} -->
<figure class="wp-block-image gt-img"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img"} -->
<figure class="wp-block-image gt-img"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img"} -->
<figure class="wp-block-image gt-img"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gt-img"} -->
<figure class="wp-block-image gt-img"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

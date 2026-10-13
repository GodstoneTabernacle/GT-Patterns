<?php
return array(
	'title'       => 'Overlapping content',
	'categories'  => array( 'gt-layouts' ),
	'description' => 'Text card that overlaps an image.',
	'keywords'    => array( 'overlap', 'layout' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center","className":"gt-overlap"} -->
<div class="wp-block-columns are-vertically-aligned-center gt-overlap"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:image {"className":"gt-img gt-img--tall"} -->
<figure class="wp-block-image gt-img gt-img--tall"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"className":"gt-box"} -->
<div class="wp-block-group gt-box"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Our approach</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Content that overlaps the image</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short description goes here. Keep it to two or three clear sentences.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Read more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

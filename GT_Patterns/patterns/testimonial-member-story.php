<?php
return array(
	'title'       => 'Member story',
	'categories'  => array( 'gt-testimonials' ),
	'description' => 'Photo with a large quote from a church member.',
	'keywords'    => array( 'story', 'testimony', 'member' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:image {"className":"gt-img gt-img--tall"} -->
<figure class="wp-block-image gt-img gt-img--tall"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Member story</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-quote gt-quote-lg"} -->
<p class="gt-quote gt-quote-lg">“A real story, in the member’s own words, about how the church community has made a difference in their life.”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gt-item gt-tight"} -->
<div class="wp-block-group gt-item gt-tight"><!-- wp:paragraph {"className":"gt-name"} -->
<p class="gt-name">Member Name</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-role"} -->
<p class="gt-role">Member since 2019</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

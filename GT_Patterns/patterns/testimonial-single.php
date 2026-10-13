<?php
return array(
	'title'       => 'Testimonial – single quote',
	'categories'  => array( 'gt-testimonials' ),
	'description' => 'One large quote with avatar on a soft background.',
	'keywords'    => array( 'testimonial', 'quote' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-soft"} -->
<div class="wp-block-group gt-s gt-soft"><!-- wp:group {"className":"gt-box gt-center"} -->
<div class="wp-block-group gt-box gt-center"><!-- wp:paragraph {"className":"gt-stars"} -->
<p class="gt-stars">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-quote gt-quote-lg"} -->
<p class="gt-quote gt-quote-lg">“A short, genuine quote from a happy customer goes here. Two or three sentences work best.”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gt-person"} -->
<div class="wp-block-group gt-person"><!-- wp:image {"className":"gt-img gt-avatar gt-avatar--lg"} -->
<figure class="wp-block-image gt-img gt-avatar gt-avatar--lg"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"gt-name"} -->
<p class="gt-name">Customer Name</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-role"} -->
<p class="gt-role">Job title, Company</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

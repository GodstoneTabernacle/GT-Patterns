<?php
return array(
	'title'       => 'Testimonial – dark quote',
	'categories'  => array( 'gt-testimonials' ),
	'description' => 'Centered quote on a dark background.',
	'keywords'    => array( 'testimonial', 'dark' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-dark gt-center"} -->
<div class="wp-block-group gt-s gt-dark gt-center"><!-- wp:paragraph {"className":"gt-stars"} -->
<p class="gt-stars">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-quote gt-quote-lg"} -->
<p class="gt-quote gt-quote-lg">“One powerful sentence from a customer that sums up why they love working with you.”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gt-person"} -->
<div class="wp-block-group gt-person"><!-- wp:image {"className":"gt-img gt-avatar"} -->
<figure class="wp-block-image gt-img gt-avatar"><img alt=""/></figure>
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
<!-- /wp:group -->
HTML
	,
);

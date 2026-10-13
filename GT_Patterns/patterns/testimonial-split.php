<?php
return array(
	'title'       => 'Testimonials – text and 2 cards',
	'categories'  => array( 'gt-testimonials' ),
	'description' => 'Intro text with two stacked review cards.',
	'keywords'    => array( 'testimonial' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Testimonials</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Don’t just take our word for it</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Real feedback from real customers.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:paragraph {"className":"gt-stars"} -->
<p class="gt-stars">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-quote"} -->
<p class="gt-quote">“We launched in a weekend and the feedback has been fantastic. Everything just works.”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gt-person"} -->
<div class="wp-block-group gt-person"><!-- wp:image {"className":"gt-img gt-avatar"} -->
<figure class="wp-block-image gt-img gt-avatar"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"gt-name"} -->
<p class="gt-name">Alex Morgan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-role"} -->
<p class="gt-role">Founder, Northwind</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:paragraph {"className":"gt-stars"} -->
<p class="gt-stars">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-quote"} -->
<p class="gt-quote">“Clear, fast and beautiful. Our customers notice the difference straight away.”</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gt-person"} -->
<div class="wp-block-group gt-person"><!-- wp:image {"className":"gt-img gt-avatar"} -->
<figure class="wp-block-image gt-img gt-avatar"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"gt-name"} -->
<p class="gt-name">Priya Shah</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-role"} -->
<p class="gt-role">Marketing Lead, Contoso</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

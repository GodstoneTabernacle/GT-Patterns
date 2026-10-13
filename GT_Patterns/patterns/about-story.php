<?php
return array(
	'title'       => 'About – story with numbers',
	'categories'  => array( 'gt-content' ),
	'description' => 'Two-column story with three key numbers.',
	'keywords'    => array( 'about', 'story' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Our story</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">We started with a simple idea</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Tell visitors how you began, what you believe in and what makes you different. Two short paragraphs are plenty.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Add a few facts and figures below to build trust at a glance.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"gt-grid gt-g3 gt-stats-line"} -->
<div class="wp-block-group gt-grid gt-g3 gt-stats-line"><!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">2015</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Founded</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">40+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Team members</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">1,200</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Projects delivered</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

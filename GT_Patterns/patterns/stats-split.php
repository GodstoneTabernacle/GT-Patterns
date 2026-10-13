<?php
return array(
	'title'       => 'Stats – text and number boxes',
	'categories'  => array( 'gt-stats' ),
	'description' => 'Intro text with a 2×2 grid of numbers.',
	'keywords'    => array( 'stats' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">By the numbers</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Results that speak for themselves</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">A sentence that puts these numbers into context.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"gt-grid gt-g2"} -->
<div class="wp-block-group gt-grid gt-g2"><!-- wp:group {"className":"gt-box"} -->
<div class="wp-block-group gt-box"><!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">10k+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Customers</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-box"} -->
<div class="wp-block-group gt-box"><!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">99.9%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Uptime</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-box"} -->
<div class="wp-block-group gt-box"><!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">50+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Countries</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-box"} -->
<div class="wp-block-group gt-box"><!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">24/7</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Support</p>
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

<?php
return array(
	'title'       => 'Hero – with stats panel',
	'categories'  => array( 'gt-hero' ),
	'description' => 'Centered hero with a four-number panel underneath.',
	'keywords'    => array( 'hero', 'stats' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-hero gt-center gt-soft"} -->
<div class="wp-block-group gt-s gt-hero gt-center gt-soft"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Trusted worldwide</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Grow faster with tools that just work</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">A short, friendly sentence that explains what you do and who it is for. Keep it clear and keep it human.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get started</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Watch demo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"gt-box gt-grid gt-g4 gt-center"} -->
<div class="wp-block-group gt-box gt-grid gt-g4 gt-center"><!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">2,000+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Active customers</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">50+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Countries</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">4.9/5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Average rating</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-stat"} -->
<div class="wp-block-group gt-stat"><!-- wp:paragraph {"className":"gt-stat-num"} -->
<p class="gt-stat-num">15 min</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-stat-label"} -->
<p class="gt-stat-label">Average setup</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

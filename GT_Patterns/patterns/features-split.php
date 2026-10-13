<?php
return array(
	'title'       => 'Features – text with 2×2 cards',
	'categories'  => array( 'gt-features' ),
	'description' => 'Intro text on the left, four small cards on the right.',
	'keywords'    => array( 'features', 'split' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Features</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Powerful features, simple to use</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Explain in a sentence or two why these features matter to your visitors.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Explore features</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"gt-grid gt-g2"} -->
<div class="wp-block-group gt-grid gt-g2"><!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">⚡</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lightning fast</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Pages load quickly so visitors stay and keep reading.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">🎯</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Built to convert</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Clear layouts guide people toward the action you want.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">🔒</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Secure by default</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Sensible defaults keep your site and your visitors safe.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">📱</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Fully responsive</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Looks sharp on phones, tablets and large desktop screens.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

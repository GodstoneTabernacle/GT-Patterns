<?php
return array(
	'title'       => 'Conference registration call to action',
	'categories'  => array( 'gt-events' ),
	'description' => 'Dark banner pushing registration.',
	'keywords'    => array( 'registration', 'conference', 'cta' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-center gt-dark"} -->
<div class="wp-block-group gt-s gt-center gt-dark"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Registration open</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Join us for the Annual Convention</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Early-bird registration closes soon. Reserve your place today.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Register now</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View schedule</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

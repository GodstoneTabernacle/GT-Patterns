<?php
return array(
	'title'       => 'CTA – gradient',
	'categories'  => array( 'gt-cta' ),
	'description' => 'Centered call to action on a gradient.',
	'keywords'    => array( 'cta', 'gradient' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-center gt-grad"} -->
<div class="wp-block-group gt-s gt-center gt-grad"><!-- wp:heading -->
<h2 class="wp-block-heading">Your next big step starts here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">One short, motivating sentence.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get started now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

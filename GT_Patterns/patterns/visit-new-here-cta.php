<?php
return array(
	'title'       => 'New here? call to action',
	'categories'  => array( 'gt-visit' ),
	'description' => 'Friendly banner inviting visitors.',
	'keywords'    => array( 'new here', 'cta' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-center gt-primary"} -->
<div class="wp-block-group gt-s gt-center gt-primary"><!-- wp:heading -->
<h2 class="wp-block-heading">New here? We saved you a seat</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Let us know you’re coming and we’ll make sure someone is there to welcome you.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Plan your visit</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Watch online</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

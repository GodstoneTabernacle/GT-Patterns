<?php
return array(
	'title'       => 'Volunteer call to action',
	'categories'  => array( 'gt-ministries' ),
	'description' => 'Short invitation to serve.',
	'keywords'    => array( 'volunteer', 'cta' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-soft"} -->
<div class="wp-block-group gt-s gt-soft"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:heading -->
<h2 class="wp-block-heading">Ready to serve?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>There’s a role for every gift and every schedule.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"gt-btn-full"} -->
<div class="wp-block-button gt-btn-full"><a class="wp-block-button__link wp-element-button">Volunteer sign-up</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline gt-btn-full"} -->
<div class="wp-block-button is-style-outline gt-btn-full"><a class="wp-block-button__link wp-element-button">See opportunities</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

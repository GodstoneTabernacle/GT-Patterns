<?php
return array(
	'title'       => 'Giving call to action',
	'categories'  => array( 'gt-giving' ),
	'description' => 'Dark banner with give buttons.',
	'keywords'    => array( 'giving', 'donate', 'cta' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-center gt-dark"} -->
<div class="wp-block-group gt-s gt-center gt-dark"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Generosity</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Give, and help change lives</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Your gift supports our ministries, our community and our mission.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Give online</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Other ways to give</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

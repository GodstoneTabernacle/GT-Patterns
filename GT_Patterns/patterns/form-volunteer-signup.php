<?php
return array(
	'title'       => 'Volunteer sign-up – form card',
	'categories'  => array( 'gt-giving' ),
	'description' => 'Volunteer sign-up with a card for your form.',
	'keywords'    => array( 'form', 'volunteer' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-soft"} -->
<div class="wp-block-group gt-s gt-soft"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Volunteer</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Sign up to serve</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Tell us where you’d like to help.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Sign up to serve</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">Replace this note with your form block (Ninja Forms, Contact Form 7, Fluent Forms, WPForms…).</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"gt-btn-full"} -->
<div class="wp-block-button gt-btn-full"><a class="wp-block-button__link wp-element-button">Sign up</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

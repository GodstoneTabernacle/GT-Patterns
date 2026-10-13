<?php
return array(
	'title'       => 'Visitor registration – form card',
	'categories'  => array( 'gt-giving' ),
	'description' => 'Let first-time visitors say hello.',
	'keywords'    => array( 'form', 'visitor' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Welcome</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Let us know you visited</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">We’d love to say hello and stay in touch.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Let us know you visited</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">Replace this note with your form block (Ninja Forms, Contact Form 7, Fluent Forms, WPForms…).</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"gt-btn-full"} -->
<div class="wp-block-button gt-btn-full"><a class="wp-block-button__link wp-element-button">Say hello</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

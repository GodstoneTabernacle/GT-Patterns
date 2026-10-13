<?php
return array(
	'title'       => 'Full page – contact',
	'categories'  => array( 'gt-pages' ),
	'description' => 'Header, contact cards, form card, hours and FAQ.',
	'keywords'    => array( 'contact', 'page' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-pagehead gt-soft"} -->
<div class="wp-block-group gt-s gt-pagehead gt-soft"><!-- wp:paragraph {"className":"gt-crumb"} -->
<p class="gt-crumb">Home  /  Page title</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Page title goes here</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">One short line that introduces this page.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">We’d love to hear from you</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g3"} -->
<div class="wp-block-group gt-grid gt-g3"><!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">✉️</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Email us</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>hello@example.com</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Send email</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">📞</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Call us</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>+1 (555) 123-4567</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Call now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">📍</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Visit us</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>123 Main Street, Your City</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Get directions</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Let’s talk</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Tell us a little about what you need and we’ll reply within one business day.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>✉️  hello@example.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>📞  +1 (555) 123-4567</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>📍  123 Main Street, Your City</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Send us a message</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">Replace this note with your form block (Contact Form 7, Fluent Forms, WPForms, Ninja Forms…).</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"gt-btn-full"} -->
<div class="wp-block-button gt-btn-full"><a class="wp-block-button__link wp-element-button">Email us instead</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Visit</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Find us here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>123 Main Street, Your City</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Mon–Fri: 9:00 – 17:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Saturday: 10:00 – 14:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sunday: Closed</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get directions</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s gt-soft"} -->
<div class="wp-block-group gt-s gt-soft"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">FAQ</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Good to know</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g2"} -->
<div class="wp-block-group gt-grid gt-g2"><!-- wp:group {"className":"gt-card gt-card--flat"} -->
<div class="wp-block-group gt-card gt-card--flat"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">How do I get started?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Describe the first step in one or two clear sentences.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-card--flat"} -->
<div class="wp-block-group gt-card gt-card--flat"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Can I cancel at any time?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Yes. Explain your cancellation or refund policy here.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-card--flat"} -->
<div class="wp-block-group gt-card gt-card--flat"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Do you offer support?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tell people how to reach you and how quickly you reply.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-card--flat"} -->
<div class="wp-block-group gt-card gt-card--flat"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">What payment methods do you accept?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>List the payment options you support.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

<?php
$gt_contact_icons_dir = GT_PATTERNS_DIR . 'assets/icons/';
$gt_icon_map_pin      = (string) @file_get_contents( $gt_contact_icons_dir . 'map-pin.svg' );
$gt_icon_phone        = (string) @file_get_contents( $gt_contact_icons_dir . 'phone.svg' );
$gt_icon_mail         = (string) @file_get_contents( $gt_contact_icons_dir . 'mail.svg' );

return array(
	'title'       => 'Full page – church contact',
	'categories'  => array( 'gt-pages' ),
	'description' => 'Contact hero, info cards with icons, map embed and a Ninja Forms placeholder.',
	'keywords'    => array( 'contact', 'page', 'church', 'ninja forms', 'map' ),
	'content'     => <<<HTML
<!-- wp:group {"className":"gt-s gt-hero gt-center gt-grad"} -->
<div class="wp-block-group gt-s gt-hero gt-center gt-grad"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">We’d love to meet you</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Get in touch with our church family</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Have a question, a prayer request, or just want to say hello? Reach out below and someone from our team will get back to you soon.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact-form">Send us a message</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Contact details</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Reach us any way you like</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g3"} -->
<div class="wp-block-group gt-grid gt-g3"><!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_map_pin}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Address</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>123 Main Street, Your City, ST 00000</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Get directions</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_phone}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Phone</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="tel:+15551234567">+1 (555) 123-4567</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:+15551234567">Call now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_mail}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Email</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="mailto:hello@example.com">hello@example.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.com">Send email</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s gt-soft"} -->
<div class="wp-block-group gt-s gt-soft"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Visit</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Find us on the map</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-map"} -->
<div class="wp-block-group gt-map"><!-- wp:html -->
<!-- Replace this placeholder with your embedded Google Maps / OpenStreetMap iframe for the church address. -->
<iframe class="gt-map-frame" src="" title="Map to our church" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s","anchor":"contact-form"} -->
<div class="wp-block-group gt-s" id="contact-form"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Message us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Send us a message</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Fill out the form below and a member of our team will respond within one business day.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-single"} -->
<div class="wp-block-group gt-card gt-single"><!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">Ninja Forms placeholder — replace this block with your Ninja Forms shortcode or the Ninja Forms block (e.g. [ninja_form id="1"]).</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

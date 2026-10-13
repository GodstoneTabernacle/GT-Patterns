<?php
return array(
	'title'       => 'Services – image cards',
	'categories'  => array( 'gt-features' ),
	'description' => 'Three service cards with an image slot, text and button.',
	'keywords'    => array( 'services', 'cards', 'image' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Services</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">What we do best</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Pick a service to see how we can help.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g3"} -->
<div class="wp-block-group gt-grid gt-g3"><!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Strategy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Plan the right approach before you spend a cent.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Design</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Beautiful, usable design that fits your brand.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Support</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Fast, friendly help long after launch.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

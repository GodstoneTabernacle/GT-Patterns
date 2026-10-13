<?php
return array(
	'title'       => 'Pricing – single plan',
	'categories'  => array( 'gt-pricing' ),
	'description' => 'One centered plan with checklist.',
	'keywords'    => array( 'pricing', 'single' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-soft"} -->
<div class="wp-block-group gt-s gt-soft"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">One price</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Everything included, one simple price</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-single"} -->
<div class="wp-block-group gt-single"><!-- wp:group {"className":"gt-card gt-feat"} -->
<div class="wp-block-group gt-card gt-feat"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Full access</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-price"} -->
<p class="gt-price">$49</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">one-time payment</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gt-check"} -->
<ul class="wp-block-list gt-check"><!-- wp:list-item -->
<li>All features included</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Free updates</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Priority email support</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>30-day money-back guarantee</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"gt-btn-full"} -->
<div class="wp-block-button gt-btn-full"><a class="wp-block-button__link wp-element-button">Buy now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

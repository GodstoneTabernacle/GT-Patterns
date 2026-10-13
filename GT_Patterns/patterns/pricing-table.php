<?php
return array(
	'title'       => 'Pricing – comparison table',
	'categories'  => array( 'gt-pricing' ),
	'description' => 'Plan comparison table with a call-to-action button.',
	'keywords'    => array( 'pricing', 'table' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Compare plans</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Find the right fit</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"gt-table","hasFixedLayout":true} -->
<figure class="wp-block-table gt-table"><table class="has-fixed-layout"><thead><tr><th>Features</th><th>Starter</th><th>Pro</th><th>Business</th></tr></thead><tbody><tr><td>Projects</td><td>3</td><td>25</td><td>Unlimited</td></tr><tr><td>Team members</td><td>1</td><td>5</td><td>25</td></tr><tr><td>Storage</td><td>5 GB</td><td>50 GB</td><td>500 GB</td></tr><tr><td>Priority support</td><td>—</td><td>✓</td><td>✓</td></tr><tr><td>Custom domain</td><td>—</td><td>✓</td><td>✓</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Start free trial</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

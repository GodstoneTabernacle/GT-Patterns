<?php
return array(
	'title'       => 'Full page – pricing',
	'categories'  => array( 'gt-pages' ),
	'description' => 'Header, plans, comparison table, FAQ and call to action.',
	'keywords'    => array( 'pricing', 'page' ),
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
<p class="gt-eyebrow">Pricing</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Simple, honest pricing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Pick the plan that fits. Change or cancel at any time.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g3"} -->
<div class="wp-block-group gt-grid gt-g3"><!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Starter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">For individuals</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-price"} -->
<p class="gt-price">$9</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">per month</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gt-check"} -->
<ul class="wp-block-list gt-check"><!-- wp:list-item -->
<li>Feature one</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feature two</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feature three</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline gt-btn-full"} -->
<div class="wp-block-button is-style-outline gt-btn-full"><a class="wp-block-button__link wp-element-button">Choose Starter</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-feat"} -->
<div class="wp-block-group gt-card gt-feat"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Most popular</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Pro</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">For growing teams</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-price"} -->
<p class="gt-price">$29</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">per month</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gt-check"} -->
<ul class="wp-block-list gt-check"><!-- wp:list-item -->
<li>Feature one</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feature two</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feature three</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feature four</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"gt-btn-full"} -->
<div class="wp-block-button gt-btn-full"><a class="wp-block-button__link wp-element-button">Choose Pro</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Business</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">For larger teams</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-price"} -->
<p class="gt-price">$79</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">per month</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gt-check"} -->
<ul class="wp-block-list gt-check"><!-- wp:list-item -->
<li>Feature one</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feature two</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feature three</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feature four</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feature five</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline gt-btn-full"} -->
<div class="wp-block-button is-style-outline gt-btn-full"><a class="wp-block-button__link wp-element-button">Choose Business</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

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

<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">FAQ</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Frequently asked questions</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Quick answers to the things people ask most.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-faqs"} -->
<div class="wp-block-group gt-faqs"><!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>How do I get started?</summary><!-- wp:paragraph -->
<p>Describe the first step in one or two clear sentences.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>Can I cancel at any time?</summary><!-- wp:paragraph -->
<p>Yes. Explain your cancellation or refund policy here.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>Do you offer support?</summary><!-- wp:paragraph -->
<p>Tell people how to reach you and how quickly you reply.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>What payment methods do you accept?</summary><!-- wp:paragraph -->
<p>List the payment options you support.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>Is my data safe?</summary><!-- wp:paragraph -->
<p>Explain briefly how you protect customer information.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s gt-center gt-grad"} -->
<div class="wp-block-group gt-s gt-center gt-grad"><!-- wp:heading -->
<h2 class="wp-block-heading">Your next big step starts here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">One short, motivating sentence.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get started now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

<?php
return array(
	'title'       => 'Convention page – ETA/Visa information',
	'categories'  => array( 'gt-convention', 'gt-pages' ),
	'description' => 'Travel requirements page: ETA vs Standard Visitor Visa comparison cards, apply buttons and a visa letter request form.',
	'keywords'    => array( 'convention', 'visa', 'eta', 'travel' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-pagehead gt-center gt-conv-hero"} -->
<div class="wp-block-group gt-s gt-pagehead gt-center gt-conv-hero"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Travel requirements</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">ETA/Visa – Travel Requirements</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">All those travelling to the UK will require either an electronic travel authorisation (ETA) or a visa.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.gov.uk/check-uk-visa">Check if you need an ETA or visa</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s gt-vs-wrap"} -->
<div class="wp-block-group gt-s gt-vs-wrap"><!-- wp:html -->
<div class="gt-vs-badge">VS</div>
<!-- /wp:html -->

<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"className":"gt-card gt-eta-card"} -->
<div class="wp-block-group gt-card gt-eta-card"><!-- wp:group {"className":"gt-icon"} -->
<div class="wp-block-group gt-icon"><!-- wp:paragraph -->
<p>🛂</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">1. Electronic Travel Authorisation</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">ETA</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>An ETA is not a visa. It is digital permission to travel, linked to a traveller's passport, and must be completed (one per person) before you travel to the UK.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gt-check"} -->
<ul class="wp-block-list gt-check"><!-- wp:list-item -->
<li>Costs £20</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Permits multiple journeys to the UK</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Valid for 2 years, or until your passport expires — whichever is sooner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Approval can take up to 3 days</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">You do not need to enter your travel details to apply for an ETA, so we advise you apply early as it lasts for 2 years.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.gov.uk/eta/apply">Apply for an ETA</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"className":"gt-card gt-visa-card"} -->
<div class="wp-block-group gt-card gt-visa-card"><!-- wp:group {"className":"gt-icon"} -->
<div class="wp-block-group gt-icon"><!-- wp:paragraph -->
<p>📋</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">2. Standard Visitor Visa</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Visa</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Those who require a visa to visit the UK will require a Standard Visitor Visa.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gt-check"} -->
<ul class="wp-block-list gt-check"><!-- wp:list-item -->
<li>Apply online before you travel to the UK</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Attend an appointment at a visa application centre in your country</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The application process can sometimes take several months</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small"><strong>Please apply in good time!</strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.gov.uk/standard-visitor/apply-standard-visitor-visa">Apply for a visa</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s gt-center gt-primary"} -->
<div class="wp-block-group gt-s gt-center gt-primary"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Requesting a visa letter</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">We can provide a visa letter</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">To help with your application process, please enter the email address you used when completing your convention registration.</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Email address","buttonText":"Request visa letter","className":"is-style-default"} /--></div>
<!-- /wp:group -->
HTML
	,
);

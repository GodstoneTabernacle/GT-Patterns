<?php
return array(
	'title'       => 'Convention page – ETA/Visa information',
	'categories'  => array( 'gt-convention', 'gt-pages' ),
	'description' => 'Travel requirements: shared hero, ETA and visa side-by-side tiles with apply buttons, and a visa letter request section with a form slot.',
	'keywords'    => array( 'convention', 'visa', 'eta', 'travel' ),
	'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"gtc-band gtc-dark gtc-hero"} -->
<div class="wp-block-group alignfull gtc-band gtc-dark gtc-hero">
<!-- wp:group {"className":"gtc-hero__in"} -->
<div class="wp-block-group gtc-hero__in">
<!-- wp:paragraph {"className":"gtc-kicker"} -->
<p class="gtc-kicker">Travel requirements</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">ETA and visa information</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">All those travelling to the UK will require either an electronic travel authorisation (ETA) or a visa.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.gov.uk/check-uk-visa">Check if you need an ETA or visa</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gtc-band gtc-grey"} -->
<div class="wp-block-group alignfull gtc-band gtc-grey">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-grid gtc-g2"} -->
<div class="wp-block-group gtc-grid gtc-g2">
<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:passport}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">ETA</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-sub"} -->
<p class="gtc-sub">Electronic Travel Authorisation</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>An ETA is not a visa. It is digital permission to travel, linked to a traveller’s passport, and must be completed (one per person) before you travel to the UK.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gtc-check"} -->
<ul class="wp-block-list gtc-check">
<!-- wp:list-item -->
<li>Costs £20</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Permits multiple journeys to the UK</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Valid for 2 years, or until your passport expires, whichever is sooner</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Approval can take up to 3 days</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">You do not need to enter your travel details to apply for an ETA, so we advise you apply early as it lasts for 2 years.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.gov.uk/eta/apply">Apply for an ETA</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:document}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Standard Visitor Visa</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-sub"} -->
<p class="gtc-sub">For those who need a visa</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Those who require a visa to visit the UK will require a Standard Visitor Visa.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gtc-check"} -->
<ul class="wp-block-list gtc-check">
<!-- wp:list-item -->
<li>Apply online before you travel to the UK</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Attend an appointment at a visa application centre in your country</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The application process can sometimes take several months</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small"><strong>Please apply in good time!</strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.gov.uk/standard-visitor/apply-standard-visitor-visa">Apply for a visa</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gtc-band gtc-dark gtc-cta"} -->
<div class="wp-block-group alignfull gtc-band gtc-dark gtc-cta">
<!-- wp:group {"className":"gtc-wrap gtc-wrap--narrow"} -->
<div class="wp-block-group gtc-wrap gtc-wrap--narrow">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">We can provide a visa letter</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">To help with your application process, please enter the email address you used when completing your convention registration.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-form"} -->
<div class="wp-block-group gtc-form">
<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	,
);

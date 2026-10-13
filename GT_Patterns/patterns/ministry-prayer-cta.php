<?php
return array(
	'title'       => 'Prayer ministry call to action',
	'categories'  => array( 'gt-ministries' ),
	'description' => 'Invite prayer requests and prayer-team sign-ups.',
	'keywords'    => array( 'prayer', 'cta' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-center gt-grad"} -->
<div class="wp-block-group gt-s gt-center gt-grad"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">🙏</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">How can we pray for you?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Share a request and our prayer team will stand with you.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Submit a prayer request</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Join the prayer team</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

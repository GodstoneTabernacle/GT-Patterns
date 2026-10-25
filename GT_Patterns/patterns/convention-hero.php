<?php
return array(
	'title'       => 'Convention page header (hero)',
	'categories'  => array( 'gt-convention', 'gt-headers', 'gt-hero' ),
	'description' => 'The shared centred full-width hero. Use it at the top of any new convention page so every page matches.',
	'keywords'    => array( 'convention', 'hero', 'header', 'page title' ),
	'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"gtc-band gtc-dark gtc-hero"} -->
<div class="wp-block-group alignfull gtc-band gtc-dark gtc-hero">
<!-- wp:group {"className":"gtc-hero__in"} -->
<div class="wp-block-group gtc-hero__in">
<!-- wp:paragraph {"className":"gtc-kicker"} -->
<p class="gtc-kicker">Date or venue</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Page title</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">One sentence that says what this page is for.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Main action</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	,
);

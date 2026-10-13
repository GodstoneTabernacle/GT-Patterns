<?php
return array(
	'title'       => 'Welcome message',
	'categories'  => array( 'gt-visit' ),
	'description' => 'Welcome note from the pastor with photo.',
	'keywords'    => array( 'welcome', 'pastor' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:image {"className":"gt-img gt-img--tall"} -->
<figure class="wp-block-image gt-img gt-img--tall"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Welcome</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">We’re so glad you’re here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Write a warm welcome in your own words. Tell visitors who you are, what you believe and what Sunday feels like.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>A second short paragraph can invite people to take a next step.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-name"} -->
<p class="gt-name">— Pastor Name</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Plan your visit</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Our story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

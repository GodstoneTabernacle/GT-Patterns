<?php
return array(
	'title'       => 'Youth ministry feature',
	'categories'  => array( 'gt-ministries' ),
	'description' => 'Image and details for the youth ministry.',
	'keywords'    => array( 'youth', 'ministry' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Youth ministry</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Youth that are growing in faith</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short description goes here. Keep it to two or three clear sentences.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gt-check"} -->
<ul class="wp-block-list gt-check"><!-- wp:list-item -->
<li>When: Sundays at 11:00 am</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Who: Ages 11–18</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Where: The Hub</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Join us</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Meet the team</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

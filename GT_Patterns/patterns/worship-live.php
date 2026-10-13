<?php
return array(
	'title'       => 'Worship – watch online',
	'categories'  => array( 'gt-sermons' ),
	'description' => 'Dark section inviting people to join the livestream.',
	'keywords'    => array( 'live', 'online', 'video' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-dark"} -->
<div class="wp-block-group gt-s gt-dark"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">● Live every Sunday</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Can’t make it in person? Join us online</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Watch our services live or catch the replay any time.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Watch live</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Past services</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"className":"gt-img gt-img--wide gt-play"} -->
<figure class="wp-block-image gt-img gt-img--wide gt-play"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

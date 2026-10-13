<?php
return array(
	'title'       => 'Latest message – compact',
	'categories'  => array( 'gt-sermons' ),
	'description' => 'Small horizontal card for the newest message.',
	'keywords'    => array( 'sermon', 'latest' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-compact"} -->
<div class="wp-block-group gt-s gt-compact"><!-- wp:group {"className":"gt-card gt-hrow"} -->
<div class="wp-block-group gt-card gt-hrow"><!-- wp:image {"className":"gt-img gt-img--sq gt-play"} -->
<figure class="wp-block-image gt-img gt-img--sq gt-play"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"gt-item"} -->
<div class="wp-block-group gt-item"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Latest message</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Faith Over Fear</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-small"} -->
<p class="gt-small">Pastor John Smith · Oct 5</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Watch now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

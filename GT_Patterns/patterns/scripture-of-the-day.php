<?php
return array(
	'title'       => 'Scripture of the day',
	'categories'  => array( 'gt-sermons' ),
	'description' => 'Large verse on a soft tint.',
	'keywords'    => array( 'bible', 'verse', 'scripture' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-center gt-tintbg"} -->
<div class="wp-block-group gt-s gt-center gt-tintbg"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Scripture of the day</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-statement"} -->
<p class="gt-statement">“God is our refuge and strength, a very present help in trouble.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-name"} -->
<p class="gt-name">Psalm 46:1 (KJV)</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Read today’s passage</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
HTML
	,
);

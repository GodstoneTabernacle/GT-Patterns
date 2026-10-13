<?php
return array(
	'title'       => 'Bible verse – image banner',
	'categories'  => array( 'gt-sermons' ),
	'description' => 'Verse over a full-width photo.',
	'keywords'    => array( 'bible', 'verse', 'banner' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-overlay gt-dark gt-center gt-banner"} -->
<div class="wp-block-group gt-s gt-overlay gt-dark gt-center gt-banner"><!-- wp:image {"className":"gt-img gt-ov-img"} -->
<figure class="wp-block-image gt-img gt-ov-img"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Verse of the week</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-statement"} -->
<p class="gt-statement">“The Lord is my shepherd; I shall not want.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-name"} -->
<p class="gt-name">Psalm 23:1 (KJV)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
HTML
	,
);

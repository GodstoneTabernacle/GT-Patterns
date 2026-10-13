<?php
return array(
	'title'       => 'Scripture quote list',
	'categories'  => array( 'gt-layouts' ),
	'description' => 'Three verse cards.',
	'keywords'    => array( 'scripture', 'quotes' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-soft"} -->
<div class="wp-block-group gt-s gt-soft"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Scripture</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Verses we hold onto</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g3"} -->
<div class="wp-block-group gt-grid gt-g3"><!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:paragraph {"className":"gt-quote"} -->
<p class="gt-quote">“Trust in the Lord with all thine heart.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-name"} -->
<p class="gt-name">Proverbs 3:5 (KJV)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:paragraph {"className":"gt-quote"} -->
<p class="gt-quote">“I can do all things through Christ which strengtheneth me.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-name"} -->
<p class="gt-name">Philippians 4:13 (KJV)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:paragraph {"className":"gt-quote"} -->
<p class="gt-quote">“Be strong and of a good courage.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-name"} -->
<p class="gt-name">Joshua 1:9 (KJV)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

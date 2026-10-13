<?php
return array(
	'title'       => 'Sidebar layout (sticky menu)',
	'categories'  => array( 'gt-layouts' ),
	'description' => 'Sticky link menu on the left with content on the right.',
	'keywords'    => array( 'sidebar', 'menu', 'layout' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:group {"className":"gt-box gt-sticky"} -->
<div class="wp-block-group gt-box gt-sticky"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">On this page</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"gt-links"} -->
<ul class="wp-block-list gt-links"><!-- wp:list-item -->
<li><a href="#">Overview</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Our beliefs</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Our history</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Leadership</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"72%"} -->
<div class="wp-block-column" style="flex-basis:72%"><!-- wp:heading -->
<h2 class="wp-block-heading">Page content</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short description goes here. Keep it to two or three clear sentences.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Add any blocks here. The menu on the left stays in view as you scroll.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

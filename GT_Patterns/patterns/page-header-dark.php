<?php
return array(
	'title'       => 'Page header – dark',
	'categories'  => array( 'gt-headers' ),
	'description' => 'Breadcrumb, title and intro on dark.',
	'keywords'    => array( 'page title', 'header' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-pagehead gt-dark"} -->
<div class="wp-block-group gt-s gt-pagehead gt-dark"><!-- wp:paragraph {"className":"gt-crumb"} -->
<p class="gt-crumb">Home  /  Page title</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Page title goes here</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">One short line that introduces this page.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
HTML
	,
);

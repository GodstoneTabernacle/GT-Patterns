<?php
return array(
	'title'       => 'Logos – with heading',
	'categories'  => array( 'gt-logos' ),
	'description' => 'Heading with a row of client names on a soft background.',
	'keywords'    => array( 'logos', 'clients' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-soft"} -->
<div class="wp-block-group gt-s gt-soft"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:heading -->
<h2 class="wp-block-heading">Trusted by 2,000+ growing companies</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g5"} -->
<div class="wp-block-group gt-grid gt-g5"><!-- wp:paragraph {"className":"gt-logo"} -->
<p class="gt-logo">Northwind</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-logo"} -->
<p class="gt-logo">Contoso</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-logo"} -->
<p class="gt-logo">Fabrikam</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-logo"} -->
<p class="gt-logo">Tailspin</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-logo"} -->
<p class="gt-logo">Litware</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

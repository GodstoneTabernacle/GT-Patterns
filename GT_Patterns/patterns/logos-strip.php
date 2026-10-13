<?php
return array(
	'title'       => 'Logos – strip',
	'categories'  => array( 'gt-logos' ),
	'description' => 'Row of five client names. Swap each for an image.',
	'keywords'    => array( 'logos', 'clients' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:paragraph {"className":"gt-eyebrow gt-tc"} -->
<p class="gt-eyebrow gt-tc">Trusted by teams at</p>
<!-- /wp:paragraph -->

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

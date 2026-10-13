<?php
return array(
	'title'       => 'Search panel',
	'categories'  => array( 'gt-layouts' ),
	'description' => 'Heading with the core search block.',
	'keywords'    => array( 'search' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-soft"} -->
<div class="wp-block-group gt-s gt-soft"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Search</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Looking for something?</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search sermons, events and more…","buttonText":"Search"} /--></div>
<!-- /wp:group -->
HTML
	,
);

<?php
return array(
	'title'       => 'Pastor profile',
	'categories'  => array( 'gt-team' ),
	'description' => 'Large photo with biography and quote.',
	'keywords'    => array( 'pastor', 'profile' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:image {"className":"gt-img gt-img--tall"} -->
<figure class="wp-block-image gt-img gt-img--tall"><img alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Meet our pastor</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Pastor Name</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short biography: background, calling and what he or she loves about serving this community.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gt-quote"} -->
<p class="gt-quote">“A short, memorable quote or personal word.”</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Read full bio</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

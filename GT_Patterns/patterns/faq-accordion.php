<?php
return array(
	'title'       => 'FAQ – accordion',
	'categories'  => array( 'gt-faq' ),
	'description' => 'Centered heading with click-to-open questions.',
	'keywords'    => array( 'faq', 'accordion' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">FAQ</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Frequently asked questions</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Quick answers to the things people ask most.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-faqs"} -->
<div class="wp-block-group gt-faqs"><!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>How do I get started?</summary><!-- wp:paragraph -->
<p>Describe the first step in one or two clear sentences.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>Can I cancel at any time?</summary><!-- wp:paragraph -->
<p>Yes. Explain your cancellation or refund policy here.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>Do you offer support?</summary><!-- wp:paragraph -->
<p>Tell people how to reach you and how quickly you reply.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>What payment methods do you accept?</summary><!-- wp:paragraph -->
<p>List the payment options you support.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>Is my data safe?</summary><!-- wp:paragraph -->
<p>Explain briefly how you protect customer information.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

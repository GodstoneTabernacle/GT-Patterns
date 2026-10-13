<?php
return array(
	'title'       => 'FAQ – two columns',
	'categories'  => array( 'gt-faq' ),
	'description' => 'Intro on the left, accordion on the right.',
	'keywords'    => array( 'faq', 'split' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">FAQ</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Questions? We have answers</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Can’t find what you need? Get in touch and we’ll help.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Contact us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:group {"className":"gt-faqs"} -->
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
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
HTML
	,
);

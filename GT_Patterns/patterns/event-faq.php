<?php
return array(
	'title'       => 'Event FAQ',
	'categories'  => array( 'gt-events' ),
	'description' => 'Accordion with common event questions.',
	'keywords'    => array( 'faq', 'event' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">FAQ</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Event questions</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-faqs"} -->
<div class="wp-block-group gt-faqs"><!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>How do I register?</summary><!-- wp:paragraph -->
<p>Use the Register button and complete the short form.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>Is there a cost?</summary><!-- wp:paragraph -->
<p>Explain ticket prices or say the event is free.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>Is food provided?</summary><!-- wp:paragraph -->
<p>Tell people what is included.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"gt-faq"} -->
<details class="wp-block-details gt-faq"><summary>Can I bring children?</summary><!-- wp:paragraph -->
<p>Describe your children’s program.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

<?php
return array(
    'title'       => '3 × 1 grid – three cards',
    'categories'  => array( 'gt-grid' ),
    'description' => 'Three-column layout for quick links or highlights.',
    'keywords'    => array( 'grid', 'layout', 'cards' ),
    'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-grid-section"} -->
<div class="wp-block-group gt-s gt-grid-section">
<!-- wp:group {"className":"gt-head"} -->
<div class="wp-block-group gt-head">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Explore</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">A section heading goes here</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Introduce this section with a short sentence that explains what visitors will find.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"gt-grid gt-g3"} -->
<div class="wp-block-group gt-grid gt-g3">
<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Visit</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Times & location</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Add your service times and address.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Updates</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Latest updates</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Share announcements, news or upcoming dates.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Questions?</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Contact us</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Add an email address, phone number or contact link.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
);

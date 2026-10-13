<?php
return array(
    'title'       => '2 × 1 grid – two cards',
    'categories'  => array( 'gt-grid' ),
    'description' => 'Two-column layout for paired information.',
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
<!-- wp:group {"className":"gt-grid gt-g2"} -->
<div class="wp-block-group gt-grid gt-g2">
<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">New here?</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Plan your visit</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Find service details, directions and what to expect.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Get connected</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Join a group</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Discover ways to connect and take part.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
);

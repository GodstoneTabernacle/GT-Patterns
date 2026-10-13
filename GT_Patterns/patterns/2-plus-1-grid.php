<?php
return array(
    'title'       => '2 + 1 grid – featured card and companion',
    'categories'  => array( 'gt-grid' ),
    'description' => 'Two-column feature layout with one featured card and one supporting card.',
    'keywords'    => array( 'grid', 'featured', 'asymmetric', 'layout' ),
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
<p class="gt-eyebrow">Featured</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Featured story or announcement</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Use this larger content area for your main message, a featured event or an important update.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Explore</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">More information</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Add a related detail, link or supporting message.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
);

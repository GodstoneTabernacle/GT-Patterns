<?php
return array(
    'title'       => 'Convention – information ribbon',
    'categories'  => array( 'gt-events', 'gt-custom' ),
    'description' => 'Four-column ribbon for dates, travel, lodging and contact details.',
    'keywords'    => array( 'convention', 'dates', 'travel', 'information', 'ribbon' ),
    'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-info-ribbon"} -->
<div class="wp-block-group gt-s gt-info-ribbon">

<!-- wp:columns {"className":"gt-info-ribbon__columns"} -->
<div class="wp-block-columns gt-info-ribbon__columns">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Dates</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">August 12–17, 2026</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wednesday through Monday</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Fly into</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Phoenix Sky Harbor (PHX)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>About 15 minutes from the hotels.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Lodging</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Crowne Plaza San Marcos</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Also available: Hilton Garden Inn, Chandler.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Questions</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="mailto:convention@charitytab.org">Email the team</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Write to us any time.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML
);
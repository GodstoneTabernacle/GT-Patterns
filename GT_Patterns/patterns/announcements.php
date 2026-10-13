<?php
return array(
    'title'       => 'Announcements – join Signal',
    'categories'  => array( 'gt-cta', 'gt-events' ),
    'description' => 'A compact announcement bar inviting visitors to join a Signal channel.',
    'keywords'    => array( 'signal', 'announcements', 'updates', 'social', 'community' ),
    'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-signal-bar"} -->
<div class="wp-block-group gt-s gt-signal-bar">

<!-- wp:group {"className":"gt-signal-bar__content"} -->
<div class="wp-block-group gt-signal-bar__content">

<!-- wp:group {"className":"gt-signal-bar__text"} -->
<div class="wp-block-group gt-signal-bar__text">

<!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Stay connected</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Get the latest convention updates</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Join our Signal channel for announcements, important reminders and regular updates.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Join our Signal channel</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
);

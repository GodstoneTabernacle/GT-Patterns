<?php
return array(
	'title'       => 'Notice box',
	'categories'  => array( 'gt-layouts' ),
	'description' => 'Highlighted notice for updates and alerts.',
	'keywords'    => array( 'notice', 'alert' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-compact"} -->
<div class="wp-block-group gt-s gt-compact"><!-- wp:group {"className":"gt-notice"} -->
<div class="wp-block-group gt-notice"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">ℹ️</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gt-item gt-tight"} -->
<div class="wp-block-group gt-item gt-tight"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Service update</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Use this box for weather changes, schedule updates or important announcements.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

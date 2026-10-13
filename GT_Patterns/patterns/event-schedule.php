<?php
return array(
	'title'       => 'Event schedule table',
	'categories'  => array( 'gt-events' ),
	'description' => 'Agenda table with time, session and location.',
	'keywords'    => array( 'schedule', 'agenda', 'table' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Schedule</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Event agenda</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"gt-table gt-table--left","hasFixedLayout":true} -->
<figure class="wp-block-table gt-table gt-table--left"><table class="has-fixed-layout"><thead><tr><th>Time</th><th>Session</th><th>Speaker / Location</th></tr></thead><tbody><tr><td>9:00 am</td><td>Welcome & worship</td><td>Worship team · Main hall</td></tr><tr><td>10:00 am</td><td>Keynote message</td><td>Guest speaker · Main hall</td></tr><tr><td>11:30 am</td><td>Break & refreshments</td><td>Foyer</td></tr><tr><td>12:00 pm</td><td>Workshops</td><td>Rooms 1–4</td></tr><tr><td>2:00 pm</td><td>Closing session</td><td>Pastor Name · Main hall</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->
HTML
	,
);

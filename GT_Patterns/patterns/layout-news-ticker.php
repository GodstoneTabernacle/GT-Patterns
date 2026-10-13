<?php
return array(
	'title'       => 'News ticker',
	'categories'  => array( 'gt-layouts' ),
	'description' => 'Slowly scrolling announcement line.',
	'keywords'    => array( 'ticker', 'marquee', 'news' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s gt-compact gt-tintbg"} -->
<div class="wp-block-group gt-s gt-compact gt-tintbg"><!-- wp:group {"className":"gt-ticker"} -->
<div class="wp-block-group gt-ticker"><!-- wp:paragraph -->
<p>📣 Sunday services at 9:00 & 11:00 am   ·   🙏 Midweek prayer Wednesday 7:00 pm   ·   🎉 Family Fun Day 20 November</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

<?php
return array(
	'title'       => 'Blog – latest posts (automatic)',
	'categories'  => array( 'gt-blog' ),
	'description' => 'Shows your 3 newest posts using the Query Loop block.',
	'keywords'    => array( 'blog', 'posts', 'query' ),
	'content'     => <<<'HTML'
<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Blog</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Latest from the blog</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Your three newest posts appear here automatically.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"gt-posts","layout":{"type":"default"}} -->
<div class="wp-block-query gt-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /-->

<!-- wp:post-date /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
HTML
	,
);

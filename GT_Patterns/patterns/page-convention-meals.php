<?php
return array(
	'title'       => 'Convention page – meals',
	'categories'  => array( 'gt-convention', 'gt-pages' ),
	'description' => 'Meals page: shared hero, order-beforehand notice, buffet price table, good-to-know list, family discount, Resorts World map with restaurants by level, and a meal booking call to action.',
	'keywords'    => array( 'convention', 'meals', 'dining', 'restaurants', 'resorts world' ),
	'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"gtc-band gtc-dark gtc-hero"} -->
<div class="wp-block-group alignfull gtc-band gtc-dark gtc-hero">
<!-- wp:group {"className":"gtc-hero__in"} -->
<div class="wp-block-group gtc-hero__in">
<!-- wp:paragraph {"className":"gtc-kicker"} -->
<p class="gtc-kicker">Hilton Birmingham Metropole</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Meals</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">All meals are served in the Arbor restaurant, buffet style, with two food stations.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#prices">See prices</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#nearby">Eat nearby</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gtc-band gtc-tight"} -->
<div class="wp-block-group alignfull gtc-band gtc-tight">
<!-- wp:group {"className":"gtc-wrap gtc-wrap--narrow"} -->
<div class="wp-block-group gtc-wrap gtc-wrap--narrow">
<!-- wp:group {"className":"gtc-notice gtc-notice--warm"} -->
<div class="wp-block-group gtc-notice gtc-notice--warm">
{{icon:warning}}

<!-- wp:group {"className":"gtc-notice__body"} -->
<div class="wp-block-group gtc-notice__body">
<!-- wp:paragraph -->
<p><strong>Important:</strong> Meals taken at the Hilton Metropole <strong>must</strong> be ordered beforehand via the hotel meal booking link, which will be available in due course.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"prices","align":"full","className":"gtc-band"} -->
<div id="prices" class="wp-block-group alignfull gtc-band">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-split gtc-split--top"} -->
<div class="wp-block-group gtc-split gtc-split--top">
<!-- wp:group {"className":"gtc-copy"} -->
<div class="wp-block-group gtc-copy">
<!-- wp:heading -->
<h2 class="wp-block-heading">Buffet pricing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Lunch and dinner, per person.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
<!-- wp:table {"className":"gtc-table"} -->
<figure class="wp-block-table gtc-table"><table><thead><tr><th>Meal</th><th>Adult</th><th>Child (5–16)</th></tr></thead><tbody><tr><td>Lunch</td><td>£20</td><td>£15</td></tr><tr><td>Dinner</td><td>£25</td><td>£20</td></tr></tbody></table></figure>
<!-- /wp:table -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-copy"} -->
<div class="wp-block-group gtc-copy">
<!-- wp:heading -->
<h2 class="wp-block-heading">Good to know</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Who pays what.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
<!-- wp:list {"className":"gtc-check"} -->
<ul class="wp-block-list gtc-check">
<!-- wp:list-item -->
<li>All prices include VAT</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Child means ages 5 to 16 inclusive</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Under 5s eat free, with a full paying adult</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-notice gtc-notice--warm"} -->
<div class="wp-block-group gtc-notice gtc-notice--warm">
{{icon:family}}

<!-- wp:group {"className":"gtc-notice__body"} -->
<div class="wp-block-group gtc-notice__body">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Family discount</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Families with more than one child (age 5 to 12) will be able to get 50% off the second child’s ticket, third child, etc.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"nearby","align":"full","className":"gtc-band gtc-grey"} -->
<div id="nearby" class="wp-block-group alignfull gtc-band gtc-grey">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:paragraph {"className":"gtc-kicker"} -->
<p class="gtc-kicker">A 10-minute walk away</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Resorts World Birmingham restaurants</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">There are also restaurants at Resorts World NEC Birmingham, a 10-minute walk from the hotel.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-notice gtc-notice--warm"} -->
<div class="wp-block-group gtc-notice gtc-notice--warm">
{{icon:warning}}

<!-- wp:group {"className":"gtc-notice__body"} -->
<div class="wp-block-group gtc-notice__body">
<!-- wp:paragraph -->
<p>Please note, <strong>most restaurants close at 10pm</strong>. Some (TGI Fridays, Five Guys and Las Iguanas) close a little later on Friday and Saturday, between 11pm and 12:30am.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-split gtc-split--top"} -->
<div class="wp-block-group gtc-split gtc-split--top">
<!-- wp:image {"className":"gtc-photo gtc-photo--map"} -->
<figure class="wp-block-image gtc-photo gtc-photo--map"><img src="{{asset:images/resorts-world-map.png}}" alt="Resorts World Birmingham map showing shops, places to eat and drink, and entertainment on the main level and the lower ground floor"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"gtc-copy"} -->
<div class="wp-block-group gtc-copy">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Main level</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"gtc-check"} -->
<ul class="wp-block-list gtc-check">
<!-- wp:list-item -->
<li>Las Iguanas (open later Fri &amp; Sat)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Five Guys (open later Fri &amp; Sat)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Zizzi</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Karaage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>VSK Express</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Miller &amp; Carter</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>World Bar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Miss Macaroon</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Costa</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lower ground floor (LG)</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"gtc-check"} -->
<ul class="wp-block-list gtc-check">
<!-- wp:list-item -->
<li>TGI Fridays (open later Fri &amp; Sat)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Nando’s</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>GBK</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pizza Express</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.resortsworldbirmingham.co.uk/eat-drink">See the full Resorts World map</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gtc-band gtc-dark gtc-cta"} -->
<div class="wp-block-group alignfull gtc-band gtc-dark gtc-cta">
<!-- wp:group {"className":"gtc-wrap gtc-wrap--narrow"} -->
<div class="wp-block-group gtc-wrap gtc-wrap--narrow">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">Meal booking</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">The hotel meal booking link will be available here in due course. In the meantime, get in touch with any questions.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Contact us</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.resortsworldbirmingham.co.uk/eat-drink">Resorts World eat &amp; drink</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	,
);

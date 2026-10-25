<?php
return array(
	'title'       => 'Convention page – travel & local information',
	'categories'  => array( 'gt-convention', 'gt-pages' ),
	'description' => 'Travel page: shared hero, venue facts, map-app buttons, how to get there by air/train/foot/car with route maps, London airport options and contact officers.',
	'keywords'    => array( 'convention', 'travel', 'directions', 'map', 'airport', 'train', 'parking' ),
	'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"gtc-band gtc-dark gtc-hero"} -->
<div class="wp-block-group alignfull gtc-band gtc-dark gtc-hero">
<!-- wp:group {"className":"gtc-hero__in"} -->
<div class="wp-block-group gtc-hero__in">
<!-- wp:paragraph {"className":"gtc-kicker"} -->
<p class="gtc-kicker">Hilton Birmingham Metropole</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Travel and local information</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Everything you need to get to the hotel and find your way around once you are here.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#find-us">Find us</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#getting-here">Getting here</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gtc-band"} -->
<div class="wp-block-group alignfull gtc-band">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-grid gtc-g3"} -->
<div class="wp-block-group gtc-grid gtc-g3">
<!-- wp:group {"className":"gtc-fact"} -->
<div class="wp-block-group gtc-fact">
{{icon:pin}}

<!-- wp:paragraph {"className":"gtc-fact__label"} -->
<p class="gtc-fact__label">Venue</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Hilton Birmingham Metropole</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">Pendigo Way, Marston Green, Birmingham B40 1PP, UK</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-fact"} -->
<div class="wp-block-group gtc-fact">
{{icon:mail}}

<!-- wp:paragraph {"className":"gtc-fact__label"} -->
<p class="gtc-fact__label">Email</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="mailto:conventions@godstonetabernacle.com">conventions@godstonetabernacle.com</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">Questions about travel or the venue</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-fact"} -->
<div class="wp-block-group gtc-fact">
{{icon:map}}

<!-- wp:paragraph {"className":"gtc-fact__label"} -->
<p class="gtc-fact__label">Find us</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="#find-us">Interactive map and directions</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">Open the hotel in your preferred app</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"find-us","align":"full","className":"gtc-band gtc-grey"} -->
<div id="find-us" class="wp-block-group alignfull gtc-band gtc-grey">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">Find us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Hilton Birmingham Metropole, Pendigo Way, Marston Green, Birmingham B40 1PP. Prefer another app? Open the directions there.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="gtc-embed"><iframe title="Map of Hilton Birmingham Metropole" src="https://maps.google.com/maps?q=Hilton+Birmingham+Metropole,+Pendigo+Way,+Marston+Green,+Birmingham+B40+1PP&amp;z=15&amp;output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe></div>
<!-- /wp:html -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.waze.com/en/live-map/directions/gb/england/marston-green/hilton-birmingham-metropole?place=ChIJNVQNqDyxcEgRX1lpvt6-gCQ">Waze</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://maps.apple/p/-dwsvT7iQjB4R6">Apple Maps</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://share.here.com/p/s-Yz1Ib3RlbDtpZD04MjZnY3FmMi03ZWQyYjk3YTMzYWY0MjYzOGI5ZjQyNmJiNmIwZTU2MDtsYXQ9NTIuNDUwNDU7bG9uPS0xLjcxNTcyO249SGlsdG9uO3BoPSs0NDEyMTc4MDQyNDI=?z=16.11&amp;t=normal">HERE WeGo</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"getting-here","align":"full","className":"gtc-band"} -->
<div id="getting-here" class="wp-block-group alignfull gtc-band">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">Getting here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Birmingham Airport and Birmingham International Station are both close to the hotel.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-grid gtc-g3"} -->
<div class="wp-block-group gtc-grid gtc-g3">
<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:plane}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">By air</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We recommend flying into Birmingham airport (BHX), about a 5-minute drive from the hotel.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The free Air-Rail Link monorail takes you from the main airport building to Birmingham International Station in under 2 minutes. It runs between 3:30am and 12:30am daily.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">An Uber from BHX to the hotel costs about £16.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:train}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">By train</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Birmingham International Station is a short distance from the venue.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>From the station it is about a 15-minute walk through the NEC to the hotel.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.thetrainline.com/">Book on Trainline</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:car}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Parking</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>On-site hotel parking is available.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gtc-band gtc-grey"} -->
<div class="wp-block-group alignfull gtc-band gtc-grey">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-split"} -->
<div class="wp-block-group gtc-split">
<!-- wp:image {"className":"gtc-photo gtc-photo--map"} -->
<figure class="wp-block-image gtc-photo gtc-photo--map"><img src="{{asset:images/walking-route.jpg}}" alt="Walking route from Birmingham International Station through the NEC to the Hilton Birmingham Metropole"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"gtc-copy"} -->
<div class="wp-block-group gtc-copy">
{{icon:walk}}

<!-- wp:heading -->
<h2 class="wp-block-heading">By foot</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">From Birmingham International Station, follow the dotted route through the NEC Piazza and past Pendigo Way to the hotel. It takes about 15 minutes.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-split gtc-split--rev"} -->
<div class="wp-block-group gtc-split gtc-split--rev">
<!-- wp:image {"className":"gtc-photo gtc-photo--map"} -->
<figure class="wp-block-image gtc-photo gtc-photo--map"><img src="{{asset:images/walking-distances.jpg}}" alt="Map of walking times from the hotel to nearby places"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"gtc-copy"} -->
<div class="wp-block-group gtc-copy">
<!-- wp:heading -->
<h2 class="wp-block-heading">Walking from the hotel</h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"gtc-sched gtc-sched--narrow"} -->
<ul class="wp-block-list gtc-sched gtc-sched--narrow">
<!-- wp:list-item -->
<li><strong>Moxy NEC</strong> 5 minutes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Resorts World</strong> 10 minutes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Crowne Plaza</strong> 12 minutes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Birmingham International</strong> 12 minutes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Birmingham Airport</strong> 15 minutes</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gtc-band"} -->
<div class="wp-block-group alignfull gtc-band">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">Flying into London?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">You will need to arrange your own transport to Birmingham. These are the main options; others may suit you better.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-grid gtc-g2"} -->
<div class="wp-block-group gtc-grid gtc-g2">
<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:plane}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">London Heathrow (LHR)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-sub"} -->
<p class="gtc-sub">About 2 hours 40 minutes by coach</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gtc-sched gtc-sched--narrow"} -->
<ul class="wp-block-list gtc-sched gtc-sched--narrow">
<!-- wp:list-item -->
<li><strong>Distance</strong> 169 km (105 miles)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>By car</strong> ~2 hr 40 min via the M40</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Public transport</strong> ~3 hr 30 min</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Taxi</strong> Uber ~£180</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>Take the National Express coach from Heathrow Central Bus Station (Terminals 2 &amp; 3) to “Birmingham airport (BHX), also for NEC”. Coaches run from 6:55am to 11:59pm and cost from £9.50 one way.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">Arriving at Terminal 1, walk 10 minutes to the bus station. From Terminal 4 or 5, take the Piccadilly line for about 5 minutes to Terminals 2 &amp; 3.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.nationalexpress.com/en/destinations/birmingham/heathrow-to-birmingham">Book National Express</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:plane}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">London Gatwick (LGW)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-sub"} -->
<p class="gtc-sub">About 2 hours 50 minutes by train</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gtc-sched gtc-sched--narrow"} -->
<ul class="wp-block-list gtc-sched gtc-sched--narrow">
<!-- wp:list-item -->
<li><strong>Distance</strong> 224 km (139 miles)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>By car</strong> ~3 hr 20 min via the M40</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Public transport</strong> ~2 hr 50 min, from ~£60</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Taxi</strong> Uber ~£182</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:list {"ordered":true,"className":"gtc-steps"} -->
<ol class="wp-block-list gtc-steps">
<!-- wp:list-item -->
<li>Gatwick Express from Gatwick to Victoria, about 30 minutes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Victoria line from Victoria to Euston, about 7 minutes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Avanti West Coast from Euston to Birmingham International, about 1 hr 5 min</li>
<!-- /wp:list-item -->
</ol>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">Other train lines to Euston can also be used.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.thetrainline.com/">Book on Trainline</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:plane}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">London Stansted (STN)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-sub"} -->
<p class="gtc-sub">About 3 hours 20 minutes by train</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gtc-sched gtc-sched--narrow"} -->
<ul class="wp-block-list gtc-sched gtc-sched--narrow">
<!-- wp:list-item -->
<li><strong>Distance</strong> 188 km (117 miles)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>By car</strong> ~3 hr 20 min</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Public transport</strong> ~3 hr 20 min, ~£65</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Taxi</strong> Uber from ~£126</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:list {"ordered":true,"className":"gtc-steps"} -->
<ol class="wp-block-list gtc-steps">
<!-- wp:list-item -->
<li>Stansted Express from Stansted to Tottenham Hale, about 33 minutes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Victoria line from Tottenham Hale to Euston, about 12 minutes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Avanti West Coast from Euston to Birmingham International, about 1 hr 5 min</li>
<!-- /wp:list-item -->
</ol>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"gtc-small"} -->
<p class="gtc-small">Other train lines to Euston can also be used.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.thetrainline.com/">Book on Trainline</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:plane}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">London Luton (LTN)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-sub"} -->
<p class="gtc-sub">About 2 hours 40 minutes by coach</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gtc-sched gtc-sched--narrow"} -->
<ul class="wp-block-list gtc-sched gtc-sched--narrow">
<!-- wp:list-item -->
<li><strong>Distance</strong> 132 km (82 miles)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>By car</strong> ~2 hr 30 min</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Public transport</strong> ~3 hr 30 min</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Taxi</strong> Uber from ~£85</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>Take the National Express coach from “Luton Airport London (LTN)” to “Birmingham airport (BHX), also for NEC”. Coaches run from 12:20am to 11:55pm and cost from £15.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.nationalexpress.com/">Book National Express</a></div>
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

<!-- wp:group {"align":"full","className":"gtc-band gtc-grey"} -->
<div class="wp-block-group alignfull gtc-band gtc-grey">
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">More to know</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-grid gtc-g2"} -->
<div class="wp-block-group gtc-grid gtc-g2">
<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:bus}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Local transport</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The free Air-Rail Link runs between Birmingham Airport and Birmingham International Station from 3:30am to 12:30am. Uber taxis are available from the airport and station.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:utensils}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Restaurants and facilities</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Meals are served in the Arbor restaurant at the hotel. Resorts World Birmingham, with more restaurants, is a 10-minute walk away.</p>
<!-- /wp:paragraph -->
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
<!-- wp:group {"className":"gtc-wrap"} -->
<div class="wp-block-group gtc-wrap">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">Need help on your journey?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Contact any of these officers for assistance while you travel.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-grid gtc-g3"} -->
<div class="wp-block-group gtc-grid gtc-g3">
<!-- wp:group {"className":"gtc-tile gtc-tile--center gtc-tile--compact"} -->
<div class="wp-block-group gtc-tile gtc-tile--center gtc-tile--compact">
{{icon:phone}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Bro Martins Ifeanyi</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a class="gtc-tel" href="tel:+447983301591">+44 7983 301591</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile gtc-tile--center gtc-tile--compact"} -->
<div class="wp-block-group gtc-tile gtc-tile--center gtc-tile--compact">
{{icon:phone}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Bro Joseph Ng’ang’a</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a class="gtc-tel" href="tel:+447961007832">+44 7961 007832</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile gtc-tile--center gtc-tile--compact"} -->
<div class="wp-block-group gtc-tile gtc-tile--center gtc-tile--compact">
{{icon:phone}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Bro Philip Brown</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a class="gtc-tel" href="tel:+447912992456">+44 7912 992456</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	,
);

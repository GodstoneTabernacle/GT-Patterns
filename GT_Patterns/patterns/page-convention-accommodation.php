<?php
return array(
	'title'       => 'Convention page – accommodation',
	'categories'  => array( 'gt-convention', 'gt-pages' ),
	'description' => 'Hotel page: shared hero, booking warning, booking/payment/cancellation tiles, room prices and housekeeping, one amenities card, room-type gallery with tabs and booking call to action.',
	'keywords'    => array( 'convention', 'accommodation', 'hotel' ),
	'content'     => <<<'HTML'
<!-- wp:group {"align":"full","className":"gtc-band gtc-dark gtc-hero"} -->
<div class="wp-block-group alignfull gtc-band gtc-dark gtc-hero">
<!-- wp:group {"className":"gtc-hero__in"} -->
<div class="wp-block-group gtc-hero__in">
<!-- wp:paragraph {"className":"gtc-kicker"} -->
<p class="gtc-kicker">Hilton Birmingham Metropole</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Accommodation</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Rooms are booked directly with the hotel. Here is what to know before you book.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#book">Book your room</a></div>
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
<p><strong>Important:</strong> Your hotel room at the Birmingham Metropole hotel is <strong>not</strong> booked until you have accessed the hotel portal below. You will be taken to a link to the hotel portal to book your hotel room.</p>
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
<!-- wp:group {"className":"gtc-grid gtc-g3"} -->
<div class="wp-block-group gtc-grid gtc-g3">
<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:bed}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Booking</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Accommodation is booked directly with the hotel via the link below.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>A credit card is required to make your reservation.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:card}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Payment</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>No payment is taken until check-in.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Payment at check-in can only be made by:</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gtc-check"} -->
<ul class="wp-block-list gtc-check">
<!-- wp:list-item -->
<li>The credit card you booked with</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Another card</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
{{icon:calendar}}

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Cancellation policy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Free cancellation until 11:59 PM (BST) the night before your check-in date. After this, you will be charged.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>If you need to cancel, please contact the Convention Team. Do not cancel yourself.</strong></p>
<!-- /wp:paragraph -->
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
<!-- wp:group {"className":"gtc-split gtc-split--top"} -->
<div class="wp-block-group gtc-split gtc-split--top">
<!-- wp:group {"className":"gtc-copy"} -->
<div class="wp-block-group gtc-copy">
<!-- wp:heading -->
<h2 class="wp-block-heading">Room cost</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Per room, per night, including breakfast.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
<!-- wp:table {"className":"gtc-table"} -->
<figure class="wp-block-table gtc-table"><table><thead><tr><th>Room type</th><th>Price per night</th></tr></thead><tbody><tr><td>Single</td><td>£104</td></tr><tr><td>Double</td><td>£116</td></tr><tr><td>Family (3 to 4)</td><td>£128</td></tr></tbody></table></figure>
<!-- /wp:table -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-copy"} -->
<div class="wp-block-group gtc-copy">
<!-- wp:heading -->
<h2 class="wp-block-heading">Room service</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">How your room is looked after during your stay.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gtc-tile"} -->
<div class="wp-block-group gtc-tile">
<!-- wp:list {"className":"gtc-check"} -->
<ul class="wp-block-list gtc-check">
<!-- wp:list-item -->
<li>Amenities (bins, towels, tea/coffee) changed/replaced daily</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Guest rooms fully serviced with linens changed on the 4th day of your stay</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fridges available upon request</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Families and those with special dietary needs or health conditions will be prioritised</li>
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
<h3 class="wp-block-heading">Family rooms</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We have limited rooms with triple and quadruple occupancy, so these will be reserved for families. Please note: these rooms may be reallocated to families if necessary.</p>
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
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">Additional information</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Amenities for all rooms include but are not limited to:</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-amenities"} -->
<div class="wp-block-group gtc-amenities">
<!-- wp:group {"className":"gtc-amenity-row"} -->
<div class="wp-block-group gtc-amenity-row">
{{icon:snowflake}}

<!-- wp:paragraph -->
<p>Air cooling system</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-amenity-row"} -->
<div class="wp-block-group gtc-amenity-row">
{{icon:moon}}

<!-- wp:paragraph -->
<p>Black-out curtains</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-amenity-row"} -->
<div class="wp-block-group gtc-amenity-row">
{{icon:hairdryer}}

<!-- wp:paragraph -->
<p>Hairdryer</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-amenity-row"} -->
<div class="wp-block-group gtc-amenity-row">
{{icon:iron}}

<!-- wp:paragraph -->
<p>Iron / ironing board</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-amenity-row"} -->
<div class="wp-block-group gtc-amenity-row">
{{icon:bed}}

<!-- wp:paragraph -->
<p>Double beds (if provided) are queen size</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-amenity-row"} -->
<div class="wp-block-group gtc-amenity-row">
{{icon:coffee}}

<!-- wp:paragraph -->
<p>Kettle with tea/coffee bags</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-amenity-row"} -->
<div class="wp-block-group gtc-amenity-row">
{{icon:lock}}

<!-- wp:paragraph -->
<p>Safe</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-amenity-row"} -->
<div class="wp-block-group gtc-amenity-row">
{{icon:towel}}

<!-- wp:paragraph -->
<p>Towels</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-amenity-row"} -->
<div class="wp-block-group gtc-amenity-row">
{{icon:plug}}

<!-- wp:paragraph -->
<p>USB-A and USB-C ports, UK type G sockets</p>
<!-- /wp:paragraph -->
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
<h2 class="wp-block-heading">Room gallery</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">Choose a room type to see what it looks like.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-rooms"} -->
<div class="wp-block-group gtc-rooms">
<!-- wp:group {"className":"gtc-room"} -->
<div class="wp-block-group gtc-room">
<!-- wp:heading {"level":3,"className":"gtc-room__title"} -->
<h3 class="wp-block-heading gtc-room__title">Single</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-small gtc-room__meta"} -->
<p class="gtc-small gtc-room__meta">£104 per night, including breakfast</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gtc-snap"} -->
<div class="wp-block-group gtc-snap">
<!-- wp:image {"className":"gtc-photo"} -->
<figure class="wp-block-image gtc-photo"><img alt="Single room, photo 1"/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gtc-photo"} -->
<figure class="wp-block-image gtc-photo"><img alt="Single room, photo 2"/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gtc-photo"} -->
<figure class="wp-block-image gtc-photo"><img alt="Single room, photo 3"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-room"} -->
<div class="wp-block-group gtc-room">
<!-- wp:heading {"level":3,"className":"gtc-room__title"} -->
<h3 class="wp-block-heading gtc-room__title">Double</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-small gtc-room__meta"} -->
<p class="gtc-small gtc-room__meta">£116 per night, including breakfast</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gtc-snap"} -->
<div class="wp-block-group gtc-snap">
<!-- wp:image {"className":"gtc-photo"} -->
<figure class="wp-block-image gtc-photo"><img alt="Double room, photo 1"/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gtc-photo"} -->
<figure class="wp-block-image gtc-photo"><img alt="Double room, photo 2"/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gtc-photo"} -->
<figure class="wp-block-image gtc-photo"><img alt="Double room, photo 3"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-room"} -->
<div class="wp-block-group gtc-room">
<!-- wp:heading {"level":3,"className":"gtc-room__title"} -->
<h3 class="wp-block-heading gtc-room__title">Family</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-small gtc-room__meta"} -->
<p class="gtc-small gtc-room__meta">£128 per night for 3 to 4 guests, including breakfast</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gtc-snap"} -->
<div class="wp-block-group gtc-snap">
<!-- wp:image {"className":"gtc-photo"} -->
<figure class="wp-block-image gtc-photo"><img alt="Family room, photo 1"/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gtc-photo"} -->
<figure class="wp-block-image gtc-photo"><img alt="Family room, photo 2"/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"gtc-photo"} -->
<figure class="wp-block-image gtc-photo"><img alt="Family room, photo 3"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"book","align":"full","className":"gtc-band gtc-dark gtc-cta"} -->
<div id="book" class="wp-block-group alignfull gtc-band gtc-dark gtc-cta">
<!-- wp:group {"className":"gtc-wrap gtc-wrap--narrow"} -->
<div class="wp-block-group gtc-wrap gtc-wrap--narrow">
<!-- wp:group {"className":"gtc-head"} -->
<div class="wp-block-group gtc-head">
<!-- wp:heading -->
<h2 class="wp-block-heading">Book your hotel room</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gtc-lead"} -->
<p class="gtc-lead">To continue to the hotel booking page, please enter the email address you used when completing your convention registration.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"gtc-form"} -->
<div class="wp-block-group gtc-form">
<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gtc-small gtc-center"} -->
<p class="gtc-small gtc-center">You won’t be able to book your accommodation without first completing the Convention Registration Form.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	,
);

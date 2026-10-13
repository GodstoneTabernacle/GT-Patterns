<?php
$gt_travel_icons_dir   = GT_PATTERNS_DIR . 'assets/icons/';
$gt_icon_map_pin       = (string) @file_get_contents( $gt_travel_icons_dir . 'map-pin.svg' );
$gt_icon_phone         = (string) @file_get_contents( $gt_travel_icons_dir . 'phone.svg' );
$gt_icon_mail          = (string) @file_get_contents( $gt_travel_icons_dir . 'mail.svg' );
$gt_icon_train         = (string) @file_get_contents( $gt_travel_icons_dir . 'train-front.svg' );
$gt_icon_plane         = (string) @file_get_contents( $gt_travel_icons_dir . 'plane.svg' );
$gt_icon_parking       = (string) @file_get_contents( $gt_travel_icons_dir . 'square-parking.svg' );
$gt_icon_bus           = (string) @file_get_contents( $gt_travel_icons_dir . 'bus-front.svg' );
$gt_icon_hotel         = (string) @file_get_contents( $gt_travel_icons_dir . 'hotel.svg' );
$gt_icon_food          = (string) @file_get_contents( $gt_travel_icons_dir . 'utensils.svg' );
$gt_icon_info          = (string) @file_get_contents( $gt_travel_icons_dir . 'info.svg' );

// Venue details as supplied — used to build the map and directions links, nothing invented.
$gt_venue_address  = 'Hilton Birmingham Metropole, Pendigo Way, Marston Green, Birmingham B40 1PP, UK';
$gt_venue_addr_enc = rawurlencode( $gt_venue_address );
$gt_map_embed_src  = 'https://www.google.com/maps?q=' . $gt_venue_addr_enc . '&output=embed';
$gt_waze_href      = 'https://waze.com/ul?q=' . $gt_venue_addr_enc . '&navigate=yes';
$gt_apple_href     = 'https://maps.apple.com/?q=' . $gt_venue_addr_enc;
$gt_here_href      = 'https://wego.here.com/search/' . $gt_venue_addr_enc;

return array(
	'title'       => 'Full page – travel & local information',
	'categories'  => array( 'gt-pages' ),
	'description' => 'Hero, venue details, interactive map with directions links, travel cards and an extendable info section.',
	'keywords'    => array( 'travel', 'local information', 'venue', 'map', 'directions', 'convention' ),
	'content'     => <<<HTML
<!-- wp:group {"className":"gt-s gt-hero gt-center gt-grad"} -->
<div class="wp-block-group gt-s gt-hero gt-center gt-grad"><!-- wp:paragraph {"className":"gt-badge"} -->
<p class="gt-badge">Birmingham Convention</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Travel &amp; local information</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">Everything you need to plan your journey — venue details, directions, and travel options for getting here by train, air or car.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#venue-map">View the map</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#getting-here">Getting here</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s"} -->
<div class="wp-block-group gt-s"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Venue</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Hilton Birmingham Metropole</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g3"} -->
<div class="wp-block-group gt-grid gt-g3"><!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_map_pin}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Address</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>{$gt_venue_address}</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#venue-map">Get directions</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_phone}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Phone</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="tel:+1123456789">+1 123456789</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:+1123456789">Call now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-center"} -->
<div class="wp-block-group gt-card gt-center"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_mail}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Email</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="mailto:conventions@godstonetabernacle.com">conventions@godstonetabernacle.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:conventions@godstonetabernacle.com">Send email</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s gt-soft","anchor":"venue-map"} -->
<div class="wp-block-group gt-s gt-soft" id="venue-map"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Find us</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Interactive map &amp; directions</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-map"} -->
<div class="wp-block-group gt-map"><!-- wp:html -->
<!-- Replace this src with your preferred Google Maps embed for the venue if needed. -->
<iframe class="gt-map-frame" src="{$gt_map_embed_src}" title="Map to Hilton Birmingham Metropole" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gt-small gt-center"} -->
<p class="gt-small gt-center">Open directions in your preferred app:</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="{$gt_waze_href}">Waze</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="{$gt_apple_href}">Apple Maps</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="{$gt_here_href}">HERE WeGo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s","anchor":"getting-here"} -->
<div class="wp-block-group gt-s" id="getting-here"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">Getting here</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Travel options</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g3"} -->
<div class="wp-block-group gt-grid gt-g3"><!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt="Train arriving at Birmingham International station — replace with Train-1.jpg"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_train}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">By train</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Birmingham International Station is a short distance from the venue. Add your preferred route, approximate journey time and transfer details here.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Train times</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt="Aircraft at Birmingham Airport — replace with Plane-1.jpg"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_plane}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">By air</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Birmingham Airport is the nearest airport to the venue. Add transfer options, taxi information or shuttle details here.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Airport information</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card"} -->
<div class="wp-block-group gt-card"><!-- wp:image {"className":"gt-img gt-img--wide"} -->
<figure class="wp-block-image gt-img gt-img--wide"><img alt="Hotel car park — replace with Parking.jpg"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_parking}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Parking</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>On-site hotel parking is available. Add pricing, availability and accessible parking details here.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Parking details</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-s gt-soft"} -->
<div class="wp-block-group gt-s gt-soft"><!-- wp:group {"className":"gt-head gt-center"} -->
<div class="wp-block-group gt-head gt-center"><!-- wp:paragraph {"className":"gt-eyebrow"} -->
<p class="gt-eyebrow">More to know</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Additional information</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gt-lead"} -->
<p class="gt-lead">A flexible space for anything else visitors should know. Duplicate a card to add local transport, accommodation, nearby facilities, restaurants or other practical details.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-grid gt-g4"} -->
<div class="wp-block-group gt-grid gt-g4"><!-- wp:group {"className":"gt-card gt-card--flat"} -->
<div class="wp-block-group gt-card gt-card--flat"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_bus}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Local transport</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Add details on buses, taxis or ride-share options near the venue.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-card--flat"} -->
<div class="wp-block-group gt-card gt-card--flat"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_hotel}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Accommodation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>List nearby hotels or your group booking details here.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-card--flat"} -->
<div class="wp-block-group gt-card gt-card--flat"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_food}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Restaurants &amp; facilities</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Mention nearby dining, cafes or other facilities for visitors.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gt-card gt-card--flat"} -->
<div class="wp-block-group gt-card gt-card--flat"><!-- wp:paragraph {"className":"gt-icon"} -->
<p class="gt-icon">{$gt_icon_info}</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Practical information</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Add weather, dress code, currency or other useful visitor notes.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
HTML
	,
);

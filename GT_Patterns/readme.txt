=== GT_Patterns ===
Requires at least: 6.5
Requires PHP: 7.4
Stable tag: 3.0.0
License: GPLv2 or later

144 modern, responsive block patterns (church, events, giving, sermons and general) built only from core WordPress blocks.
Colors follow the Blocksy palette (fallback: blue) so everything matches your site.

== Use ==
Edit a page > click the blue "+" > Patterns tab > pick a "GT ..." category.
"GT Full Pages" inserts whole pages (landing, about, services, pricing, contact).
Image slots show a soft placeholder; click one and choose your image.
Change the look site-wide by editing the variables at the top of assets/patterns.css.

== Add your own pattern ==
1. Build a section in the editor, select it, three dots > Copy.
2. Create patterns/my-section.php:

   <?php
   return array(
       'title'      => 'My section',
       'categories' => array( 'gt-custom' ),
       'content'    => <<<'HTML'
   (paste here)
   HTML
       ,
   );

It registers automatically. Keep the block comments exactly as WordPress wrote them.

== Animated patterns ==
Scroll-in fade, number counters and the news ticker run on the front end only
(never in the editor) and switch off for visitors who prefer reduced motion.
* Event countdown: edit the date text, format YYYY-MM-DD HH:MM.
* Rotating words hero: edit the words, separated by |
* Video thumbnails: select the image and add a link to your video.
* Overlay images (hero, banners, ministry cards): pick the image in List View, or click the dark area.
* Form patterns: replace the card's note and button with your form block.

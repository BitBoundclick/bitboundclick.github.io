<?php
// GamePress Dark — SEO + AdSense helpers
add_theme_support('title-tag'); add_theme_support('post-thumbnails');
add_image_size('game-hero', 1200, 630, true);
register_nav_menus(['primary' => 'Primary Menu']);
function gamepress_schema() {
  if (is_single()) {
    echo '<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","headline":"'.esc_js(get_the_title()).'","datePublished":"'.get_the_date('c').'","dateModified":"'.get_the_modified_date('c').'","author":{"@type":"Organization","name":"BitBound"}}</script>';
  }
}
add_action('wp_head', 'gamepress_schema');
// AdSense: replace pub-0000000000000000 after approval, and paste verification script in header.php where marked.
function gamepress_ad_slot($label = 'Ad') {
  echo '<div class="ad-slot" role="complementary" aria-label="Advertisement"><!-- AdSense code goes here after approval --><span>'.$label.' — AdSense slot (reserved height, no layout shift)</span></div>';
}

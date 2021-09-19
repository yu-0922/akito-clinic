<?php wp_body_open(); ?>

<div class="page-header">
  <h1><a href="index.html"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/IMG_0302.JPG" alt="あきと内科胃腸科ホーム"><img class="name" src="<?php echo get_stylesheet_directory_uri(); ?>/images/freefont_logo_hc-poo5.png"></a></h1>
  <?php
  // メニューIDを取得する
  $menu_name = 'global_nav';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object($locations[$menu_name]);

  $menu_items = wp_get_nav_menu_items($menu->term_id);
  ?>
  <nav>
    <ul class="headerNavi-main">
      <?php foreach ($menu_items as $item): ?>
      <li class="headerNavi-item">
        <a class="headerNavi-target" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
      </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</div>
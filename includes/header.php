<?php wp_body_open(); ?>

<div class="page-header slide-in">
  <h1 class="hp-title"><a href="<?php echo esc_url(home_url('/')); ?>"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/IMG_0302.JPG" alt="あきと内科胃腸科ホーム"><img class="name" src="<?php echo get_stylesheet_directory_uri(); ?>/images/freefont_logo_hc-poo5.png"></a></h1>
  <?php
  // メニューIDを取得する
  $menu_name = 'global_nav';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object($locations[$menu_name]);

  $menu_items = wp_get_nav_menu_items($menu->term_id);
  ?>
  <nav class="headerNavi">
    <ul class="headerNavi-main">
      <?php foreach ($menu_items as $item): ?>
      <li class="headerNavi-item slide-in">
        <a class="headerNavi-target" href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a>
      </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</div>
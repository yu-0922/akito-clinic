<footer>
  <div class="footer-main">
    <?php
    // メニューIDを取得する
    $menu_name = 'footer_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
    <ul class="footerNavi-main">
      <?php foreach ($menu_items as $item): ?>
      <li class="footerNavi-item">
        <a class="footerNavi-target" href="<?php echo $item->url; ?>" ><?php echo $item->title; ?></a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="footer-info">
    <h2 class="footer-head">あきと内科胃腸科</h2>
    <p class="footer-address">〒885-0094　宮崎県都城市都原町8146-6</p>
    <a href="tel:0986465500" class="footer-tel">0986-46-5500</a>
  </div>
  <div class="footer-bottom">
    <small class="footer-copyright">&copy;2021-akito.all rights reserved.</small>
  </div>
</footer>
<footer id="foot" class="footer outer-block slide-in">
  <div class="inner-block">
    <div class="cont-wrap">
      <div class="cont">
        <div class="footer-info">
          <a href="<?php echo esc_url(home_url('/')); ?>"><img class="name" src="<?php echo get_stylesheet_directory_uri(); ?>/images/freefont_logo_hc-poo5.png" alt="あきと内科胃腸科"></a>
          <p class="footer-address">〒885-0094<br>宮崎県都城市都原町8146-6</p>
          <a href="tel:0986465500" class="footer-tel">TEL：0986-46-5500</a>
        </div>
        <?php
        // メニューIDを取得する
        $menu_name = 'footer_nav';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);

        $menu_items = wp_get_nav_menu_items($menu->term_id);
        ?>
        <ul class="footerNavi-main">
          <?php foreach ($menu_items as $item) : ?>
            <li class="footerNavi-item">
              <a class="footerNavi-target" href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.3163140235906!2d131.03312631515578!3d31.734565981299248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353f20cc3e75292b%3A0x250d4c4f1c0b3cd0!2z44GC44GN44Go5YaF56eR6IOD6IW456eR!5e0!3m2!1sja!2sjp!4v1632300218556!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
  <p class="footer-copyright">&copy; akito hp 2021. All Rights Reserved.</p>
</footer>
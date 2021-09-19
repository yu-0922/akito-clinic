<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>

  <?php get_template_part('includes/header'); ?>

  <!-- スライドショー -->
  <div id="global-container">
    <div id="container">
      <div id="content">
        <div class="hero">
          <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="hero-title">外観</div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_1.png" alt="">
              </div>
              <div class="swiper-slide">
                <div class="hero-title">受付</div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_2.png" alt="">
              </div>
              <div class="swiper-slide">
                <div class="hero-title">待合室</div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="//unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/hero.slider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>

  <!-- 新着記事 -->
  <div class="page-title">
    <h2>お知らせ</h2>
  </div>
  <div class="post-container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="post-preview">
          <a href="<?php the_permalink(); ?>">
            <h3 class="post-title">
              <?php the_title(); ?>
            </h3>
            <h4 class="post-subtitle">
              <?php the_excerpt(); ?>
            </h4>
          </a>
          <p class="post-meta">Posted by
            <?php the_author() ?>
            on <?php the_time(get_option('date_format')); ?>
          </p>
        </div>
        <hr>
      <?php endwhile; ?>
      <!-- Pager -->
      <div class="pager">
        <button class="shadow"><?php previous_posts_link(); ?></button>
        <button class="shadow"><?php next_posts_link(); ?></button>
      </div>
    <?php else : ?>
      <p class="no-post">記事が見つかりませんでした。</p>
    <?php endif; ?>
  </div>

  <!-- 院長挨拶 -->
  <div class="page-title">
    <h2>院長挨拶</h2>
  </div>
  <div class="box">
    <div class="doctor-img">
      <img class="doctor-pic" src="<?php echo get_stylesheet_directory_uri(); ?>/images/doctor.png" alt="院長の写真">
    </div>
    <div class="doctor-text">
      <p class="speech">あきと内科胃腸科では、患者様に寄り添った最新最善の医療を目指しています。丁寧な検査・問診を行った上、ご自分の健康状態についてよく知っていただき、患者様にとって最善の治療を行います。</p>
    </div>
  </div>
  <div class="btn">
    <button class="shadow"><a href="<?php echo esc_url(home_url('greeting')); ?>">続きを読む</a></button>
  </div>

  <!-- 診療案内 -->
  <div class="page-title">
    <h2>診療案内</h2>
  </div>
  <div class="shinryo-contents">
    <h3 class="subject-area">診療科</h3>
    <h4 class="subject"><i class="fas fa-hospital-user"></i>内科</h4>
    <p class="disease">高血圧・高脂血症・糖尿病・高尿酸血症などの生活習慣病・循環器・消化器・呼吸器・自律神経失調症など</p>
    <h4 class="subject"><i class="fas fa-hospital-user"></i>胃腸科</h4>
    <p class="disease">胃炎・胃潰瘍・十二指腸潰瘍・逆流性食道炎・胃腸炎・下痢・便秘などの腸疾患など</p>
    <h4 class="subject"><i class="fas fa-hospital-user"></i>小児科</h4>
    <p class="disease">胃腸炎（嘔吐下痢症・便秘など）・風邪・喘息など</p>
    <h3 class="subject-area">診療時間</h3>
    <table class="time-table">
      <thead>
        <tr>
          <th></th>
          <th>月</th>
          <th>火</th>
          <th>水</th>
          <th>木</th>
          <th>金</th>
          <th>土</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>8:30~12:00</th>
          <td>○</td>
          <td>○</td>
          <td>○</td>
          <td>○</td>
          <td>○</td>
          <td>○</td>
        </tr>
        <tr>
          <th>13:00~17:00</th>
          <td>○</td>
          <td>○</td>
          <td>○</td>
          <td>○</td>
          <td>○</td>
          <td>-</td>
        </tr>
      </tbody>
    </table>
    <div class="holiday">※日曜・祝日は休み</div>
    <div class="btn">
      <button class="shadow"><a href="<?php echo esc_url(home_url('shinryo')); ?>">続きを読む</a></button>
    </div>
  </div>

  <!-- 院内案内 -->
  <div class="page-title">
    <h2>院内案内</h2>
  </div>
  <div class="is-slider">
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_11.png" alt=""></div>
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_12.png" alt=""></div>
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_9.png" alt=""></div>
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_4.png" alt=""></div>
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_5.png" alt=""></div>
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_10.png" alt=""></div>
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_7.png" alt=""></div>
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_6.png" alt=""></div>
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_8.png" alt=""></div>
  </div>
  <div class="btn">
    <button class="shadow"><a href="<?php echo esc_url(home_url('introspection')); ?>">続きを読む</a></button>
  </div>

  <!-- アクセス -->
  <div class="page-title">
    <h2>アクセス</h2>
  </div>


  <?php get_template_part('includes/footer'); ?>


  <?php get_footer(); ?>

  <script>
    $(function() {
      $('.is-slider').slick({
        autoplay: true, //自動スクロール
        autoplaySpeed: 0, //自動再生時のスライド切り替えの時間
        speed: 5000, //スライドが流れるスピード
        arrows: false, //左右の矢印を非表示
        swipe: false, //スワイプ禁止
        slidesToShow: 4, //表示するスライドの数
        cssEase: 'linear', //画像切り替えのアニメーション"linearは等速"
        pauseOnFocus: false, //フォーカスしても止めない
        pauseOnHover: false, //マウスホバーしても止めない
        responsive: [{
          breakpoint: 750,
          settings: {
            slidesToShow: 2,
          },
        }, {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
          }
        }]
      });
    });
  </script>
</body>

</html>
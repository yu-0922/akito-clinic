<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>

  <body <?php body_class(); ?>>
  
    <?php get_template_part('includes/header'); ?> 
      
    <div class="main">
      <h1 class="main-title">院長挨拶</h1>
      <div class="greeting-contents">
        <article>
          <header class="greeting-info">
            <h2 class="greeting-title">治療の主役はあなたです。</h2>
            <p class="greeting-icon">Dr.<span>message</span></p>
            <p class="greeting-subtitle">共に治療をしていきましょう。</p>
          </header>
          <img class="doctor" src="<?php echo get_stylesheet_directory_uri(); ?>/images/dr.jpg" alt="院長の写真">
          <p class="speech">あきと内科胃腸科では、ご自分の病気についてよく知り、向き合うのが治療の第一歩と考えております。</p>
          <p class="speech">分かりやすいアドバイスを行い、ご自分の病気を理解してもらうことで、より安心して治療を受けていただけるよう心掛けております。</p>
        </article>
        <aside>
          <h3 class="profile">院長プロフィール</h3>
            <p>田中彰人（たなかあきと）</p>
            <p>久留米大学医学部卒業</p>
          <h3 class="profile">主な加入学会</h3>
            <p>日本内科学会</p>
            <p>日本消化器内視鏡学会</p>
            <p>日本消化器病学会</p>
            <p>日本大腸肛門病学会</p>
            <p>日本集団検診学会</p>
            <p>日本糖尿病学会</p>
          <h3 class="profile">主なライセンス</h3>
            <p>臨床内科認定医</p>
            <p>内視鏡学会認定専門医</p>
            <p>健康スポーツ認定医</p>
            <p>産業認定医</p>
        </aside>
      </div>
    </div>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
    
  </body>
</html>
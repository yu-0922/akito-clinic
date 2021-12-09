<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>

  <body <?php body_class(); ?>>
  
    <?php get_template_part('includes/header'); ?> 
      
    <div class="main slide-in">
      <h1 class="main-title">院長挨拶</h1>
      <div class="greeting-contents">
        <article>
          <h2 class="greeting-title">地域の皆様が安心して来院できる病院に</h2>
          <!-- <p class="greeting-icon">Dr.<span>message</span></p> -->
          <p class="speech">あきと内科胃腸科では、患者様に寄り添った最善の医療を目指しています。<br>同じような症状でも、原因や程度など人それぞれ異なるため、検査・診療を丁寧に行い、患者様一人一人にとって最善の治療を行います。また、検査結果等を患者様にも分かりやすく説明し、ご自身の病気や治療方針をしっかり理解してもらうことで、より安心して治療を受けていただけるよう心掛けております。</p>
          <div class="doctor-image">
            <p class="doctor-name"><span>院長 / 田中  彰人<br>(AKITO TANAKA)</span></p>
          </div>
        </article>
        <aside>
          <h3 class="profile">院長プロフィール</h3>
            <p>田中彰人（たなかあきと）</p>
            <p>久留米大学医学部卒業</p>
          <h3 class="profile">主な加入学会</h3>
            <p>日本内科学会</p>
            <p>日本消化器病学会</p>
            <p>日本臨床内科病学会</p>
            <p>日本糖尿病学会</p>
          <h3 class="profile">主なライセンス</h3>
            <p>日本臨床内科医会専門医</p>
            <p>認定健康スポーツ医学会認定医</p>
            <p>認定産業医学会認定医</p>
        </aside>
      </div>
    </div>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
    
  </body>
</html>
<!DOCTYPE html>
<html lang ="ja">
    <head>
        <?php get_header(); ?>
    </head>
    <body>
    
    <?php get_template_part('includes/header'); ?>

        <div class="main slide-in">
        <h1 class="main-title">院内案内</h1>
            <div class="is-content">
                <div class="is-pic">
                    <img class="is-item" src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_12.png" alt="受付の写真">
                </div>
                <div class="is-text">
                    <h2 class="is-description-heading">受付</h2>
                    <p class="is-description">職員一同温かくお出迎えします。コロナ禍で患者様に質問することが増えてしまいますが、感染予防のため、どうぞご了承ください。</p>
                </div>
            </div>
            <div class="is-content">
                <div class="is-pic">
                    <img class="is-item is-item-s" src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_11.png" alt="待合室の写真">
                </div>
                <div class="is-text">
                    <h2 class="is-description-heading">待合室</h2>
                    <p class="is-description">広い空間と光が入る場所で、患者様が窮屈に感じないような空間にしています。</p>
                    <p class="is-description">コロナ禍となり、自動検温器を導入し、発熱・感染部屋はリモートの部屋を含めて3室用意してあります。お一人退室される度に清掃と消毒を徹底し、感染予防に努めています。</p>
                </div>
            </div>
            <div class="is-content">
                <div class="is-pic">
                    <img class="is-item" src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_5.png" alt="診察室の写真">
                </div>
                <div class="is-text">
                    <h2 class="is-description-heading">診察室</h2>
                    <p class="is-description">プライバシーの守られた空間で、患者様一人一人からしっかりお話を伺い、診察します。</p>
                </div>
            </div>
            <div class="is-content">
                <div class="is-pic">
                    <img class="is-item" src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_4.png" alt="処置室の写真">
                </div>
                <div class="is-text">
                    <h2 class="is-description-heading">処置室</h2>
                    <p class="is-description">清潔な部屋で安心して治療を受けていただけるよう、空気清浄機を始め、徹底した清掃・消毒を行っています。</p>
                </div>
            </div>
            <div class="is-content">
                <div class="is-pic">
                    <img class="is-item" src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_7.png" alt="検査室の写真">
                </div>
                <div class="is-text">
                    <h2 class="is-description-heading">検査室</h2>
                    <p class="is-description">レントゲン・血管伸展性検査・骨密度測定検査・腹部エコー・心電図・処置点滴等の検査ができます。</p>
                </div>
            </div>
        </div>

        <?php get_template_part('includes/footer'); ?>

        <?php get_footer(); ?>
    </body>
</html>
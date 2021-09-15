<!DOCTYPE html>
<html lang ="ja">
    <head>
        <?php get_header(); ?>
    </head>
    <body>
    
    <?php get_template_part('includes/header'); ?>

        <div class="main">
            <div class="main-title">
                <h1>院内案内</h1>
            </div>
            <div class="is_content">
                <div class="is_pic">
                    <img class="is_item" src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_12.png" alt="受付の写真">
                </div>
                <div class="is_text">
                    <h2 class="is_discription_heading">受付</h2>
                    <p class="is_discription">職員一同温かくお出迎えします。もちろん自動検温器や消毒液も設置しております。</p>
                </div>
            </div>
            <div class="is_content">
                <div class="is_pic">
                    <img class="is_item" src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_11.png" alt="待合室の写真">
                </div>
                <div class="is_text">
                    <h2 class="is_discription_heading">待合室</h2>
                    <p class="is_discription">広い空間と光が入る場所で、患者様が窮屈に感じないような空間にしております。</p>
                </div>
            </div>
            <div class="is_content">
                <div class="is_pic">
                    <img class="is_item" src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_5.png" alt="診察室の写真">
                </div>
                <div class="is_text">
                    <h2 class="is_discription_heading">診察室</h2>
                    <p class="is_discription">プライバシーの守られた空間で、院長が患者様1人1人からしっかりお話を伺い、診察していきます。</p>
                </div>
            </div>
            <div class="is_content">
                <div class="is_pic">
                    <img class="is_item" src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_4.png" alt="処置室の写真">
                </div>
                <div class="is_text">
                    <h2 class="is_discription_heading">処置室</h2>
                    <p class="is_discription">清潔な部屋で安心して治療を受けていただけるよう、徹底した清掃を行っております。</p>
                </div>
            </div>
            <div class="is_content">
                <div class="is_pic">
                    <img class="is_item" src="<?php echo get_stylesheet_directory_uri(); ?>/images/image_7.png" alt="レントゲン室の写真">
                </div>
                <div class="is_text">
                    <h2 class="is_discription_heading">検査室</h2>
                    <p class="is_discription">レントゲン室やエコー心電図室、処置点滴室、回復室等の検査室がございます。</p>
                </div>
            </div>
        </div>

        <?php get_template_part('includes/footer'); ?>

        <?php get_footer(); ?>
    </body>
</html>
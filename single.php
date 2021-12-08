<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>

  <div class="main slide-in">
    <h1 class="main-title">お知らせ</h1>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="p-container">
      <div class="p-heading">
        <h1 class="p-title"><?php the_title(); ?></h1>
        <!-- <span class="meta">Posted by -->
          <!-- <?php the_author(); ?> -->
          <!-- on <?php the_date(); ?></span> -->
      </div>
      <div class="p-content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
  <?php endif ?>
  </div>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>

</body>

</html>
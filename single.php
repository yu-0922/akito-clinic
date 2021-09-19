<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>

  <div class="main">
    <h1 class="main-title">お知らせ</h1>
  </div>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="post-container">
      <div class="post-heading">
        <h1><?php the_title(); ?></h1>
        <span class="meta">Posted by
          <?php the_author(); ?>
          on <?php the_date(); ?></span>
      </div>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
  <?php endif ?>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>

</body>

</html>
<?php get_header(); ?>

  <section class="content-block content-block--center-align">
    <?php get_template_part("partials/home/about", "section"); ?>
  </section>

  <section class="content-block content-block--center-align">
    <?php $wp_query = latest_posts_of_type('work', 4); ?>
      <?php get_template_part("partials/home/work", "section"); ?>
    <?php wp_reset_query(); ?>
  </section>

  <section class="content-block content-block--center-align">
    <?php $wp_query = latest_posts_of_type('post', 4); ?>
      <?php get_template_part("partials/home/blog", "section"); ?>
    <?php wp_reset_query(); ?>
  </section>

<?php get_footer(); ?>

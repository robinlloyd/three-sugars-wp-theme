<?php get_header('small'); ?>

  <section class="content-block content-block--center-align">
    <h1 class="content-block__title">Blog</h1>
    <h1 class="content-block__subtitle">I write about web development, gaming, movies and anything geeky</h1>

    <?php get_template_part("partials/blog", "post"); ?>
  </section>

  <nav class="pagination">
    <?php previous_posts_link("Newer posts"); ?>
    <?php next_posts_link("Older posts"); ?>
  </nav>

<?php get_footer(); ?>

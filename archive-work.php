<?php get_header('small'); ?>

  <section class="content-block content-block--center-align">
    <h1 class="content-block__title">Work</h1>
    <h1 class="content-block__subtitle">Check out some of the latest things I've been working on</h1>

    <?php get_template_part("partials/work", "post"); ?>
  </section>

  <nav class="pagination">
    <?php previous_posts_link("Newer posts"); ?>
    <?php next_posts_link("Older posts"); ?>
  </nav>

<?php get_footer(); ?>

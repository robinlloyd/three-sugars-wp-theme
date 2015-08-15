<?php get_header(); ?>

  <section class="contentBlock contentBlock--center-align">
    <img class="profile-img" src="assets/images/robin.jpg" alt="Robin Lloyd">

    <h2 class="contentBlock-title">About Me</h2>

    <p>My name is Robin, I’m a front-end web developer based in Birmingham, UK. I enjoy building websites, playing old school point and click adventure games, watching anime and occassionally being a wizard.</p>

    <a class="btn btn--primary" href="#">Find out more</a>
  </section>



  <section class="contentBlock contentBlock--center-align">
    <h2 class="contentBlock-title">Work</h2>

    <h3 class="contentBlock-subtitle">Check out some of the latest things I've been working on</h3>

    <a class="btn btn--primary" href="#">View more</a>

    <ul class="squaredIndex">
      <li class="squaredIndex-cell">
        <img class="squaredIndex-cell-image" src="<?php the_post_thumbnail('work-small'); ?>" alt="<?php the_title(); ?>">

        <h3 class="squaredIndex-cell-title"><?php the_title(); ?></h3>
        <h4 class="squaredIndex-cell-subtitle">Web application</h4>
      </li>

      <li class="squaredIndex-cell">
        <img class="squaredIndex-cell-image" src="<?php the_post_thumbnail('work-small'); ?>" alt="<?php the_title(); ?>">

        <h3 class="squaredIndex-cell-title"><?php the_title(); ?></h3>
        <h4 class="squaredIndex-cell-subtitle">Web application</h4>
      </li>

      <li class="squaredIndex-cell">
        <img class="squaredIndex-cell-image" src="<?php the_post_thumbnail('work-small'); ?>" alt="<?php the_title(); ?>">

        <h3 class="squaredIndex-cell-title"><?php the_title(); ?></h3>
        <h4 class="squaredIndex-cell-subtitle">Web application</h4>
      </li>

      <li class="squaredIndex-cell">
        <img class="squaredIndex-cell-image" src="<?php the_post_thumbnail('work-small'); ?>" alt="<?php the_title(); ?>">

        <h3 class="squaredIndex-cell-title"><?php the_title(); ?></h3>
        <h4 class="squaredIndex-cell-subtitle">Web application</h4>
      </li>
    </ul>
  </section>



  <section class="contentBlock contentBlock--center-align">
    <h2 class="contentBlock-title">Blog</h2>

    <h3 class="contentBlock-subtitle">I write about web development, gaming, movies and anything geeky</h3>

    <a class="btn btn--primary" href="#">View more</a>

    <ul class="descriptionIndex">
      <li class="descriptionIndex-cell">
        <img class="descriptionIndex-cell-image" src="<?php the_post_thumbnail('blog-small'); ?>" alt="<?php the_title(); ?>">

        <div class="descriptionIndex-cell-details">
          <h3 class="descriptionIndex-cell-title"><?php the_title(); ?></h3>

          <p class="descriptionIndex-cell-date"><?php the_time(); ?></p>

          <div class="descriptionIndex-cell-excerpt">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </li>

      <li class="descriptionIndex-cell">
        <img class="descriptionIndex-cell-image" src="<?php the_post_thumbnail('blog-small'); ?>" alt="<?php the_title(); ?>">

        <div class="descriptionIndex-cell-details">
          <h3 class="descriptionIndex-cell-title"><?php the_title(); ?></h3>

          <p class="descriptionIndex-cell-date"><?php the_time(); ?></p>

          <div class="descriptionIndex-cell-excerpt">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </li>

      <li class="descriptionIndex-cell">
        <img class="descriptionIndex-cell-image" src="<?php the_post_thumbnail('blog-small'); ?>" alt="<?php the_title(); ?>">

        <div class="descriptionIndex-cell-details">
          <h3 class="descriptionIndex-cell-title"><?php the_title(); ?></h3>

          <p class="descriptionIndex-cell-date"><?php the_time(); ?></p>

          <div class="descriptionIndex-cell-excerpt">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </li>

      <li class="descriptionIndex-cell">
        <img class="descriptionIndex-cell-image" src="<?php the_post_thumbnail('blog-small'); ?>" alt="<?php the_title(); ?>">

        <div class="descriptionIndex-cell-details">
          <h3 class="descriptionIndex-cell-title"><?php the_title(); ?></h3>

          <p class="descriptionIndex-cell-date"><?php echo get_the_date('jS F Y'); ?></p>

          <div class="descriptionIndex-cell-excerpt">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </li>
    </ul>
  </section>




  <!-- WP Loop
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <?php get_template_part('partials/content', 'post'); ?>
  <?php endwhile; else : ?>
    <p><?php _e("Something went wrong there, couldn't find any content."); ?></p>
  <?php endif; ?>
   END WP Loop -->

<?php get_footer(); ?>

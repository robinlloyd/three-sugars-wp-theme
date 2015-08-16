<?php get_header(); ?>
  <section class="contentBlock contentBlock--center-align">
    <div class="wrap wrap--small">
      <img class="profile-img" src="<?php bloginfo('template_directory');?>/assets/images/robin.jpg" alt="Robin Lloyd">

      <h2 class="contentBlock-title">About Me</h2>

      <p>My name is Robin, I’m a front-end web developer based in Birmingham, UK. I enjoy building websites, playing old school point and click adventure games, watching anime and occassionally being a wizard.</p>

      <p><a class="btn btn--primary" href="#">Find out more</a></p>
    </div>
  </section>



  <section class="contentBlock contentBlock--center-align">
    <h2 class="contentBlock-title">Work</h2>

    <h3 class="contentBlock-subtitle">Check out some of the latest things I've been working on</h3>

    <p><a class="btn btn--primary" href="#">View more</a></p>

    <?php $wp_query = latest_posts_of_type('work'); ?>

    <!-- WP Loop -->
    <?php if( $wp_query->have_posts() ) : ?>
      <ul class="squaredIndex">
        <?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <li class="squaredIndex-cell">
            <a href="<?php the_permalink(); ?>">
              <div class="squaredIndex-cell-image">
                <?php the_post_thumbnail('archive-small'); ?>
              </div>

              <div class="squaredIndex-cell-details">
                <h3 class="squaredIndex-cell-title"><?php the_title(); ?></h3>
                <h4 class="squaredIndex-cell-subtitle">Web application</h4>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

    <?php else : ?>
      <p><?php _e("Something went wrong there, couldn't find any content."); ?></p>
    <?php endif; ?>

    <?php wp_reset_query(); ?>
    <!-- END WP Loop -->
  </section>



  <section class="contentBlock contentBlock--center-align">
    <h2 class="contentBlock-title">Blog</h2>

    <h3 class="contentBlock-subtitle">I write about web development, gaming, movies and anything geeky</h3>

    <p><a class="btn btn--primary" href="#">View more</a></p>

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

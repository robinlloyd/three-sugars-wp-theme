<?php get_header(); ?>
  <section class="content-block content-block--center-align">
    <div class="wrap wrap--small">
      <img class="profile-img" src="<?php bloginfo('template_directory');?>/assets/images/robin.jpg" alt="Robin Lloyd">

      <h2 class="content-block__title">About Me</h2>

      <p>My name is Robin, I’m a front-end web developer based in Birmingham, UK. I enjoy building websites, playing old school point and click adventure games, watching anime and occassionally being a wizard.</p>

      <p><a class="btn btn--primary" href="#">Find out more</a></p>
    </div>
  </section>



  <section class="content-block content-block--center-align">
    <h2 class="content-block__title">Work</h2>

    <h3 class="content-block__subtitle">Check out some of the latest things I've been working on</h3>

    <p><a class="btn btn--primary" href="#">View more</a></p>


    <!-- WP Loop -->
    <?php $wp_query = latest_posts_of_type('work', 4); ?>
    <?php if( $wp_query->have_posts() ) : ?>
      <ul class="squared-index">
        <?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <li class="squared-index__cell">
            <a href="<?php the_permalink(); ?>">
              <div class="squared-index__cell-image">
                <?php the_post_thumbnail('archive-small'); ?>
              </div>

              <div class="squared-index__cell-details">
                <h3 class="squared-index__cell-title"><?php the_title(); ?></h3>
                <h4 class="squared-index__cell-subtitle">Web application</h4>
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



  <section class="content-block content-block--center-align">
    <h2 class="content-block__title">Blog</h2>

    <h3 class="content-block__subtitle">I write about web development, gaming, movies and anything geeky</h3>

    <p><a class="btn btn--primary" href="#">View more</a></p>


    <!-- WP Loop -->
    <?php $wp_query = latest_posts_of_type('post', 4); ?>
    <?php if( $wp_query->have_posts() ) : ?>
      <ul class="description-index wrap">
        <?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <li class="description-index__cell">
            <a href="<?php the_permalink(); ?>">
              <div class="description-index__cell-image">
                <?php the_post_thumbnail('archive-small'); ?>
              </div>

              <div class="description-index__cell-details">
                <h3 class="description-index__cell-title"><?php the_title(); ?></h3>

                <p class="description-index__cell-date"><?php the_time("jS M, Y"); ?></p>

                <div class="description-index__cell-excerpt">
                  <?php the_excerpt(); ?>
                </div>
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

<?php get_footer(); ?>

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

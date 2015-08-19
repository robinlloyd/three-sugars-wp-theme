<!-- WP Loop -->
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

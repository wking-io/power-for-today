<?php

$recent_posts = wp_get_recent_posts( array(
  'numberposts' => 4,
  'post_status' => 'publish',
) );

get_header(); ?>

<main>
  <section>
    <h2 class="font-serif font-bold text-6xl leading-tight pt-12 mb-16"><?php the_field('homepage_heading', 'options'); ?></h2>
    <div class="flex border-t border-black">
      <div class="flex-no-shrink w-5/12 p-12 pl-0 border-r border-black">
        <h3 class="uppercase font-bold mb-6 tracking-wide">About This Blog</h3>
        <div class="general-content"><?php the_field('homepage_about', 'options'); ?></div>
      </div>
      <div class="flex-1 p-12 pr-0">
        <div class="flex items-end justify-between mb-6">
          <h3 class="uppercase font-bold tracking-wide">Most Recent Articles</h3>
          <p><a href="#articles">View All Articles</a></p>
        </div>
        <?php if ( ! empty( $recent_posts ) ) : ?>
          <ul>
            <?php foreach ( $recent_posts as $rp ) : ?>
              <li>
                <a class="block py-4 hover:bg-grey-100 -mx-4 px-4" href="<?php echo esc_attr( get_permalink( $rp['ID'] ) ); ?>">
                  <p class="font-serif text-2xl mb-2"><?php echo esc_html( $rp['post_title'] ); ?></p>
                  <div class="flex items-center text-grey-600 uppercase">
                    <p><?php echo esc_html( get_the_author_meta( 'display_name', $rp['post_author'] ) ); ?></p>
                    <span class="h-px w-12 mx-4 bg-grey-600"></span>
                    <p><?php echo esc_html( date_i18n( 'M j, Y', strtotime( $rp['post_date'] ) ) ); ?></p>
                  </div>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php else : ?>
          <div>Sorry, no posts to show!</div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="p-12 border border-black">
    <h2 class="text-xl uppercase font-bold mb-6 tracking-wide">Articles</h2>
    <?php if ( ! empty( $posts ) ) : ?>
      <ul>
        <?php foreach ( $posts as $post ) : ?>
        <li>
                <a class="block py-4 hover:bg-grey-100 -mx-4 px-4" href="<?php echo esc_attr( get_permalink( $post->ID ) ); ?>">
                  <p class="font-serif text-3xl mb-2"><?php echo esc_html( $post->post_title ); ?></p>
                  <div class="flex items-center text-grey-600 uppercase">
                    <p><?php echo esc_html( get_the_author_meta( 'display_name', $post->post_author ) ); ?></p>
                    <span class="h-px w-12 mx-4 bg-grey-600"></span>
                    <p><?php echo esc_html( date_i18n( 'M j, Y', strtotime( $post->post_date ) ) ); ?></p>
                  </div>
                </a>
              </li>
        <?php endforeach; ?>
      </ul>
    <?php else : ?>
      <div>Sorry, no posts to show!</div>
    <?php endif; ?>
  </section>
</main>

<?php get_footer();

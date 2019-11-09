<?php

$recent_posts = wp_get_recent_posts( array(
  'numberposts' => 4,
  'post_status' => 'publish',
) );

get_header(); ?>

<main>
  <section>
    <h2 class="font-serif font-bold text-2xl md:text-5xl lg:text-6xl leading-tight pt-12 mb-16"><?php the_field('homepage_heading', 'options'); ?></h2>
    <div class="flex flex-col md:flex-row border-t border-black">
      <div class="flex-no-shrink md:w-1/2 lg:w-5/12 py-12 md:pr-12 border-b md:border-b-0 md:border-r border-black">
        <h3 class="uppercase font-bold mb-6 tracking-wide">About This Blog</h3>
        <div class="about"><?php the_field('homepage_about', 'options'); ?></div>
      </div>
      <div class="flex-1 py-12 md:pl-12">
        <div class="flex items-end justify-between mb-6">
          <h3 class="uppercase font-bold tracking-wide">Most Recent Articles</h3>
          <p class="hidden md:block"><a class="hover:underline" href="#articles">View All Articles</a></p>
        </div>
        <?php if ( ! empty( $recent_posts ) ) : ?>
          <ul>
            <?php foreach ( $recent_posts as $rp ) : ?>
              <li>
                <a class="block py-4 hover:bg-grey-100 -mx-4 px-4" href="<?php echo esc_attr( get_permalink( $rp['ID'] ) ); ?>">
                  <p class="font-serif text-xl lg:text-2xl mb-2"><?php echo esc_html( $rp['post_title'] ); ?></p>
                  <div class="flex items-center text-grey-600 uppercase text-sm lg:text-base">
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
  <section class="p-8 md:p-12 border border-black">
    <h2 class="md:text-xl uppercase font-bold mb-6 tracking-wide">Articles</h2>
    <?php if ( ! empty( $posts ) ) : ?>
      <ul>
        <?php foreach ( $posts as $post ) : ?>
        <li>
                <a class="block py-4 hover:bg-grey-100 -mx-4 px-4" href="<?php echo esc_attr( get_permalink( $post->ID ) ); ?>">
                  <p class="font-serif text-xl md:text-2xl lg:text-3xl mb-2"><?php echo esc_html( $post->post_title ); ?></p>
                  <div class="flex items-center text-grey-600 uppercase text-sm md:text-base">
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

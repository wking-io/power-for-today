<?php

get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article class="">
    <h2 class="font-display uppercase font-bold text-xl leading-normal mb-6 md:text-3xl lg:text-4xl md:w-4/5"><?php echo the_title(); ?></h2>
    <div class="general-content mb-8"><?php the_content(); ?></div>
  </article>
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer();
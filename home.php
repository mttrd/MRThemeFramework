<?php get_header(); ?>

<div class="container root">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="excerpt">
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <p class="meta">
        By: <?php the_author(); ?> on <?php echo the_time('l, F, jS, Y'); ?>
      </p>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
    </article>

  <?php endwhile; else : ?>

    <h1>Sorry, there is no content to display!</h1>

  <?php endif; ?>
  <div id="root_footer"></div>
</div>

<?php get_footer(); ?>
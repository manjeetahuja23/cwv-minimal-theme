<?php
get_template_part( 'templates/partials/header' );
?>
<section class="container">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> aria-labelledby="post-title-<?php the_ID(); ?>">
        <h1 id="post-title-<?php the_ID(); ?>"><?php the_title(); ?></h1>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</section>
<?php
get_template_part( 'templates/partials/footer' );

<?php
get_template_part( 'templates/partials/header' );
?>
<section class="container">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> aria-labelledby="post-title-<?php the_ID(); ?>">
        <h2 id="post-title-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php esc_html_e( 'No posts found.', 'cwv-minimal' ); ?></p>
  <?php endif; ?>
</section>
<?php
get_template_part( 'templates/partials/footer' );

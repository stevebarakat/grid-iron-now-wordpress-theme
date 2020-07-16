<?php
/**
 * @package Sportsday Now
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php 
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');  // Other resolutions
			} 
		?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php sportsdays_now_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sportsdays-now' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sportsdays_now_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

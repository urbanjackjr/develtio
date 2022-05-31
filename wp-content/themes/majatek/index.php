<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php if ( is_home() && is_front_page() ) : ?>
		<?php get_template_part( 'resources/templates/content/content' ); ?>
	<?php else : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php get_template_part( 'resources/templates/content/content', get_post_type() ); ?>
		<?php endwhile; ?>
	<?php endif; ?>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

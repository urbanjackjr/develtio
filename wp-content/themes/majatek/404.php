<?php get_header(); ?>

<main>
	<section>
		<article>
			<h1><?php echo esc_html( 'Page not found', 'develtio' ); ?></h1>

			<h2>
				<a href="<?php echo esc_attr( home_url() ); ?>">
					<?php echo esc_html( 'Homepage', 'develtio' ); ?>
				</a>
			</h2>
		</article>
	</section>

	<aside>
		<?php get_sidebar(); ?>
	</aside>
</main>

<?php get_footer(); ?>

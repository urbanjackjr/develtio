<?php
	$logo_url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' ) ? wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0] : get_template_directory_uri() . '/resources/assets/images/logo.png';
?>

<header class="header">
	<a href="<?php echo esc_attr( get_site_url() ); ?>" title="<?php echo esc_attr( 'Back to homepage', 'develtio' ); ?>" class="header__logo">
		<img src="<?php echo $logo_url; ?>" class="logo" alt="logo" />
	</a>

	<?php get_template_part( 'resources/templates/nav/nav', 'top' ); ?>
</header>

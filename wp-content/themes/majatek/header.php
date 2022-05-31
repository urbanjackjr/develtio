<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="preconnect" href="https://use.typekit.net/">
	<link rel="stylesheet" href="https://use.typekit.net/uxf5gyo.css">
	<title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>

	<?php get_template_part( 'resources/templates/parts/parts', 'header' ); ?>

	<main class="main <?php echo get_post_type(); ?>">

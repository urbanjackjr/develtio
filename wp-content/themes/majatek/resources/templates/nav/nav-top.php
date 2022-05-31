<div class="hamburger header__toggle" aria-role="button">
	<span class="hamburger__line"></span>
	<span class="hamburger__line"></span>
	<span class="hamburger__line"></span>
</div>

<nav class="nav header__nav">
	<?php
		wp_nav_menu( array(
			'theme_location' => 'header',
			'container' => false,
			'menu_class' => 'nav__list',
			'add_li_class' => 'nav__item'
		) );
	?>
</nav>

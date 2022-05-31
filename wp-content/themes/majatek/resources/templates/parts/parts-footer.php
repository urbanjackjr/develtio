<?php
/**
 * <footer> content with bottom-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer">
	<div class="footer__content">
		<?php 
			for($i = 1; $i < 5; $i++) {
				dynamic_sidebar( 'footer_' . $i );
			}
		?>
	</div>
</footer>

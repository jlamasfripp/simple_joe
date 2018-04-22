
		<div class="sidebar">
			<?php if(is_active_sidebar('sidebar')){
				dynamic_sidebar( 'sidebar' );
			}?>
		</div>

		<div class="clr"></div>
<footer>
	<div class="container">
			<p>&copy; <?php the_date('Y'); ?> - <?php bloginfo('name'); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
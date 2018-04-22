<?php get_header() ?>
	<div class="container">
		<div class="main">
		
		<?php if (have_posts()) : ?>
			<?php while (have_posts()): the_post(); ?>
				<article class="post">
					<h3>
						<a href="<?php the_permalink(  ) ?>"><?php the_title(); ?></a>
					</h3>
					<div class="meta">
						Escrito por <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
					</div>
					<?php if(has_post_thumbnail()) : ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>
					<?php the_excerpt(); ?>
					<br>
					<a class="button" href="<?php the_permalink() ?>">More...</a>
				</article>
			<?php endwhile ?>
		<?php else : ?>
			<?php echo wpautop( 'Sorry, no posts yet' ) ?>
		<?php endif; ?>

	</div>
</div>
<?php get_footer() ?>

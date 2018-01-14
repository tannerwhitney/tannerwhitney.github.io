<?php get_header(); ?>

<body>
	<div>
		<?php get_sidebar() ?>
		<div class="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
			</div>
			<?php  wp_link_pages();	endwhile; endif; ?>
			<div class="navigation">
				<div class="alignleft"><?php previous_posts_link('<span class="arrow_prev"></span> newer') ?></div>
				<div class="alignright"><?php next_posts_link('older <span class="arrow_next"></span>') ?></div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
</body>
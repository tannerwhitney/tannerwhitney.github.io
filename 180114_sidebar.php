<nav>
	<h1>
		
			<a href="<?php echo home_url( '/' ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?>
			</a>
		
	</h1>
	<ul>
		<?php wp_list_pages('title_li=&sortby=menu_order');
			
		?>
	</ul>
</nav>
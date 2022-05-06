	<?php get_header(); ?>
		<content>
			<div class="category_fix">
				<div class="category_title"><h1><?php single_cat_title();?></h1></div>
				<div class="category_list">
					<?php $q = get_query_var('cat');?>
					<?php if( have_posts($q)):?>
					<?php while( have_posts($q)): the_post($q);?>
					<?php product();?>
					<?php endwhile; ?>
					<?php else:?>
					<p id='noprod'>There are no products now.</p>
					<?php endif;?>
				</div>
				<?php 
					$args = array(
						
						'prev_text'    => __('<'),
						'next_text'    => __('>'),
					);

					the_posts_pagination($args);
				?>
			</div>
		</content>
		<?php get_footer();?>
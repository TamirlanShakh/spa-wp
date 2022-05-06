	<?php get_header(); ?>
		<content>
			<div class="single_fix">
				<div class="s_product_left">
					<div class="s_product_img"><a href="<?php echo get_field('картинка');?>" rel="lightbox"><img src="<?php echo get_field('картинка');?>" ></a></div>
					<div class="s_product_imgs">
						<?php 
							if(get_field('доп_фотографии')):
							$gallery = get_field('доп_фотографии');
							foreach ($gallery as $img):
						?>
						<a href="<?php echo $img['url']; ?>" rel="lightbox"><img src="<?php echo $img['sizes']['thumbnail']; ?>" alt=""></a>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="s_product_right">
					<div class="single_title"><h1><?php the_title();?></h1></div>
					<div class="single_cart">add to cart<?php echo $GLOBALS['wpshop_obj']->GetGoodWidget();?></div>
					<div class="single_desc"><?php echo get_field('описание');?></div>
				</div>

			</div>
			<div class="single_comments">
				<div><?php comments_template();?></div>
				<div><?php wp_enqueue_script('comment-reply');?></div>
				<div><?php godecan_comments_list();?></div>
			</div>
		</content>
		<?php get_footer();?>
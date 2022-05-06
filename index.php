		<?php get_header(); ?>
		<content>
			<div class="slider">
				<div class="slider_fix">
					<div class="slider_title"><?php echo get_field('над_слайдером', 58) ?></div>
					<div class="slider_img" >
						<div id="cbp-fwslider" class="cbp-fwslider">
							<ul>
								<?php $slider = get_field('слайдер',58);?>
								<?php foreach($slider as $slide): ?>
								<li class="slider_img" style="background: url('<?php echo $GLOBALS['theme_uri']; ?>/images/slider/slide.png')no-repeat center/cover;"></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="oils">
				<div class="oils_fix">
					<div class="oils_title"><?php echo get_field('заголовок', 58); ?></div>
					<div class="oils_blocks">
						<div class="oils_desc">
							<div class="oils_desc_block">
								<?php $zag_oils = get_field('описание',58);?>
								<?php foreach($zag_oils as $zag_oil): ?>
								<div class="oils_desc_block_title"><?php echo $zag_oil['заголовок_описания'] ;?></div>
								<div class="oils_desc_block_text"><?php echo $zag_oil['описание_описания'] ;?></div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="oils_img" style="background: url('<?php echo get_field('картинка', 58); ?>')no-repeat center/cover;"></div>
						<div class="oils_offer">
						    <div class="oils_order">
						    	<?php $prod_oils = get_field('стоимость_и_количество',58);?>
								<?php foreach($prod_oils as $prod_oil): ?>
							    <div class="oils_order_price"><?php echo $prod_oil['количество'];?><br><?php echo $prod_oil['стоимость'];?></div>
							    <?php endforeach; ?>
							    <div class="oils_order_button">place your order</div>
						    </div>
						    <div class="oils_img_mini" style="background: url('<?php echo get_field('мини_картинка', 58); ?>')no-repeat center/cover;"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="handcrafted">
				<div class="handcrafted_fix">
					<div class="handcrafted_soap">
						<?php $hand_oils = get_field('hand_малое_описание',58);?>
						<?php foreach($hand_oils as $hand_oil): ?>
						<div class="handcrafted_soap_title"><?php echo $hand_oil['заголовок'];?></div>
						<div class="handcrafted_soap_text"><?php echo $hand_oil['описание'];?></div>
						<div class="handcrafted_soap_img"><img src="<?php echo $hand_oil['картинка'];?>" alt=""></div>
						<?php endforeach; ?>
					</div>
					<div class="handcrafted_img"><img src="<?php echo get_field('hand_картинка',58); ?>" alt=""></div>
					<div class="handcrafted_line">
						<?php $hand_big_oils = get_field('hand_большое_описание',58);?>
						<?php foreach($hand_big_oils as $hand_big_oil): ?>
						<div class="handcrafted_line_title"><?php echo $hand_big_oil['заголовок'];?></div>
						<div class="handcrafted_line_text"><?php echo $hand_big_oil['описание'];?></div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="products">
				<div class="products_fix">
					<div class="products_title"><?php echo get_field('заголовок_категории_товаров', 58);?></div>
						<div class="products_blocks">
							<?php $query = new WP_Query(
									$args = array (
										'posts_per_page' => 3,
										'category__in'=> array(66),
									)
								)
							?>
							<?php if( $query->have_posts()):?>
							<?php while( $query->have_posts()): $query->the_post();?>
							<?php product();?>
							<?php endwhile; ?>
							<?php else:?>
							<p>Products now isn't</p>
							<?php endif;?>
					</div>
				</div>
			</div>
			<div class="slider_releases">
				<div class="slider_releases_fix">
					<div class="slider_releases_imgs">
							<?php $slider_releases = get_field('releases_слайдер',58); $i=0;?>
							<?php foreach($slider_releases as $slider_release): $i++;?>
							<div class="slider_releases_img slider_releases_img_<?php echo $i;?>" style="background: url('<?php echo $slider_release['картинка'];?>')no-repeat center/cover;"></div>
							<?php endforeach;?>
						<div class="slider_releases_nav">
							<div class="slider_releases_next">></div>
							<div class="slider_releases_prev"><</div>
						</div>
					</div>
				</div>
			</div>
			<div class="new">
				<div class="new_fix">
					<div class="new_desc">
						<div class="new_title"><?php echo get_field('new_заголовок', 58);?></div>
						<?php $new_descs = get_field('new_описание',58);?>
						<?php foreach($new_descs as $new_desc): ?>
						<div class="new_desc_title"><?php echo $new_desc['заголовок'];?></div>
						<div class="new_desc_text"><?php echo $new_desc['описание'];?></div>
						<?php endforeach;?>
					</div>
					<div class="new_slides">
						<?php $new_sliders = get_field('new_слайдер',58); $ii=0;?>
						<?php foreach($new_sliders as $new_slider): $ii++;?>
						<div class="new_slide new_slide_<?php echo $ii;?>" style="background: url('<?php echo $new_slider['картинка'];?>')no-repeat center/cover;"></div>
						<?php endforeach;?>
						<div class="new_slide_nav">
							<div class="new_slide_next">></div>
							<div class="new_slide_prev"><</div>
						</div>
					</div>
				</div>
			</div>
		</content>
		<?php get_footer();?>
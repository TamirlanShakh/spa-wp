<footer>
			<div class="footer_fix">
				<div class="footer_title"><?php echo get_field('над_подвалом', 58) ?></div>
				<div class="footer_main">
					<nav class="footer_menu">
						<?php $menu = wp_get_nav_menu_items(68);?>
						<ul>
							<?php foreach($menu as $item):?>
							<?php if ($item->menu_item_parent == 0):?>
							<li><a href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
							<?php endif;?>
							<?php endforeach;?>
						</ul>
					</nav>
					<div class="footer_logo"><a href="<?php echo $GLOBALS['home_url'];?>"><img src="<?php echo get_field('лого',58); ?>" alt=""></a></div>
					<div class="footer_form">
						<div class="footer_form_title"><?php echo get_field('над_формой',58); ?></div>
							<?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]'); ?>
						
						<div class="footer_form_desc">
							<div class="footer_form_desc_title"><?php echo get_field('под_формой_заголовок',58); ?></div>
							<div class="footer_form_desc_text"><?php echo get_field('под_формой_текст',58); ?></div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</main>
	<script src="<?php echo $GLOBALS['theme_uri']; ?>/js/jquery.cbpFWSlider.min.js"></script>
	<script>$( function() {
				$( '#cbp-fwslider' ).cbpFWSlider();
			} );
	</script>
	<?php wp_footer(); ?>
</body>
</html>
<?php 
//глобальные переменные
$GLOBALS['theme_uri'] = get_template_directory_uri();
$GLOBALS['home_url'] = home_url();

 ?>
 <?php 
//меню
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'topmenu', 'Верхнее меню' );
}

//товар
function product() { ?>

	<div class="product">
		<div class="product_top">
			<a href="<?php the_permalink(); ?>" class="product_img" style="background: url('<?php echo get_field('картинка');?>')no-repeat center/cover;"></a>
			<div class="product_cost">$<?php echo get_field('cost_1');?></div>
			<div class="product_title"><?php the_title();?></div>
			<a href="<?php the_permalink(); ?>" class="product_desc"><?php echo get_field('описание');?></a>
		</div>


		<div class="product_cart_count">
			<div class="product_cart">add to cart<?php echo $GLOBALS['wpshop_obj']->GetGoodWidget();?>
			</div>
		</div>
	</div>
<?php
};
?>


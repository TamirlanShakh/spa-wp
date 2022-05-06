<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo $GLOBALS['theme_uri']; ?>/style.css">
	<title>SoulSpa</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['theme_uri']; ?>/css/component.css" />
	<?php wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['theme_uri']; ?>/js/scripts.js" ></script>
	<script src="<?php echo $GLOBALS['theme_uri']; ?>/js/modernizr.custom.js"></script>
	<script type="text/javascript">
	    var ajaxurl = '<?php echo get_home_url();?>/wp-admin/admin-ajax.php';
	</script>
</head>
<body>
	<main>
		<header>
			<div class="modal">
				<div class="modal_window ">
					<div class="close_modal">x</div>
					<div class="modal_title">ORDER A CALL</div>
					<div class="modal_form">
						<?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]'); ?>
					</div>
				</div>
			</div>
			<div class="header_menu">
				<div class="header_menu_fix">
					<a href="<?php echo $GLOBALS['home_url'];?>" class="header_logo"><img src="<?php echo get_field('лого',58); ?>" alt=""></a>
					<div class="header_menu_reg">
						<?php $menu = wp_get_nav_menu_items(68);?>
						<nav class="header_menu_list">
							<ul>
								<?php foreach($menu as $item):?>
								<?php if ($item->menu_item_parent == 0):?>
								<li><a href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
								<?php endif;?>
								<?php endforeach;?>
							</ul>	
						</nav>
						<div class="header_reg">
							<?php if(is_user_logged_in()): ?>
							<a href="<?php echo home_url()?>/account/?user=<?php echo  get_current_user_id()?>" class="my_account" >my account
							</a>
							<span>//</span>
							<a href="<?php the_permalink(195);?>" class="cart" >cart</a>
							<span>//</span>
							<a href="<?php echo esc_url( wp_logout_url( '/' ));?>" class="cart">exit</a>
							<?php else: ?>
							<a href="<?php echo wp_login_url(); ?>" class="rcl-login">members</a>
							<span>//</span>
							<a href="<?php echo wp_registration_url(); ?>" class="rcl-register">register</a>
							<span>//</span>
							<a href="<?php the_permalink(195);?>" class="cart">cart</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>	
		</header>
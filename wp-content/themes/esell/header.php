<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- BEGIN HEADER -->
	<div id="header">
		<div class="container">
			<div class="row head">
				<div class="col-md-4 alllogo">
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt=""></a>
					<img src="<?php bloginfo('template_directory'); ?>/img/logo2.jpg" alt="">
				</div>
				<div class="col-md-5 text-center">
					<span class="years"><?php echo (date("Y") - 2006); ?> ЛЕТ</span>
					<span class="years2">С <?php echo date("Y") - 11; ?> года на рынке</span>
				</div>
				<div class="col-md-3 text-right call">
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/tel.png" alt=""></a>
					<span class="tel">(234)-456-789</span>
				</div>
			</div>
			<br>
			<div class="row family">
			</div>
		</div>
	<!-- BEGIN TOP NAVIGATION -->		
	<div id="navigation" class="container nav">
    	<div id="navigation-inner" class="clearfix">
			<div class="secondary">		
			<?php /*wp_nav_menu(array('container' => '', 'theme_location' => 'esell-navigation', 'fallback_cb' => 'esell_hdmenu'));*/ ?>
			<?php wp_nav_menu('menu=mainmenu'); ?>
			</div>
		</div>
	</div>
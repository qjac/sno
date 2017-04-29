<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- stylesheets -->
	<link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic|Noto+Serif:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/slicknav/slicknav.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<!-- add the wp_head() hook here as some plugins use it to add css, js... -->
		<?php wp_head(); ?>
</head>

<body>
	<header>

		<a href="<?php echo get_home_url(); ?>">
			<?php the_custom_logo(); ?>
		</a>
		<div id="mobile-nav"></div>
		<nav>
			<?php wp_nav_menu(
					    array(
					      'menu' => 'Primary Navigation',
					      'menu_id' => 'menu',
					      )
					    );?>
		</nav>

		<div class="header-img"	style="background: url(<?php echo esc_url(get_random_header_image() ); ?>) no-repeat center center; background-size: cover;">
		</div>
	</header>
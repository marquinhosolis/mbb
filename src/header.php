<!doctype html>
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165554882-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-165554882-1');
		</script>

		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="language" content="PT-BR">
		<meta content="pt-br" http-equiv="content-language">
		<link rel="stylesheet" href="https://use.typekit.net/kis7oyh.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.flipster.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
		<?php wp_head(); ?> 
	</head>

	<body>
<header class="animated  fadeIn">
	<!-- https://jonsuh.com/hamburgers/ -->
	
	<div class="container">
		<div class="logoHeader">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/mbb-logo.png" alt="MBB Logo">
			</a>
		</div>
		<div class="hamburger hamburger--squeeze">
			<div class="hamburger-box">
			<div class="hamburger-inner"></div>
			</div>
		</div>
		<nav class="desktopMenu">
			<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
		</nav>
	</div>
	
	
</header>
<nav class="mobileMenu">
	<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
</nav>
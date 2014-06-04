<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body <?php body_class(); ?>>

		<div id="wrapper-all">



			<div class="navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a href="<?php echo home_url(); ?>" class="site-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-svg.svg" alt="<?php bloginfo('name'); ?>">
						</a>
					</div>

					<nav class="collapse navbar-collapse navbar-right">
						<?php wp_nav_menu(array(
							// 'theme_location' => 'header-menu',
							'menu_class' => 'nav navbar-nav',
							'walker' => new Walker_Nav_Menu_Bootstrap()
						)); ?>
					</nav>

				</div><!-- container -->
			</div>



			<div class="wrapper-content">
				<div class="container">


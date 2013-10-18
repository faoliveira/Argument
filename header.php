<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icon/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icon/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#2c3036">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/icon/images/win8-tile-icon.png">
		<!-- non-retina iPhone pre iOS 7 -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icon/icon57.png" sizes="57x57">
		<!-- non-retina iPad pre iOS 7 -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icon/icon72.png" sizes="72x72">
		<!-- non-retina iPad iOS 7 -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icon/icon76.png" sizes="76x76">
		<!-- retina iPhone pre iOS 7 -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icon/icon114.png" sizes="114x114">
		<!-- retina iPhone iOS 7 -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icon/icon120.png" sizes="120x120">
		<!-- retina iPad pre iOS 7 -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icon/icon144.png" sizes="144x144">
		<!-- retina iPad iOS 7 -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icon/icon152.png" sizes="152x152">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

				<aside class="sidebar columns fivecol" role="complementary">
				
					<div class="logo">
						<a href="<?php echo home_url(); ?>" rel="nofollow" title="Argument"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" class="logo" alt="Argument"></a>
					</div><!-- END .logo -->
					
					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>
				</aside><!-- END #sidebar -->
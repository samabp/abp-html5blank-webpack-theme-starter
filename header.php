<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta name="keywords" content="<?php if ( have_rows( 'site_keywords', 'option' ) ) : ?><?php while ( have_rows( 'site_keywords', 'option' ) ) : the_row(); ?><?php the_sub_field( 'keywords' ); ?>, <?php endwhile; ?><?php else : ?>Keywords<?php endif; ?>" />
		<meta property="og:title" content="<?php the_field( 'open_graph_title', 'option' ); ?>" />
		<meta property="og:url" content="<?php the_field( 'open_graph_url', 'option' ); ?>" />
		<meta property="og:image" content="<?php if ( get_field( 'open_graph_image', 'option' ) ) { the_field( 'open_graph_image', 'option' ); } ?>" />

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php if ( get_field( 'site_favicon', 'option' ) ) { the_field( 'site_favicon', 'option' ); } ?>" rel="shortcut icon">
		<link href="<?php if ( get_field( 'site_apple_icon', 'option' ) ) { the_field( 'site_apple_icon', 'option' ); } ?>" rel="apple-touch-icon-precomposed">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->

<?php
/**
 *	The template for dispalying Footer.
 *
 *	@package flatpress
 */
?>
<?php flat_hook_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
	<?php flat_hook_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->
	<?php flat_hook_head_bottom(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<?php flat_hook_body_top(); ?>
<header id="new_header" class="gradient">
	<div class="menu_open fa fa-bars"></div><!-- / .menu_open -->
	<?php flat_logo(); ?>
</header><!-- /#new_header  -->
<div id="secondary" class="col-lg-3">
	<?php flat_hook_header_before(); ?>
	<header id="masthead" class="site-header" role="banner">
		<?php flat_hook_header_top(); ?>
		<button type="button" class="btn btn-link hidden-lg toggle-sidebar" data-toggle="offcanvas" aria-label="Sidebar"><i class="fa fa-gear"></i></button>
		<button type="button" class="btn btn-link hidden-lg toggle-navigation" aria-label="Navigation Menu"><i class="fa fa-bars"></i></button>
		<nav id="site-navigation" class="navigation main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container' => false ) ); ?>
		</nav>
		<?php flat_hook_header_bottom(); ?>
	</header>
	<?php flat_hook_header_after(); ?>

	<div class="sidebar-offcanvas">
		<?php get_sidebar(); ?>
	</div>
</div>
<div id="page">
	<div class="container">
		<div class="row row-offcanvas row-offcanvas-left">
			

			<?php flat_hook_content_before(); ?>
			<div id="primary" class="content-area col-lg-9" itemprop="mainContentOfPage">
				<?php flat_hook_content_top(); ?>
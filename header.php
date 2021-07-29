<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_BBLB_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<?php wp_body_open(); ?>
<div class="scroll-up" style="display: block;">
	<a href="#top">
		<i class="fa fa-angle-up"></i>
	</a>
 
</div>
	<nav id="mmobile-nav" class="mm-menu hidden-md hidden-lg mm-menu_offcanvas mm-menu_theme-white" style="display: none">
		<div class="mm-panels">
		<div id="menu-mobile-menu" class="mm-panel mm-panel_has-navbar mm-panel_opened">
			<div class="mm-navbar">
				<a class="mm-navbar_title">Menu</a>
			</div>

					<?php
			    		wp_nav_menu(array(
							'container' => '',
							'menu_class' => 'mm-listview',
							'menu_id' => '',
							'theme_location' => 'mobile-main-menu',
							'walker' => new Walker_Nav_Mobile_Menu));

						?>

		</div> <!--mm-panel-->

          			<div id="mm-1" class="mm-panel mm-hidden mm-panel_has-navbar">
          				<div class="mm-navbar">
          					<a class="mm-btn mm-btn_prev mm-navbar_btn" href="#menu-mobile-menu">
          						
          					</a>
          					<a class="mm-navbar_title" href="#menu-mobile-menu"> Phần Mềm Kinh Doanh </a>
          				</div>

						<?php
			    		wp_nav_menu(array(
							'container' => '',
							'menu_class' => 'sub-menu mm-listview',
							'menu_id' => '',
							'theme_location' => 'mm-1-menu',
							'walker' => new Walker_Nav_Mobile_mm_Menu));

						?>

          			</div> <!--#mm-1-->
          			<div id="mm-2" class="mm-panel mm-hidden mm-panel_has-navbar">
          				<div class="mm-navbar">
          					<a class="mm-btn mm-btn_prev mm-navbar_btn" href="#menu-mobile-menu">
          						
          					</a>
          					<a class="mm-navbar_title" href="#menu-mobile-menu"> Cách Kiếm Tiền Online </a>
          				</div>
     					<?php
			    		wp_nav_menu(array(
							'container' => '',
							'menu_class' => 'sub-menu mm-listview',
							'menu_id' => '',
							'theme_location' => 'mm-2-menu',
							'walker' => new Walker_Nav_Mobile_mm_Menu));

						?>



          			</div><!--#mm-2-->

		</div> <!--mm-panels-->
	</nav>





	<div class="mm-page_blocker mm-slideout"></div>
	<div id="mm-0" class="mm-page mm-slideout"> <!--end of after footer-->
	<div id="page" class="mm-page"> <!--end of footer-->
	<div class="hidden-md hidden-lg visible-xs visible-sm mobile-trigger-wrapper ">
		<div class="mobile-trigger-wrap">
		<button class="hamburger hamburger-squeeze" type="button" arial-label="Open Menu">
			<span class="hamburger-box"></span>
			<span class="hamburger-inner"></span>
		</button>
		<div class="col">
			<a href="#" alt="Vu Ba Loi" title="Vu Ba Loi">
			<img src="http://localhost/vubaloi/wp-content/uploads/2021/04/123-1.png" width="40" height="60" class="img-fluid mobile-logo" alt="Vu Ba Loi Logo">
			</a>
		</div> <!--col-->
		</div> <!--mobile-trigger-wrap-->
		</div> <!--visible-sm-->


	
	<header class="header">
	<div class="header-top-bar-wrap hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-7 header-top-bar-left"></div>
				<div class="col-xs-12 col-md-5 header-top-bar-right">
			<div id="search-4">

				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label>
						<input class="search-field" name="s" placeholder="Tìm kiếm..." type="search" value="<?php echo get_search_query(); ?>">
					</label>
					<button type="submit" class="search-submit btn btn-primary">
						<i class="fas fa-search"></i>
					</button>
				</form>

			</div> <!--search4-->
			<div class="social-media-wrapper">

				<div class="social-icons-wrap">

				 <a href="https://www.facebook.com/Vubaloidotcom" class="facebook-icon">
				 	<em class="fab fa-facebook-f fa-2x">
				 	</em>
				 </a>
				<a href="https://www.facebook.com/Vubaloidotcom" class="instagram-icon">
				 	<em class="fab fa-instagram fa-2x">
				 	</em>
				 </a>
				 <a href="https://www.facebook.com/Vubaloidotcom" class="twitter-icon">
				 	<em class="fab fa-twitter fa-2x">
				 	</em>
				 </a>
				 <a href="https://www.facebook.com/Vubaloidotcom" class="linkedin-icon">
				 	<em class="fab fa-linkedin-in fa-2x">
				 	</em>
				 </a>
				 <a href="https://www.facebook.com/Vubaloidotcom" class="rss-icon">
				 	<em class="fas fa-rss fa-2x">
				 	</em>
				 </a>

				</div> <!--social icon wrap--> 	 
			</div> <!--social media wrapper-->
		</div> <!--header-top-bar-right-->
		</div> <!--row-->
		</div> <!--container-->
		</div> <!--header top bar wrap-->
		<div class="header-inner hidden-xs hidden-sm" style="position: relative;"> <!--div no 000-->

			<div class="container"> <!--div no 00-->
				<div class="row"> <!--div no 0-->
				<div class="col-xs-12 col-sm-6 offset-sm-3 col-lg-2 offset-lg-0 header-left">  <!--div no 1-->
				<a href="http://localhost/vubaloi/" alt="Vu Ba Loi" title="Vu Ba Loi">
				<img src="http://localhost/vubaloi/wp-content/uploads/2021/04/123-1.png" class="img-fluid logo pull-left" alt="Vu Ba Loi Logo">
				</a>
				</div> <!--close div no 1-->
			    <div class="col-xs-12 col-md-10 header-right"> <!--div no 2-->
			    <div class="header-navigation hidden-xs hidden-sm">  <!--div no 3-->
			    	<div class="row"> <!--div no 4-->
			    		<div class="col header-navigation"> <!--div no 5-->
			    		<?php
			    		wp_nav_menu(array(
							'container' => 'nav',
							'container_class' => 'menu menu-main menu-horizontal menu-skin-minimal',
							'theme_location' => 'header-main-menu',
							'menu_class' => 'menu-nav',
							'walker' => new Walker_Nav_Primary));

						?>
		</div> <!--close div no 5-->
	</div><!--close div no 4-->
</div><!--close div no 3-->
</div><!--close div no 2-->
</div><!--close div no 0-->
</div><!--close div no 00-->		
</div><!--close div no 000-->		
</header>


		

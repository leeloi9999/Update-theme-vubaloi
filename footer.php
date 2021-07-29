<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_BBLB_Theme
 */

?>

	<footer id="footer" class="site-footer">
		<div class="footer-text-wrap">
		<div class="container">
				<div class="row footer-text">
					<div class="footer-left col-xs-12 col-md-5">
						<div id="media_image_footer">
							<a href="/">
								<img width="49" height="64" src="http://localhost/vubaloi/wp-content/uploads/2021/06/logo_remove_text.png"
								class="image" alt="Vu Ba Loi Logo" title="Vu Ba Loi Logo">
							</a>
						</div> <!-- #media_image_footer -->
						<div id="nav_menu-3">
							<div class="menu-footer-privacy-and-terms-container">
								<ul id="menu-footer-privacy-and-terms" class="menu">
									<li class="menu-item menu-item-privacy-policy">
										<a href="/"> Chính Sách Riêng Tư</a>
									</li>
									<li class="menu-item">
										<a href="/"> Điều Khoản Dịch Vụ</a>
									</li>
								</ul>	
							</div><!-- .menu-footer-privacy-and-terms-container -->							
						</div> <!-- .nav_menu-3 -->
						
				<?php
				if ( ! is_active_sidebar( 'sidebar-2' ) ) {
					return;
				}
 				dynamic_sidebar( 'sidebar-2' ); ?>

					</div> <!-- .footer-left -->

				<div class="footer-right col-xs-12 col-md-7">
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

				<div id="nav_menu-4">
					<div class="menu-footer-main-menu-container">

							<?php
			    		wp_nav_menu(array(
							'container' => '',
							'container_class' => '',
							'container_id' => '',
							'theme_location' => 'footer-main-menu',
							'menu_class' => 'menu',
							'menu_id' => 'menu-footer-main-menu',
							));

							?>
					</div> <!-- .menu-footer-main-menu-container -->
				</div> <!-- #nav_menu-4 -->

				</div> <!-- .footer-right -->

			</div>	<!-- .row footer-text -->
		</div><!-- .container -->
	</div> <!-- .footer-text-wrap -->

	</footer><!-- #footer-->


<?php wp_footer(); ?>


</body>

</html>

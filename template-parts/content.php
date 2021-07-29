<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_BBLB_Theme
 */

?>

	<div class="single-article-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 itemprop="headline" class="page-title">', '</h1>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="single-article-featured-image">

				<img width="800" height="500" src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="<?php the_title(); ?>" itemprop="image" class="img-fluid">

			</div>	


			<span class="last-updated">
				<?php
				_e( 'Last Updated On ', 'wp_bblb' );  the_modified_date() ;
				echo ' bởi Vũ Bá Lợi';
				?>
			</span><!-- .last-updated -->
		<?php endif; ?>
	</div><!-- .single-article-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-bblb' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bblb' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	
	<div class="single-article-footer">
		<hr>
				<span class="last-updated">
				<?php
				_e( 'Last Updated On ', 'wp_bblb' );  the_modified_date() ;
				echo ' bởi Vũ Bá Lợi';
				?>
			</span><!-- .last-updated -->

	</div>

	<div class="entry-author-box row">
	<figure class="entry-author-thumbnail col-xs-12 col-sm-3">
		<?php echo get_avatar('leeloi9999@gmail.com',200); ?>
	</figure>
	<div class="entry-author-desc col-xs-12 col-sm-9">
	<h4 class="entry-author-title">
	<?php	the_author(); ?>
	</h4>
	<?php echo	the_author_description(); ?>
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
	</div> <!--entry-author-desc col-xs-12 col-sm-9-->


	</div> <!--entry-author-box row-->
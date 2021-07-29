<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_BBLB_Theme
 */

get_header();
?>

<div role="main" id="main">

<section id="content">

<div class="container">
	<div class="row">
		<div class="page-content col">
			<div class="row">
			<div class="content-wrap col-xs-12 col-lg-8">
				
				<h1 class="page-title">
					<?php
    			$the_query = new WP_Query(array(
       			'posts_per_page' => 2,
       			'paged' => $paged
   				)); 
   				?>
				<?php
				/* translators: %s: search query. */
				$allsearch = new WP_Query("s=$s&showposts=0"); 
				printf(esc_html__($allsearch->found_posts . ' Search Results for "%s"', 'wp-bblb' ), '<span>' . get_search_query() . '</span>' );

				?>
				</h1>
				<?php
				  
				
		if (have_posts() ) : ?>

				<?php
			/* Start the Loop */
			?>

			<div class="article-loop row">
			<?php
			while (have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;



			else :
				?>
				<div class="article-loop row">
					<?php
			get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
				


				</div> <!-- article-loop row-->	
					<?php
					add_action( 'init', 'search_filter' );
					vubaloi_custom_pagination();

					wp_reset_postdata();
					?>

			</div> <!-- content-wrap col-xs-12 col-lg-8-->
				<div class="sidebar col-xs-12 col-lg-4 sidebar-right">
				<div class="blog-sidebar-inner" id="blog-sidebar">
				<?php
				if ( ! is_active_sidebar( 'sidebar-3' ) ) {
					return;
				}
 				dynamic_sidebar( 'sidebar-3' ); 
 				?>
		
				</div>  <!-- page-sidebar-inner -->

				</div><!-- sidebar col-xs-12 col-lg-4 -->
				</div> <!-- row-->
				</div> <!-- page-content-col-->
	</div> <!-- row-->
</div>  <!-- container-->

</section>

</div> <!-- main-->

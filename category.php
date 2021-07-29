<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_BBLB_Theme
 */

get_header();
?>

	<div role="main" id="main" class="sidebar-right">
		<section id="content">
			<div class="container">
				<div class="page-content col">
				<div class="row">
				<div class="content-wrap col-xs-12 col-lg-8">

					<h1 class="page-title">
<?php

$category=get_category(get_query_var('cat'));
if (!empty( $category)) {
  $name = $category->name;
  echo $name;
}

?>
</h1>
<div class="archive-description"><?php the_archive_description( '<div class="taxonomy-description">', '</div>' );?></div>

<?php
	
    $the_query = new WP_Query(array(

       'posts_per_page' => 2,
       'paged' => $paged

   )); 
    	?>
    	<div class="article-loop row">
    	<?php

		if ( have_posts() ):
	

		while ( have_posts() ):
			
				the_post();
				?>
		
			
				<article class="col-xs-12 col-md-6 article">
					<div class="article-row">
			<div class="article-thumbnail col-xs-12">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<img width="800" height="500" src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="<?php the_title(); ?>" itemprop="image" class="img-fluid">
					<meta itemprop="url" content="<?php echo get_the_post_thumbnail_url(); ?>">
					<meta itemprop="width" content="800">
					<meta itemprop="height" content="500">
				</a>
			</div>

			<div class="col-xs-12 article-content">
				<div class="article-header">
					<div class="article-categories">
						<a href="<?php the_permalink(); ?>" title="<?php echo strip_tags($name); ?>" class="article-category"><?php echo strip_tags($name); ?></a>
					</div>

					<h2 class="article-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<span itemprop="headline"><?php the_title(); ?></span>
						</a>
					</h2>

				</div> <!-- article_header-->
			</div> <!-- article_content-->

			</div><!-- article_row-->
			</article><!-- article-->

			<?php

			endwhile;

			

			

		endif;

		
		?>
	</div><!-- article_loop row-->
	<?php
	vubaloi_custom_pagination();

wp_reset_postdata();
?>
	</div> <!-- content-wrap col-xs-12 col-lg-8 -->

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





			</div><!-- row-->
			</div><!-- page-content col-->
			</div><!-- container-->
			</section>
			</div><!-- role-main -->

<?php

get_footer();
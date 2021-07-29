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
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

	</div> <!-- content-wrap col-xs-12 col-lg-8 -->

	<div class="sidebar col-xs-12 col-lg-4 sidebar-right">
	<div class="blog-sidebar-inner" id="blog-sidebar">


		<?php
		get_sidebar('sidebar-1'); 
		?>
			
		
	</div>  <!-- page-sidebar-inner -->

	</div><!-- sidebar col-xs-12 col-lg-4 -->
	</div><!-- page-content -->
	</div><!-- page-content -->
	</div><!-- container -->
		</section>
	
	<section id="content" class="related-footer">
		<div class="container">
			<div class="page-content col">
				<div class="row">
					<div class="related-articles-wrapper" id="related-articles-wrapper">
						<div class="related-articles row">
							<div class="col-12 related-articles-heading">
								<div class="related-articles-heading" id="text-12">
									<div class="col-12">
										<div class="textwidget">
											<h3> Bài Viết Liên Quan </h3>
										</div> <!-- textwidget -->
									</div> <!-- col-12 -->
								</div> <!-- related-articles-heading, text-12 -->
							</div> <!-- col-12, related-articles-heading -->
	<?php
	$post_not_in_id = array();
			array_push( $post_not_in_id, get_the_ID());        
        		
			  $categories = get_the_category( ) ? get_the_category( ) : array();
			  $tags = get_the_tags( ) ? get_the_tags( ) : array();
			  $cat_id_list =array();
			  foreach( $categories as $cat){
			  	array_push ($cat_id_list, $cat->term_id);
			  }


			  $tag_id_list =array();
			  foreach( $tags as $tag){
			  	array_push ($tag_id_list, $tag->term_id);
			  }


			$rl_posts_query = new WP_Query(array(

				'post_type' => 'post',
				'posts_per_page' => 4,
				'post__not_in'   => $post_not_in_id,
				'tax_query'      => array(
					'relation'   => 'OR',
					array(
						'taxonomy' => 'category',
						'field'    => 'id',
						'terms'     => $cat_id_list,
						'include_children' => true,
						'operator'        => 'IN' 

					),
					array(

						'taxonomy' => 'tag',
						'field'    => 'id',
						'terms'     => $tag_id_list,
						'include_children' => true,
						'operator'        => 'IN' 

					)
				)
			));
        		
        		 if( $rl_posts_query->have_posts() )
        {

            
            while ($rl_posts_query->have_posts() )
            {
                $rl_posts_query->the_post();
               
                ?>
                	<article class="col-xs-12 col-md-6 col-lg-3 article">
            		<div class="article-row">

	                <div class="article-thumbnail col-xs-12">
	                	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	                	<img width="800" height="500" src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="<?php the_title(); ?>" itemprop="image" class="img-fluid">
	                	</a>
	                </div>
	                <div class="col-xs-12 article-content">
	                	<div class="article-header">
	                	<?php	if (has_category() ) {
						$cat = get_the_category();
						foreach ( $cat as $p_cat ) {
						if ($p_cat->category_parent == 0) {
						$p_cat->cat_ID;
						}
						}
	                		?>
	                		<div class="article-category">
	                			<a href="<?php echo get_category_link($p_cat); ?>" title="<?php echo $cat[0]->name; ?>" class="article-category"><?php echo $cat[0]->name; ?></a>
	                		</div>
	                		<?php
	                		}
	                		?>	
	                		<h2 class="article-title">
	                			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	                				<span itemprop="headline"><?php the_title(); ?></span>
	                			</a>	
	                		</h2>
	                	</div>
	                </div>
	                </div>
	                </article>
                <?php
            }
        }
        		wp_reset_postdata();
      ?>					
	
	</div> <!-- related-articles row -->

					</div> <!-- related-articles-wrapper -->
				</div> <!-- row -->
			</div> <!-- page-content col -->
		</div> <!-- container -->
	</section> <!-- related-footer -->
	</div><!-- role-main -->

<section id="content" class="comments-wrapper">
	<div class="container">
		<div class="page-content col">
			<div class="row">

	<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>


			</div> <!-- row -->
		</div> <!-- page-content col -->
	</div> <!-- container -->
</section> <!-- comment wrapper -->		
<?php

get_footer();


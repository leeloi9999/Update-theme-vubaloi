<?php 

$postcat = get_the_category_list( '|','',$post->ID );

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
		<a href="<?php the_permalink(); ?>" title="<?php echo strip_tags($postcat); ?>" class="article-category"><?php echo strip_tags($postcat); ?></a>
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





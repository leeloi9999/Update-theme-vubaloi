<?php

get_header();
?>

	<div role="main" id="main">
		<section id="content">
			<div class="container">
				<div class="page-content col">
					<div class="content-wrap col">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
		        	</div> <!-- .content-wrap col -->
				</div> <!-- .page-content col -->
			</div> <!-- .container -->
		</section>
	</div><!-- #main -->

<?php
get_footer();


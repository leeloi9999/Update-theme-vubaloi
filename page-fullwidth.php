<?php

get_header();
?>
<style type="text/css">
	
.uagb-column__inner-wrap {
    padding: 10px;
}
.wp-block-uagb-advanced-heading .uagb-desc-text {
    text-align: left;
}
.wp-block-uagb-advanced-heading .uagb-heading-text {
    text-align: left;
    margin-bottom: 25px;
}
.uagb-section__inner-wrap {
    max-width: 1170px;
}
.uagb-columns__wrap {
    padding-top: 50px;
    padding-bottom: 50px;
    padding-left: 20px;
    padding-right: 20px;
}
.wp-block-image.shadow img {
    -webkit-box-shadow: 0 0 30px 10px rgba(72,139,201,.3);
    -moz-box-shadow: 0 0 30px 10px rgba(72,139,201,.3);
    box-shadow: 0 0 30px 10px rgba(72,139,201,.3);
    margin: 30px;
}
.page-template-page-full-width .page-content {
    padding-top: 0!important;
    padding-bottom: 0;
}

.uagb-block-df200c95.uagb-section__wrap {
    padding-top: 100px;
    padding-bottom: 100px;
    padding-left: 20px;
    padding-right: 20px;
    max-width: 100%;
    background-image: url(http://localhost/vubaloi/wp-content/uploads/2021/07/Design-picture-1.jpg);
    background-position: top center;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-size: cover;
}
@media screen and (max-width: 991px){
	.hide-background-mobile{
    background: #f7fafc!important;
}
</style>
	<div role="main" id="main">
		<section id="content">
				<div class="page-content col">
					<div class="content-wrap">
		<?php
		while ( have_posts() ) :
			the_post();
		the_content();

		endwhile; // End of the loop.
		?>
	        	</div> <!-- .content-wrap col -->
				</div> <!-- .page-content-->

		</section>
	</div><!-- #main -->

<?php
get_footer();

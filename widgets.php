<?php

/**
 * 
 */

class Class_Widget_Vubaloi_Profile extends WP_Widget {

//setup the widget name,description, etc...

	
	public function __construct()
	{
		$widget_ops = array(
			'classname' => 'Vubaloi_profile',
			'description' => 'Custom Vubaloi_Profile',
			 );

		parent::__construct( 'vubaloi_profile', 'Vubaloi Profile', $widget_ops );
	}

	//back-end display of widget
	public function form ($instance) {
		
		$image_url = esc_url( $instance['image_url'] );
		$title      = esc_attr( $instance['title'] );
		$message    = esc_attr( $instance['message'] );
		$button_title    = esc_attr( $instance['button_title'] );

		?>
	<p>
        <label for="<?php echo $this->get_field_id('image_url'); ?>"><?php _e('Image_URL:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('image_url'); ?>" name="<?php echo $this->get_field_name('image_url'); ?>" type="url" value="<?php echo $image_url; ?>" />
    </p>

    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
    </p>

    <p>
        <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Simple Message'); ?></label> 
        <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>"><?php echo $message; ?></textarea>
    </p>
     <p>
        <label for="<?php echo $this->get_field_id('button_title'); ?>"><?php _e('Button Title:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('button_title'); ?>" name="<?php echo $this->get_field_name('button_title'); ?>" type="text" value="<?php echo $button_title; ?>" />
    </p>

		<?php
	}

	//front-end display of widget
	public function widget ($args, $instance) {
		extract( $args );
	

		$image_url  = $instance['image_url'];
		$title     = $instance['title'];
		$message    = $instance['message'];
		$button_title   = $instance['button_title'];

		
		echo $before_widget;

		?>
		
		<div class="textwidget">		
		<img class="image attachment-full aligncenter size-full lazyloaded" style="max-width: 100%; height: auto;" title="Xin Chào, Tôi là Vũ Bá Lợi." src="<?php echo $image_url;?>" alt="Vu Ba Loi Sidebar" width="360" height="360" data-srs="<?php echo $image_url;?>"></img>
			
	<?php
     
    if ( $title ) {
        echo $before_title . $title . $after_title;
    }
                         
    echo $message;
    ?>

    <a href="/my-story" target="" class="btn btn-primary"><?php echo $button_title;?> </a>
    </div>


    <?php
    
    echo $after_widget;

    ?>
     
<?php

	}
	public function update( $new_instance, $old_instance ) {        
     
    $instance = $old_instance;
    $instance['image_url'] = strip_tags( $new_instance['image_url'] );   
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['message'] = ( $new_instance['message'] );
    $instance['button_title'] = ( $new_instance['button_title'] );
     
    return $instance;
     
}

}


class Class_Widget_Disclosure extends WP_Widget {

//setup the widget name,description, etc...

	
	public function __construct()
	{
		$widget_ops = array(
			'classname' => 'Disclosure',
			'description' => 'Custom Disclosure',
			 );

		parent::__construct( 'disclosure_message', 'Disclosure Affiliate', $widget_ops );
	}

	//back-end display of widget
	public function form ($instance) {
		
		$disclosure_message    = esc_attr( $instance['disclosure_message'] );
	

		?>


    <p>
        <label for="<?php echo $this->get_field_id('disclosure_message'); ?>"><?php _e('Disclosure Affiliate Message'); ?></label> 
        <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('disclosure_message'); ?>" name="<?php echo $this->get_field_name('disclosure_message'); ?>"><?php echo $disclosure_message; ?></textarea>
    </p>

		<?php
	}

	//front-end display of widget
	public function widget ($args, $instance) {
		extract( $args );
	
		$disclosure_message    = $instance['disclosure_message'];
		

		?>
		
	
			
	<?php
     
    echo $before_widget; 
    	?>
		
		<div class="textwidget">		

			
	<?php

    echo $disclosure_message;
    ?>


    </div>
    <?php

    echo $after_widget;
   




	}
	public function update( $new_instance, $old_instance ) {        
     
    $instance = $old_instance;

    $instance['disclosure_message'] = ( $new_instance['disclosure_message'] );
     
    return $instance;
     
}

}


class Class_Widget_Nav_Menu_Sidebar extends WP_Widget {

//setup the widget name,description, etc...

	
	public function __construct()
	{
		$widget_ops = array(
			'classname' => 'Nav_Menu_Sidebar',
			'description' => 'Custom Nav Menu Sidebar',
			 );

		parent::__construct( 'nav_menu_sidebar', 'Nav Menu Sidebar', $widget_ops );
	}

	//back-end display of widget
	public function form ($instance) {
		
		$nav_menu_sidebar_title = esc_attr( $instance['nav_menu_sidebar_title'] );
	

		?>


     <p>
        <label for="<?php echo $this->get_field_id('nav_menu_sidebar_title'); ?>"><?php _e('Title Menu Sidebar:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('nav_menu_sidebar_title'); ?>" name="<?php echo $this->get_field_name('nav_menu_sidebar_title'); ?>" type="text" value="<?php echo $nav_menu_sidebar_title; ?>" />
    </p>

		<?php
	}

	//front-end display of widget
	public function widget ($args, $instance) {
		extract( $args );
	
		$nav_menu_sidebar_title = $instance['nav_menu_sidebar_title'];
		
     
    echo $before_widget; 
    	
		
		 if ( $nav_menu_sidebar_title ) {
        echo $before_title . $nav_menu_sidebar_title . $after_title;
        echo
        
			  wp_nav_menu(array(
				'container' => 'div',
				'container_class' => 'menu-sidebar-categories-container',
				'menu_id' => 'menu-sidebar-categories',
				'menu_class' => 'menu',
				'theme_location' => 'sidebar-menu'
				));

						
    }     		
   
   
    echo $after_widget;
	}
	public function update( $new_instance, $old_instance ) {        
     
    $instance = $old_instance;

    $instance['nav_menu_sidebar_title'] = ( $new_instance['nav_menu_sidebar_title'] );
     
    return $instance;
     
}

}


class Class_Widget_related_articles extends WP_Widget {

//setup the widget name,description, etc...

	
	public function __construct()
	{
		$widget_ops = array(
			'classname' => 'Related_Articles',
			'description' => 'Custom Related Articles',
			 );

		parent::__construct( 'related_articles', 'Related Articles Sidebar', $widget_ops );
	}

	//back-end display of widget


	//front-end display of widget
	public function widget ($args, $instance) {
		extract( $args );
	
		
     
    echo $before_widget; 
    	


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
				'posts_per_page' => 5,
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
            echo '<div id="related-articles" class="related-articles-wrapper"><h4>Bài viết liên quan</h4><ul class="related-articles-list">';
            
            while ($rl_posts_query->have_posts() )
            {
                $rl_posts_query->the_post();
                ?>
	                <li class="related-page">
	                	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	                </li>
                <?php
            }
            echo'</ul>';
            echo'</div>';
        }
        		wp_reset_postdata();	
  
    echo $after_widget;
	}
}


class Class_Widget_table_Of_content_Menu_Sidebar extends WP_Widget {

//setup the widget name,description, etc...

	
	public function __construct()
	{
		$widget_ops = array(
			'classname' => 'Table_Of_Content',
			'description' => 'Table Of Content Sidebar',
			 );

		parent::__construct( 'table_of_content_sidebar', 'Table Of Content Sidebar', $widget_ops );
	}


	//front-end display of widget
	public function widget ($args, $instance) {
		extract( $args );
	

		  
    echo $before_widget;

    echo '<div id="related-articles" class="related-articles-wrapper">';
    $content = get_the_content();

    	
	$paragraphs_first = explode("<nav>",$content);
	$paragraphs_final = explode("</nav>",$paragraphs_first[1]);

	echo $paragraphs_final[0];

   	echo'</div>';
    echo $after_widget;
	}


}

class Class_Widget_Footer extends WP_Widget {

//setup the widget name,description, etc...

	
	public function __construct()
	{
		$widget_ops = array(
			'classname' => 'Footer_Sidebar',
			'description' => 'Custom Footer Sidebar',
			 );

		parent::__construct( 'footer_sidebar', 'Footer Sidebar', $widget_ops );
	}

	//back-end display of widget
	public function form ($instance) {
		
		$footer_sidebar_content = esc_attr( $instance['footer_sidebar_content'] );
	

		?>


    <p>
        <label for="<?php echo $this->get_field_id('footer_sidebar_content'); ?>"><?php _e('Footer Sidebar Content:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('footer_sidebar_content'); ?>" name="<?php echo $this->get_field_name('footer_sidebar_content'); ?>" type="text" value="<?php echo $footer_sidebar_content; ?>" />
    </p>

		<?php
	}

	//front-end display of widget
	public function widget ($args, $instance) {
		extract( $args );
	
		$footer_sidebar_content  = $instance['footer_sidebar_content'];
		echo $before_widget;

		?>		
		<div class="textwidget">		
		<p><?php echo $footer_sidebar_content; ?></p>
		</div>
			
	<?php
	echo $after_widget;
	}
	public function update( $new_instance, $old_instance ) {        
     
    $instance = $old_instance;

    $instance['footer_sidebar_content'] = ( $new_instance['footer_sidebar_content'] );
     
    return $instance;
     
}

}



class Class_Widget_categories_Sidebar extends WP_Widget {

//setup the widget name,description, etc...

	
	public function __construct()
	{
		$widget_ops = array(
			'classname' => 'Categories_Sidebar',
			'description' => 'Custom Categories Sidebar',
			 );

		parent::__construct( 'categories_sidebar', 'Categories Sidebar', $widget_ops );
	}

	//back-end display of widget
	public function form ($instance) {
		
		$categories_sidebar_title = esc_attr( $instance['categories_sidebar_title'] );
	

		?>


     <p>
        <label for="<?php echo $this->get_field_id('categories_sidebar_title'); ?>"><?php _e('Categories Sidebar:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('categories_sidebar_title'); ?>" name="<?php echo $this->get_field_name('categories_sidebar_title'); ?>" type="text" value="<?php echo $categories_sidebar_title; ?>" />
    </p>

		<?php
	}

	//front-end display of widget
	public function widget ($args, $instance) {
		extract( $args );
		
	
		$categories_sidebar_title = $instance['categories_sidebar_title'];
		
     echo '<div class="blog-sidebar-inner" id="blog-sidebar-inner-sticky">';
    echo $before_widget; 
    	
		
		 if ( $categories_sidebar_title ) {
        echo $before_title . $categories_sidebar_title . $after_title;
        echo
        
			  wp_nav_menu(array(
				'container' => 'div',
				'container_class' => 'menu-sidebar-categories-container',
				'menu_id' => 'menu-sidebar-categories',
				'menu_class' => 'menu',
				'theme_location' => 'sidebar-menu'
				));				
    }     		
   
   
    echo $after_widget;
    echo'</div>';
	}
	public function update( $new_instance, $old_instance ) {        
     
    $instance = $old_instance;

    $instance['categories_sidebar_title'] = ( $new_instance['categories_sidebar_title'] );
     
    return $instance;
     
}

}


add_action('widgets_init', function() {
	register_widget('Class_Widget_Vubaloi_Profile');
	register_widget('Class_Widget_Disclosure');
	register_widget('Class_Widget_Nav_Menu_Sidebar');
	register_widget('Class_Widget_related_articles');
	register_widget('Class_Widget_table_Of_content_Menu_Sidebar');
	register_widget('Class_Widget_Footer');
	register_widget('Class_Widget_categories_Sidebar');

});












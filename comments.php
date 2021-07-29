<?php
function wp_bblbshow_comments( $comment, $args, $depth){
    // echo '<pre>';
    // var_dump($comment);
    // echo '</pre>';
    global $count;
    $count++;
    if($comment->comment_approved == "1"):

?>
<li <?php comment_class( 'count-'.$count ); ?> id="commnent-"<?php comment_ID(); ?>  >
	<div class="comment-header">
    <div class="author-img pull-left">
        <?php echo get_avatar( $comment, 65 ); ?>
    </div>
    	<div class="comment-author-content">
        		<h5 class="text-capitalize"><?php comment_author($comment); ?></h5>
        		<h6><?php comment_date( 'M d Y', $comment ); ?></h6>
        </div>
     </div>
        <p>
            <?php echo nl2br(get_comment_text($comment)); ?>
        </p>
        
        <?php 
            comment_reply_link( 
                array_merge(
                    $args, 
                    array('depth' =>  $depth, 'max_depth' => $args['max_depth'])
                )
            );
        ?>
        
    
</li>
<?php
    endif;
}
?>

<div class="comment-area">
    <!-- form  -->
    <div class="comment-box" id="respond">
        <?php 
        comment_form( array(
            'comment_field' => '<textarea class="comment-field" name="comment" rows="3" placeholder="Comments"></textarea>',
            'fields'    => array(
                'author'    => '<div class="row">
                                    <div class="comment-input col-xs-12 col-sm-6">
                                        <input type="text" name="author" placeholder="Your Name" />
                                    </div>',
                'email'     =>      '<div class="comment-input col-xs-12 col-sm-6">
                                        <input type="email" name="email" placeholder="Email" />
                                    </div>
                                </div>'
            ),
            'class_form'    =>  'custom-input',
            'submit_button' =>  '<button class="btn" type="submit" name="submit">'.__('Submit comment','wp-bblb').'</button>',
            'title_reply_before'    => '<div class="comment-title">
                                            <h5 class="reply-comment">',
            'title_reply'           => __('Leave a comment', 'wp-bblb'),
            'title_reply_after'     => '</h5>
                                        </div>'
        ));
        ?>
    </div>
    <!-- end form  -->
    <div class="comment-list">
        <div class="comment-title">
            <h5 class="comment-count">
            <?php
            comments_number(
                __('No comments','wp-bblb'),
                __('One comment','wp-bblb'),
                __('% comments','wp-bblb')
            );
            ?>
            </h5>
        </div>
        <ul>
            <?php 
            wp_list_comments( array('callback' => 'wp_bblbshow_comments'));
            ?>

        </ul>
        <?php 
        if(get_comment_pages_count( )>1 && get_option('page_comments')):
        ?>
        <div class="clear"></div>
        <nav id="comment-nav">
            <div class="nav-previous float-left"><?php previous_comments_link( __('<< Previous','wp-bblb') ); ?></div>
            <div class="nav-previous float-right"><?php next_comments_link( __('Next >>','wp-bblb') ); ?></div>
        </nav>
        <?php 
        endif;
        ?>

        <?php 
        if(!comments_open( )):
        ?>
        <h4 class="title section textcenter">
        <?php _e('We are sorry. Comments are closed.' , 'wp-bblb'); ?>
        </h4>
        <?php
        endif;
        ?>
    </div>

</div>
<!-- /.Comments Area End -->
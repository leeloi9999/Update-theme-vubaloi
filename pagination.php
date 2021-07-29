<?php
if(!function_exists('vubaloi_custom_pagination')){
   function vubaloi_custom_pagination( WP_Query $wp_query = null, $echo = true ) {
	if ( $wp_query === null  ) {
          global $wp_query;
	}


	$pages = paginate_links(array(
	   'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
	   'format'       => '?paged=%#%',
	   'current'      => max( 1, get_query_var( 'paged' ) ),
	   'total'        => $wp_query->max_num_pages,
	   'type'         => 'array',
	   'show_all'     => false,
	   'end_size'     => 0,
	   'mid_size'     => 2,
	   'prev_next'    => true,
	   'prev_text'    => '«',
	   'next_text'    => '»',
	   'add_args'     => false,
	   'add_fragment' => ''
	   )
        );

        if ( is_array( $pages ) ) {
          $pagination = '<div class="pagination-links"><ul class="pagination">';
          foreach ($pages as $page) {
             $pagination .= '<li>';
             if(strpos($page,'current')!== false){
                 if(get_query_var('paged') > 1){
                    $pagination .= '<span aria-current="page" class="page-numbers current">'. get_query_var('paged') .'</span>';
                 }else{
                 $pagination .= '<span aria-current="page" class="page-numbers current">'. 1 .'</span>';
                 }
             }else{
                 $pagination .= $page;
             }
                $pagination .= '</li>';
                
	   }
	   $pagination .= '</ul></div>';
           if($echo === true){
              echo $pagination;
           }else{
              return $pagination;
           }
	}
	return null;
   }
}


<?php

/* Primary Menu*/
class Walker_Nav_Primary extends Walker_Nav_Menu {
    public $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    public $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id',
    );
    public function start_lvl( &$output, $depth = 0, $args = null ) {    
        $classes = array( 'menu-submenu menu-submenu-drop menu-submenu-align-full_width' );
        $class_names = implode( ' ', apply_filters( 'ul_css_class', $classes, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : ''; 
        $output .= "<ul$class_names>";
    }
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "</ul>";
    }
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $submenu_class_li = ( $depth > 0 ) ? ' menu-item-header menu-item-level-1 menu-column' : ' menu-item-level-0 menu-column';
        $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
      
        $classes[] = 'menu-item-' . $item->ID . $submenu_class_li;

      if( in_array('menu-item-has-children', $classes) ){
              $icon_dropdown_class = ' <i class="ubermenu-sub-indicator fas fa-angle-down"></i>';
     }
     else {
        $icon_dropdown_class = '';
     }
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $menu_sub = '';
        $menu_sub = preg_replace('/menu-item-has-children/', 'menu-has-submenu-drop', $class_names);
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : ''; 
        $output .= '<li' . $id . $menu_sub .'>'; 
        $atts           = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        if ( '_blank' === $item->target && empty( $item->xfn ) ) {
            $atts['rel'] = 'noopener';
        } else {
            $atts['rel'] = $item->xfn;
        }
        $atts['href']         = ! empty( $item->url ) ? $item->url : '';
        $atts['aria-current'] = $item->current ? 'page' : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
 
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
                $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' class="menu-target menu-item-layout-default menu-item-layout-text_only"' . $attr . '="' . $value . '"';
            }
        }
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
        $item_output = '<a' . $attributes . '>';
        $item_output .= $args->before . '<span class="menu-target-title menu-target-text">';      
        $item_output .= $args->link_before . $title .$icon_dropdown_class.$args->link_after;       
        $item_output .= $args->after . '</span>';
 		$item_output .= '</a>';
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>";
    }
 
}


?>

<?php
/* Main mobile Menu*/

class Walker_Nav_Mobile_Menu extends Walker_Nav_Menu {
    public $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    public $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id',
    );
    public function start_lvl( &$output, $depth = 0, $args = null ) {    
        $classes = array();
        $class_names = implode( ' ', apply_filters( 'ul_mobile_css_class', $classes, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : ''; 
        $output .= "";
    }
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "";
    }
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        
        $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
      
        $classes[] = 'menu-item-' . $item->ID;

        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . ' mm-listitem"' : '';
      
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $atts           = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        if ( '_blank' === $item->target && empty( $item->xfn ) ) {
            $atts['rel'] = 'noopener';
        } else {
            $atts['rel'] = $item->xfn;
        }
        $atts['href']         = ! empty( $item->url ) ? $item->url : '';
        $atts['aria-current'] = $item->current ? 'page' : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
 
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
                $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        if ($depth === 0) {

        $output .= '<li' . $id . $class_names .'>';

        $item_output = '<a' . $attributes .'>';
        $item_output .= $args->before;      
        $item_output .= $args->link_before . $title . $args->link_after;       
        $item_output .= $args->after;
        $item_output .= '</a>';
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

}
else
{
        $item_output = '<a' . $attributes . 'class="mm-btn_next"'.'>';
        $item_output .= $args->before;      
        $item_output .= $args->link_before . $args->link_after;       
        $item_output .= $args->after;
        
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}
    }
    public function end_el( &$output, $item, $depth = 0, $args = null ) {

if ($depth === 0) {

        $item_output = '</li>';
    }

    else
    {
    $item_output = '</a>';
    }

    }
}
?>

<?php
/* mm-menu-mobile*/

class Walker_Nav_Mobile_mm_Menu extends Walker_Nav_Menu {
    public $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    public $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id',
    );
    public function start_lvl( &$output, $depth = 0, $args = null ) {    
        $classes = array();
        $class_names = implode( ' ', apply_filters( 'ul_mobile_css_class', $classes, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : ''; 
        $output .= "";
    }
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "";
    }
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        
        $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
      
        $classes[] = 'menu-item-' . $item->ID;

        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . ' mm-listitem"' : '';
      
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $atts           = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        if ( '_blank' === $item->target && empty( $item->xfn ) ) {
            $atts['rel'] = 'noopener';
        } else {
            $atts['rel'] = $item->xfn;
        }
        $atts['href']         = ! empty( $item->url ) ? $item->url : '';
        $atts['aria-current'] = $item->current ? 'page' : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
 
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
                $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

   

        $output .= '<li' . $id . $class_names .'>';

        $item_output = '<a' . $attributes .'>';
        $item_output .= $args->before;      
        $item_output .= $args->link_before . $title . $args->link_after;       
        $item_output .= $args->after;
        $item_output .= '</a>';
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }
    public function end_el( &$output, $item, $depth = 0, $args = null ) {

        $item_output = '</li>';


    }
}
?>



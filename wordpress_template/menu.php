<?php
class NavMenuWalker extends Walker_Nav_Menu {
	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
	}
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		/**
		 * Dividers, Headers or Disabled
		 * =============================
		 * Determine whether the item is a Divider, Header, Disabled or regular
		 * menu item. To prevent errors we use the strcasecmp() function to so a
		 * comparison that is not case sensitive. The strcasecmp() function returns
		 * a 0 if the strings are equal.
		 */
		if(!isset($item->attr_title)){
			$item->attr_title='';
		}

				$class_names = $value = '';
				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = 'menu-item-' . $item->ID;
				$classes[]='nav-item';
				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
				/*
				if ( $args->has_children )
				$class_names .= ' dropdown';
				 */
				if($depth === 0) { $class_names .= ' dropdown'; } elseif($args->has_children && $depth > 0) { $class_names .= ' dropdown-submenu'; }
				if ( in_array( 'current-menu-item', $classes ) )
					$class_names .= ' sidebar-main_menu__link__active';
				// remove Font Awesome icon from classes array and save the icon
				// we will add the icon back in via a <span> below so it aligns with
				// the menu item
				if ( in_array('socicon', $classes)) {
					$font='socicon';
					$key = array_search('socicon', $classes);
					$icon = $classes[$key + 1];
					if ( strcasecmp($item->attr_title, 'only-icon' ) == 0 )
						$icon.=' onlyIcon';
					$class_names = str_replace($classes[$key+1], '', $class_names);
					$class_names = str_replace($classes[$key], '', $class_names);
				}
				if ( in_array('fa', $classes)) {
					$font='fa';
					$key = array_search('fa', $classes);
					$icon = $classes[$key + 1];
					if ( strcasecmp($item->attr_title, 'only-icon' ) == 0 )
						$icon.=' onlyIcon';
					$class_names = str_replace($classes[$key+1], '', $class_names);
					$class_names = str_replace($classes[$key], '', $class_names);
				}
				$class_names = $class_names ? ' class="sidebar-main_menu__link ' . esc_attr( $class_names ) . '"' : '';
				$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
				$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
				$output .= $indent . '<li' . $id . $value . $class_names .'>';
				$atts = array();
				$atts['title']  = ! empty( $item->title )	? apply_filters( 'the_title', $item->title)	: '';
				$atts['target'] = ! empty( $item->target )	? $item->target	: '';
				$atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';
				// If item has_children add atts to a.
				// if ( $args->has_children && $depth === 0 ) {
				if (isset( $args->has_children )) {
					// $atts['href']   		= '';
					// $atts['href'] = ! empty( $item->url ) ? $item->url : '';
					$atts['data-toggle']	= 'dropdown';
					$atts['class']			= 'dropdown-toggle nav-link';
				} else {
					$atts['href'] = ! empty( $item->url ) ? $item->url : '';

				}
				$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
				$attributes = '';
				foreach ( $atts as $attr => $value ) {
					if ( ! empty( $value ) ) {
						$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
						$attributes .= ' ' . $attr . '="' . $value . '"';
					}
				}
				$item_output = $args->before;
				// Font Awesome icons
				if ( ! empty( $icon ) )
					$item_output .= '<a'. $attributes .'><span class="'.$font.' '. esc_attr( $icon ) . '"></span>&nbsp;';
				else
					$item_output .= '<a'. $attributes .'>';
				if ( strcasecmp($item->attr_title, 'only-icon' ) != 0 )
					$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= ( 0 === $depth ) ? ' <span class="glyphicon glyphicon-chevron-right"></span></a>' : '</a>';
				$item_output .= $args->after;
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
}

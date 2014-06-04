<?php 
/**
 * This class extends the native Wordpress Walker_Nav_Menu. It formats submenus to be Bootstrap dropdowns.
 *
 * 
 * 
 * To use it:
 * 1. Put it in your theme folder. This will likely be the same directory containing your functions.php
 * 2. Include the class in your functions.php:
 *    include __DIR__ . '/bootstrap_nav.php';
 * 3. Call the class in the your theme where you want your navigation, specifying the class as the "walker" in the arguments:
 *    $args = array(
 *        'theme_location' => 'header-menu'
 *        'menu_class' => 'nav navbar-nav',
 *        'walker' => new Walker_Nav_Menu_Bootstrap()
 *    );
 *    wp_nav_menu($args);
 *    NOTE: you need to specify the "nav" and "nav-tabs" classes in the 'menu_class' argument. These are not addedby the walker class.
 * 4. Include Bootstrap's javascript in your theme, and the dropdowns should work
 *
 * 
 *
 * Inspriation and code take from:
 * @link http://wordpress.org/support/topic/how-do-i-know-if-a-menu-item-has-children-or-is-a-leaf#post-3139633
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu#Example
 * 
 **/



class Walker_Nav_Menu_Bootstrap extends Walker_Nav_Menu 
{
	public function display_element ($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
	{
		// check, whether there are children for the given ID and append it to the element with a (new) ID
		$element->hasChildren = isset($children_elements[$element->ID]) && !empty($children_elements[$element->ID]);
		return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	}



	// add classes to ul sub-menus
	public function start_lvl(&$output, $depth = 0, $args = Array()) 
	{
		// depth dependent classes
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'dropdown-menu',
			'menu-depth-' . $display_depth
		);
		$class_names = implode( ' ', $classes );
	  
		// build html
		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}



	// add main/sub classes to li's and links
	public function start_el(&$output, $item, $depth = 0, $args = Array(), $id = 0) 
	{
		global $wp_query;

		// decide whether to show dropdown, based on passed depth argument
		$showChildren = isset($args->depth) && $args->depth < 1 ? TRUE : FALSE;
		  
		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		// add 'active' class
		if ( in_array('current_page_item', $classes) )
		{
			$classes[] = 'active';
		}

		// add our dropdown class
		if ( $item->hasChildren && $showChildren )
		{
			$classes[] = 'dropdown';
		}


		// build class string
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );



		// build html
		$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $class_names . '">' . "\n";
	  


		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		// add dropdown-toggle to <a>
		$attributes .= $item->hasChildren && $showChildren ? 'class="dropdown-toggle" data-toggle="dropdown"' : '';



		// add a carriage return after link for readability
		$args->after = $args->after . "\n";



		// build item output
		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after . ( $item->hasChildren && $showChildren ? ' <b class="caret"></b>' : '' ), // this only works here. no idea why
			$args->after
		);



		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}




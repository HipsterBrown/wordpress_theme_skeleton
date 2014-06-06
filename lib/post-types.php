<?php 
/**
 * add your custom post types here
 * TIP: find-and-replace the below example with the CPT you want
 * or use @link http://generatewp.com/post-type/
 */

// Register Custom Post Type
function custom_post_types() 
{
	/**
	 * For individual, custom cpt's
	 * Copy and paste this and changes variables as needed
	 */

	// $labels = array(
	// 	'name'                => _x( 'Items', 'Post Type General Name', 'text_domain' ),
	// 	'singular_name'       => _x( 'Item', 'Post Type Singular Name', 'text_domain' ),
	// 	'menu_name'           => __( 'Items', 'text_domain' ),
	// 	'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
	// 	'all_items'           => __( 'All Items', 'text_domain' ),
	// 	'view_item'           => __( 'View Item', 'text_domain' ),
	// 	'add_new_item'        => __( 'Add New Item', 'text_domain' ),
	// 	'add_new'             => __( 'Add New', 'text_domain' ),
	// 	'edit_item'           => __( 'Edit Item', 'text_domain' ),
	// 	'update_item'         => __( 'Update Item', 'text_domain' ),
	// 	'search_items'        => __( 'Search Item', 'text_domain' ),
	// 	'not_found'           => __( 'Not found', 'text_domain' ),
	// 	'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	// );

	// $args = array(
	// 	'label'               => __( 'custom_items', 'text_domain' ),
	// 	'description'         => __( 'Single item type', 'text_domain' ),
	// 	'labels'              => $labels,
	// 	'supports'            => array( ),
	// 	'hierarchical'        => false,
	// 	'public'              => true,
	// 	'show_ui'             => true,
	// 	'show_in_menu'        => true,
	// 	'show_in_nav_menus'   => true,
	// 	'show_in_admin_bar'   => false,
	// 	'menu_icon'           => '',
	// 	'can_export'          => true,
	// 	'has_archive'         => false,
	// 	'exclude_from_search' => false,
	// 	'publicly_queryable'  => true,
	// 	'capability_type'     => 'page',
	// 	'rewrite' => array('slug' => 'item')
	// );
	// register_post_type( 'custom_items', $args );



	/**
	 * To create multilpe cpt's, quick and dirty
	 * Add more arrays to this array, and change the variables as needed. 
	 * Then the loop will create all of them
	 */
	// $post_types = array(
	// 	array(
	// 		'proper_plural' => 'Shows',
	// 		'proper_singular' => 'Show',
	// 		'post_type_variable_name' => 'custom_shows',
	// 		'slug' => 'show'
	// 	)
	// );

	// foreach ($post_types as $post_type)
	// {
	// 	$post_type = (object) $post_type;
	// 	$labels = array(
	// 		'name'                => $post_type->proper_plural, 'Post Type General Name',
	// 		'singular_name'       => $post_type->proper_singular, 'Post Type Singular Name',
	// 		'menu_name'           => $post_type->proper_plural,
	// 		'parent_item_colon'   => 'Parent ' . $post_type->proper_singular . ':',
	// 		'all_items'           => 'All ' . $post_type->proper_plural,
	// 		'view_item'           => 'View ' . $post_type->proper_singular,
	// 		'add_new_item'        => 'Add New ' . $post_type->proper_singular,
	// 		'add_new'             => 'Add New',
	// 		'edit_item'           => 'Edit ' . $post_type->proper_singular,
	// 		'update_item'         => 'Update ' . $post_type->proper_singular,
	// 		'search_items'        => 'Search ' . $post_type->proper_singular,
	// 		'not_found'           => 'Not found',
	// 		'not_found_in_trash'  => 'Not found in Trash',
	// 	);

	// 	$args = array(
	// 		'label'               => $post_type->post_type_variable_name,
	// 		'description'         => 'Single ' . $post_type->proper_singular . ' type',
	// 		'labels'              => $labels,
	// 		'supports'            => array(),
	// 		'hierarchical'        => false,
	// 		'public'              => true,
	// 		'show_ui'             => true,
	// 		'show_in_menu'        => true,
	// 		'show_in_nav_menus'   => true,
	// 		'show_in_admin_bar'   => false,
	// 		'menu_icon'           => '',
	// 		'can_export'          => true,
	// 		'has_archive'         => false,
	// 		'exclude_from_search' => false,
	// 		'publicly_queryable'  => true,
	// 		'capability_type'     => 'page',
	// 		'rewrite' => array('slug' => $post_type->slug)
	// 	);

	// 	register_post_type( $post_type->post_type_variable_name, $args );
	// }


} // custom_post_types


// Hook into the 'init' action
add_action( 'init', 'custom_post_types', 0 );



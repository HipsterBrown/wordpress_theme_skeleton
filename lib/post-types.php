<?php 
/**
 * add your custom post types here
 * TIP: find-and-replace the below example with the CPT you want
 * or use @link http://generatewp.com/post-type/
 */

// Register Custom Post Type
function custom_post_types() 
{
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



} // custom_post_types


// Hook into the 'init' action
add_action( 'init', 'custom_post_types', 0 );



<?php 
/**
 * register menus and sidebars
 */



/**
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus
 * Add an array item for each menu you want to register
 */
register_nav_menus(
	array(
		// 'header-menu-secondary' => __('Header Menu Top (secondary)'),
		// 'header-menu-primary' => __('Header Menu Bottom (primary)')
	)
);



/**
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
if (function_exists('register_sidebar'))
{
	// repeat this code for every sidebar you want to register
	// register_sidebar(
	// 	array(
	// 		'name' => __('Widget Area 1', 'custom'),
	// 		'description' => __('Description for this widget-area...', 'custom'),
	// 		'id' => 'widget-area-1',
	// 		'before_widget' => '<div id="%1$s" class="%2$s">',
	// 		'after_widget' => '</div>',
	// 		'before_title' => '<h3>',
	// 		'after_title' => '</h3>'
	// 	)
	// );
};



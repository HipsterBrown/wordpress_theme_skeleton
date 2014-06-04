<?php 
/**
 * Add all non-admin javascript and css scripts here
 */



/**
 * To link to a local script, put it in /js and use:
 * get_template_directory_uri() . '/js/your-script.js'
 */
function custom_js()
{
	// Add bootstrap to the header
    if (!is_admin()) 
    {
        wp_register_script( 
            'bootstrap-js', 
            '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', 
            array('jquery'), 
            '3.1.1', 
            true 
        );
        wp_enqueue_script('bootstrap-js');
    }



    // sample conditional script
	// if (is_page('pagenamehere')) 
	// {
	// 	wp_register_script(
	// 		'scriptname-js', 
	// 		get_template_directory_uri() . '/js/scriptname.js', 
	// 		array('jquery'), 
	// 		'1.0.0'
	// 	);
	// 	wp_enqueue_script('scriptname');
	// }

}

add_action( 'wp_enqueue_scripts', 'custom_js' );



/**
 * To link to a local script, put it in /js and use:
 * get_template_directory_uri() . '/css/your-css.css'
 */
function custom_css()
{
	// add bootstrap styles from CDN
    wp_register_style(
        'bootstrap-css', 
        '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css',
        array(),
        '3.1.1',
        'all' 
    );
    wp_enqueue_style('bootstrap-css');



    wp_register_style(
        'style-css', 
        get_template_directory_uri() . '/style.css', 
        array(), 
        '1.0', 
        'all'
    );
    wp_enqueue_style('style-css');
}

add_action( 'wp_enqueue_scripts', 'custom_css' );



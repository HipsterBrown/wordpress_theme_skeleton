<?php 


/**
 * 
 * @link http://wordpress.stackexchange.com/a/31472/29587
 */
function create_site_admin_role()
{
    global $wp_roles;
    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    $adm = $wp_roles->get_role('administrator');
    //Adding a 'new_role' with all admin caps
    $wp_roles->add_role('site_admin', 'Site Admin', $adm->capabilities);
}

add_action('init', 'create_site_admin_role');

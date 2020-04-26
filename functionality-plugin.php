<?php
/*
* Plugin Name: Custom Functionality Plugin
* Plugin URI: 
* Description: 
* Version: 1.0
* Author: <Your Name>
* Author URI: 
* License: GPLv3
* Text Domain: functionality-plugin
*/

function jm_create_how_tos_cpt() {
    register_post_type( 'Your-CPT',
        array(
            'labels'        =>  array(
                'name'                  => __( 'Your CPTs', 'jacob-martella' ),
                'singular_name'         => __( 'Your CPT', 'jacob-martella' ),
                'add_new'               => _x( 'Add New', 'Highlight', 'jacob-martella' ),
                'add_new_item'          => __( 'Add New Your CPT', 'jacob-martella' ),
                'edit_item'             => __( 'Edit Your CPT', 'jacob-martella' ),
                'new_item'              => __( 'New Your CPT', 'jacob-martella' ),
                'view_item'             => __( 'View Your CPT', 'jacob-martella' ),
                'search_items'          => __( 'Search Your CPT', 'jacob-martella' ),
                'not_found'             =>  __( 'No Your CPTs found', 'jacob-martella' ),
                'not_found_in_trash'    => __( 'No PYour CPTs found in Trash', 'jacob-martella' ),
                'parent_item_colon'     => ''

            ),
            'public'        => true,
            'has_archive'   => false,
            'supports'      => array('title','editor','thumbnail','revisions','comments','custom-fields', 'excerpt'),
            'query_var'     => true,
            'rewrite'       => array( 'slug' => 'your-cpt' ),
            'menu_icon'     => 'dashicons-hammer',
            'show_in_rest'  => true,
        )
    );
}
add_action('init', 'jm_create_how_tos_cpt');
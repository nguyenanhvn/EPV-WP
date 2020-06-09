<?php 
// SLIDER CUSTOM POST TYPE
function slider_post_type()
{
    $label = array(
        'name' => 'Slider',
        'singular_name' => 'Slider'
    );

    $args = array(
        'labels' => $label,
        'supports' => array(
            'title',
            'author',
        ),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 2,
        'menu_icon' => 'dashicons-images-alt2',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true, 
        'capability_type' => 'post',
        // 'capabilities' => array(
        //     'create_posts' => 'do_not_allow',
        // ),
        'map_meta_cap' => true,
    );

    register_post_type('slider', $args);

}
add_action('init', 'slider_post_type');
// PARTNER LOGO CUSTOM POST TYPE
function partner_logo_post_type()
{
    $label = array(
        'name' => 'Partner Logo',
        'singular_name' => 'Partner Logo'
    );

    $args = array(
        'labels' => $label,
        'supports' => array(
            'title',
            'author',
        ),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-groups',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true, 
        'capability_type' => 'post',
        // 'capabilities' => array(
        //     'create_posts' => 'do_not_allow',
        // ),
        'map_meta_cap' => true,
    );

    register_post_type('partner', $args);

}
add_action('init', 'partner_logo_post_type');
// BROCHURE CUSTOM POST TYPE
function e_brochures_post_type()
{
    $label = array(
        'name' => 'E-Brochures',
        'singular_name' => 'E-Brochures'
    );

    $args = array(
        'labels' => $label,
        'supports' => array(
            'title',
            'author',
            'thumbnail',
        ),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-groups',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true, 
        'capability_type' => 'post',
        // 'capabilities' => array(
        //     'create_posts' => 'do_not_allow',
        // ),
        'map_meta_cap' => true,
    );

    register_post_type('e-brochures', $args);

}
add_action('init', 'e_brochures_post_type');
// BOOK A STAND CUSTOM POST TYPE
function book_a_stand_post_type()
{
    $label = array(
        'name' => 'Book A Stand',
        'singular_name' => 'Book A Stand'
    );

    $args = array(
        'labels' => $label,
        'supports' => array(
            'title',
            'author',
            'thumbnail',
        ),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-groups',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true, 
        'capability_type' => 'post',
        // 'capabilities' => array(
        //     'create_posts' => 'do_not_allow',
        // ),
        'map_meta_cap' => true,
    );

    register_post_type('bookastand', $args);

}
add_action('init', 'book_a_stand_post_type');
// SPONSORS LOGO CUSTOM POST TYPE
function sponsors_logo_post_type()
{
    $label = array(
        'name' => 'Sponsors Logo',
        'singular_name' => 'Sponsors Logo'
    );

    $args = array(
        'labels' => $label,
        'supports' => array(
            'title',
            'author',
        ),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-groups',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true, 
        'capability_type' => 'post',
        // 'capabilities' => array(
        //     'create_posts' => 'do_not_allow',
        // ),
        'map_meta_cap' => true,
    );

    register_post_type('sponsor', $args);

}
add_action('init', 'sponsors_logo_post_type');
// TESTIMONIAL CUSTOM POST TYPE
// function testimonial_post_type()
// {
//     $label = array(
//         'name' => 'Testimonial',
//         'singular_name' => 'Testimonial'
//     );

//     $args = array(
//         'labels' => $label,
//         'supports' => array(
//             'title',
//             'author',
//         ),
//         'hierarchical' => true,
//         'public' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'show_in_nav_menus' => false,
//         'show_in_admin_bar' => false,
//         'menu_position' => 3,
//         'menu_icon' => 'dashicons-groups',
//         'can_export' => true,
//         'has_archive' => false,
//         'exclude_from_search' => true,
//         'publicly_queryable' => true, 
//         'capability_type' => 'post',
//         // 'capabilities' => array(
//         //     'create_posts' => 'do_not_allow',
//         // ),
//         'map_meta_cap' => true,
//     );

//     register_post_type('testimonial', $args);

// }
// add_action('init', 'testimonial_post_type');
// // VISITOR PROFILE CUSTOM POST TYPE
// function visitor_profile_post_type()
// {
//     $label = array(
//         'name' => 'Visitor Profile',
//         'singular_name' => 'Visitor Profile'
//     );

//     $args = array(
//         'labels' => $label,
//         'supports' => array(
//             'title',
//             'author',
//         ),
//         'hierarchical' => true,
//         'public' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'show_in_nav_menus' => false,
//         'show_in_admin_bar' => false,
//         'menu_position' => 3,
//         'menu_icon' => 'dashicons-groups',
//         'can_export' => true,
//         'has_archive' => false,
//         'exclude_from_search' => true,
//         'publicly_queryable' => true, 
//         'capability_type' => 'post',
//         // 'capabilities' => array(
//         //     'create_posts' => 'do_not_allow',
//         // ),
//         'map_meta_cap' => true,
//     );

//     register_post_type('visitor', $args);

// }
// add_action('init', 'visitor_profile_post_type');


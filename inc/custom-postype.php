<?php

// Register Custom Post Type
function reg_testimonial()
{
    //postype seminar
    $service = array(
        'name' => _x('Sản phẩm', 'Post Type General Name', 'hello-theme'),
        'singular_name' => _x('Sản phẩm', 'Post Type Singular Name', 'hello-theme'),
        'menu_name' => __('Sản phẩm', 'hello-theme'),
        'parent_item_colon' => __('Sản phẩm ', 'hello-theme'),
        'all_items' => __('Tất cả Sản phẩm', 'hello-theme'),
        'view_item' => __('Display', 'hello-theme'),
        'add_new_item' => __('Add Sản phẩm', 'hello-theme'),
        'add_new' => __('Thêm Sản phẩm ', 'hello-theme'),
        'edit_item' => __('Edit', 'hello-theme'),
        'update_item' => __('Update', 'hello-theme'),
        'search_items' => __('Search', 'hello-theme'),
        'not_found' => __('Not found', 'hello-theme'),
        'not_found_in_trash' => __('Not found in trash', 'hello-theme'),
    );
    $service_cat = array(
        'labels' => $service,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 9,
        'can_export' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-aside',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'san-pham'),
    );
    register_post_type('service', $service_cat);



}


//postype document
// $construction = array(
//     'name' => _x('Công trình tiêu biểu', 'Post Type General Name', 'hello-theme'),
//     'singular_name' => _x('Công trình tiêu biểu', 'Post Type Singular Name', 'hello-theme'),
//     'menu_name' => __('Công trình tiêu biểu', 'hello-theme'),
//     'parent_item_colon' => __('Công trình tiêu biểu ', 'hello-theme'),
//     'all_items' => __('Tất cả Công trình tiêu biểu', 'hello-theme'),
//     'view_item' => __('Display', 'hello-theme'),
//     'add_new_item' => __('Thêm Công trình tiêu biểu', 'hello-theme'),
//     'add_new' => __('Thêm Công trình tiêu biểu ', 'hello-theme'),
//     'edit_item' => __('Edit', 'hello-theme'),
//     'update_item' => __('Update', 'hello-theme'),
//     'search_items' => __('Search', 'hello-theme'),
//     'not_found' => __('Not found', 'hello-theme'),
//     'not_found_in_trash' => __('Not found in trash', 'hello-theme'),
// );
// $construction_cat = array(
//     'labels' => $construction,
//     'supports' => array('title', 'editor', 'thumbnail'),
//     'hierarchical' => false,
//     'public' => true,
//     'show_ui' => true,
//     'show_in_menu' => true,
//     'show_in_nav_menus' => true,
//     'show_in_admin_bar' => true,
//     'menu_position' => 5,
//     'can_export' => true,
//     'has_archive' => true,
//     'menu_icon' => 'dashicons-media-document',
//     'exclude_from_search' => false,
//     'publicly_queryable' => true,
//     'capability_type' => 'post',
//     'rewrite' => array('slug' => 'construction'),
// );
// register_post_type('construction', $construction_cat);


add_action('init', 'reg_testimonial', 0);




// function ssls_register_taxonomy()
// {

//    //taxonomy new
//    $taxonomy_service = array(
//        'name' => _x('Thêm chuyên mục', 'Taxonomy General Name', 'hello-theme'),
//        'singular_name' => _x('Thêm chuyên mục', 'Taxonomy Singular Name', 'hello-theme'),
//        'menu_name' => __('Thêm chuyên mục', 'hello-theme'),
//        'all_items' => __('All Items', 'hello-theme'),
//        'parent_item' => __('Parent Item', 'hello-theme'),
//        'parent_item_colon' => __('Parent Item:', 'hello-theme'),
//        'new_item_name' => __('New Item Name', 'hello-theme'),
//        'add_new_item' => __('Add New Item', 'hello-theme'),
//        'edit_item' => __('Edit Item', 'hello-theme'),
//        'update_item' => __('Update Item', 'hello-theme'),
//        'view_item' => __('View Item', 'hello-theme'),
//        'separate_items_with_commas' => __('Separate items with commas', 'hello-theme'),
//        'add_or_remove_items' => __('Add or remove items', 'hello-theme'),
//        'choose_from_most_used' => __('Choose from the most used', 'hello-theme'),
//        'popular_items' => __('Popular Items', 'hello-theme'),
//        'search_items' => __('Search Items', 'hello-theme'),
//        'not_found' => __('Not Found', 'hello-theme'),
//        'no_terms' => __('No items', 'hello-theme'),
//        'items_list' => __('Items list', 'hello-theme'),
//        'items_list_navigation' => __('Items list navigation', 'hello-theme'),
//    );
//    $tax_service = array(
//        'slug' => 'category-service',
//        'with_front' => true,
//        'hierarchical' => false,
//    );
//    $cat_tax = array(
//        'labels' => $taxonomy_service,
//        'hierarchical' => true,
//        'public' => true,
//        'show_ui' => true,
//        'show_admin_column' => true,
//        'show_in_nav_menus' => true,
//        'show_tagcloud' => true,
//        'rewrite' => $tax_service,
//    );
//    register_taxonomy('service_cat', array('service'), $cat_tax);

//    //taxonomy solution
//    $taxonomy_construction = array(
//        'name' => _x('Thêm chuyên mục', 'Taxonomy General Name', 'hello-theme'),
//        'singular_name' => _x('Thêm chuyên mục', 'Taxonomy Singular Name', 'hello-theme'),
//        'menu_name' => __('Thêm chuyên mục', 'hello-theme'),
//        'all_items' => __('All Items', 'hello-theme'),
//        'parent_item' => __('Parent Item', 'hello-theme'),
//        'parent_item_colon' => __('Parent Item:', 'hello-theme'),
//        'new_item_name' => __('New Item Name', 'hello-theme'),
//        'add_new_item' => __('Add New Item', 'hello-theme'),
//        'edit_item' => __('Edit Item', 'hello-theme'),
//        'update_item' => __('Update Item', 'hello-theme'),
//        'view_item' => __('View Item', 'hello-theme'),
//        'separate_items_with_commas' => __('Separate items with commas', 'hello-theme'),
//        'add_or_remove_items' => __('Add or remove items', 'hello-theme'),
//        'choose_from_most_used' => __('Choose from the most used', 'hello-theme'),
//        'popular_items' => __('Popular Items', 'hello-theme'),
//        'search_items' => __('Search Items', 'hello-theme'),
//        'not_found' => __('Not Found', 'hello-theme'),
//        'no_terms' => __('No items', 'hello-theme'),
//        'items_list' => __('Items list', 'hello-theme'),
//        'items_list_navigation' => __('Items list navigation', 'hello-theme'),
//    );
//    $tax_construction = array(
//        'slug' => 'category-construction',
//        'with_front' => true,
//        'hierarchical' => false,
//    );
//    $cat_tax_construction = array(
//        'labels' => $taxonomy_construction,
//        'hierarchical' => true,
//        'public' => true,
//        'show_ui' => true,
//        'show_admin_column' => true,
//        'show_in_nav_menus' => true,
//        'show_tagcloud' => true,
//        'rewrite' => $tax_construction,
//    );
//    register_taxonomy('construction_cat', array('construction'), $cat_tax_construction);

   
// }

//add_action('init', 'ssls_register_taxonomy', 0);


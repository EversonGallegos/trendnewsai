<?php

add_action('wp_head', 'enqueue_style');

function enqueue_style()
{
  wp_enqueue_style('styles-css', get_template_directory_uri() . '/style.css');
}

function trends_cpt()
{
	register_post_type('trends', array(
			'labels'      => array(
				'name'          => __('Trends', 'trendnewsai'),
				'singular_name' => __('Trend', 'trendnewsai'),
			),
      'description' => 'Manage of worlds trends in Twitter',
			'public'      => false,
      'show_ui'     => true,
			'has_archive' => true,
			'rewrite'     => array('slug' => 'trends'),
			'taxonomies'	=> array('trend_categories'),
      'show_in_rest'  => true,
		  'supports' => [ 'title', 'custom-fields', ],
		)
	);
}

add_action('init', 'trends_cpt');

function add_custom_taxonomies() {
  register_taxonomy('trend_categories', 'trends', array(
    'hierarchical' => true,
    'labels' => array(
      'name' => _x( 'Trends Categories', 'taxonomy general name' ),
      'singular_name' => _x( 'Trends Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Categories' ),
      'all_items' => __( 'All Categories' ),
      'parent_item' => __( 'Parent Category' ),
      'parent_item_colon' => __( 'Parent Category:' ),
      'edit_item' => __( 'Edit Category' ),
      'update_item' => __( 'Update Category' ),
      'add_new_item' => __( 'Add New Category' ),
      'new_item_name' => __( 'New Category Name' ),
      'menu_name' => __( 'Categories' ),
    ),
    'show_in_rest'  => true,
    'rewrite' => array(
      'slug' => 'trends_categories',
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );
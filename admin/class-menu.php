<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Menu {

	public function __construct() {

	}

	public function init() {
		add_action( 'init', array( $this, 'display_menu' ) );
		add_action( 'add_meta_boxes', array( $this, 'meta_boxes_upou_courses') );
	}

	public function meta_boxes_upou_courses() {
		$screens = array( 'upou_courses' );

		foreach ( $screens as $screen ) {
			add_meta_box( 'upou_courses_metabox', __( 'UPOU Courses Options', 'upou_courses' ), array( $this, 'meta_boxes_upou_courses_input' ), $screen );
		}
	}

	public function meta_boxes_upou_courses_input( $post ) {
		
	}

	public function display_menu() {
		$labels = array(
            'name' => __('UPOU Courses', 'upou_courses'),
            'singular_name' => __('UPOU Course', 'upou_courses'),
            'add_new' => __('New UPOU Course', 'upou_courses'),
            'add_new_item' => __('New UPOU Course', 'upou_courses'),
            'edit_item' => __('Edit UPOU Course', 'upou_courses'),
            'new_item' => __('New UPOU Course', 'upou_courses'),
            'view_item' => __('View UPOU Course', 'upou_courses'),
            'search_items' => __('Search UPOU Course', 'upou_courses'),
            'not_found' =>  __('Nothing found', 'upou_courses'),
            'not_found_in_trash' => __('Nothing found in Trash', 'upou_courses'),
            'parent_item_colon' => ''
        );

		$args = array(
            'labels' => $labels,
            'public' => false,
            'publicly_queryable' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_icon' => null,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title'),
			'menu_icon' => 'dashicons-editor-justify',
		);

        register_post_type( 'upou_courses' , $args );
	}
}

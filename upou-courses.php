<?php
/*
Plugin Name: UPOU Course Offering
Plugin URI: https://www.upou.edu.ph
Description: UPOU Course Offering in Accordion format
Version: 1.0
Author: Tomas B Cabagay Jr
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Upou_Courses {

	public function __construct() {
		foreach ( glob( plugin_dir_path( __FILE__ ) . 'admin/*.php' ) as $file ) {
			include_once $file;
		}

		add_action( 'plugins_loaded', array( $this, 'init' ));
	}

	public function init() {
		$menu = new Menu();
		$menu->init();
	}
}

new Upou_Courses();

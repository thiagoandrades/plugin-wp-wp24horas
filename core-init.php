<?php 
/*
*
*	***** Plugin WP24Horas *****
*
*	This file initializes all PW Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define('PW_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('PW_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('PW_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('PW_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function pw_register_core_css(){
wp_enqueue_style('pw-core', PW_CORE_CSS . 'pw-core.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'pw_register_core_css' );    
/*
*
*  Register JS/Jquery Ready
*
*/
function pw_register_core_js(){
// Register Core Plugin JS	
wp_enqueue_script('pw-core', PW_CORE_JS . 'pw-core.js','jquery',time(),true);
};
add_action( 'wp_enqueue_scripts', 'pw_register_core_js' );    
/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( PW_CORE_INC . 'pw-core-functions.php' ) ) {
	require_once PW_CORE_INC . 'pw-core-functions.php';
}     
// Load the ajax Request
if ( file_exists( PW_CORE_INC . 'pw-ajax-request.php' ) ) {
	require_once PW_CORE_INC . 'pw-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( PW_CORE_INC . 'pw-shortcodes.php' ) ) {
	require_once PW_CORE_INC . 'pw-shortcodes.php';
}
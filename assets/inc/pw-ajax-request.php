<?php 
/*
*
*	***** Plugin WP24Horas *****
*
*	Ajax Request
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
/*
Ajax Requests
*/
add_action( 'wp_ajax_pw_custom_plugin_frontend_ajax', 'pw_custom_plugin_frontend_ajax' );
add_action( 'wp_ajax_nopriv_pw_custom_plugin_frontend_ajax', 'pw_custom_plugin_frontend_ajax' );
function pw_custom_plugin_frontend_ajax(){	
    ob_start();
    if(isset($_POST['myInputFieldValue'])){
       $printName = $_POST['myInputFieldValue'];
       
        // Your ajax Request & Response
        echo 'Success, Ajax is Working On Your New Plugin. Your field value was: pw';
    } else {
        // Your ajax Request & Response
        echo 'Error, Ajax is Working On Your New Plugin But Your field was empty! Try Typing in the field!';    
    } 

	wp_die();
}
<?php

function fiverr_template_assets() {

	wp_enqueue_script( 'jquery' );

	wp_register_script( 'script-min', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1.0', true );

	wp_enqueue_script( 'script-min' );

	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'fiverr_template_assets' );



show_admin_bar(false);

add_theme_support( 'post-thumbnails' );
		
add_theme_support( 'post-thumbnails', array( 'fiverr_template' ) );







add_theme_support( 'menus' );

// add_action('wp_ajax_callback_mail', 'callback_mail');
// add_action('wp_ajax_nopriv_callback_mail', 'callback_mail');

// function callback_mail() {
// 	$name = $POST['name'];
// 	$email = $POST['email'];
// 	$phone = $POST['phone'];
// 	$zone = $POST['zone'];
// 	$budget = $POST['budget'];
// 	$type = $POST['type'];

// 	$to = 'maxgraph23@gmail.com';
// 	$subject = 'asd';
// 	$message = 'asd';

// 	remove_all_filters( 'wp_mail_from' );
// 	remove_all_filters( 'wp_mail_from_name' );
	 
// 	$headers = array(
// 		'From: Me Myself <me@example.net>',
// 		'content-type: text/html',
// 		'Cc: John Q Codex <jqc@wordpress.org>',
// 		'Cc: iluvwp@wordpress.org', // тут можно использовать только простой email адрес
// 	);

// 	wp_mail( $to, $subject, $message, $headers );
// 	wp_die();
// }
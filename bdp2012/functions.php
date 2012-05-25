<?php
	if ( function_exists( 'add_theme_support' ) ) 
	{
	  	add_theme_support( 'post-thumbnails' );
	}
    
    if ( function_exists('register_sidebar') )

            register_sidebar( array(

            'before_widget' => '',

            'after_widget' => '',

            'before_title' => '<h2>',

            'after_title' => '</h2>',

      	));

?>
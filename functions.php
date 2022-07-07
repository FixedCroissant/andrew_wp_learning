<?php

function followandrew_themesupport(){
//Add dynamic title tagging.
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

//Add into hook.
add_action( 'after_setup_theme', 'followandrew_themesupport');



function followandrew_menus(){
    //Locations of menus.
    $locations = array(
        'primary'=>'Desktop Primary Left Sidebar',
        'footer'=>'Footer Menu Items'
    );

    register_nav_menus( $locations );
}

//Add the menus
add_action('init','followandrew_menus');


//CSS
function followandrew_register_styles(){

    $version = wp_get_theme()->get('Version');

     //Custom CSS
     wp_enqueue_style( 'followandrew-custom-css', get_template_directory_uri(  )."/style.css", array('followandrew-bootstrap'),$version, 'all');
     //Bootstrap 4.4.1
     wp_enqueue_style( 'followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(),'4.4.1', 'all');
    //Font Awesome CSS
    wp_enqueue_style( 'followandrew-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(),'5.13.0', 'all');
 
}

//Add style function above into WP.
add_action( 'wp_enqueue_scripts', 'followandrew_register_styles');

//Scripts
function followandrew_register_scripts(){
    $version = wp_get_theme()->get('Version');


     //jQuery
     wp_enqueue_script('followandrew-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),$version, 'all',true);
     //Popper
     wp_enqueue_script('followandrew-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(),'1.16.0', 'all');
    //Bootstrap JS
    wp_enqueue_script('followandrew-bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(),'4.4.1', 'all');
    //Custom JS
    wp_enqueue_script('followandrew-custom-js', get_template_directory_uri()."/assets/js/main.js",'1.0',array(), 'all');
}



//Add scripts
add_action( 'wp_enqueue_scripts', 'followandrew_register_scripts');



//Create new widget configuration.
function followandrew_widget_areas(){
    register_sidebar( 
        array(
           'before_title'=>'',
           'after_title'=>'',
           'before_widget'=>'<ul class="social-list list-inline py-3 mx-auto">',
           'after_widget'=>'</ul>',
            'name'=>'Sidebar Area',
            'id'=>'sidebar-1',
            'description'=>'Sidebar Widget Area'
            )
        );

      register_sidebar( 
        array(
           'before_title'=>'',
           'after_title'=>'',
           'before_widget'=>'<ul class="social-list list-inline py-3 mx-auto">',
           'after_widget'=>'</ul>',
            'name'=>'Footer Area',
            'id'=>'footer-1',
            'description'=>'Footer Widget Area'
            )
        );
}

//Add widget into WP.
add_action( 'widgets_init', 'followandrew_widget_areas');

?>
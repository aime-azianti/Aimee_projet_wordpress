<?php
function add_css ( )
{
   wp_register_style ( 'first' , get_template_directory_uri ( ) . '/assets/css/style.css' , false, '1.1' , 'all' ) ;
   wp_enqueue_style ( 'first' ) ;


   wp_register_style ( 'first' , get_template_directory_uri ( ) . '/assets/lib/owlcarousel/assets/owl.carousel.min.css' , false, '1.1' , 'all' ) ;
   wp_enqueue_style ( 'first' ) ; 

   wp_enqueue_style ( 'first', get_template_directory_uri ( ) . "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js") ; 
   wp_enqueue_style ( 'first' ) ; 

   wp_register_style ( 'first' , get_template_directory_uri ( ) . '/assets/lib/lightbox/css/lightbox.min.css' , false, '1.1' , 'all' ) ;
   wp_enqueue_style ( 'first' ) ; 



}
add_action ( 'wp_enqueue_scripts' , 'add_css' ) ;

function add_script ( )
{
   wp_register_script ( 'js-script' , get_template_directory_uri ( ) . '/assets/js/main.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'js-script' ) ; 

   wp_register_script ( 'change' , get_template_directory_uri ( ) . '/assets/lib/easing/easing.min.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'change' ) ; 

   wp_register_script ( 'popup' , get_template_directory_uri ( ) . '/assets/lib/waypoints/waypoints.min.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'popup' ) ; 

   wp_register_script ( 'carousel' , get_template_directory_uri ( ) . '/assets/lib/isotope/isotope.pkgd.min.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'carrousel' ) ; 
   
   wp_register_script ( 'carousel' , get_template_directory_uri ( ) . '/assets/js/bootsrap.min.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'carrousel' ) ; 

}
add_action ( 'wp_enqueue_scripts' , 'add_script' ) ;
<?php
    function yl_links(){
       // wp_enqueue_style('yl_bootstrap',get_template_directory_uri()."/assets/css/bootstrap.min.css",array(),'1.0','all');
       
        
        // <!-- Icon Font Stylesheet -->
        wp_enqueue_style('yl_iconFont',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css",array(),'1.0','all');
        wp_enqueue_style('yl_iconFont1',"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css",array(),'1.0','all');
        // <!-- End Icon Font Stylesheet -->

        // <!-- Google Web Fonts -->
            wp_enqueue_style('yl_Fontsg',"https://fonts.googleapis.com",array(),'1.0','all');
            wp_enqueue_style('yl_Fontsg1',"https://fonts.gstatic.com",array(),'1.0','all');
            wp_enqueue_style('yl_Fontsg2',"https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap",array(),'1.0','all');

         // <!--  End Google Web Fonts --> <!-- Libraries Stylesheet -->

    wp_enqueue_style('yl_animate',get_template_directory_uri()."/assets/lib/animate/animate.min.css",array(),'1.0','all');
    wp_enqueue_style('yl_animate1',get_template_directory_uri()."/assets/lib/owlcarousel/assets/owl.carousel.min.css",array(),'1.0','all');

    wp_enqueue_style('yl_style',get_template_directory_uri()."/style.css",array(),'1.0','all');
    }
    add_action('wp_enqueue_scripts','yl_links');


    function yl_scripts(){
        // wp_enqueue_style('yl_bootstrap',get_template_directory_uri()."/assets/css/bootstrap.min.css",array(),'1.0','all');
        
         
         // <!-- Icon Font Stylesheet -->
         wp_enqueue_style('yl_iconFont',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css",array(),'1.0','all');
         wp_enqueue_style('yl_iconFont1',"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css",array(),'1.0','all');
         // <!-- End Icon Font Stylesheet -->
 
         // <!-- Google Web Fonts -->
             wp_enqueue_style('yl_Fontsg',"https://fonts.googleapis.com",array(),'1.0','all');
             wp_enqueue_style('yl_Fontsg1',"https://fonts.gstatic.com",array(),'1.0','all');
             wp_enqueue_style('yl_Fontsg2',"https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap",array(),'1.0','all');
 
          // <!--  End Google Web Fonts --> <!-- Libraries Stylesheet -->
 
     wp_enqueue_style('yl_animate',get_template_directory_uri()."/assets/lib/animate/animate.min.css",array(),'1.0','all');
     wp_enqueue_style('yl_animate1',get_template_directory_uri()."/assets/lib/owlcarousel/assets/owl.carousel.min.css",array(),'1.0','all');
 
     wp_enqueue_style('yl_style',get_template_directory_uri()."/style.css",array(),'1.0','all');
     }
     add_action('wp_enqueue_scripts','yl_scripts');
 
 

?>


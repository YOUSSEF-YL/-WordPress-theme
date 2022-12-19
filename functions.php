<?php
    function yl_links(){
        wp_enqueue_style('yl_style',get_template_directory_uri()."/style.css",array(),'1.0','all');

        // <!-- Icon Font Stylesheet -->
        wp_enqueue_style('yl_style',get_template_directory_uri()."https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css",array(),'1.0','all');
        wp_enqueue_style('yl_style',get_template_directory_uri()."https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css",array(),'1.0','all');
        // <!-- End Icon Font Stylesheet -->

        // <!-- Google Web Fonts -->
            wp_enqueue_style('yl_style',get_template_directory_uri()."https://fonts.googleapis.com",array(),'1.0','all');
            wp_enqueue_style('yl_style',get_template_directory_uri()."https://fonts.gstatic.com",array(),'1.0','all');
            wp_enqueue_style('yl_style',get_template_directory_uri()."https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap",array(),'1.0','all');

         // <!--  End Google Web Fonts -->
    }
    add_action('wp_enqueue_scripts','yl_links');
?>


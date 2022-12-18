<?php
function link_style()
{
    wp_enqueue_style("css_link",get_template_directory_uri()."/theme-template/finanza-1.0.0/css/style.css",array(),'1.0','all');

    // <!-- Icon Font Stylesheet -->
    wp_enqueue_style("css_link","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css",array(),'1.0','all');
    wp_enqueue_style("css_link","https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css",array(),'1.0','all');
    // <!-- END Icon Font Stylesheet -->
}

add_action('wp_enqueue_scripts','wp_enqueue_style')
?>
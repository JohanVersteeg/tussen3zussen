<?php
    add_theme_support( 'post-thumbnails' ); 

    function arphabet_widgets_init() {

        register_sidebar( array(
            'name'          => 'Sidebar right',
            'id'            => 'sidebar_right',
            'before_widget' => '<div class="sidebar-item">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="rounded">',
            'after_title'   => '</h4>',
        ) );

    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );

    include("widgets/about/widget.php");
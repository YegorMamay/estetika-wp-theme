<?php

function bw_widgets_init()
{
    /**
     * Sidebar (one widget area)
     */
    register_sidebar(array(
        'name' => __('Sidebar', 'brainworks'),
        'id' => 'sidebar-widget-area',
        'description' => __('The sidebar widget area', 'brainworks'),
        'before_widget' => '<section class="widget-item %1$s %2$s text-center">',
        'after_widget' => '</section>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ));

    /**
     * Sidebar (two widget area)
     */
    register_sidebar(array(
        'name' => __('Sidebar 2', 'brainworks'),
        'id' => 'sidebar-widget-area2',
        'description' => __('The sidebar widget area', 'brainworks'),
        'before_widget' => '<section class="widget-item %1$s %2$s text-center">',
        'after_widget' => '</section>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ));

    /**
     * Footer (three widget areas)
     */
    register_sidebar(array(
        'name' => __('Footer', 'brainworks'),
        'id' => 'footer-widget-area',
        'description' => __('The footer widget area', 'brainworks'),
        'before_widget' => '<div class="widget-item %1$s %2$s col-sm-4 text-center">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title bold">',
        'after_title' => '</div>',
    ));

}

add_action('widgets_init', 'bw_widgets_init');

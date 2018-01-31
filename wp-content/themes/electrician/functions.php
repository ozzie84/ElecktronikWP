<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

function logo_widgets_init() {
    register_sidebar( array(
        'name'          => 'Logotype Icon SVG',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'logo_widgets_init' );

function call_widgets_init() {
    register_sidebar( array(
        'name'          => 'Recalling Icon SVG',
        'id'            => 'call',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'call_widgets_init' );

function your_security_widgets_init() {
    register_sidebar( array(
        'name'          => 'Two sections img svg1',
        'id'            => 'security',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'your_security_widgets_init' );

function electrician_widgets_init() {
    register_sidebar( array(
        'name'          => 'Two sections img svg2',
        'id'            => 'electrician',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'electrician_widgets_init' );

function staff_widgets_init() {
    register_sidebar( array(
        'name'          => 'Two sections img svg3',
        'id'            => 'staff',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'staff_widgets_init' );

function time_widgets_init() {
    register_sidebar( array(
        'name'          => 'Two sections img svg4',
        'id'            => 'time',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'time_widgets_init' );

function times_widgets_init() {
    register_sidebar( array(
        'name'          => 'Four sections img svg1',
        'id'            => 'times',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'times_widgets_init' );

function heads_widgets_init() {
    register_sidebar( array(
        'name'          => 'Four sections img svg2',
        'id'            => 'heads',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'heads_widgets_init' );

function head_widgets_init() {
    register_sidebar( array(
        'name'          => 'Four sections img svg3',
        'id'            => 'head',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'head_widgets_init' );

function four_widgets_init() {
    register_sidebar( array(
        'name'          => 'Four sections img svg4',
        'id'            => 'four',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'four_widgets_init' );

function soc_one_widgets_init() {
    register_sidebar( array(
        'name'          => 'Social img svg1',
        'id'            => 'soc_one',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'soc_one_widgets_init' );

function soc_two_widgets_init() {
    register_sidebar( array(
        'name'          => 'Social img svg2',
        'id'            => 'soc_two',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'soc_two_widgets_init' );

function soc_three_widgets_init() {
    register_sidebar( array(
        'name'          => 'Social img svg3',
        'id'            => 'soc_three',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'soc_three_widgets_init' );

require_once ( get_stylesheet_directory() . '/theme-options.php' );

add_theme_support( 'post-thumbnails' );
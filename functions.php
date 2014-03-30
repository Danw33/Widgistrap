<?php

/*
 * Widgistrap Copyright (C) 2014 Daniel Wilson
 *
 * This theme is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This theme is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Register the sidebars and widgetized areas.
 * (Including the Widgipage Bars, all as Bootstrap Panels)
 */
function widgistrap_widgets_init() {

    //Primary Right Sidebar (Primary Widget Area)
    register_sidebar( array(
	'name' => 'Primary Right sidebar' ,
	'id' => 'primary-widget-area' ,
	'before_widget' => '<div class="panel panel-default panel-widget">' ,
	'after_widget' => '</div></div>' ,
	'before_title' => '<div class="panel-heading"><h3 class="panel-title rounded">' ,
	'after_title' => '</h3></div><div class="panel-body">' ,
    ) );

    //Two- and Three-Column Widgipage
    register_sidebar( array(
	'name' => 'Widgipage First Column' ,
	'id' => 'widgipage-col-1' ,
	'before_widget' => '<div class="panel panel-default panel-widget">' ,
	'after_widget' => '</div></div>' ,
	'before_title' => '<div class="panel-heading"><h3 class="panel-title rounded">' ,
	'after_title' => '</h3></div><div class="panel-body">' ,
    ) );

    register_sidebar( array(
	'name' => 'Widgipage Second Column' ,
	'id' => 'widgipage-col-2' ,
	'before_widget' => '<div class="panel panel-default panel-widget">' ,
	'after_widget' => '</div></div>' ,
	'before_title' => '<div class="panel-heading"><h3 class="panel-title rounded">' ,
	'after_title' => '</h3></div><div class="panel-body">' ,
    ) );

    register_sidebar( array(
	'name' => 'Widgipage Third Column' ,
	'id' => 'widgipage-col-3' ,
	'before_widget' => '<div class="widgipage-col-3-widget widget">' ,
	'after_widget' => '</div></div>' ,
	'before_title' => '<h2 class="rounded">' ,
	'after_title' => '</h2>' ,
    ) );
}

add_action( 'widgets_init' , 'widgistrap_widgets_init' );

/**
 * Menu Awesomeness
 * Thanks to the awesome wp-bootstrap-navwalker by @twittem
 */
require_once('wp_bootstrap_navwalker.php');
register_nav_menu( 'primary' , __( 'Primary Navigation' , 'widgistrap' ) );

/**
 * Register the Theme Customiser Stuff
 * @param type $wp_customize
 */
function widgistrap_customize_register( $wp_customize ) {
    //Section: Colour Scheme
    $wp_customize -> add_section( 'widgistrap_color_scheme' , array(
	'title' => __( 'Color Scheme' , 'widgistrap' ) ,
	'priority' => 35 ,
    ) );

//    $wp_customize -> add_setting( 'widgistrap_theme_options[color_scheme]' , array(
//	'default' => 'some-default-value' ,
//	'type' => 'option' ,
//	'capability' => 'edit_theme_options' ,
//    ) );
    //Section: Logo
    $wp_customize -> add_section( 'widgistrap_logo' , array(
	'title' => __( 'Logo Image' , 'widgistrap' ) ,
	'priority' => 36 ,
    ) );
}

add_action( 'customize_register' , 'widgistrap_customize_register' );

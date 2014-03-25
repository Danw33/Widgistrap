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
 * (Including the Widgipage Bars)
 */
function widgistrap_widgets_init() {

    //Primary Right Sidebar
    register_sidebar( array(
	'name' => 'Primary Right sidebar' ,
	'id' => 'primary-right' ,
	'before_widget' => '<div class="sidebar-primary-right-widget">' ,
	'after_widget' => '</div>' ,
	'before_title' => '<h2 class="rounded">' ,
	'after_title' => '</h2>' ,
    ) );

    //Two- and Three-Column Widgipage
    register_sidebar( array(
	'name' => 'Widgipage First Column' ,
	'id' => 'widgipage-col-1' ,
	'before_widget' => '<div class="widgipage-col-1-widget">' ,
	'after_widget' => '</div>' ,
	'before_title' => '<h2 class="rounded">' ,
	'after_title' => '</h2>' ,
    ) );

    register_sidebar( array(
	'name' => 'Widgipage Second Column' ,
	'id' => 'widgipage-col-2' ,
	'before_widget' => '<div class="widgipage-col-2-widget">' ,
	'after_widget' => '</div>' ,
	'before_title' => '<h2 class="rounded">' ,
	'after_title' => '</h2>' ,
    ) );

    register_sidebar( array(
	'name' => 'Widgipage Third Column' ,
	'id' => 'widgipage-col-3' ,
	'before_widget' => '<div class="widgipage-col-3-widget">' ,
	'after_widget' => '</div>' ,
	'before_title' => '<h2 class="rounded">' ,
	'after_title' => '</h2>' ,
    ) );
}

add_action( 'widgets_init' , 'widgistrap_widgets_init' );

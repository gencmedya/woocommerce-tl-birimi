<?php 
/*
Plugin Name: WooCommerce TL Birimi
Plugin URI: http://wordpress.org/extend/plugins/woocommerce-tl-birimi
Description: Yeni TL simgenizi sitelerinizde kullanabilirsiniz. Bu Eklenti ile teman&#305;zda yada eklentinizde mevcut tl yaz&#305;s&#305; yerine Yeni TL simgesini Kullan&#305;c&#305;lar&#305;n&#305;za G&#246;sterebilirsiniz.
Version: 1.1
Author: Halil Kaya <gnckampus@hotmail.com>
Author URI: http://www.gencmedya.com
License: GPLv3
Requires at least: 3.0 +
Tested up to: 3.6
*/
/*
 *      Copyright 2012 Halil Kaya <gnckampus@hotmail.com>
 *
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 3 of the License, or
 *      (at your option) any later version.
 *
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 */ 

add_action('plugins_loaded', 'tl_birimi', 0);
add_filter('woocommerce_currency_symbol', 'tl_birimi' );
function tl_birimi(){return '<span class="TL"></span>';}

// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

/**
 * Register style sheet.
 */
function register_plugin_styles() {
	wp_register_style( 'still', plugins_url( 'woocommerce-tl-simgesi/stil.css' ) );
	wp_enqueue_style( 'still' );
}
?>
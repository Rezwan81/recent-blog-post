<?php
/*
Plugin Name:       Woocommerce Quantity Label
Plugin URI:        https://devles.com/
Description:       WooCommerce Quantity Label in front of Add to Cart Button
Version:           1.0.0
Requires at least: 5.2
Requires PHP:      7.2
Author:            Rezwan Shiblu
Author URI:        https://devles.com/
Text Domain:       woocommerce-quantity-label
License:           GPL v2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt

Woocommerce Quantity Label is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Woocommerce Quantity Label is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Woocommerce Quantity Label. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
*/


 
add_action( 'woocommerce_before_add_to_cart_quantity', 'bbloomer_echo_qty_front_add_cart' );
 
function bbloomer_echo_qty_front_add_cart() {
 echo '<div style="float: left; padding: 10px;">Quantity: </div>'; 
}






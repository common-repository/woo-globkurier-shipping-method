<?php
/*
  Plugin Name: Globkurier for WooCommerce
  Description: Globkurier <strong>Shipping method</strong> is no longer supported.
  Version: 2.3.4
  Author: CUBE
  Developer: pauluZ
  Tested up to: 4.8.1
  License: GPLv2 or later
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
  Domain Path: /languages
  Text Domain: globkurier_shipping_method
  WC requires at least: 2.6
  WC tested up to: 2.6

  Copyright 2016 Studio CUBE

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

defined( 'ABSPATH' ) or die( 'Plugin temporarily unavailable' );

add_action( 'admin_notices', 'gk_admin_notice__end' );

function gk_admin_notice__end() {
	$class = 'notice notice-error';

	$message = __( 'Plugin <strong>Globkurier Shipping Method</strong> nie jest już wspierany!', 'globkurier_shipping_method' );

	printf( '<div class="%1$s is-dismissible"><p>%2$s</p></div>', $class, $message );
}

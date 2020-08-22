<?php

use QuomodoMarket\Core\WalkerNav;
wp_nav_menu([
	'menu'            => 'primary',
	'theme_location'  => 'primary',
	'container'       => false,
	'menu_id'         => '',
	'menu_class'      => 'navbar-nav m-auto',
	'depth'           => 3,
	'walker'          => new WalkerNav(),
	'fallback_cb'     => '\QuomodoMarket\Core\WalkerNav::fallback',
]);


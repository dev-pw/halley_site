<?php

//MENU PRINCIPAL

$menu_principal_args = array(
    'theme_location'  => 'menu-principal',
    'menu'            => '',
    'container'       => 'nav',
    'container_class' => 'c-menu-principal',
    'container_id'    => '',
    'menu_class'      => '',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
);

wp_nav_menu( $menu_principal_args );

?>
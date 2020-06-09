<?php
function ads_shortcode() {
        global $epv_options;
        $output = "<div class=\"box__ads\">";
        $output .= "<div class=\"ads__slider owl-carousel\">";
        if ( isset( $epv_options['bottom-banner-ads'] ) && !empty( $epv_options['bottom-banner-ads'] ) ) {
                for ($i = 0; $i < count($epv_options['bottom-banner-ads']); $i++){
                        $url = ($epv_options['bottom-banner-ads'][$i]['url'] != "") ? $epv_options['bottom-banner-ads'][$i]['url'] : "#";
                        $output .= "<a href=\"". $url ."\" title=\"\" target=\"_blank\">";
                        $output .= "<img src=\"". $epv_options['bottom-banner-ads'][$i]['image']. "\" alt=\"\">";
                        $output .= "</a>";
                }
        }
        $output .= "</div>";
        $output .= "<span>ADVERTISING</span>";
        $output .= "</div>";
        return $output;
}
add_shortcode('ads_slide', 'ads_shortcode');

function exhibit_menu_shortcode() {
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object( $locations['exhibit'] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $output = '<section class="content-tabs">';
        $output .= '<div class="container">';
        $output .= '<div class="content-tabs_box">';
        $output .= '<ul>';
        foreach( $menu_items as $menu_item ) {
                $output .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
        }
        $output .= '</ul>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</section>';
        return $output;
}
add_shortcode('exhibit_menu', 'exhibit_menu_shortcode');

function visiting_menu_shortcode() {
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object( $locations['visiting'] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $output = '<section class="content-tabs">';
        $output .= '<div class="container">';
        $output .= '<div class="content-tabs_box">';
        $output .= '<ul>';
        foreach( $menu_items as $menu_item ) {
                $output .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
        }
        $output .= '</ul>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</section>';
        return $output;
}
add_shortcode('visiting_menu', 'visiting_menu_shortcode');

function newmedia_menu_shortcode() {
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object( $locations['newmedia'] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $output = '<section class="content-tabs">';
        $output .= '<div class="container">';
        $output .= '<div class="content-tabs_box">';
        $output .= '<ul>';
        foreach( $menu_items as $menu_item ) {
                $output .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
        }
        $output .= '</ul>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</section>';
        return $output;
}
add_shortcode('newmedia_menu', 'newmedia_menu_shortcode');

function needtoknow_menu_shortcode() {
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object( $locations['needtoknow'] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $output = '<section class="content-tabs">';
        $output .= '<div class="container">';
        $output .= '<div class="content-tabs_box">';
        $output .= '<ul>';
        foreach( $menu_items as $menu_item ) {
                $output .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
        }
        $output .= '</ul>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</section>';
        return $output;
}
add_shortcode('needtoknow_menu', 'needtoknow_menu_shortcode');

function contact_menu_shortcode() {
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object( $locations['contact'] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $output = '<section class="content-tabs">';
        $output .= '<div class="container">';
        $output .= '<div class="content-tabs_box">';
        $output .= '<ul>';
        foreach( $menu_items as $menu_item ) {
                $output .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
        }
        $output .= '</ul>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</section>';
        return $output;
}
add_shortcode('contact_menu', 'contact_menu_shortcode');
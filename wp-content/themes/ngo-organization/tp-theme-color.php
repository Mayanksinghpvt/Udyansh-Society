<?php

$ngo_organization_tp_theme_css = '';

//primary-color
$ngo_organization_secondary_color_option = get_theme_mod('ngo_organization_secondary_color_option');

if($ngo_organization_secondary_color_option != false){
$ngo_organization_tp_theme_css .='.donate-btn-2 ,#our-funds .box-btn , .prev.page-numbers, .next.page-numbers,a.page-numbers, .page-numbers,#theme-sidebar button[type="submit"],#footer button[type="submit"] ,#return-to-top, .woocommerce a.button:hover{';
$ngo_organization_tp_theme_css .='background-color: '.esc_attr($ngo_organization_secondary_color_option).';';
$ngo_organization_tp_theme_css .='}';
}

if($ngo_organization_secondary_color_option != false){
$ngo_organization_tp_theme_css .='.page-box a h1, h2, h3, h4, h5, h6,.page-box h4 a , .readmore-btn a, #theme-sidebar h3, form.customize-unpreviewable, form.customize-unpreviewable input, form.customize-unpreviewable select, form.customize-unpreviewable button, a.customize-unpreviewable, area.customize-unpreviewable , .entry-content a{';
$ngo_organization_tp_theme_css .='color: '.esc_attr($ngo_organization_secondary_color_option).';';
$ngo_organization_tp_theme_css .='}';
}
if($ngo_organization_secondary_color_option != false){
$ngo_organization_tp_theme_css .='.wp-block-quote:not(.is-large):not(.is-style-large){';
$ngo_organization_tp_theme_css .='border-color: '.esc_attr($ngo_organization_secondary_color_option).';';
$ngo_organization_tp_theme_css .='}';
}

if($ngo_organization_secondary_color_option != false){
$ngo_organization_tp_theme_css .='@media screen and (max-width: 1000px){';
$ngo_organization_tp_theme_css .='.menubar .nav ul li{';
	$ngo_organization_tp_theme_css .='border-top-color: '.esc_attr($ngo_organization_secondary_color_option).';';
$ngo_organization_tp_theme_css .='} }';
}

// secondary-color

$ngo_organization_main_color_option = get_theme_mod('ngo_organization_main_color_option');

if($ngo_organization_main_color_option != false){
$ngo_organization_tp_theme_css .='.donate-btn-1,.more-btn a ,#our-funds .fund-box h6 , .woocommerce ul.products li.product .button, #our-funds .progress-bar, .next, .page-numbers:hover,  .next,.woocommerce ul.products li.product .button,.next,.page-numbers:hover, .main-navigation ul ul{';
$ngo_organization_tp_theme_css .='background: '.esc_attr($ngo_organization_main_color_option).';';
$ngo_organization_tp_theme_css .='}';
}
if($ngo_organization_main_color_option != false){
$ngo_organization_tp_theme_css .='@media screen and (max-width: 1000px){';
$ngo_organization_tp_theme_css .='.sidenav{';
	$ngo_organization_tp_theme_css .='background: '.esc_attr($ngo_organization_main_color_option).';';
$ngo_organization_tp_theme_css .='} }';
}

if($ngo_organization_main_color_option != false){
$ngo_organization_tp_theme_css .=' .logo h1 a, .topbar i,.entry-title h1, nav.woocommerce-MyAccount-navigation ul li a ,nav.woocommerce-MyAccount-navigation ul li a ,nav.woocommerce-MyAccount-navigation ul li a ,h2.woocommerce-loop-product__title, .woocommerce div.product .product_title, h1, h2, h3, h4, h5, h6, .box-info i, .main-navigation a .logo h1 a, .logo p a ,span.percent, .main-navigation  :hover , #footer table#wp-calendar ,.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a,.page-numbers:hover{';
$ngo_organization_tp_theme_css .='color: '.esc_attr($ngo_organization_main_color_option).';';
$ngo_organization_tp_theme_css .='}';
}

if($ngo_organization_main_color_option != false){
$ngo_organization_tp_theme_css .='nav.woocommerce-MyAccount-navigation ul li  {';
$ngo_organization_tp_theme_css .='border-color: '.esc_attr($ngo_organization_main_color_option).';';
$ngo_organization_tp_theme_css .='}';
}

if($ngo_organization_main_color_option != false){
$ngo_organization_tp_theme_css .='nav.woocommerce-MyAccount-navigation ul li  {';
$ngo_organization_tp_theme_css .='box-shadow: '.esc_attr($ngo_organization_main_color_option).'px;';
$ngo_organization_tp_theme_css .='}';
}



//hover color
$ngo_organization_tp_color_option_link = get_theme_mod('ngo_organization_tp_color_option_link');

if($ngo_organization_tp_color_option_link != false){
$ngo_organization_tp_theme_css .='#return-to-top:hover, #footer button[type="submit"]:hover,#theme-sidebar button[type="submit"]:hover, #theme-sidebar .tagcloud a:hover {';
	$ngo_organization_tp_theme_css .='background: '.esc_attr($ngo_organization_tp_color_option_link).';';
$ngo_organization_tp_theme_css .='}';
}
if($ngo_organization_tp_color_option_link != false){
$ngo_organization_tp_theme_css .=' .logo h1 :hover,.topbar i :hover,.calendar_wrap  a:hover , #footer li a:hover, .next.page-numbers:hover 
#theme-sidebar a:hover,#theme-sidebar a:hover {';
	$ngo_organization_tp_theme_css .='color: '.esc_attr($ngo_organization_tp_color_option_link).';';
$ngo_organization_tp_theme_css .='}';
}
if($ngo_organization_tp_color_option_link != false){
$ngo_organization_tp_theme_css .='#footer .tagcloud a:hover{';
	$ngo_organization_tp_theme_css .='border-color: '.esc_attr($ngo_organization_tp_color_option_link).';';
$ngo_organization_tp_theme_css .='}';
}

//preloader//

$ngo_organization_tp_preloader_color1_option = get_theme_mod('ngo_organization_tp_preloader_color1_option');
$ngo_organization_tp_preloader_color2_option = get_theme_mod('ngo_organization_tp_preloader_color2_option');
$ngo_organization_tp_preloader_bg_option = get_theme_mod('ngo_organization_tp_preloader_bg_option');


if($ngo_organization_tp_preloader_color1_option != false){
$ngo_organization_tp_theme_css .='.center1{';
	$ngo_organization_tp_theme_css .='border-color: '.esc_attr($ngo_organization_tp_preloader_color1_option).' !important;';
$ngo_organization_tp_theme_css .='}';
}
if($ngo_organization_tp_preloader_color1_option != false){
$ngo_organization_tp_theme_css .='.center1 .ring::before{';
	$ngo_organization_tp_theme_css .='background: '.esc_attr($ngo_organization_tp_preloader_color1_option).' !important;';
$ngo_organization_tp_theme_css .='}';
}
if($ngo_organization_tp_preloader_color2_option != false){
$ngo_organization_tp_theme_css .='.center2{';
	$ngo_organization_tp_theme_css .='border-color: '.esc_attr($ngo_organization_tp_preloader_color2_option).' !important;';
$ngo_organization_tp_theme_css .='}';
}
if($ngo_organization_tp_preloader_color2_option != false){
$ngo_organization_tp_theme_css .='.center2 .ring::before{';
	$ngo_organization_tp_theme_css .='background: '.esc_attr($ngo_organization_tp_preloader_color2_option).' !important;';
$ngo_organization_tp_theme_css .='}';
}
if($ngo_organization_tp_preloader_bg_option != false){
$ngo_organization_tp_theme_css .='.loader{';
	$ngo_organization_tp_theme_css .='background: '.esc_attr($ngo_organization_tp_preloader_bg_option).';';
$ngo_organization_tp_theme_css .='}';
}

// footer-bg-color
$ngo_organization_tp_footer_bg_color_option = get_theme_mod('ngo_organization_tp_footer_bg_color_option');

if($ngo_organization_tp_footer_bg_color_option != false){
$ngo_organization_tp_theme_css .='#footer{';
	$ngo_organization_tp_theme_css .='background: '.esc_attr($ngo_organization_tp_footer_bg_color_option).' !important;';
$ngo_organization_tp_theme_css .='}';
}

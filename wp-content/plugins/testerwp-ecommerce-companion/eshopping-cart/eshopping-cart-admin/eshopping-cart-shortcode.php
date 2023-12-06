<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
function eshopping_cart_shortcode_template($section_name=''){
	switch ($section_name){
	case 'eshopping_cart_show_frontpage':
	$section = array(
                                                    'front-topslider',
                                                    'front-fbanner',
                                                    'front-categoryslider',
                                                    'front-tabproduct',
                                                    'front-ribbon',
                                                    'front-tabproductimage',
                                                    'front-productslider',
                                                    'front-bloglist',
                                                    'front-highlight',                                             
    );
    foreach($section as $value):
    require_once (TESTERWP_CUSTOMIZER_PLUGIN_PATH . 'eshopping-cart/eshopping-cart-front-page/'.$value.'.php');
    endforeach;
    break;
	}
}
function eshopping_cart_shortcodeid_data($atts){
    $output = '';
    $pull_quote_atts = shortcode_atts(array(
        'section' => ''
            ), $atts);
    $section_name = wp_kses_post($pull_quote_atts['section']);
  	$output = eshopping_cart_shortcode_template($section_name);
    return $output;
}
add_shortcode('eshopping-cart', 'eshopping_cart_shortcodeid_data');
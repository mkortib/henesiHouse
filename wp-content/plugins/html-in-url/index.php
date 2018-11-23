<?php
/*
Plugin Name: .html in url
Plugin URI: http://www.witsolution.in/
Description: Adds .html to pages.
Author: witsolution
Version: 1.1
Author URI: http://www.witsolution.in/
*/

add_action('init', 'witsolution_page_permalink', -1);
register_activation_hook(__FILE__, 'witsolution_active');
register_deactivation_hook(__FILE__, 'witsolution_deactive');


function witsolution_page_permalink() {
	global $wp_rewrite;
 if ( !strpos($wp_rewrite->get_page_permastruct(), '.html')){
		$wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
 }
}
add_filter('user_trailingslashit', 'witsolution_page_slash',66,2);
function witsolution_page_slash($string, $type){
   global $wp_rewrite;
	if ($wp_rewrite->using_permalinks() && $wp_rewrite->use_trailing_slashes==true && $type == 'page'){
		return untrailingslashit($string);
  }else{
   return $string;
  }
}

function witsolution_active() {
	global $wp_rewrite;
	if ( !strpos($wp_rewrite->get_page_permastruct(), '.html')){
		$wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
 }
  $wp_rewrite->flush_rules();
}	
	function witsolution_deactive() {
		global $wp_rewrite;
		$wp_rewrite->page_structure = str_replace(".html","",$wp_rewrite->page_structure);
		$wp_rewrite->flush_rules();
	}
?>
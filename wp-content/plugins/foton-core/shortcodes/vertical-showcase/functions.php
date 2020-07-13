<?php

if(!function_exists('foton_core_add_vertical_showcase_shortcodes')) {
	function foton_core_add_vertical_showcase_shortcodes($shortcodes_class_name) {
		$shortcodes = array(
			'FotonCore\CPT\Shortcodes\VerticalShowcase\VerticalShowcase'
		);
		
		$shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);
		
		return $shortcodes_class_name;
	}
	
	add_filter('foton_core_filter_add_vc_shortcode', 'foton_core_add_vertical_showcase_shortcodes');
}
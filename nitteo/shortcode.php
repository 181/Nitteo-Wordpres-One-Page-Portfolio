<?php

function caption_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => 'caption',
	), $atts ) );

	return '<li class="mix mix_all ' . esc_attr($class) . '" style="display: inline-block;  opacity: 1;">' . $content . '</li>';
}

function image_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'category' => 'caption',
	), $atts ) );

	return '<li class="mix mix_all ' . esc_attr($category) . '" style="display: inline-block;  opacity: 1;">' . $content . '</li>';
}

function video_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'url' => 'caption',
                'category' => 'caption'
	), $atts ) );

	return '<li class="mix mix_all ' . esc_attr($category) . '" style="display: inline-block;  opacity: 1;"><a class="popup-vimeo" href="' . esc_attr($url) . '">' . $content . '</a></li>';
}


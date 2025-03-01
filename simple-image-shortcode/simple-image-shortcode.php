<?php
/**
 * Plugin Name: Simple Image Shortcode
 * Plugin URI: http://dzero1.github.io/
 * Description: A simple shortcode to display an image with optional attributes.
 * Version: 1.0
 * Author: Dananjaya
 * Author URI: http://dzero1.github.io/
 */

function simple_image_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'src' => '',
            'alt' => '',
            'width' => '',
            'height' => '',
            'class' => '',
        ),
        $atts,
        'img'
    );

    if (empty($atts['src'])) {
        return 'No image source provided.';
    }

    $img = '<img src="' . esc_url($atts['src']) . '"';

    if (!empty($atts['alt'])) {
        $img .= ' alt="' . esc_attr($atts['alt']) . '"';
    }
    if (!empty($atts['width'])) {
        $img .= ' width="' . esc_attr($atts['width']) . '"';
    }
    if (!empty($atts['height'])) {
        $img .= ' height="' . esc_attr($atts['height']) . '"';
    }
    if (!empty($atts['class'])) {
        $img .= ' class="' . esc_attr($atts['class']) . '"';
    }

    $img .= ' />';

    return $img;
}

add_shortcode('img', 'simple_image_shortcode');

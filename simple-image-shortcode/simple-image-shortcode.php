<?php
/**
 * Plugin Name: Simple Image Shortcode
 * Plugin URI: http://dzero1.github.io/
 * Description: A simple shortcode to display an image with optional attributes.
 * Version: 1.1
 * Author: Dananjaya
 * Author URI: http://dzero1.github.io/
 */

function simple_image_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'src' => '',
            'href' => '',
            'target' => '',
            'alt' => '',
            'width' => '',
            'height' => '',
            'class' => '',
        ),
        $atts,
        'img'
    );

    // check for src and href
    if (empty($atts['src']) || empty($atts['href'])) {
        return 'No image source provided.';
    }

    // Create the image tag using the src or href attribute provided
    $img = '<img src="' . esc_url($atts['src'] ?? $atts['href']) . '"';

    // Add optional attributes
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

    // If href attribute is provided, wrap the image in an anchor tag
    if (!empty($atts['href'])) {
        $img = '<a href="' . esc_url($atts['href']) . '" target="' . esc_attr($atts['target'] ?? '_self') . '">' . $img . '</a>';
    }

    return $img;
}

add_shortcode('img', 'simple_image_shortcode');

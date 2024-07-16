<?php
/*
Plugin Name: Random Giphy Gif
Description: Displays a random Giphy GIF based on a specified search phrase or defaulting to "Hello World".
Version: 1.1
Author: Andre Ulloa
*/

function display_random_giphy_gif($atts) {
    $atts = shortcode_atts(
        array(
            'search' => 'Hello World',
        ), 
        $atts, 
        'random_giphy_gif'
    );

    $api_key = 'YOUR_GIPHY_API_KEY'; // Replace with your Giphy API key
    $search_term = $atts['search']; // Replace with your Search Term
    $endpoint = "https://api.giphy.com/v1/gifs/search?api_key={$api_key}&q=" . urlencode($search_term) . "&limit=50";

    $response = wp_remote_get($endpoint);

    if (is_wp_error($response)) {
        return '<p>Unable to fetch GIF from Giphy.</p>';
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (empty($data['data'])) {
        return '<p>No GIFs found for the search term "' . esc_html($search_term) . '".</p>';
    }

    $random_index = array_rand($data['data']);
    $gif_url = $data['data'][$random_index]['images']['original']['url'];

    return '<img src="' . esc_url($gif_url) . '" alt="Random Giphy GIF" class="random-giphy-gif" />';
}

function register_random_giphy_shortcode() {
    add_shortcode('random_giphy_gif', 'display_random_giphy_gif');
}

add_action('init', 'register_random_giphy_shortcode');

// Add CSS for responsive image
function random_giphy_gif_styles() {
    echo '<style>
        .random-giphy-gif {
            max-width: 100%;
            height: auto;
        }
    </style>';
}
add_action('wp_head', 'random_giphy_gif_styles');

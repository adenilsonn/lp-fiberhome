<?php

function api_get_content() {
    $acf = get_fields(55);
    $content = array(
        'acfContent' => $acf
    );
    return rest_ensure_response($content);
}

function api_register_lp () {
    register_rest_route('lp/v1', '/home', array(
        'methods' => 'GET',
        'callback' => 'api_get_content'
    ));
}

add_action('rest_api_init', 'api_register_lp');

?>
<?php
if (!function_exists('bws_require_once')) {
    function bws_require_once($path = '')
    {
        $path = get_template_directory() . $path;
        file_exists($path) ? require_once($path) : null;
    }
}

// setup theme
bws_require_once('/inc/setup-theme.php');
bws_require_once('/inc/customizer.php');
bws_require_once('/inc/theme-settings.php');
bws_require_once('/inc/comment-list.php');
bws_require_once('/inc/bws-functions.php');

// Change excerpt end string
add_filter('excerpt_more', 'bws_excerpt_more');
function bws_excerpt_more(){
    return '..';
}

// Support for ACF Option page
if( function_exists('acf_add_options_page') ){
    acf_add_options_page();
}



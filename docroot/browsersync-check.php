<?php
// Function to check if a specific query parameter exists in the current URL
function isBrowserSync() {
    // Parsing the current URL
    $url = $_SERVER['REQUEST_URI'];
    $parsed_url = parse_url($url);

    // Check if the query string contains the 'v' parameter used by BrowserSync
    if (isset($parsed_url['query'])) {
        parse_str($parsed_url['query'], $query_params);
        return isset($query_params['v']);
    }
    return false;
}

// Conditionally output the meta tags
if (isBrowserSync()) {
    echo '<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">';
    echo '<meta http-equiv="Pragma" content="no-cache">';
    echo '<meta http-equiv="Expires" content="0">';
}

// Custom WPDiscuz spoiler editor button
add_filter('wpdiscuz_editor_buttons', function ($editorButtons, $uniqueId) {
    $editorButtons[] = [
        'class' => 'ql-bu-spoiler',
        'title' => 'Spoiler',
        'value' => '',
        'name' => 'bu-spoiler',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.94 17.94A10.96 10.96 0 0 1 12 19c-5 0-9.27-3.11-11-8a10.94 10.94 0 0 1 5-5.92M1 1l22 22"/><path d="M10.85 10.85a3 3 0 0 0 4.3 4.3"/><path d="M9.56 3.56A10.97 10.97 0 0 1 12 3c5 0 9.27 3.11 11 8a10.94 10.94 0 0 1-4.17 5.19"/></svg>',
    ];
    return $editorButtons;
}, 10, 2);

// Enqueue custom JavaScript and CSS for the spoiler button
function enqueue_custom_wpdiscuz_assets() {
    // Enqueue the JavaScript file
    wp_enqueue_script(
        'custom-wpdiscuz-spoiler',
        get_stylesheet_directory_uri() . '/ltm_wpdiscuz_spoiler.js',
        ['jquery'],
        '0.1.8',
        true
    );

    // Enqueue the CSS file
    wp_enqueue_style(
        'custom-wpdiscuz-spoiler-style',
        get_stylesheet_directory_uri() . '/ltm_wpdiscuz_spoiler.css',
        [],
        '0.1.0'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_wpdiscuz_assets');

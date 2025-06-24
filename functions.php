// Paste this code to your functions.php file to show all registered user meta

add_action('wp_footer', function () {
    if (!current_user_can('administrator')) return;

    $user_id = get_current_user_id();
    echo '<pre>';
    print_r(get_user_meta($user_id));
    echo '</pre>';
});

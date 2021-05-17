<?php

function piotrtest_register_styles(){
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style("piotrtest-style", get_template_directory_uri()."/assets/css/style.css", array("piotrtest-bootstrap"), $version, "all");
    wp_enqueue_style("piotrtest-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css", array(), "5.0.0", "all");
}

add_action("wp_enqueue_scripts", "piotrtest_register_styles");

function piotrtest_theme_support(){
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
}
add_action("after_setup_theme", "piotrtest_theme_support");

function piotrtest_remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'piotrtest_remove_admin_login_header');

?>
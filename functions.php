<?php

function zerohunger_enqueue_style() {
    wp_enqueue_style("zerohunger-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "zerohunger_enqueue_style");

?>
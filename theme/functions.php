<?php 

define('INCLUDES_DIR', get_template_directory() . '/includes/');

include_once INCLUDES_DIR . 'general-wp-setup.php';
include_once INCLUDES_DIR . 'enqueue.php';
include_once INCLUDES_DIR . 'acf-sync.php';
include_once INCLUDES_DIR . 'getBlocks.php';
include_once INCLUDES_DIR . 'style-editor.php';
include_once INCLUDES_DIR . 'required-plugins.php';

function enqueue_chartjs() {
    wp_enqueue_script('chart-js', 'https://cdn.jsdelivr.net/npm/chart.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_chartjs');

<?php
add_action('init', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // メニューをサポート
    register_nav_menus([
        'global_nav' => 'グローバルナビゲーション',
        'footer_nav' => 'フッターナビゲーション',
    ]);
});

function remove_jquery_migrate_notice() {
    $m= $GLOBALS['wp_scripts']->registered['jquery-migrate'];
    $m->extra['before'][]='temp_jm_logconsole = window.console.log; window.console.log=null;';
    $m->extra['after'][]='window.console.log=temp_jm_logconsole;';
}
add_action( 'init', 'remove_jquery_migrate_notice', 5 );
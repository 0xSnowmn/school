<?php
return [
    'tpl' => [
        'w_start' => TEMPLATE_PATH . 'w_start.php',
        'tpl_header' => TEMPLATE_PATH . 'header.php',
        'tpl_nav' => TEMPLATE_PATH . 'nav.php',
        ':view' => ':vie',
        'w_end' => TEMPLATE_PATH . 'w_end.php',
    ],
    'H_srcs' => [
        'CSS' => [
            'norm' => CSS . 'bootstrap.min.css',
            'fawsome' => CSS . 'animate.min.css',
            'google' => CSS . 'paper-dashboard.css',
            'mycss' => CSS . 'mycss.css'
        ],
        'JS' => [
            'modi' => JS . 'vendor/m.js'
        ]
    ],

    'F_srcs' => [
        'Jq' => JS . 'vendor/jq.js',
        'helper' => JS . 'bootstrap.min.js',
        'datatable' => JS . 'bootstrap-checkbox-radio.js',
        'main' => JS . 'chartist.min.js',
        'vue' => JS . 'bootstrap-notify.js',
        'vue-router' => 'paper-dashboard.js',
    ]

];
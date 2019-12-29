<?php
// 事件定义文件
return [
    'bind'      => [
        'UserLogin' => 'app\event\UserLogin', //自己加的
    ],

    'listen'    => [
        'AppInit'  => [],
        'HttpRun'  => [],
        'HttpEnd'  => [],
        'LogLevel' => [],
        'LogWrite' => [],
        'UserLogin'    =>    ['app\listener\UserLogin'],
    ],

    'subscribe' => [
        'app\subscribe\User',
    ],
];

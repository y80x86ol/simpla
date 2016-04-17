<?php

/*
 * 数据库配置文件
 */

return [
    //连接的数据库类型，目前仅支持mysql
    'default' => 'mysql',
    //数据库类型
    'connections' => [
        //mysql类型
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'simpla'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', '123456'),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => false,
        ],
    ]
];

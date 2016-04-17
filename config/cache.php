<?php

/**
 * 缓存配置文件
 */
return array(
    'fileSystem' => 'file', //默认为file文件缓存，目前支持file、memcache、memcached、redis、apc五种缓存
    'file' => array(
        'filePath' => CACHE_PATH
    ),
    'memcache' => array('127.0.0.1', 11211, 1),
    'memcached' => array('127.0.0.1', 11211, 1),
    'redis' => array(
        'host' => '127.0.0.1',
        'port' => '',
        'password' => '',
        'database' => '',
        'timeout' => '',
    )
);

<?php

/*
 * Bootstrap
 */

/**
 * 定义APP常量
 */
//基础路径
defined('BASE_PATH') or define('BASE_PATH', dirname(dirname(__FILE__)));
//app应用路径
defined('APP_PATH') or define('APP_PATH', BASE_PATH . '/app');
//配置文件路径
defined('CONFIG_PATH') or define('CONFIG_PATH', BASE_PATH . '/config');
//静态文件路径
defined('PUBLIC_PATH') or define('PUBLIC_PATH', BASE_PATH . '/public');
//上传地址路径
defined('UPLOAD_PATH') or define('UPLOAD_PATH', BASE_PATH . '/upload');
//缓存地址路径
defined('CACHE_PATH') or define('CACHE_PATH', BASE_PATH . '/cache');

//引入自动加载
require_once 'vendor/autoload.php';

use Illuminate\Bootstrap;

//启动程序
Bootstrap::run();
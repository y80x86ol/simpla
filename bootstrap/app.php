<?php

/*
 * Bootstrap
 */

//基础路径
defined('BASE_PATH') or define('BASE_PATH', dirname(dirname(__FILE__)));

//引入自动加载
require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use Illuminate\Bootstrap;

//启动程序
Bootstrap::run();

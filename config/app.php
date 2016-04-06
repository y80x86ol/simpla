<?php

/*
 * app配置文件
 */

return [
    //是否开启错误调试,true开启，false关闭，默认开启
    'debug' => env('APP_DEBUG', true),
    //应用名字
    'name' => 'Simpla',
    //应用地址
    'url' => 'http://localhost',
    //时间
    'timezone' => 'UTC',
    //本地语言
    'locale' => 'en',
    //应用key,应该为32位乱序字符串
    'key' => env('APP_KEY', 'SomeRandomString'),
    //主题，为空则没有主题，有值则启用主题，需要在view和public文件夹下面建立相应的主题文件夹
    'theme' => '',
    //静态文件存放文件夹,默认为public
    'public' => 'public',
    //图片上传存放文件夹，默认为upload
    'storage' => 'storage',
];

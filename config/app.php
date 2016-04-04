<?php

/*
 * app配置文件
 */

return [
	//应用名字
	'name' => 'Simpla',
	//是否开启错误调试
	'debug' => env('APP_DEBUG', true),
	//主题，为空则没有主题，有值则启用主题，需要在view和public文件夹下面建立相应的主题文件夹
	'theme' => '',
];

<?php

/*
 * 首页控制器
 */

namespace App\Controllers;

use App\Controllers\BaseController;
use Illuminate\View\View;

class IndexController extends BaseController {

	public function __construct() {
		parent::__construct();
	}

	/**
	 * 首页
	 */
	public function actionIndex() {
		View::make('index');
	}

}

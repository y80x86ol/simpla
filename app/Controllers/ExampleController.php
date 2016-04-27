<?php

/*
 * 演示控制器
 */

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Example;
use Illuminate\Cache\Cache;
use Illuminate\Config\Config;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExampleController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    /**
     * 默认主页
     */
    public function actionIndex() {
        echo '<p>I am a Example Controller</p>';
    }

    /**
     * node action
     */
    public function actionNode() {
        echo '<p>I am a Example Controller node function</p>';
    }

    /**
     * 配置文件实例
     */
    public function actionConfig() {
        //静态获取，直接使用
        //print_r(Config::getAll());
        //实例化操作获取
        $config = new Config();
        print_r($config->getAll());
    }

    /**
     * model实例
     */
    public function actionModel() {
        $example = new Example();
        $example->showMessage();

        //获取所有记录
        $all = Example::all();
        foreach ($all as $item) {
            echo '<p>' . $item->name . '</p>';
        }
        echo '<br></br>';

        //获取一条记录
        $one = Example::find(1);
        echo '<p>' . $one->name . '</p>';
        echo '<br></br>';

        //条件查询
        $condition = array(
            'name = ?', 'yang'
        );
        $where = Example::find('all', array('conditions' => $condition));
        foreach ($where as $item) {
            echo '<p>' . $item->name . '</p>';
        }
        echo '<br></br>';
    }

    /**
     * 缓存实例
     */
    public function actionCache() {
        $key = "product_page";
        //$InstanceCache = new Cache();
        $CachedString = Cache::get($key);

        if (is_null($CachedString)) {
            $CachedString = "Files Cache --> Well done !";
            // Write products to Cache in 10 minutes with same keyword
            Cache::set($key, $CachedString, 600);

            echo "FIRST LOAD // WROTE OBJECT TO CACHE // RELOAD THE PAGE AND SEE // ";
            echo $CachedString;
        } else {
            echo "READ FROM CACHE // ";
            echo $CachedString;
        }


        echo '<br /><br /><a href="/">Back to index</a>';
    }

    /**
     * 请求实例
     */
    public function actionRequest() {
        print_r(Request::getAll());
        print_r(Request::postAll());
        print_r(Request::all());
        print_r(Request::method());
    }

    /**
     * 响应实例
     */
    public function actionResponse() {
        $data = array(
            'name' => 'ken',
            'age' => '32'
        );

        echo Response::json($data);
    }

    /**
     * 静态文件实例
     */
    public function actionPublic() {
        $data = array(
            'name' => 'ken',
            'age' => 32
        );
        //$data = 'sdfsdf';
        echo $this->template->render('example/public', $data);
    }
    
    public function actionError(){
        echo 'sdfsdf'
    }

}

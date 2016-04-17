##控制器

所有控制器都继承自`BaseController`

一个标准的控制器如下

`
namespace App\Controllers;

use App\Controllers\BaseController;

class TestController extends BaseController {
    public function actionIndex() {
        echo 'hello';
    }
}
`

路由中除去域名后的第一个参数即为控制器名字，第二个参数为方法名字

比如：example/hello

将会访问exampleController中的actionHello方法

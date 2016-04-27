##控制器

所有控制器都继承自`BaseController`

一个标准的控制器如下

    namespace App\Controllers;

    use App\Controllers\BaseController;

    class TestController extends BaseController {
        public function __construct() {
            parent::__construct();
        }
        public function actionIndex() {
            echo 'hello';
        }
    }

路由中除去域名后的第一个参数即为控制器名字，第二个参数为方法名字

比如：example/hello

将会访问exampleController中的actionHello方法

注意：如果你的路由是user/manger/article/list

那么控制器为article，方法为actionList（文件存放于user/manger文件夹下） 或者 控制器为list，方法为actionIndex（文件存放于user/manger/article下）

**因为simpla默认会加载控制器中的index方法**


###控制器归类

当你的项目越来越大的时候，你的控制器需要归类进行操作

Simpla支持在App/Controllers下建立文件夹归类存放你的控制器，你可以给文件夹任意起名，不用担心系统无法找到

但是请注意，你依然需要保证所有控制器名字不一样


###注意

为了使用视图，你的控制器一定要继承父类

    parent::__construct();

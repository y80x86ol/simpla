##模块

你只需要在app/modeuls下面新建一个文件夹，名字就是你的模块名字，然后在文件夹中增加Controllers，Models，Views文件夹，和MVC写法一样即可

注意：模块的controller需要继承自ModuleController

    use Illuminate\Http\ModuleController;

    class UsermangerController extends ModuleController {
    
    }

即使你在模块下面，依然可以调用app中默认的model，因为这都是自动加载的
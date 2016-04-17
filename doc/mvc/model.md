##模型

这里的model为数据库处理层，当然，因人而异，有些同学喜欢将model视为数据库和逻辑处理的地方，有些同学喜欢将逻辑处理放在controller中

如果你的模型类，需要进行数据库操作，那么就需要继承于`ActiveRecord\Model`类

比如我们有一个model叫Example,指向user表

<pre><code>
namespace App\Models;

use ActiveRecord\Model;

class Example extends Model {

    static $table_name = 'users';
}
</code></pre>

###获取

1、获取一个主键ID的所有值

`Example::find(1)`

2、获取一个表所有值

`Example::all()`

3、根据条件获取值

<pre><code>
$condition = array(
    'name = ?', 'yang'
);
Example::find('all', array('conditions' => $condition));
</code></pre>

###更新

...


###备注

Simpla数据库操作使用了phpactiverecord类,更多核心操作请参考www.phpactiverecord.org(http://www.phpactiverecord.org/)


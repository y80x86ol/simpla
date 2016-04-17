##模型

这里的model为数据库处理层，当然，因人而异，有些同学喜欢将model视为数据库和逻辑处理的地方，有些同学喜欢将逻辑处理放在controller中

比如我们有一个model叫Example,指向user表

`
class Example extends Model {

    static $table_name = 'users';
}
`

###获取

1、获取一个主键ID的所有值

`Example::find(1)`

2、获取一个表所有值

`Example::all()`

3、根据条件获取值

`
$condition = array(
    'name = ?', 'yang'
);
Example::find('all', array('conditions' => $condition));
`

###更新

...
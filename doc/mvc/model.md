##模型

这里的model为数据库处理层，当然，因人而异，有些同学喜欢将model视为数据库和逻辑处理的地方，有些同学喜欢将逻辑处理放在controller中

如果你的模型类，需要进行数据库操作，那么就需要继承于`ActiveRecord\Model`类

比如我们有一个model叫Example,指向user表

    namespace App\Models;

    use ActiveRecord\Model;

    class Example extends Model {

        static $table_name = 'users';
    }

###获取

1、获取一个主键ID的所有值

    `Example::find(1)`

2、获取一个表所有值

    `Example::all()`

3、根据条件获取值


    $condition = array(
        'name = ?', 'yang'
    );
    Example::find('all', array('conditions' => $condition));


4、Limit & Offset

    Example::find('all', array('limit' => 10));
    Example::find('all', array('limit' => 10, 'offset' => 5));


5、Order

    Example::find('all', array('order' => 'title desc'));



6、Select

    Example::find('all', array('select' => 'id, title'));
    Example::find('all', array('select' => 'avg(price) as avg_price, avg(tax) as avg_tax'));


7、From

    Example::first(array('select'=> 'b.*', 'from' => 'books as b'));


8、Group

    Example::all(array('group' => 'price'));


9、Having

    Example::all(array('group' => 'price', 'having' => 'price > 45.00'));


10、Joins

    $join = 'LEFT JOIN authors a ON(books.author_id = a.author_id)';
    $book = Book::all(array('joins' => $join));



11、使用纯sql语句进行查询

    Example::find_by_sql('select title from `books`');


###创建

    $post = new Post();
    $post->title = 'My first blog post!!';
    $post->author_id = 5;
    $post->save();
    # INSERT INTO `posts` (title,author_id) VALUES('My first blog post!!', 5)

    # the below methods accomplish the same thing

    $attributes = array('title' => 'My first blog post!!', 'author_id' => 5);
    $post = new Post($attributes);
    $post->save();
    # same sql as above

    $post = Post::create($attributes);
    # same sql as above



###更新

    $post = Post::find(1);
    echo $post->title; # 'My first blog post!!'
    $post->title = 'Some real title';
    $post->save();
    # UPDATE `posts` SET title='Some real title' WHERE id=1

    $post->update_attributes(array('title' => 'Some other title', 'author_id' => 1));
    # UPDATE `posts` SET title='Some other title', author_id=1 WHERE id=1


###删除

    $post = Post::find(1);
    $post->delete();
    # DELETE FROM `posts` WHERE id=1

    echo $post->title; # Some other title




###备注

Simpla数据库操作使用了phpactiverecord类,更多核心操作请参考www.phpactiverecord.org(http://www.phpactiverecord.org/)


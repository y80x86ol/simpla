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

4、Limit & Offset
<pre><code>
Example::find('all', array('limit' => 10));
Example::find('all', array('limit' => 10, 'offset' => 5));
</code></pre>

5、Order
<pre><code>
Example::find('all', array('order' => 'title desc'));
</code></pre>


6、Select
<pre><code>
Example::find('all', array('select' => 'id, title'));
Example::find('all', array('select' => 'avg(price) as avg_price, avg(tax) as avg_tax'));
</code></pre>

7、From
<pre><code>
Example::first(array('select'=> 'b.*', 'from' => 'books as b'));
</code></pre>

8、Group
<pre><code>
Example::all(array('group' => 'price'));
</code></pre>

9、Having
<pre><code>
Example::all(array('group' => 'price', 'having' => 'price > 45.00'));
</code></pre>

10、Joins
<pre><code>
$join = 'LEFT JOIN authors a ON(books.author_id = a.author_id)';
$book = Book::all(array('joins' => $join));
</code></pre>


11、使用纯sql语句进行查询
<pre><code>
$Example = Book::find_by_sql('select title from `books`');
</code></pre>

###创建

<pre><code>
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
</code></pre>



###更新

<pre><code>
$post = Post::find(1);
echo $post->title; # 'My first blog post!!'
$post->title = 'Some real title';
$post->save();
# UPDATE `posts` SET title='Some real title' WHERE id=1
 
$post->update_attributes(array('title' => 'Some other title', 'author_id' => 1));
# UPDATE `posts` SET title='Some other title', author_id=1 WHERE id=1
</code></pre>

###删除

<pre><code>
$post = Post::find(1);
$post->delete();
# DELETE FROM `posts` WHERE id=1

echo $post->title; # Some other title
</code></pre>




###备注

Simpla数据库操作使用了phpactiverecord类,更多核心操作请参考www.phpactiverecord.org(http://www.phpactiverecord.org/)


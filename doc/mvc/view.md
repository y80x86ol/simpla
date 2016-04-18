##视图

一个简单的视图输出

<pre><code>
$data = array(
    'name' => 'ken',
    'age' => 23,
    'title' => 'a test page'
);
echo $this->template->render('example/public', $data);
</code></pre>

你的模板文件应该像下面这个样子

`<?php $this->layout('template', ['title' => $title]) ?>`

`<h1>User Profile</h1>`

`<p>Hello, <?php echo $this->e($name)?></p>`

因为这是一个模板系统，不是模板引擎，你可以直接书写任何PHP语言，而不用担心去学习一门新的模板语言，这也是完全没有必要的。

因为上面加载了一个layout，所以你还需要一个layout布局页面

`<html>`

`<head>`

    `<title><?php echo $this->e($title)?></title>`

`</head>`

`<body>`

`<?php echo $this->section('content')?>`

`</body>`

`</html>`

###安全输出

为了你的输出是安全的，你应该在模板中使用`$this->e()`来输出变量

###备注

Simpla缓存操作使用了php的plates类，plates是php原生模板系统，不是PHP模板引擎，更多核心操作请参考platesphp.com(http://platesphp.com/)
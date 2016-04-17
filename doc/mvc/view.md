##视图

<pre><code>
$data = array(
    'name' => 'ken',
    'age' => 23
);
echo $this->template->render('example/public', $data);
</code></pre>

###备注

Simpla缓存操作使用了php的plates类，plates是php原生模板系统，不是PHP模板引擎，更多核心操作请参考platesphp.com(http://platesphp.com/)
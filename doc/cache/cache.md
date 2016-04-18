##缓存

1、读取缓存

`Cache::get('key')`

2、设置缓存

`Cache::set('key','value')`

3、设置缓存周期

`Cache::set('key', 'value', 3600*24);`

4、值增加

`Cache::increment('key')`
`Cache::increment('key', 4)`

5、值减少

`Cache::decrement('key')`
`Cache::decrement('key', 5)`

6、删除缓存

`Cache::delete('key')`

...

###备注

Simpla缓存操作使用了phpfastcache类,对phpfastcache类进行了简单封装操作,更多核心操作请参考www.phpfastcache.com(http://www.phpfastcache.com/)

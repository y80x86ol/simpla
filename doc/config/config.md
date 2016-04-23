##配置文件

配置文件已经初始化，你只需要`Config::get()`方式皆可获取配置文件

`Config::get('app')` 获取APP配置文件

`Config::get('database')` 获取数据库配置文件

`Config::get('cache')` 获取缓存配置文件

`Config::all()` 获取所有配置文件

如果你要获取具体配置，可以这样书写

`Config::get('app.debug')` 获取app配置文件中的debug参数信息
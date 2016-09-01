<?php
return array(
    'STATIC' => WEB_PATH.'static/frontend/',
	'CSS_PATH' =>   WEB_PATH.'static/frontend/css/',
    'JS_PATH' =>    WEB_PATH.'static/frontend/js/',
    'IMG_PATH' =>   WEB_PATH.'static/frontend/images/',
	'ADMIN_CSS' =>   WEB_PATH.'static/manage/css/',
    'ADMIN_JS' =>    WEB_PATH.'static/manage/js/',
    'ADMIN_IMG' =>   WEB_PATH.'static/manage/img/',
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'tblog', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => 'root', // 密码
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX' => 'hf_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志
);
Php-Object-Framework
====================

PHP 面向对象框架
//表模型数据
return array(
    'table_name'=>'user',
    'primary_key'=>'id',
    'field'=>array(
        'id'=>'string',
    ),
);
//数据库
array(
    'engine' => 'mysql',
    'host' => '127.0.0.1',
    'unix_socket' => '/path/to/socket',
    'port' => '3306',
    'database' => 'test',
    'user' => 'root',
    'password' => '',
    'charset' => 'UFT8',
    'options' = array(
                 /**
                  * 防注入
                  */
                 PDO::ATTR_EMULATE_PREPARES => false
             )
);
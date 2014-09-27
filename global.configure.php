<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-10
 * Time: 上午9:55
 */

/**
 * @desc 根目录
 */
define('ROOT_PATH', __DIR__);

/**
 * @desc WEB层命名空间路径
 */
define('WEB_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'Web');

/**
 * @desc 客户端代码层命名空间路径
 */
define('CLIENT_PATH', WEB_PATH . DIRECTORY_SEPARATOR . 'Client');

/**
 * @desc 服务端代码层命名空间路径
 */
define('SERVER_PATH', WEB_PATH . DIRECTORY_SEPARATOR . 'Server');

/**
 * @desc 服务端代码基类
 */
define('SERVER_BASE', SERVER_PATH . DIRECTORY_SEPARATOR . 'BaseServer.php');

/**
 * @desc 数据库错误日志路径
 */
define('DB_ERROR_LOG', ROOT_PATH . DIRECTORY_SEPARATOR . 'DBLog' . DIRECTORY_SEPARATOR . 'Error');

/**
 * @desc 数据库操作日志路径
 */
define('DB_ACTION_LOG', ROOT_PATH . DIRECTORY_SEPARATOR . 'DBLog' . DIRECTORY_SEPARATOR . 'Action');

/**
 * @desc 数据库连接字符串
 */
define('MYSQL_PDO_CONN_STR_1', 'mysql:host=localhost;dbname=test;charset=utf8');
define('MYSQL_DB_USER_1', 'root');
define('MYSQL_DB_PWD_1', '');
define('MYSQL_PDO_CONN_STR_2', 'mysql:host=localhost;dbname=test');


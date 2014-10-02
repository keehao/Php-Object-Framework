<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-30
 * Time: 下午3:29
 */

namespace HTFramework\DB;


class DB
{
    private static $instance;
    private $database;

    public static function &get_instance()
    {
        if (!self::$instance) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function __construct()
    {
        $this->database = new HTDatabase();
    }

    public function insert()
    {
        return new HTDatabase();
    }

    public function delete()
    {
        return new HTDatabase();
    }

    public function update()
    {
        return new HTDatabase();
    }

    public function select(HTSql $sql)
    {
        return new HTDatabase();
    }
} 
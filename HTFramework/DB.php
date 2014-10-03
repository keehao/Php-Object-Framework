<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-30
 * Time: 下午3:29
 */

namespace HTFramework\DB;


use HTFramework\StaticLib\HTStaticDbConfigure;

class DB
{
    private static $instance;

    public static function &get_instance()
    {
        if (!self::$instance) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function __construct()
    {
    }

    public function database($database)
    {
        return new HTDatabase(require_once($database));
    }

    public function table($table)
    {
        return new HTTableInfo(require_once($table));
    }

    public function sql()
    {

    }

    public function insert(HTTableInfo $table)
    {

    }

    public function delete(HTTableInfo $table)
    {

    }

    public function update(HTTableInfo $table)
    {

    }

    public function select(HTSql $sql)
    {
    }


} 
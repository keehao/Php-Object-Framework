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

    public static function &get_instance()
    {
        if (!self::$instance) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function insert()
    {

    }

    public function delete()
    {

    }

    public function update()
    {

    }

    public function select()
    {

        new HTBigDatabase();
        new HTDatabase();
    }
} 
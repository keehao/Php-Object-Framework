<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-30
 * Time: 下午3:29
 */

namespace HTFramework\DB;


class DB extends HTDatabase
{
    private static  $instance;

    public static function &get_instance()
    {
        if (!self::$instance) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function __construct()
    {
        parent::__construct();
    }
} 
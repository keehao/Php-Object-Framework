<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-30
 * Time: 下午4:09
 */

namespace HTFramework\DB;


class SQL {

    public static function &get_instance()
    {
        if (!self::$instance) {
            self::$instance = new SQL();
        }
        return self::$instance;
    }

    public function __construct()
    {

    }
} 
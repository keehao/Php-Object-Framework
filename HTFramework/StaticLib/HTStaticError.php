<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-29
 * Time: 上午11:42
 */

namespace HTFramework\StaticLib;
use Exception;

class HTStaticError
{
    public static function error_abstract_factory_info()
    {
        throw new Exception('为未定义属性赋值',10000001);
    }

    public static function error_type($type)
    {

    }
} 
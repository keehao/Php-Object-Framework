<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-29
 * Time: 下午4:34
 */

namespace HTFramework\DevelopmentModel\AbstractFactory;


abstract class HTBaseBLL
{
    /**
     * @desc 构造方法
     */
    abstract public function __construct();

    /**
     * @desc 析构方法
     */
    abstract public function __destruct();
} 
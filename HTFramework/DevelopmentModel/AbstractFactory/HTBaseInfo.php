<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-29
 * Time: 下午1:43
 */

namespace HTFramework\DevelopmentModel\AbstractFactory;

use HTFramework\Library\HTException;
trait HTBaseInfo
{

    /**
     * @param $property_name
     * @param $value
     * @throws \HTFramework\Library\HTException
     * @desc 设置私有属性
     */
    public function __set($property_name, $value)
    {
        if (property_exists($this, $property_name)) {
            $this->$property_name = $value;
        } else {
            throw new HTException(__CLASS__);
        }
    }

    /**
     * @param $property_name
     * @return null
     * @desc 获取私有属性
     */
    public function __get($property_name)
    {
        if (property_exists($this, $property_name)) {
            return ($this->$property_name);
        } else {
            return (null);
        }
    }
} 
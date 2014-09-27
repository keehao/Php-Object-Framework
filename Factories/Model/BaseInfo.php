<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-10
 * Time: 上午11:49
 */

namespace Factories\Model;


abstract class BaseInfo
{
    /**
     * 设置私有属性值
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param $s_propertyName
     * @param $m_value
     * @return void
     */
    abstract public function __set($s_propertyName, $m_value);

    /**
     * 获取私有属性值
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param $s_propertyName
     * @return $this->$s_propertyName
     */
    abstract public function __get($s_propertyName);
} 
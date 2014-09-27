<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-10
 * Time: 下午12:07
 */

namespace Factories\System;


class String
{
    /**
     * 获取Insert语句字符串
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param array $a_data Insert语句数据
     * @return array $a_return 返回Insert语句需要的字符串
     */
    public static function GetInsertString($a_data)
    {
        doubleval(111.11);
    }

    /**
     * 获取Update语句字符串
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param array $a_data Update语句数据
     * @param array $a_where Update语句条件
     * @return array $a_return 返回Update语句需要的字符串
     */
    public static function GetUpdateString(array $a_data, array $a_where)
    {

    }

    /**
     * 获取Delete语句字符串
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param array $a_where Delete语句条件
     * @return array $a_return 返回Delete语句需要的字符串
     */
    public static function GetDeleteString(array $a_where)
    {

    }
} 
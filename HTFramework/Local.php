<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-26
 * Time: 下午4:15
 */

namespace HTFramework;


class Local
{

    /**
     * @return array
     * @desc 返回包含本地数字及货币信息格式的数组。
     */
    public static function localeconv()
    {
        return localeconv();
    }

    /**
     * @param $item
     * @return string
     * @desc 返回指定的本地信息。
     */
    public static function nl_langinfo($item)
    {
        return nl_langinfo($item);
    }

    /**
     * @param $category
     * @param $locale
     * @param null $_
     * @return string
     * @desc 设置地区信息（地域信息）。
     */
    public static function setlocale($category, $locale, $_ = null)
    {
        return setlocale($category, $locale, $_);
    }
} 
<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-28
 * Time: 上午10:19
 */

namespace HTFramework\StaticLib;


use HTFramework\HTArray;

final class HTStaticArray
{


    /**
     * @param $start_index
     * @param $num
     * @param $value
     * @return HTArray
     * @desc 用给定的值填充数组。
     */
    public static function array_fill($start_index, $num, $value)
    {
        return new HTArray(array_fill($start_index, $num, $value));
    }

    /**
     * @param HTArray $var_array
     * @param null $extract_type
     * @param null $prefix
     * @return int
     * @desc 从数组中将变量导入到当前的符号表。
     */
    public static function extract(HTArray $var_array, $extract_type = null, $prefix = null)
    {
        return extract((array)$var_array, $extract_type, $prefix);
    }

    /**
     * @param $low
     * @param $high
     * @param null $step
     * @return HTArray
     * @desc 建立一个包含指定范围的元素的数组。
     */
    public static function range($low, $high, $step = null)
    {
        return new HTArray(range($low, $high, $step));
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-27
 * Time: 下午12:50
 */

namespace HTFramework\StaticLib;

use HTFramework\HTNumber;

final class HTStaticMath
{

    /**
     * @return HTNumber
     * @desc 显示随机数最大的可能值。
     */
    public static function getrandmax()
    {
        return new HTNumber(getrandmax());
    }

    /**
     * @param $number
     * @return bool
     * @desc 判断是否为合法数值。
     */
    public static function is_nan($number)
    {
        return is_nan($number);
    }

    /**
     * @return HTNumber
     * @desc 返回范围为 (0, 1) 的一个伪随机数。。
     */
    public static function lcg_value()
    {
        return new HTNumber(lcg_value());
    }

    /**
     * @return HTNumber
     * @desc 返回调用 mt_rand() 所能返回的最大的随机数。
     */
    public static function mt_getrandmax()
    {
        return new HTNumber(mt_getrandmax());
    }

    /**
     * @param null $min
     * @param null $max
     * @return HTNumber
     * @desc 使用 Mersenne Twister 算法返回随机整数。
     */
    public static function mt_rand($min = null, $max = null)
    {
        return new HTNumber(mt_rand($min, $max));
    }

    /**
     * @param null $seed
     * @return void
     * @desc 播种 Mersenne Twister 随机数生成器。
     */
    public static function mt_srand($seed = null)
    {
        mt_srand($seed);
    }

    /**
     * @return float
     * @desc 返回圆周率的值。
     */
    public static function pi()
    {
        return new HTNumber(pi());
    }

    /**
     * @param null $min
     * @param null $max
     * @return int
     * @desc 返回随机整数。
     */
    public static function rand($min = null, $max = null)
    {
        return new HTNumber(rand($min, $max));
    }

    /**
     * @param null $seed
     * @return void
     * @desc 平方根。
     */
    public static function srand($seed = null)
    {
        srand($seed);
    }
} 
<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-27
 * Time: 下午12:50
 */

namespace HTFramework\Lib;


class HTMath
{

    /**
     * @return int
     * @desc 显示随机数最大的可能值。
     */
    public static function getrandmax()
    {
        return getrandmax();
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
     * @return int
     * @desc 返回范围为 (0, 1) 的一个伪随机数。。
     */
    public static function lcg_value()
    {
        return lcg_value();
    }

    /**
     * @return int
     * @desc 返回调用 mt_rand() 所能返回的最大的随机数。
     */
    public static function mt_getrandmax()
    {
        return mt_getrandmax();
    }

    /**
     * @param null $min
     * @param null $max
     * @return int
     * @desc 使用 Mersenne Twister 算法返回随机整数。
     */
    public static function mt_rand($min = null, $max = null)
    {
        return mt_rand($min, $max);
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
        return pi();
    }

    /**
     * @param null $min
     * @param null $max
     * @return int
     * @desc 返回随机整数。
     */
    public static function rand($min = null, $max = null)
    {
        return rand($min, $max);
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
<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-25
 * Time: 下午6:33
 */

namespace HTFramework;


final class HTNumber
{
    private $number;
    private $current;

    public function __construct($number = 0)
    {
        if (is_numeric($number)) {
            $this->number = $number;
            $this->current = $this->number;
        } else {

        }
    }

    public function toHTString()
    {
        return new HTString((string)$this->number);
    }

    public function toInt()
    {
        $number = (int)$this->current;
        $this->current = $this->number;
        return $number;
    }

    public function toDouble()
    {
        $number = doubleval($this->current);
        $this->current = $this->number;
        return $number;
    }

    /**
     * @param int $decimals
     * @param string $dec_point
     * @param string $thousands_sep
     * @return $this
     * @desc 通过千位分组来格式化数字。
     */
    public function number_format($decimals = 0, $dec_point = '.', $thousands_sep = ',')
    {
        $this->current = number_format($this->current, $decimals, $dec_point, $thousands_sep);
        return $this;
    }

    /**
     * @return $this
     * @desc 绝对值。
     */
    public function abs()
    {
        $this->current = abs($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 反余弦。
     */
    public function acos()
    {
        $this->current = acos($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 反双曲余弦。
     */
    public function acosh()
    {
        $this->current = acosh($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 反正弦。
     */
    public function asin()
    {
        $this->current = asin($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 反双曲正弦。
     */
    public function asinh()
    {
        $this->current = asinh($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 反正切。
     */
    public function atan()
    {
        $this->current = atan($this->toDouble());
        return $this;
    }

    /**
     * @param $x
     * @return $this
     * @desc 两个参数的反正切。
     */
    public function atan2($x)
    {
        $this->current = atan2($this->toDouble(), doubleval($x));
        return $this;
    }

    /**
     * @return $this
     * @desc 反双曲正切。
     */
    public function atanh()
    {
        $this->current = atanh($this->toDouble());
        return $this;
    }

    /**
     * @param $frombase
     * @param $tobase
     * @return $this
     * @desc 在任意进制之间转换数字。
     */
    public function base_convert($frombase, $tobase)
    {
        $this->current = base_convert($this->current, $frombase, $tobase);
        return $this;
    }

    /**
     * @return $this
     * @desc 把二进制转换为十进制。
     */
    public function bindec()
    {
        $this->current = bindec($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 把十进制转换为二进制。
     */
    public function decbin()
    {
        $this->current = decbin($this->toInt());
        $this->current = $this->toHTString();
        return $this;
    }

    /**
     * @return $this
     * @desc 把十进制转换为十六进制。
     */
    public function dechex()
    {
        $this->current = dechex($this->toInt());
        $this->current = $this->toHTString();
        return $this;
    }

    /**
     * @return $this
     * @desc 把十六进制转换为十进制。
     */
    public function hexdec()
    {
        $this->current = hexdec($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 把十进制转换为八进制。
     */
    public function decoct()
    {
        $this->current = decoct($this->toInt());
        $this->current = $this->toHTString();
        return $this;
    }

    /**
     * @return $this
     * @desc 把八进制转换为十进制。
     */
    public function octdec()
    {
        $this->current = octdec($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 向上舍入为最接近的整数。
     */
    public function ceil()
    {
        $this->current = ceil($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 余弦。
     */
    public function cos()
    {
        $this->current = cos($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 余弦。
     */
    public function cosh()
    {
        $this->current = cosh($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 将角度转换为弧度。
     */
    public function deg2rad()
    {
        $this->current = deg2rad($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 返回 Ex 的值。
     */
    public function exp()
    {
        $this->current = exp($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 返回 Ex - 1 的值。
     */
    public function expm1()
    {
        $this->current = expm1($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 向下舍入为最接近的整数。
     */
    public function floor()
    {
        $this->current = floor($this->toDouble());
        return $this;
    }

    /**
     * @param $y
     * @return $this
     * @desc 返回除法的浮点数余数。
     */
    public function fmod($y)
    {
        $this->current = fmod($this->toDouble(), doubleval($y));
        return $this;
    }

    /**
     * @param $y
     * @return $this
     * @desc 计算直角三角形的斜边长度。
     */
    public function hypot($y)
    {
        $this->current = hypot($this->toDouble(), doubleval($y));
        return $this;
    }

    /**
     * @return $this
     * @desc 判断是否为有限值。
     */
    public function is_finite()
    {
        return is_finite($this->toDouble());
    }

    /**
     * @return $this
     * @desc 判断是否为无限值。
     */
    public function is_infinite()
    {
        return is_infinite($this->toDouble());
    }

    /**
     * @param null $base
     * @return $this
     * @desc 自然对数。
     */
    public function log($base = null)
    {
        $this->current = log($this->toDouble(), $base);
        return $this;
    }

    /**
     * @return $this
     * @desc 以 10 为底的对数。
     */
    public function log10()
    {
        $this->current = log10($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 返回 log(1 + number)。
     */
    public function log1p()
    {
        $this->current = log1p($this->toDouble());
        return $this;
    }

    /**
     * @param $value2
     * @return $this
     * @desc 返回最大值。
     */
    public function max($value2)
    {
        $this->current = max($this->toDouble(), $value2);
        return $this;
    }

    /**
     * @param $value2
     * @return $this
     * @desc 返回最小值。
     */
    public function min($value2)
    {
        $this->current = min($this->toDouble(), $value2);
        return $this;
    }

    /**
     * @param $exp
     * @return $this
     * @desc 返回 x 的 y 次方。
     */
    public function pow($exp)
    {
        $this->current = pow($this->curren, $exp);
        return $this;
    }

    /**
     * @return $this
     * @desc 把弧度数转换为角度数。
     */
    public function rad2deg()
    {
        $this->current = rad2deg($this->toDouble());
        return $this;
    }

    /**
     * @param int $precision
     * @param int $mode
     * @return $this
     * @desc 对浮点数进行四舍五入。
     */
    public function round($precision = 0, $mode = PHP_ROUND_HALF_UP)
    {
        $this->current = round($this->toDouble(), $precision, $mode);
        return $this;
    }

    /**
     * @return $this
     * @desc 正弦。
     */
    public function sin()
    {
        $this->current = sin($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 双曲正弦。
     */
    public function sinh()
    {
        $this->current = sinh($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 平方根。
     */
    public function sqrt()
    {
        $this->current = sqrt($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 正切。
     */
    public function tan()
    {
        $this->current = tan($this->toDouble());
        return $this;
    }

    /**
     * @return $this
     * @desc 双曲正切。
     */
    public function tanh()
    {
        $this->current = tanh($this->toDouble());
        return $this;
    }

}
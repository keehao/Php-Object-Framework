<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-25
 * Time: 下午6:33
 */

namespace std;


class HTString
{
    private $string;

    public function __construct($string = '')
    {
        if (is_string($string)) {
            $this->string = $string;
        } else {

        }
    }

    public function __toString()
    {
        return $this->string;
    }

    public function toInt()
    {

    }


    /**
     * (PHP 4, PHP 5)<br/>
     * Make a string uppercase
     * @link http://php.net/manual/en/function.strtoupper.php
     * @internal param string <p>
     * The input string.
     * </p>
     * @return string the uppercased string.
     */
    function strtoupper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Make a string lowercase
     * @link http://php.net/manual/en/function.strtolower.php
     * @internal param string
     * The input string.
     * </p>
     * @return string the lowercased string.
     */
    function strtolower()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function substr($start, $length = null)
    {
        $this->string = substr($this->string, $start, $length);
        return $this;
    }
}
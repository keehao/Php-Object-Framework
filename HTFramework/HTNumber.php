<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-26
 * Time: 上午12:19
 */

namespace HTFramework;


class HTNumber
{

    private $number;

    public function __construct($number = '')
    {
        if (is_numeric($number)) {
            $this->number = $number;
        } else {

        }
    }

    public function __toString()
    {
        return $this->number;
    }

    public function toHTString()
    {
        return new HTString("{$this->number}");
    }

    public function toInt()
    {
        $this->number = (int)$this->number;
        return $this;
    }
}
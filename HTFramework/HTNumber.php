<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-25
 * Time: 下午6:33
 */

namespace HTFramework;

class NTNumber
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

    public function __toString()
    {
        $number = $this->current;
        $this->current = $this->number;
        return $number;
    }

    public function toHTString()
    {
        return new HTString("{$this->number}");
    }

    public function toInt()
    {
        $this->current = (int)$this->current;
        return $this;
    }

    public function toDouble()
    {
        $this->current = doubleval($this->current);
        return $this;
    }
}
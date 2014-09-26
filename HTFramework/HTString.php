<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-25
 * Time: 下午6:33
 */

namespace HTFramework;

class HTString
{
    private $string;
    private $current;

    public function __construct($string = '')
    {
        if (is_string($string)) {
            $this->string = $string;
            $this->current = $this->string;
        } else {

        }
    }

    public function __toString()
    {
        $string = $this->current;
        $this->current = $this->string;
        return $string;
    }

    public function toHTNumber()
    {
        return new HTNumber($this->string);
    }
}
<?php
include_once('HTFramework/HTString.php');
include_once('HTFramework/HTNumber.php');
include_once('HTFramework/HTArray.php');
include_once('HTFramework/HTDatabase.php');
include_once('HTFramework/StaticLib/HTStaticError.php');

use HTFramework\HTString;
use HTFramework\HTArray;
use HTFramework\HTNumber;
use HTFramework\HTDatabase;
use HTFramework\StaticLib\HTStaticError;

$arr = new HTArray(array("aa","aaa"));
$str = new HTString("abc");
//echo $str . '1111111' . $str->strtoupper() . "\n";
$str = new HTString("haotian");
$num = new HTNumber("23.22");


$ccc = $num->toHTString();

$a = new HTArray(array(5,6));
$arr = array(
    'A'=>2,
    'b'=>1
);
$b = new  HTArray($arr);
$c = $b->array_pop();

trait base
{
    /**
     * 设置私有属性值
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param $s_propertyName
     * @param $m_value
     * @return void
     */
    public function __set($s_propertyName, $m_value)
    {
        if(isset($this->$s_propertyName)) {
            $this->$s_propertyName = $m_value;
        } else {
            Error::ErrorPrintNOTICE('Undefined property '. $s_propertyName . ' in ' . __CLASS__);
        }
    }

    /**
     * 获取私有属性值
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param $s_propertyName
     * @return $this->$s_propertyName
     */
    public  function __get($s_propertyName)
    {
        if(isset($this->$s_propertyName)) {
            return($this->$s_propertyName);
        } else {
            return(null);
        }
    }

}

class base2
{
    use base;
    private $a = 1;
    private $b = 2;
}

$bbbb = new base2();


class base3 {public $b='';    private $a = 1;
} $base3 = new base3();

$ReflectionClass = new ReflectionClass($base3);
var_dump( $ReflectionClass->getProperties());
<?php
include_once('HTFramework/HTString.php');
include_once('HTFramework/HTNumber.php');
include_once('HTFramework/HTArray.php');
include_once('HTFramework/DB/HTTable.php');

include_once('HTFramework/DB/HTDatabase.php');
include_once('HTFramework/StaticLib/HTStaticError.php');
include_once('HTFramework/Library/HTException.php');
include_once('HTFramework/DevelopmentModel/AbstractFactory/HTBaseInfo.php');
use HTFramework\DevelopmentModel\AbstractFactory\HTBaseInfo;
use HTFramework\HTString;
use HTFramework\HTArray;
use HTFramework\HTNumber;
use HTFramework\DB\HTTable;
use HTFramework\DB\HTDatabase;

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


class base2
{
    use HTBaseInfo;
    private $a = 1;
    private $b = 2;
}

$base2 = new base2();


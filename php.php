<?php
include_once('HTFramework/HTString.php');
include_once('HTFramework/HTNumber.php');
include_once('HTFramework/HTArray.php');


use HTFramework\HTString;
use HTFramework\HTArray;
use HTFramework\HTNumber;
/*
$arr = new HTArray(array("aa","aaa"));
$str = new HTString("abc");
//echo $str . '1111111' . $str->strtoupper() . "\n";
$str = new HTString("haotian");
$num = new HTNumber("23.22");
echo $num->acosh()->toInt();


*/

$a = new HTArray(array(5,6));
$arr = array(
    'A'=>2,
    'b'=>1
);
$b = new  HTArray($arr);
$c = $b->array_combine($a)->current();
var_dump($c);
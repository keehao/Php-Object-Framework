<?php
include_once('HTFramework/HTString.php');
include_once('HTFramework/HTNumber.php');
include_once('HTFramework/HTArray.php');


use HTFramework\HTString;
use HTFramework\HTArray;
$arr = new HTArray(array("aa","aaa"));
$str = new HTString("abc");
//echo $str . '1111111' . $str->strtoupper() . "\n";
$str = new HTString("haotian");
$str->md5();
echo $str->length;
$str->HTecho();



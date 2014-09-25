<?php
use Framework\System\String;

/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-11
 * Time: 上午10:36
 */

class GlobalFunc
{
    /**
     * @var array
     * @desc 命名规则
     */
    private static $a_Rule = [
        'a' , 'b' , 'c' , 'd' , 'e' , 'f' , 'g' , 'h' , 'i' ,
        'j' , 'k' , 'l' , 'm' , 'n' , 'o' , 'p' , 'q' , 'r' ,
        's' , 't' , 'u' , 'v' , 'w' , 'x' , 'y' , 'z' , '0' ,
        '1' , '2' , '3' , '4' , '5' , '6' , '7' , '8' , '9' ,
        'A' , 'B' , 'C' , 'D' , 'E' , 'F' , 'G' , 'H' , 'I' ,
        'J' , 'K' , 'L' , 'M' , 'N' , 'O' , 'P' , 'Q' , 'R' ,
        'S' , 'T' , 'U' , 'V' , 'W' , 'X' , 'Y' , 'Z' ,
    ];

    /**
     * 验证 URL 参数是否符合规范
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param $r
     * @return bool
     */
    public static function CheckXY($r)
    {
        if (preg_match('/^[a-zA-Z0-9_]*$/', $r) === 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 注册
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param void
     * @return void
     */
    public static function Registration()
    {
        spl_autoload_register('GlobalFunc::_autoload');
    }

    /**
     * 注册回调函数
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param $s_class
     * @return void
     */
    private static function  _autoload($s_class)
    {
        $s_path = null;

        if (substr($s_class, -6) === 'Server') {
            $s_path = SERVER_PATH;
        } else {
            $s_path = ROOT_PATH;
        }

        if(file_exists($s_path . DIRECTORY_SEPARATOR . $s_class . '.php')) {
            /** @noinspection PhpIncludeInspection */
            require_once $s_path . DIRECTORY_SEPARATOR . $s_class . '.php';
        }

        unset($s_path);
    }
}
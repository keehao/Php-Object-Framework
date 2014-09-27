<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-10
 * Time: 上午11:48
 */

namespace Factories\Model;
use Factories\System\Error;


class ExemploInfo extends BaseInfo
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

    private $b_Boolean = true;
    private $i_Integer = 10;
    private $f_Float = 10.01;
    private $d_Double = 12.121212;
    private $s_Strings = 'php object framework';

    private $a_Array = array('a'=>'a');
    private $o_Object = null;

    private $r_Resource = null;

    private $n_Number1 = 12.1;
    private $n_Number2 = 12;

    private $m_Mixed = '';
}
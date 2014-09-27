<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-11
 * Time: 下午12:45
 */

use Framework\BLL\Exemplo;

class DefaultServer extends BaseServer
{
    private $BLL = null;

    /**
     * 构造方法
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param void
     * @return \DefaultServer
     */
    public function __construct()
    {
        \GlobalFunc::Registration();
        $this->BLL = new Exemplo();
    }

    /**
     * 析构方法
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param void
     * @return void
     */
    public function __destruct()
    {
        unset($this->BLL);
    }

    /**
     * 方法重载
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param $s_name
     * @param $a_arguments
     * @return void
     */
    public function __call($s_name, $a_arguments)
    {

    }

    public function main()
    {
        echo $this->BLL->demo();
    }
} 
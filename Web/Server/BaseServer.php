<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-11
 * Time: 上午10:24
 */


abstract class BaseServer
{
    /**
     * 构造方法
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param void
     * @return \BaseServer
     */
    abstract public function __construct();

    /**
     * 析构方法
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param void
     * @return void
     */
    abstract public function __destruct();

    /**
     * 方法重载
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param $s_name
     * @param $a_arguments
     * @return void
     */
    abstract public function __call($s_name, $a_arguments);
} 
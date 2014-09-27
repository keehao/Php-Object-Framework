<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-12
 * Time: 下午9:14
 */

namespace Factories\BLL;


abstract class BaseBLL
{
    /**
     * 构造方法
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param void
     * @return \Factories\BLL\BaseBLL
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

} 
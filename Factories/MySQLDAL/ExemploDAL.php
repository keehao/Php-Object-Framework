<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-10
 * Time: 上午10:56
 */

namespace Factories\MySQLDAL;
use Factories\System\MySQLHelper;
use Factories\IDAL\IExemplo;
use Factories\Model\ExemploInfo;
use Factories\DBStruct\userDBS;

class ExemploDAL extends BaseDAL implements IExemplo
{
    private $o_ExemploInfo = null;

    /**
     * 构造方法
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param void
     * @return \Factories\MySQLDAL\ExemploDAL
     */
    public function __construct()
    {
        $this->o_ExemploInfo = new ExemploInfo();
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
        unset($this->o_ExemploInfo);
    }

    /**
     * 事例方法
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param void
     * @return mixed
     */
    public function demo()
    {
        // TODO: Implement demo() method.
    }
}
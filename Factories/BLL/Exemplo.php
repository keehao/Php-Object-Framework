<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-10
 * Time: 上午11:49
 */

namespace Factories\BLL;
use Factories\System;
use Factories\DALFactory\DataAccess;
use Factories\Model\ExemploInfo;

class Exemplo extends BaseBLL
{
    private $o_DataAccess = null;
    private $o_IExemplo = null;
    private $o_ExemploInfo = null;

    /**
     * 构造方法
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param void
     * @return \Factories\BLL\Exemplo
     */
    public function __construct()
    {
        $this->o_DataAccess = new DataAccess();
        $this->o_IExemplo = $this->o_DataAccess->getIExemploObject();
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
        unset($this->o_DataAccess);
        unset($this->o_IExemplo);
        unset($this->o_ExemploInfo);
    }

    public function demo()
    {
        return $this->o_IExemplo->demo();
    }
} 
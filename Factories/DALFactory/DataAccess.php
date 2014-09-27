<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-10
 * Time: 上午10:02
 */

namespace Factories\DALFactory;
use Factories\MySQLDAL;

class DataAccess
{
    /**
     * 返回Exemplo对象
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param void
     * @return MySQLDAL\ExemploDAL
     */
    public function getIExemploObject()
    {
        return (object)new MySQLDAL\ExemploDAL();
    }
} 
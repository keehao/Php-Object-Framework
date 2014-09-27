<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-12
 * Time: 下午9:31
 */

namespace Factories\MySQLDAL;
use Factories\System\MySQLHelper;

use Factories\System\String;

abstract class BaseDAL
{
    /**
     * 构造方法
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param void
     * @return \Factories\MySQLDAL\BaseDAL
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
     * 添加数据方法
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param string $s_tableName
     * @param array $a_data
     * @param null $s_returnFieldValue
     * @return mixed $m_return
     */
    public function insert($s_tableName, array $a_data, $s_returnFieldValue = null)
    {
        $a_outing['mixed'] = null;
        $m_return = 0;
        if (!is_null($s_returnFieldValue)){
            $a_outing['mixed'] = $s_returnFieldValue;
        }
        if ( MySQLHelper::ExecuteNonQuery('INSERT INTO ' . $s_tableName . ' SET ' . String::GetInsertString($a_data), $a_data, $a_outing)) {
            if (empty($a_outing['mixed'])) {
                $m_return = $a_outing['mixed'];
            } else {
                $m_return = $a_outing['id'];
            }
        }
        return $m_return;
    }

    /**
     * 修改数据方法
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param string $s_tableName
     * @param array $a_data
     * @param array $a_where
     * @param null $s_returnCount
     * @return bool
     */
    public function update($s_tableName, array $a_data, array $a_where, &$s_returnCount = null)
    {
        $a_return = null;
        if (!is_null($s_returnCount)){
            $a_return['count'] = null;
        }
        if ( MySQLHelper::ExecuteNonQuery('UPDATE ' . $s_tableName . ' SET ' . String::GetUpdateString($a_data, $a_where), array_merge($a_data, $a_where), $a_return)) {
            if (!is_null($s_returnCount)) {
                $s_returnCount = $a_return['count'];
            }
            return true;
        }
        return false;
    }

    /**
     * 删除数据方法
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param string $s_tableName
     * @param array $a_where
     * @param null $s_returnCount
     * @return bool
     */
    public function delete($s_tableName, array $a_where, &$s_returnCount = null)
    {
        $a_return = null;
        if (!is_null($s_returnCount)){
            $a_return['count'] = null;
        }
        if ( MySQLHelper::ExecuteNonQuery('DELETE FROM ' . $s_tableName . String::GetDeleteString($a_where), $a_where, $a_return) ) {
            if (!is_null($s_returnCount)) {
                $s_returnCount = $a_return['count'];
            }
            return true;
        }
        return false;
    }
} 
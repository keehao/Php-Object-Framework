<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-10
 * Time: 上午10:06
 */

namespace Factories\System;

use PDO;
use PDOException;


class MySQLHelper extends PDO
{
    public function __construct($s_connStr = MYSQL_PDO_CONN_STR_1, $s_dbUser = MYSQL_DB_USER_1, $s_dbPwd = MYSQL_DB_PWD_1)
    {
        parent::__construct($s_connStr,
            $s_dbUser,
            $s_dbPwd,
            array(
                /**
                 * 防注入
                 */
                PDO::ATTR_EMULATE_PREPARES => false
            ));
    }
    /**
     * 执行insert update delete语句
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param string $s_sql
     * @param array $a_data
     * @param array $a_outing
     * @param string $s_connStr
     * @param string $s_dbUser
     * @param string $s_dbPwd
     * @return bool
     */
    public static function ExecuteNonQuery($s_sql, array $a_data, array &$a_outing = null, $s_connStr = MYSQL_PDO_CONN_STR_1, $s_dbUser = MYSQL_DB_USER_1, $s_dbPwd = MYSQL_DB_PWD_1)
    {
        $o_PDO = $o_PDOStatement = null;
        try {
            $o_PDO = new PDO(
                $s_connStr,
                $s_dbUser,
                $s_dbPwd,
                array(
                    /**
                     * 防注入
                     */
                    PDO::ATTR_EMULATE_PREPARES => false
                )
            );
            $o_PDO->beginTransaction();
            $o_PDOStatement = $o_PDO->prepare($s_sql);
            foreach ($a_data as $s_FieldName => $s_FieldValue) {
                if (is_int($s_FieldValue)) {
                    $o_PDOStatement->bindParam($s_FieldName, $s_FieldValue, $o_PDO::PARAM_INT);
                } else {
                    $o_PDOStatement->bindParam($s_FieldName, $s_FieldValue, $o_PDO::PARAM_STR);
                }
            }
            $o_PDOStatement->execute();
            $count = $o_PDOStatement->rowCount();
            $o_PDO->commit();
            if (0 < $count) {
                if (!is_null($a_outing)) {
                    if (isset($a_outing['mixed'])) {
                        $a_outing['mixed'] = $o_PDO->lastInsertId($a_outing['mixed']);
                    } else {
                        $a_outing['id'] = $o_PDO->lastInsertId();
                    }
                    if (isset($a_outing['count'])) {
                        $a_outing['count'] = $count;
                    }
                }
                return true;
            }
        } catch (PDOException $e) {
            Error::ErrorDbErrorLog($e->getMessage());
            $o_PDO->rollBack();
        } finally {
            unset($o_PDO);
            unset($o_PDOStatement);
        }
        $a_outing = null;
        return false;
    }

    /**
     * 执行select语句返回结果集
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param string $s_sql
     * @param array $a_data
     * @param string $s_connStr
     * @param string $s_dbUser
     * @param string $s_dbPwd
     * @return array
     */
    public static function SqlDataReader($s_sql, array $a_data, $s_connStr = MYSQL_PDO_CONN_STR_1, $s_dbUser = MYSQL_DB_USER_1, $s_dbPwd = MYSQL_DB_PWD_1)
    {
        try {

        } catch (PDOException $e) {

        } finally {

        }
    }

    /**
     * 执行select语句返回一行结果集
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param string $s_sql
     * @param array $a_data
     * @param string $s_connStr
     * @param string $s_dbUser
     * @param string $s_dbPwd
     * @return array
     */
    public static function SqlDataReaderOnly($s_sql, array $a_data, $s_connStr = MYSQL_PDO_CONN_STR_1, $s_dbUser = MYSQL_DB_USER_1, $s_dbPwd = MYSQL_DB_PWD_1)
    {
        try {

        } catch (PDOException $e) {

        } finally {

        }
    }

    /**
     * 执行select语句，返回单值
     * @access public
     * @author saligia
     * @date 2014/01/10
     * @param string $s_sql
     * @param array $a_data
     * @param string $s_connStr
     * @param string $s_dbUser
     * @param string $s_dbPwd
     * @return object
     */
    public static function ExecuteScalar($s_sql, array $a_data, $s_connStr = MYSQL_PDO_CONN_STR_1, $s_dbUser = MYSQL_DB_USER_1, $s_dbPwd = MYSQL_DB_PWD_1)
    {
        try {

        } catch (PDOException $e) {

        } finally {

        }
    }
}

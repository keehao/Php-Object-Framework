<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-10-1
 * Time: 下午12:44
 */

namespace HTFramework\DB;

use PDO;
use PDOStatement;
use HTFramework\StaticLib\HTStaticDbConfigure;
use HTFramework\Library\HTException;

class HTBigTable extends HTIterator
{
    private $temp_pointer;
    private $temp_records;
    private $records;
    private $pdo_stmt_pointer;
    private $last_pdo_stmt_pointer;
    private $pdo_stmt;
    private $run;

    /**
     * @param array $stmt
     * @param PDOStatement $stmt_total
     * @throws \HTFramework\Library\HTException
     * @desc 构造HTBigTable
     */
    public function __construct(array $stmt = null, PDOStatement $stmt_total = null)
    {
        if (is_null($stmt) || is_null($stmt_total)) {
            throw new HTException(__CLASS__);
        }
        $this->pdo_stmt_pointer = 0;
        $this->last_pdo_stmt_pointer = $this->pdo_stmt_pointer;
        $this->pointer = 0;
        $this->total = 0;
        $this->run = false;
        $this->pdo_stmt = $stmt;
        $stmt_total->execute();
        $this->total = $stmt_total->fetchColumn(0);
        $stmt_total->closeCursor();
    }

    /**
     * @param $pointer
     * @return null
     * @desc 获取HTRecord
     */
    public function get_record($pointer)
    {
        $this->notify_access();
        if (isset($this->records[$pointer])) {
            return $this->records[$pointer];
        }
        $this->set_pointer();
        $temp_record = $this->get_temp_record($pointer);
        if (!is_null($temp_record)) {
            return $temp_record;
        }
        $this->notify_access();

        return $this->get_temp_record($pointer);
    }

    /**
     * @desc  设置指针
     */
    private function set_pointer()
    {
        $this->pdo_stmt_pointer = floor($this->pointer / HTStaticDbConfigure::FIND_ALL_MAX);
        $this->temp_pointer = $this->pointer % HTStaticDbConfigure::FIND_ALL_MAX;
    }

    /**
     * @param $pointer
     * @return null
     * @desc 获取临时数据
     */
    private function get_temp_record($pointer)
    {
        if (isset($this->temp_records[$this->pdo_stmt_pointer][$this->temp_pointer])) {
            $this->records[$pointer] = $this->temp_records[$this->pdo_stmt_pointer][$this->temp_pointer];
            unset($this->temp_records[$this->pdo_stmt_pointer][$this->temp_pointer]);
            return $this->records[$pointer];
        } else {
            return (null);
        }
    }

    /**
     * @return mixed|void
     * @desc 加载数据
     */
    private function notify_access()
    {
        if (!$this->run || $this->last_pdo_stmt_pointer != $this->pdo_stmt_pointer) {
            $this->pdo_stmt[$this->pdo_stmt_pointer]->execute();
            $this->temp_records[$this->pdo_stmt_pointer] = $this->pdo_stmt[$this->pdo_stmt_pointer]->fetchAll(PDO::FETCH_CLASS);
            $this->pdo_stmt[$this->pdo_stmt_pointer]->closeCursor();
            $this->run = true;
            $this->last_pdo_stmt_pointer = $this->pdo_stmt_pointer;
            $this->total = count($this->records);
            sleep(HTStaticDbConfigure::BIG_TABLE_SLEEP);
        }
    }
}
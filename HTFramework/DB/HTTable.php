<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-28
 * Time: 下午4:54
 */

namespace HTFramework\DB;

use PDO;
use PDOStatement;
use HTFramework\Library\HTException;

abstract class HTTable extends HTIterator
{
    /**
     * @var array 数据集合
     */
    protected $records;

    private $pdo_stmt;
    private $pdo_stmt_count;
    private $count;
    private $run;

    /**
     * @param PDOStatement $stmt
     * @param PDOStatement $stmt_count
     * @throws \HTFramework\Library\HTException
     * @desc 构造HTTable
     */
    public function __construct(PDOStatement $stmt = null, PDOStatement $stmt_count = null)
    {
        if (is_null($stmt)) {
            throw new HTException(__CLASS__);
        }
        $this->total = 0;
        $this->pointer = 0;
        $this->run = false;
        $this->count = 0;
        $this->pdo_stmt = $stmt;
        if (!is_null($stmt_count)) {
            $this->pdo_stmt_count = $stmt_count;
        }
    }

    public function total()
    {
        return $this->total;
    }

    public function count()
    {
        if ($this->count == 0 && !is_null($this->pdo_stmt_count)) {
            $this->pdo_stmt_count->execute();
            $this->count = $this->pdo_stmt_count->fetchColumn(0);
            $this->pdo_stmt_count->closeCursor();
        }
        return $this->count;
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
        return (null);
    }

    /**
     * @return mixed|void
     * @desc 加载数据
     */
    private function notify_access()
    {
        if (!$this->run) {
            $this->pdo_stmt->execute();
            $this->records = $this->pdo_stmt->fetchAll(PDO::FETCH_CLASS);
            $this->pdo_stmt->closeCursor();
            $this->total = count($this->records);
            $this->run = true;
        }
    }
}

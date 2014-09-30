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

class HTDatabase extends HTTable
{
    private $pdo_stmt;
    private $pdo_stmt_count;

    private $count;
    private $run;
    private $delay;


    public function __construct(PDOStatement $stmt = null, PDOStatement $stmt_count = null, $delay = true)
    {
        $this->delay = $delay;
        $this->run = false;
        if ($this->delay) {
            parent::__construct();
            $this->count = 0;
        } else {
            parent::__construct($this->fetch_all());
        }
        if (!is_null($stmt)) {
            $this->pdo_stmt = $stmt;
        }
        if (!is_null($stmt_count)) {
            $this->pdo_stmt_count = $stmt_count;
        }
    }

    public function get_count()
    {
        if ($this->count == 0 && !is_null($this->pdo_stmt_count)) {
            $this->count = $this->pdo_stmt_count->rowCount();
            $this->pdo_stmt_count->closeCursor();
        }
        return $this->count;
    }

    /**
     * @return mixed|void
     * @desc 加载数据
     */
    public function notify_access()
    {
        if (!$this->run && $this->delay) {
            $this->records = $this->fetch_all();
            $this->total = count($this->records);
            $this->run = false;
        }
    }

    private function fetch_all()
    {
        $result = array();
        if (!is_null($this->pdo_stmt)) {
            $this->pdo_stmt->execute();
            $result = $this->pdo_stmt->fetchAll(PDO::FETCH_CLASS);
            $this->pdo_stmt->closeCursor();
        }
        return $result;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-30
 * Time: 下午4:09
 */

namespace HTFramework\DB;


use HTFramework\HTArray;

class HTSql
{
    private $sql;

    public function __construct()
    {
        $this->sql = '';
    }

    public function print_sql($exit = false)
    {
        print $this->sql;
        if ($exit) {
            exit;
        }
    }

    public function select(HTArray $field = null)
    {
        $this->sql .= 'SELECT ';
        if (!is_null($field)) {
            for ($iterator = $field->getIterator(); $iterator->valid(); $iterator->next()) {
                $this->sql .= $iterator->current() . ' ';
            }
        } else {
            $this->sql .= '* ';
        }
        return $this;
    }

    public function from(HTArray $table)
    {
        $this->sql .= 'FROM ';
        if (!is_null($table)) {
            for ($iterator = $table->getIterator(); $iterator->valid(); $iterator->next()) {
                $this->sql .= $iterator->current() . ' ';
            }
        } else {
            return false;
        }
        return $this;
    }

    public function where($field = null)
    {
        if (!is_null($field)) {
            $this->sql .= $field . ' ';
            return $this;
        } else {
            return false;
        }
    }

    public function _and($field = null)
    {
        if (!is_null($field)) {
            $this->sql .= 'and ' . $field . ' ';
            return $this;
        } else {
            return false;
        }
    }
}
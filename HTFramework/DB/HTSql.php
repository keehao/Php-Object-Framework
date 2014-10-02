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
    private $nexus = array(
        'eq' => '=',
        'ne' => '<>',
        'le' => '<=',
        'lt' => '<',
        'ge' => '>=',
        'gt' => '>',
        'like' => 'like',
        'in' => 'in',
    );

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

    public function select(HTArray $fields = null)
    {
        $this->sql .= 'SELECT ';
        if (!is_null($fields)) {
            for ($iterator = $fields->getIterator(); $iterator->valid(); $iterator->next()) {
                $this->sql .= $iterator->current()->select_field . ', ';
            }
            $this->sql = substr($this->sql, 0, strlen($this->sql) - 1);
        } else {
            $this->sql .= '* ';
        }
        return $this;
    }

    public function from(HTArray $tables)
    {
        $this->sql .= 'FROM ';
        if (!is_null($tables)) {
            for ($iterator = $tables->getIterator(); $iterator->valid(); $iterator->next()) {
                $this->sql .= $iterator->current()->table_name . ', ';
            }
            $this->sql = substr($this->sql, 0, strlen($this->sql) - 2);
            $this->sql .= ' ';
        } else {
            return false;
        }
        return $this;
    }

    public function where(HTField $field = null, $nexus = null)
    {
        $this->sql .= 'WHERE ';
        if (!is_null($field) && !is_null($nexus)) {
            $this->sql .= $field->field . $this->nexus[$nexus] . $field->variable . ' ';
            return $this;
        } else {
            return false;
        }
    }

    public function _and(HTField $field = null, $nexus = null)
    {
        $this->sql .= 'AND ';
        if (!is_null($field) && !is_null($nexus)) {
            $this->sql .= $field->field . $this->nexus[$nexus] . $field->variable . ' ';
            return $this;
        } else {
            return false;
        }
    }

    public function _or(HTField $field = null, $nexus = null)
    {
        $this->sql .= 'OR ';
        if (!is_null($field) && !is_null($nexus)) {
            $this->sql .= $field->field . $this->nexus[$nexus] . $field->variable . ' ';
            return $this;
        } else {
            return false;
        }
    }
}
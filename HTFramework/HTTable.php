<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-28
 * Time: 下午4:54
 */

namespace HTFramework;


class HTTable
{

    private $current;
    private $records;

    public function __construct()
    {
        $this->current = 0;
        $this->records = array();
    }

    /**
     * @desc 获取数量
     */
    public function get_count()
    {

    }

    /**
     * @param $key
     * @param $primary_key
     * @return object
     * @desc 获取一行数据
     */
    public function get_record($key, $primary_key = null)
    {
        if ($primary_key !== null) {
            return (object)$this->records[$primary_key];
        } else {
            return (object)$this->records[$key];
        }
    }

    public function get_HTRecord()
    {

    }
}
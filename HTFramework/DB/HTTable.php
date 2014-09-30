<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-28
 * Time: 下午4:54
 */

namespace HTFramework\DB;

use Iterator;

abstract class HTTable implements Iterator
{
    protected $total;
    protected $records;

    private $pointer;

    /**
     * @param array $records
     * @desc 构造表
     */
    public function __construct(array $records = null)
    {
        if (!is_null($records)) {
            $this->records = $records;
            $this->total = count($this->records);
        } else {
            $this->records = array();
            $this->total = 0;
        }
        $this->pointer = 0;
    }

    /**
     * @desc 指针指到列表开头
     */
    public function rewind()
    {
        $this->pointer = 0;
    }

    /**
     * @return mixed|null|void
     * @desc 返回当前指针指向元素
     */
    public function current()
    {
        if ($this->pointer == $this->total) {
            return (null);
        }

        return $this->get_record($this->pointer);
    }

    /**
     * @return int|mixed
     * @desc 返回当前指针
     */
    public function key()
    {
        return $this->pointer;
    }

    /**
     * @return bool
     * @desc 确定当前指针处有一个元素
     */
    public function valid()
    {
        if ($this->total > $this->pointer && 0 <= $this->pointer) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @desc 指针向前移动1位
     */
    public function prev()
    {
        $this->pointer > 0 ? --$this->pointer : 0;
    }

    /**
     * @desc 指针向后移动1位
     */
    public function next()
    {
        $this->pointer < $this->total - 1 ? ++$this->pointer : $this->total;
    }

    /**
     * @param $pointer
     * @return null
     * @desc 获取HTRecord
     */
    private function get_record($pointer)
    {
        $this->notify_access();
        if (isset($this->records[$pointer])) {
            return $this->records[$pointer];
        }
        return (null);
    }

    abstract public function notify_access();
}

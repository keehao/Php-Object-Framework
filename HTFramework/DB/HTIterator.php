<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-30
 * Time: 下午9:41
 */

namespace HTFramework\DB;

use Iterator;

abstract class HTIterator implements Iterator
{

    protected $total;
    protected $pointer;

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
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
     * @desc 指针向前移动1位
     */
    public function prev()
    {
        $this->pointer > 0 ? --$this->pointer : 0;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @desc 指针向后移动1位
     */
    public function next()
    {
        $this->pointer < $this->total - 1 ? ++$this->pointer : $this->total;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @desc 返回当前指针
     */
    public function key()
    {
        return $this->pointer;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
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
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @desc 指针指到列表开头
     */
    public function rewind()
    {
        $this->pointer = 0;
    }

    /**
     * @param $pointer
     * @return null
     * @desc 获取HTRecord
     */
    abstract public function get_record($pointer);

    /**
     * @return mixed|void
     * @desc 加载数据
     */
    abstract public function notify_access();
}
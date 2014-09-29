<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-26
 * Time: 上午12:13
 */

namespace HTFramework;
use HTFramework\StaticLib\HTStaticError;
use ArrayObject;

final class HTArray extends ArrayObject
{
    private $current;

    /**
     * @param null $input
     * @param int $flags
     * @param string $iterator_class
     */
    public function __construct($input = null, $flags = 0, $iterator_class = "ArrayIterator")
    {
        if (is_array($input)) {
            parent::__construct($input, $flags, $iterator_class);
            $this->current = $input;
        } else {
            HTStaticError::error_type(__CLASS__);
        }
    }

    /**
     * @return HTArray
     * @desc 获取当前元素
     */
    public function current()
    {
        $array = $this->current;
        $this->current = $this->getArrayCopy();
        return new HTArray($array, $this->getFlags(), $this->getIteratorClass());
    }

    /**
     * @param null $case
     * @return array
     * @desc 返回其键均为大写或小写的数组。
     */
    public function array_change_key_case($case = null)
    {
        $this->current = array_change_key_case($this->current, $case);
        return $this;
    }

    /**
     * @param $size
     * @param null $preserve_keys
     * @return HTArray
     * @desc 把一个数组分割为新的数组块。
     */
    public function array_chunk($size, $preserve_keys = null)
    {
        $array = array();
        foreach (array_chunk($this->current, $size, $preserve_keys) as $arr) {
            $array[] = new ArrayObject($arr);
        }
        $this->current = $array;
        return $this;
    }

    /**
     * @param HTArray $values
     * @return HTArray
     * @desc 通过合并两个数组来创建一个新数组。
     */
    public function array_combine(HTArray $values)
    {
        $this->current = array_combine($this->current, (array)$values);
        return $this;
    }

    /**
     * @return HTArray
     * @desc 用于统计数组中所有值出现的次数。
     */
    public function array_count_values()
    {
        $this->current = array_count_values($this->current);
        return $this;
    }

    /**
     * @param $array2
     * @return $this
     * @desc 返回两个数组的差集数组。
     */
    public function array_diff(HTArray $array2)
    {
        $this->current = array_diff($this->current, (array)$array2);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @return $this
     * @desc 比较键名和键值，并返回两个数组的差集数组。
     */
    public function array_diff_assoc(HTArray $array2)
    {
        $this->current = array_diff_assoc($this->current, (array)$array2);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @return $this
     * @desc 比较键名，并返回两个数组的差集数组。。
     */
    public function array_diff_key(HTArray $array2)
    {
        $this->current = array_diff_key($this->current, (array)$array2);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $key_compare_func
     * @return $this
     * @desc 通过用户提供的回调函数做索引检查来计算数组的差集。
     */
    public function array_diff_uassoc(HTArray $array2, $key_compare_func)
    {
        $this->current = array_diff_uassoc($this->current, (array)$array2, $key_compare_func);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $key_compare_func
     * @return $this
     * @desc 用回调函数对键名比较计算数组的差集。
     */
    public function array_diff_ukey(HTArray $array2, $key_compare_func)
    {
        $this->current = array_diff_ukey($this->current, (array)$array2, $key_compare_func);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $key_compare_func
     * @return $this
     * @desc 用给定的值填充数组。
     */
    public function array_fill(HTArray $array2, $key_compare_func)
    {
        $this->current = array_fill($this->current, (array)$array2, $key_compare_func);
        return $this;
    }

    /**
     * @param null $callback
     * @return $this
     * @desc 用回调函数过滤数组中的元素。
     */
    public function array_filter($callback = null)
    {
        $this->current = array_filter($this->current, $callback);
        return $this;
    }

    /**
     * @return $this
     * @desc 交换数组中的键和值。
     */
    public function array_flip()
    {
        $this->current = array_flip($this->current);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @return $this
     * @desc 计算数组的交集。
     */
    public function array_intersect(HTArray $array2)
    {
        $this->current = array_intersect($this->current, (array)$array2);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @return $this
     * @desc 比较键名和键值，并返回两个数组的交集数组。
     */
    public function array_intersect_assoc(HTArray $array2)
    {
        $this->current = array_intersect_assoc($this->current, (array)$array2);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @return $this
     * @desc 使用键名比较计算数组的交集。
     */
    public function array_intersect_key(HTArray $array2)
    {
        $this->current = array_intersect_key($this->current, (array)$array2);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $key_compare_func
     * @return $this
     * @desc 带索引检查计算数组的交集，用回调函数比较索引。
     */
    public function array_intersect_uassoc(HTArray $array2, $key_compare_func)
    {
        $this->current = array_intersect_uassoc($this->current, (array)$array2, $key_compare_func);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $key_compare_func
     * @return $this
     * @desc 用回调函数比较键名来计算数组的交集。
     */
    public function array_intersect_ukey(HTArray $array2, $key_compare_func)
    {
        $this->current = array_intersect_ukey($this->current, (array)$array2, $key_compare_func);
        return $this;
    }

    /**
     * @param $key
     * @return $this
     * @desc 检查给定的键名或索引是否存在于数组中。
     */
    public function array_key_exists($key)
    {
        return array_key_exists($key, $this->current);
    }

    /**
     * @param null $search_value
     * @param null $strict
     * @return $this
     * @desc 返回数组中所有的键名。
     */
    public function array_keys($search_value = null, $strict = null)
    {
        $this->current = array_keys($this->current, $search_value, $strict);
        return $this;
    }

    /**
     * @param $callback
     * @return $this
     * @desc 将回调函数作用到给定数组的单元上。
     */
    public function array_map($callback)
    {
        $this->current = array_map($callback, $this->current);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @return $this
     * @desc 把一个或多个数组合并为一个数组。
     */
    public function array_merge(HTArray $array2)
    {
        $this->current = array_merge($this->current, (array)$array2);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @return $this
     * @desc 递归地合并一个或多个数组。
     */
    public function array_merge_recursive(HTArray $array2)
    {
        $this->current = array_merge_recursive($this->current, (array)$array2);
        return $this;
    }

    /**
     * @return $this
     * @desc 对多个数组或多维数组进行排序
     */
    public function array_multisort()
    {
        array_multisort($this->current);
        return $this;
    }

    /**
     * @param $pad_size
     * @param $pad_value
     * @return $this
     * @desc 用值将数组填补到指定长度。
     */
    public function array_pad($pad_size, $pad_value)
    {
        $this->current = array_pad($this->current, $pad_size, $pad_value);
        return $this;
    }

    /**
     * @return $this
     * @desc 将数组最后一个单元弹出（出栈）。
     */
    public function array_pop()
    {
        $array = (array)$this;
        $last = array_pop($array);
        $this->exchangeArray($array);
        return $last;
    }

    /**
     * @return HTNumber
     * @desc 计算数组中所有值的乘积。
     */
    public function array_product()
    {
        return new HTNumber(array_product($this->current));
    }

    /**
     * @return HTNumber
     * @desc 计算数组中所有值的和。
     */
    public function array_sum()
    {
        return new HTNumber(array_sum($this->current));
    }

    /**
     * @param HTArray $var
     * @return $this
     * @desc 将多个单元（元素）压入数组的末尾（入栈）。
     */
    public function array_push(HTArray $var)
    {
        $array = (array)$this;
        array_push($array, (array)$var);
        $this->exchangeArray($array);
        return $this;
    }

    /**
     * @param HTArray $var
     * @return $this
     * @desc 在数组开头插入一个或多个元素。
     */
    public function array_unshift(HTArray $var)
    {
        $array = (array)$this;
        array_unshift($array, (array)$var);
        $this->exchangeArray($array);
        return $this;
    }

    /**
     * @param null $num_req
     * @return mixed
     * @desc 从数组中随机选出一个或多个元素，并返回。
     */
    public function array_rand($num_req = null)
    {
        return array_rand($this->current, $num_req);
    }

    /**
     * @param $function
     * @param null $initial
     * @return mixed
     * @desc 用回调函数迭代地将数组简化为单一的值。
     */
    public function array_reduce($function, $initial = null)
    {
        return array_reduce($this->current, $function, $initial);
    }

    /**
     * @param null $preserve_keys
     * @return $this
     * @desc 将原数组中的元素顺序翻转，创建新的数组并返回。
     */
    public function array_reverse($preserve_keys = null)
    {
        $this->current = array_reverse($this->current, $preserve_keys);
        return $this;
    }

    /**
     * @param $needle
     * @param null $strict
     * @return mixed
     * @desc 在数组中搜索给定的值，如果成功则返回相应的键名。
     */
    public function array_search($needle, $strict = null)
    {
        return array_search($needle, $this->current, $strict);
    }

    /**
     * @return mixed
     * @desc 删除数组中的第一个元素，并返回被删除元素的值。
     */
    public function array_shift()
    {
        $array = (array)$this;
        $first = array_shift($array);
        $this->exchangeArray($array);
        return $first;
    }

    /**
     * @param $needle
     * @param null $strict
     * @return bool
     * @desc 检查数组中是否存在指定的值。
     */
    public function in_array($needle, $strict = null)
    {
        return in_array($needle, $this->current, $strict);
    }

    /**
     * @param null $sort_flags
     * @return $this
     * @desc 删除数组中重复的值
     */
    public function array_unique($sort_flags = null)
    {
        $this->current = array_unique($this->current, $sort_flags);
        return $this;
    }

    /**
     * @return $this
     * @desc 返回数组中所有的值。
     */
    public function array_values()
    {
        $this->current = array_values($this->current);
        return $this;
    }

    /**
     * @param $offset
     * @param null $length
     * @param null $preserve_keys
     * @return $this
     * @desc 在数组中根据条件取出一段值，并返回。
     */
    public function array_slice($offset, $length = null, $preserve_keys = null)
    {
        $this->current = array_slice($this->current, $offset, $length, $preserve_keys);
        return $this;
    }

    /**
     * @param $offset
     * @param null $length
     * @param null $replacement
     * @return $this
     * @desc 把数组中的一部分去掉并用其它值取代。
     */
    public function array_splice($offset, $length = null, $replacement = null)
    {
        array_splice($this->current, $offset, $length, $replacement);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $data_compare_func
     * @return $this
     * @desc 用回调函数比较数据来计算数组的差集。
     */
    public function array_udiff(HTArray $array2, $data_compare_func)
    {
        $this->current = array_udiff($this->current, (array)$array2, $data_compare_func);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $data_compare_func
     * @return $this
     * @desc 带索引检查计算数组的差集，用回调函数比较数据。
     */
    public function array_udiff_assoc(HTArray $array2, $data_compare_func)
    {
        $this->current = array_udiff_assoc($this->current, (array)$array2, $data_compare_func);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $data_compare_func
     * @param $key_compare_func
     * @return $this
     * @desc 带索引检查计算数组的差集，用回调函数比较数据和索引。
     */
    public function array_udiff_uassoc(HTArray $array2, $data_compare_func, $key_compare_func)
    {
        $this->current = array_udiff_uassoc($this->current, (array)$array2, $data_compare_func, $key_compare_func);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $data_compare_func
     * @return $this
     * @desc 计算数组的交集，用回调函数比较数据。
     */
    public function array_uintersect(HTArray $array2, $data_compare_func)
    {
        $this->current = array_uintersect($this->current, (array)$array2, $data_compare_func);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $data_compare_func
     * @return $this
     * @desc 带索引检查计算数组的交集，用回调函数比较数据。
     */
    public function array_uintersect_assoc(HTArray $array2, $data_compare_func)
    {
        $this->current = array_uintersect_assoc($this->current, (array)$array2, $data_compare_func);
        return $this;
    }

    /**
     * @param HTArray $array2
     * @param $data_compare_func
     * @param $key_compare_func
     * @return $this
     * @desc 带索引检查计算数组的交集，用回调函数比较数据和索引。
     */
    public function array_uintersect_uassoc(HTArray $array2, $data_compare_func, $key_compare_func)
    {
        $this->current = array_uintersect_uassoc($this->current, (array)$array2, $data_compare_func, $key_compare_func);
        return $this;
    }

    /**
     * @param $funcname
     * @param null $userdata
     * @return bool
     * @desc 对数组中的每个成员应用用户函数。
     */
    public function array_walk($funcname, $userdata = null)
    {
        return array_walk($this->current, $funcname, $userdata);
    }

    /**
     * @param $funcname
     * @param null $userdata
     * @return bool
     * @desc 对数组中的每个成员递归地应用用户函数。
     */
    public function array_walk_recursive($funcname, $userdata = null)
    {
        return array_walk_recursive($this->current, $funcname, $userdata);
    }

    /**
     * @param null $sort_flags
     * @return $this
     * @desc 对数组进行逆向排序并保持索引关系。
     */
    public function arsort($sort_flags = null)
    {
        arsort($this->current, $sort_flags);
        return $this;
    }

    /**
     * @param null $sort_flags
     * @return $this
     * @desc 对数组按照键名逆向排序。
     */
    public function krsort($sort_flags = null)
    {
        krsort($this->current, $sort_flags);
        return $this;
    }

    /**
     * @param null $sort_flags
     * @return $this
     * @desc 对数组排序。
     */
    public function sort($sort_flags = null)
    {
        sort($this->current, $sort_flags);
        return $this;
    }

    /**
     * @param null $sort_flags
     * @return $this
     * @desc 对数组逆向排序。
     */
    public function rsort($sort_flags = null)
    {
        rsort($this->current, $sort_flags);
        return $this;
    }

    /**
     * @param $cmp_function
     * @return $this
     * @desc 使用用户自定义的比较函数对数组中的值进行排序。
     */
    public function usort($cmp_function)
    {
        usort($this->current, $cmp_function);
        return $this;
    }

    /**
     * @return $this
     * @desc 把数组中的元素按随机顺序重新排列。
     */
    public function shuffle()
    {
        shuffle($this->current);
        return $this;
    }
}
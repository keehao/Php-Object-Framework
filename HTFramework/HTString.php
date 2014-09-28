<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-25
 * Time: 下午6:33
 */

namespace HTFramework;


final class HTString
{
    private $string;
    private $current;

    public function __construct($string = '')
    {
        if (is_string($string)) {
            $this->string = $string;
            $this->current = $this->string;
        } else {

        }
    }

    public function __toString()
    {
        $string = $this->current;
        $this->current = $this->string;
        return $string;
    }

    /**
     * @return HTNumber
     * @desc 返回HTNumber类型
     */
    public function toHTNumber()
    {
        return new HTNumber($this->string);
    }

    /**
     * @param $charlist
     * @return $this
     * @desc 在指定的预定义字符前添加反斜杠。
     */
    public function addcslashes($charlist)
    {
        $this->current = addcslashes($this->current, $charlist);
        return $this;
    }

    /**
     * @return $this
     * @desc 把 ASCII 字符的字符串转换为十六进制值。
     */
    public function bin2hex()
    {
        $this->current = bin2hex($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 从指定的 ASCII 值返回字符。
     */
    public function chr()
    {
        $this->current = chr($this->current);
        return $this;
    }

    /**
     * @param null $chunklen
     * @param null $end
     * @return $this
     * @desc 把字符串分割为一连串更小的部分。
     */
    public function chunk_split($chunklen = null, $end = null)
    {
        $this->current = chunk_split($this->current, $chunklen, $end);
        return $this;
    }

    /**
     * @param $from
     * @param $to
     * @return $this
     * @desc 把字符由一种 Cyrillic 字符转换成另一种。
     */
    public function convert_cyr_string($from, $to)
    {
        $this->current = convert_cyr_string($this->current, $from, $to);
        return $this;
    }

    /**
     * @return $this
     * @desc 对 uuencode 编码的字符串进行解码。
     */
    public function convert_uudecode()
    {
        $this->current = convert_uudecode($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 使用 uuencode 算法对字符串进行编码。
     */
    public function convert_uuencode()
    {
        $this->current = convert_uuencode($this->current);
        return $this;
    }

    /**
     * @param null $mode
     * @return $this
     * @desc 返回字符串所用字符的信息。
     */
    public function count_chars($mode = null)
    {
        $this->current = count_chars($this->current, $mode);
        return $this;
    }

    /**
     * @return $this
     * @desc 计算一个字符串的 32-bit CRC。
     */
    public function crc32()
    {
        $this->current = crc32($this->current);
        return $this;
    }

    /**
     * @param null $salt
     * @return $this
     * @desc 单向的字符串加密法 (hashing)。
     */
    public function crypt($salt = null)
    {
        $this->current = crypt($this->current, $salt);
        return $this;
    }

    /**
     * @desc 打印数据
     */
    public function HTecho()
    {
        echo "string:";
        var_dump($this->string);
        echo "current:";
        var_dump($this->current);
    }

    /**
     * @param $delimiter
     * @param null $limit
     * @return HTArray
     * @desc 把字符串打散为数组。
     */
    public function explode($delimiter, $limit = null)
    {
        return new HTArray(explode($delimiter, $this->current, $limit));
    }

    /**
     * @param null $max_chars_per_line
     * @return $this
     * @desc 把希伯来文本从右至左的流转换为左至右的流。
     */
    public function hebrev($max_chars_per_line = null)
    {
        $this->current = hebrev($this->current, $max_chars_per_line);
        return $this;
    }

    /**
     * @param null $max_chars_per_line
     * @return $this
     * @desc 同上，同时把(\n) 转为 <br />。
     */
    public function hebrevc($max_chars_per_line = null)
    {
        $this->current = hebrevc($this->current, $max_chars_per_line);
        return $this;
    }

    /**
     * @param null $quote_style
     * @param null $charset
     * @return $this
     * @desc 把 HTML 实体转换为字符。
     */
    public function html_entity_decode($quote_style = null, $charset = null)
    {
        $this->current = html_entity_decode($this->current, $quote_style, $charset);
        return $this;
    }

    /**
     * @param null $quote_style
     * @param null $charset
     * @param null $double_encode
     * @return $this
     * @desc 把字符转换为 HTML 实体。
     */
    public function htmlentities($quote_style = null, $charset = null, $double_encode = null)
    {
        $this->current = htmlentities($this->current, $quote_style, $charset, $double_encode);
        return $this;
    }

    /**
     * @param null $quote_style
     * @return $this
     * @desc 把一些预定义的 HTML 实体转换为字符。
     */
    public function htmlspecialchars_decode($quote_style = null)
    {
        $this->current = htmlspecialchars_decode($this->current, $quote_style);
        return $this;
    }

    /**
     * @param int $flags
     * @param string $encoding
     * @param bool $double_encode
     * @return $this
     * @desc 把一些预定义的字符转换为 HTML 实体。
     */
    public function htmlspecialchars($flags = ENT_COMPAT, $encoding = 'UTF-8', $double_encode = true)
    {
        $this->current = htmlspecialchars($this->current, $flags, $encoding, $double_encode);
        return $this;
    }

    /**
     * @param $str2
     * @return $this
     * @desc 返回两个字符串之间的 Levenshtein 距离。
     */
    public function levenshtein($str2)
    {
        $this->current = levenshtein($this->current, $str2);
        return $this;
    }

    /**
     * @param null $charlist
     * @return $this
     * @desc 从字符串左侧删除空格或其他预定义字符。
     */
    public function ltrim($charlist = null)
    {
        $this->current = ltrim($this->current, $charlist);
        return $this;
    }

    /**
     * @param null $raw_output
     * @return $this
     * @desc 计算字符串的 MD5 散列。
     */
    public function md5($raw_output = null)
    {
        $this->current = md5($this->current, $raw_output);
        return $this;
    }

    /**
     * @param null $raw_output
     * @return $this
     * @desc 计算文件的 MD5 散列。
     */
    public function md5_file($raw_output = null)
    {
        $this->current = md5_file($this->current, $raw_output);
        return $this;
    }

    /**
     * @param null $phones
     * @return $this
     * @desc 计算字符串的 metaphone 键。
     */
    public function metaphone($phones = null)
    {
        $this->current = metaphone($this->current, $phones);
        return $this;
    }

    /**
     * @param $number
     * @return $this
     * @desc 把字符串格式化为货币字符串。
     */
    public function money_format($number)
    {
        $this->current = money_format($this->current, $number);
        return $this;
    }

    /**
     * @param null $is_xhtml
     * @return $this
     * @desc 在字符串中的每个新行之前插入 HTML 换行符。
     */
    public function nl2br($is_xhtml = null)
    {
        $this->current = nl2br($this->current, $is_xhtml);
        return $this;
    }

    /**
     * @return $this
     * @desc 返回字符串第一个字符的 ASCII 值。
     */
    public function ord()
    {
        $this->current = ord($this->current);
        return $this;
    }

    /**
     * @param HTArray $arr
     * @return $this
     * @desc 把查询字符串解析到变量中。
     */
    public function parse_str(HTArray &$arr = null)
    {
        $array = (array)$arr;
        $this->current = parse_str($this->current, $array);
        $arr = $array;
        return $this;
    }

    /**
     * @return $this
     * @desc 解码 quoted-printable 字符串。
     */
    public function quoted_printable_decode()
    {
        $this->current = quoted_printable_decode($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 在字符串中某些预定义的字符前添加反斜杠。
     */
    public function quotemeta()
    {
        $this->current = quotemeta($this->current);
        return $this;
    }

    /**
     * @param null $charlist
     * @return $this
     * @desc 从字符串的末端开始删除空白字符或其他预定义字符。
     */
    public function rtrim($charlist = null)
    {
        $this->current = rtrim($this->current, $charlist);
        return $this;
    }

    /**
     * @param null $raw_output
     * @return $this
     * @desc 计算字符串的 SHA-1 散列。
     */
    public function sha1($raw_output = null)
    {
        $this->current = sha1($this->current, $raw_output);
        return $this;
    }

    /**
     * @param null $raw_output
     * @return $this
     * @desc 计算文件的 SHA-1 散列。
     */
    public function sha1_file($raw_output = null)
    {
        $this->current = sha1_file($this->current, $raw_output);
        return $this;
    }

    /**
     * @param $second
     * @param null $percent
     * @return $this
     * @desc 计算两个字符串的匹配字符的数目。
     */
    public function similar_text($second, &$percent = null)
    {
        $this->current = similar_text($this->current, $second, $percent);
        return $this;
    }

    /**
     * @return $this
     * @desc 计算字符串的 soundex 键。
     */
    public function soundex()
    {
        $this->current = soundex($this->current);
        return $this;
    }

    /**
     * @param $replace
     * @param $subject
     * @param null $count
     * @return $this
     * @desc 替换字符串中的一些字符。（对大小写不敏感）
     */
    public function str_ireplace($replace, $subject, &$count = null)
    {
        $this->current = str_ireplace($this->current, $replace, $subject, $count);
        return $this;
    }

    /**
     * @param $pad_length
     * @param null $pad_string
     * @param null $pad_type
     * @return $this
     * @desc 把字符串填充为新的长度。
     */
    public function str_pad($pad_length, $pad_string = null, $pad_type = null)
    {
        $this->current = str_pad($this->current, $pad_length, $pad_string, $pad_type);
        return $this;
    }

    /**
     * @param $multiplier
     * @return $this
     * @desc 把字符串重复指定的次数。
     */
    public function str_repeat($multiplier)
    {
        $this->current = str_repeat($this->current, $multiplier);
        return $this;
    }

    /**
     * @param $replace
     * @param $subject
     * @param null $count
     * @return $this
     * @desc 替换字符串中的一些字符。（对大小写敏感）
     */
    public function str_replace($replace, $subject, &$count = null)
    {
        $this->current = str_replace($this->current, $replace, $subject, $count);
        return $this;
    }

    /**
     * @return $this
     * @desc 对字符串执行 ROT13 编码。
     */
    public function str_rot13()
    {
        $this->current = str_rot13($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 随机地打乱字符串中的所有字符。
     */
    public function str_shuffle()
    {
        $this->current = str_shuffle($this->current);
        return $this;
    }

    /**
     * @param int $split_length
     * @return $this
     * @desc 把字符串分割到数组中。
     */
    public function str_split($split_length = 1)
    {
        return new HTArray(str_split($this->current, $split_length));
    }

    /**
     * @param null $format
     * @param null $charlist
     * @return $this
     * @desc 计算字符串中的单词数。
     */
    public function str_word_count($format = null, $charlist = null)
    {
        $this->current = str_word_count($this->current, $format, $charlist);
        return $this;
    }

    /**
     * @param $str2
     * @return $this
     * @desc 比较两个字符串。（对大小写不敏感）
     */
    public function strcasecmp($str2)
    {
        $this->current = strcasecmp($this->current, $str2);
        return $this;
    }

    /**
     * @param $needle
     * @param $part
     * @return $this
     * @desc 搜索字符串在另一字符串中的第一次出现。
     */
    public function strstr($needle, $part)
    {
        $this->current = strstr($this->current, $needle, $part);
        return $this;
    }

    /**
     * @param $str2
     * @return $this
     * @desc 比较两个字符串。（对大小写敏感）
     */
    public function strcmp($str2)
    {
        $this->current = strcmp($this->current, $str2);
        return $this;
    }

    /**
     * @param $str2
     * @return $this
     * @desc 比较两个字符串（根据本地设置）。
     */
    public function strcoll($str2)
    {
        $this->current = strcoll($this->current, $str2);
        return $this;
    }

    /**
     * @param $str2
     * @param null $start
     * @param null $length
     * @return $this
     * @desc 返回在找到任何指定的字符之前，在字符串查找的字符数。
     */
    public function strcspn($str2, $start = null, $length = null)
    {
        $this->current = strcspn($this->current, $str2, $start, $length);
        return $this;
    }

    /**
     * @param null $allowable_tags
     * @return $this
     * @desc 剥去 HTML、XML 以及 PHP 的标签。
     */
    public function strip_tags($allowable_tags = null)
    {
        $this->current = strip_tags($this->current, $allowable_tags);
        return $this;
    }

    /**
     * @return $this
     * @desc 删除由 addcslashes() 函数添加的反斜杠。
     */
    public function stripcslashes()
    {
        $this->current = stripcslashes($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 删除由 addslashes() 函数添加的反斜杠。
     */
    public function stripslashes()
    {
        $this->current = stripslashes($this->current);
        return $this;
    }

    /**
     * @param $needle
     * @param null $offset
     * @return $this
     * @desc 返回字符串在另一字符串中第一次出现的位置(大小写不敏感)
     */
    public function stripos($needle, $offset = null)
    {
        $this->current = stripos($this->current, $needle, $offset);
        return $this;
    }

    /**
     * @param $needle
     * @param null $before_needle
     * @return $this
     * @desc 查找字符串在另一字符串中第一次出现的位置(大小写不敏感)
     */
    public function stristr($needle, $before_needle = null)
    {
        $this->current = stristr($this->current, $needle, $before_needle);
        return $this;
    }

    /**
     * @return int
     * @desc 返回字符串长度
     */
    public function length()
    {
        return strlen($this->current);
    }

    /**
     * @param $str2
     * @return $this
     * @desc 使用一种“自然”算法来比较两个字符串（对大小写不敏感）
     */
    public function strnatcasecmp($str2)
    {
        $this->current = strnatcasecmp($this->current, $str2);
        return $this;
    }

    /**
     * @param $str2
     * @return $this
     * @desc 使用一种“自然”算法来比较两个字符串（对大小写敏感）
     */
    public function strnatcmp($str2)
    {
        $this->current = strnatcmp($this->current, $str2);
        return $this;
    }

    /**
     * @param $str2
     * @param $len
     * @return $this
     * @desc 前 n 个字符的字符串比较（对大小写不敏感）。
     */
    public function strncasecmp($str2, $len)
    {
        $this->current = strncasecmp($this->current, $str2, $len);
        return $this;
    }

    /**
     * @param $str2
     * @param $len
     * @return $this
     * @desc 前 n 个字符的字符串比较（对大小写敏感）。
     */
    public function strncmp($str2, $len)
    {
        $this->current = strncmp($this->current, $str2, $len);
        return $this;
    }

    /**
     * @param $char_list
     * @return $this
     * @desc 在字符串中搜索指定字符中的任意一个。
     */
    public function strpbrk($char_list)
    {
        $this->current = strpbrk($this->current, $char_list);
        return $this;
    }

    /**
     * @param $needle
     * @param null $offset
     * @return $this
     * @desc 返回字符串在另一字符串中首次出现的位置（对大小写敏感）
     */
    public function strpos($needle, $offset = null)
    {
        $this->current = strpos($this->current, $needle, $offset);
        return $this;
    }

    /**
     * @param $needle
     * @return $this
     * @desc 查找字符串在另一个字符串中最后一次出现的位置。
     */
    public function strrchr($needle)
    {
        $this->current = strrchr($this->current, $needle);
        return $this;
    }

    /**
     * @return $this
     * @desc 反转字符串。
     */
    public function strrev()
    {
        $this->current = strrev($this->current);
        return $this;
    }

    /**
     * @param $needle
     * @param null $offset
     * @return $this
     * @desc 查找字符串在另一字符串中最后出现的位置(对大小写不敏感)
     */
    public function strripos($needle, $offset = null)
    {
        $this->current = strripos($this->current, $needle, $offset);
        return $this;
    }

    /**
     * @param $needle
     * @param null $offset
     * @return $this
     * @desc 查找字符串在另一字符串中最后出现的位置(对大小写敏感)
     */
    public function strrpos($needle, $offset = null)
    {
        $this->current = strrpos($this->current, $needle, $offset);
        return $this;
    }

    /**
     * @param $mask
     * @param null $start
     * @param null $length
     * @return int
     * @desc 返回在字符串中包含的特定字符的数目。
     */
    public function strspn($mask, $start = null, $length = null)
    {
        return strspn($this->current, $mask, $start, $length);
    }

    /**
     * @param $token
     * @return $this
     * @desc 把字符串分割为更小的字符串。
     */
    public function strtok($token)
    {
        $this->current = strtok($this->current, $token);
        return $this;
    }

    /**
     * @return $this
     * @desc 把字符串转换为小写。
     */
    public function strtolower()
    {
        $this->current = strtolower($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 把字符串转换为大写。
     */
    public function strtoupper()
    {
        $this->current = strtoupper($this->current);
        return $this;
    }

    /**
     * @param HTArray $replace_pairs
     * @return $this
     * @desc 转换字符串中特定的字符。
     */
    public function strtr(HTArray $replace_pairs)
    {
        $this->current = strtr($this->current, (array)$replace_pairs);
        return $this;
    }

    /**
     * @param $start
     * @param null $length
     * @return $this
     * @desc 返回字符串的一部分。
     */
    public function substr($start, $length = null)
    {
        $this->current = substr($this->current, $start, $length);
        return $this;
    }

    /**
     * @param $str
     * @param $offset
     * @param null $length
     * @param null $case_insensitivity
     * @return int
     * @desc 从指定的开始长度比较两个字符串。
     */
    public function substr_compare($str, $offset, $length = null, $case_insensitivity = null)
    {
        return substr_compare($this->current, $str, $offset, $length, $case_insensitivity);
    }

    /**
     * @param $needle
     * @param null $offset
     * @param null $length
     * @return int
     * @desc 计算子串在字符串中出现的次数。
     */
    public function substr_count($needle, $offset = null, $length = null)
    {
        return substr_count($this->current, $needle, $offset, $length);
    }

    /**
     * @param $replacement
     * @param $start
     * @param null $length
     * @return $this
     * @desc 把字符串的一部分替换为另一个字符串。
     */
    public function substr_replace($replacement, $start, $length = null)
    {
        $this->current = substr_replace($this->current, $replacement, $start, $length);
        return $this;
    }

    /**
     * @param null $charlist
     * @return $this
     * @desc 从字符串的两端删除空白字符和其他预定义字符。
     */
    public function trim($charlist = null)
    {
        $this->current = trim($this->current, $charlist);
        return $this;
    }

    /**
     * @return $this
     * @desc 把字符串中的首字符转换为大写。
     */
    public function ucfirst()
    {
        $this->current = ucfirst($this->current);
        return $this;
    }

    /**
     * @return $this
     * @desc 把字符串中每个单词的首字符转换为大写。
     */
    public function ucwords()
    {
        $this->current = ucwords($this->current);
        return $this;
    }

    /**
     * @param int $width
     * @param string $break
     * @param bool $cut
     * @return $this
     * @desc 按照指定长度对字符串进行折行处理。
     */
    public function wordwrap($width = 75, $break = "\n", $cut = false)
    {
        $this->current = wordwrap($this->current, $width, $break, $cut);
        return $this;
    }
}
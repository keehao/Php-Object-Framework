<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-25
 * Time: 下午6:33
 */

namespace HTFramework;

class HTString
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

    public function toHTNumber()
    {
        return new HTNumber($this->string);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Make a string uppercase
     * @link http://php.net/manual/en/function.strtoupper.php
     * @param string <p>
     * The input string.
     * </p>
     * @return string the uppercased string.
     */
    public function strtoupper()
    {
        $this->current = strtoupper($this->current);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Make a string lowercase
     * @link http://php.net/manual/en/function.strtolower.php
     * @param string <p>
     * The input string.
     * </p>
     * @return string the lowercased string.
     */
    public function strtolower()
    {
        $this->current = strtolower($this->current);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find position of first occurrence of a string
     * @link http://php.net/manual/en/function.strpos.php
     * @param string <p>
     * The string to search in
     * </p>
     * @param mixed $needle <p>
     * If needle is not a string, it is converted
     * to an integer and applied as the ordinal value of a character.
     * </p>
     * @param int $offset [optional] <p>
     * The optional offset parameter allows you
     * to specify which character in haystack to
     * start searching. The position returned is still relative to the
     * beginning of haystack.
     * </p>
     * @return int the position as an integer. If needle is
     * not found, strpos will return boolean
     * false.
     */
    public function strpos($needle, $offset = null)
    {
        $this->current = strpos($this->current, $needle, $offset);
        return $this;
    }

    /**
     * (PHP 5)<br/>
     * Find position of first occurrence of a case-insensitive string
     * @link http://php.net/manual/en/function.stripos.php
     * @param string <p>
     * Note that the needle may be a string of one or
     * more characters.
     * </p>
     * <p>
     * If needle is not a string, it is converted to
     * an integer and applied as the ordinal value of a character.
     * </p>
     * @param int $offset [optional] <p>
     * The optional offset parameter allows you
     * to specify which character in haystack to
     * start searching. The position returned is still relative to the
     * beginning of haystack.
     * </p>
     * @internal param string $haystack <p>
     * The string to search in
     * </p>
     * @return int If needle is not found,
     * stripos will return boolean false.
     */
    public function stripos($needle, $offset = null)
    {
        $this->current = stripos($this->current, $needle, $offset);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find position of last occurrence of a char in a string
     * @link http://php.net/manual/en/function.strrpos.php
     * @param string <p>
     * </p>
     * @param string $needle <p>
     * </p>
     * @param int $offset [optional] <p>
     * </p>
     * @return int
     */
    public function strrpos($needle, $offset = null)
    {
        $this->current = strrpos($this->current, $needle, $offset);
        return $this;
    }

    /**
     * (PHP 5)<br/>
     * Find position of last occurrence of a case-insensitive string in a string
     * @link http://php.net/manual/en/function.strripos.php
     * @param string <p>
     * The string to search in
     * </p>
     * @param string $needle <p>
     * Note that the needle may be a string of one or
     * more characters.
     * </p>
     * @param int $offset [optional] <p>
     * The offset parameter may be specified to begin
     * searching an arbitrary number of characters into the string.
     * </p>
     * <p>
     * Negative offset values will start the search at
     * offset characters from the
     * start of the string.
     * </p>
     * @return int the numerical position of the last occurrence of
     * needle. Also note that string positions start at 0,
     * and not 1.
     * </p>
     * <p>
     * If needle is not found, false is returned.
     */
    public function strripos($needle, $offset = null)
    {
        $this->current = strripos($this->current, $needle, $offset);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Reverse a string
     * @link http://php.net/manual/en/function.strrev.php
     * @param string <p>
     * The string to be reversed.
     * </p>
     * @return string the reversed string.
     */
    public function strrev()
    {
        $this->current = strrev($this->current);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Convert logical Hebrew text to visual text
     * @link http://php.net/manual/en/function.hebrev.php
     * @param string <p>
     * A Hebrew input string.
     * </p>
     * @param int $max_chars_per_line [optional] <p>
     * This optional parameter indicates maximum number of characters per
     * line that will be returned.
     * </p>
     * @return string the visual string.
     */
    public function hebrev($max_chars_per_line = null)
    {
        $this->current = hebrev($this->current, $max_chars_per_line);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Convert logical Hebrew text to visual text with newline conversion
     * @link http://php.net/manual/en/function.hebrevc.php
     * @param string <p>
     * A Hebrew input string.
     * </p>
     * @param int $max_chars_per_line [optional] <p>
     * This optional parameter indicates maximum number of characters per
     * line that will be returned.
     * </p>
     * @return string the visual string.
     */
    public function hebrevc($max_chars_per_line = null)
    {
        $this->current = hebrevc($this->current, $max_chars_per_line);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Inserts HTML line breaks before all newlines in a string
     * @link http://php.net/manual/en/function.nl2br.php
     * @param string <p>
     * The input string.
     * </p>
     * @param bool $is_xhtml [optional] <p>
     * Whenever to use XHTML compatible line breaks or not.
     * </p>
     * @return string the altered string.
     */
    public function nl2br($is_xhtml = null)
    {
        $this->current = nl2br($this->current, $is_xhtml);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Returns filename component of path
     * @link http://php.net/manual/en/function.basename.php
     * @param string <p>
     * A path.
     * </p>
     * <p>
     * On Windows, both slash (/) and backslash
     * (\) are used as directory separator character. In
     * other environments, it is the forward slash (/).
     * </p>
     * @param string $suffix [optional] <p>
     * If the filename ends in suffix this will also
     * be cut off.
     * </p>
     * @return string the base name of the given path.
     */
    public function basename($suffix = null)
    {
        $this->current = basename($this->current, $suffix);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Returns directory name component of path
     * @link http://php.net/manual/en/function.dirname.php
     * @param string <p>
     * A path.
     * </p>
     * <p>
     * On Windows, both slash (/) and backslash
     * (\) are used as directory separator character. In
     * other environments, it is the forward slash (/).
     * </p>
     * @return string the name of the directory. If there are no slashes in
     * path, a dot ('.') is returned,
     * indicating the current directory. Otherwise, the returned string is
     * path with any trailing
     * /component removed.
     */
    public function dirname()
    {
        $this->current = dirname($this->current);
        return $this;
    }

    /**
     * (PHP 4 &gt;= 4.0.3, PHP 5)<br/>
     * Returns information about a file path
     * @link http://php.net/manual/en/function.pathinfo.php
     * @param string <p>
     * The path being checked.
     * </p>
     * @param int $options [optional] <p>
     * You can specify which elements are returned with optional parameter
     * options. It composes from
     * PATHINFO_DIRNAME,
     * PATHINFO_BASENAME,
     * PATHINFO_EXTENSION and
     * PATHINFO_FILENAME. It
     * defaults to return all elements.
     * </p>
     * @return mixed The following associative array elements are returned:
     * dirname, basename,
     * extension (if any), and filename.
     * </p>
     * <p>
     * If options is used, this function will return a
     * string if not all elements are requested.
     */
    public function pathinfo($options = null)
    {
        $this->current = pathinfo($this->current, $options);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Un-quotes a quoted string
     * @link http://php.net/manual/en/function.stripslashes.php
     * @param string <p>
     * The input string.
     * </p>
     * @return string a string with backslashes stripped off.
     * (\' becomes ' and so on.)
     * Double backslashes (\\) are made into a single
     * backslash (\).
     */
    public function stripslashes()
    {
        $this->current = stripslashes($this->current);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Un-quote string quoted with <function>addcslashes</function>
     * @link http://php.net/manual/en/function.stripcslashes.php
     * @param string <p>
     * The string to be unescaped.
     * </p>
     * @return string the unescaped string.
     */
    public function stripcslashes()
    {
        $this->current = stripcslashes($this->current);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find first occurrence of a string
     * @link http://php.net/manual/en/function.strstr.php
     * @param string <p>
     * The input string.
     * </p>
     * @param mixed $needle <p>
     * If needle is not a string, it is converted to
     * an integer and applied as the ordinal value of a character.
     * </p>
     * @param bool $before_needle [optional] <p>
     * If true, strstr returns
     * the part of the haystack before the first
     * occurrence of the needle.
     * </p>
     * @return string the portion of string, or false if needle
     * is not found.
     */
    public function strstr($needle, $before_needle = null)
    {
        $this->current = strstr($this->current, $needle, $before_needle);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Case-insensitive <function>strstr</function>
     * @link http://php.net/manual/en/function.stristr.php
     * @param string <p>
     * The string to search in
     * </p>
     * @param mixed $needle <p>
     * If needle is not a string, it is converted to
     * an integer and applied as the ordinal value of a character.
     * </p>
     * @param bool $before_needle [optional] <p>
     * If true, stristr
     * returns the part of the haystack before the
     * first occurrence of the needle.
     * </p>
     * @return string the matched substring. If needle is not
     * found, returns false.
     */
    public function stristr($needle, $before_needle = null)
    {
        $this->current = stristr($this->current, $needle, $before_needle);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Find the last occurrence of a character in a string
     * @link http://php.net/manual/en/function.strrchr.php
     * @param string <p>
     * The string to search in
     * </p>
     * @param mixed $needle <p>
     * If needle contains more than one character,
     * only the first is used. This behavior is different from that of
     * strstr.
     * </p>
     * <p>
     * If needle is not a string, it is converted to
     * an integer and applied as the ordinal value of a character.
     * </p>
     * @return string This function returns the portion of string, or false if
     * needle is not found.
     */
    public function strrchr($needle)
    {
        $this->current = strrchr($this->current, $needle);
        return $this;
    }

    /**
     * (PHP 4 &gt;= 4.3.0, PHP 5)<br/>
     * Randomly shuffles a string
     * @link http://php.net/manual/en/function.str-shuffle.php
     * @param string <p>
     * The input string.
     * </p>
     * @return string the shuffled string.
     */
    public function str_shuffle()
    {
        $this->current = str_shuffle($this->current);
        return $this;
    }

    /**
     * (PHP 4 &gt;= 4.3.0, PHP 5)<br/>
     * Return information about words used in a string
     * @link http://php.net/manual/en/function.str-word-count.php
     * @param string <p>
     * The string
     * </p>
     * @param int $format [optional] <p>
     * Specify the return value of this function. The current supported values
     * are:
     * 0 - returns the number of words found
     * @param string $charlist [optional] <p>
     * A list of additional characters which will be considered as 'word'
     * </p>
     * @return mixed an array or an integer, depending on the
     * format chosen.
     */
    public function str_word_count($format = null, $charlist = null)
    {
        $this->current = str_word_count($this->current, $format, $charlist);
        return $this;
    }

    /**
     * (PHP 5)<br/>
     * Convert a string to an array
     * @link http://php.net/manual/en/function.str-split.php
     * @param string <p>
     * The input string.
     * </p>
     * @param int $split_length [optional] <p>
     * Maximum length of the chunk.
     * </p>
     * @return array If the optional split_length parameter is
     * specified, the returned array will be broken down into chunks with each
     * being split_length in length, otherwise each chunk
     * will be one character in length.
     * </p>
     * <p>
     * false is returned if split_length is less than 1.
     * If the split_length length exceeds the length of
     * string, the entire string is returned as the first
     * (and only) array element.
     */
    public function str_split($split_length = 1)
    {
        $this->current = str_split($this->current, $split_length);
        return $this;
    }

    /**
     * (PHP 5)<br/>
     * Search a string for any of a set of characters
     * @link http://php.net/manual/en/function.strpbrk.php
     * @param string <p>
     * The string where char_list is looked for.
     * </p>
     * @param string $char_list <p>
     * This parameter is case sensitive.
     * </p>
     * @return string a string starting from the character found, or false if it is
     * not found.
     */
    public function strpbrk($char_list)
    {
        $this->current = strpbrk($this->current, $char_list);
        return $this;
    }

    /**
     * (PHP 5)<br/>
     * Binary safe comparison of 2 strings from an offset, up to length characters
     * @link http://php.net/manual/en/function.substr-compare.php
     * @param string <p>
     * The main string being compared.
     * </p>
     * @param string $str <p>
     * The secondary string being compared.
     * </p>
     * @param int $offset <p>
     * The start position for the comparison. If negative, it starts counting
     * from the end of the string.
     * </p>
     * @param int $length [optional] <p>
     * The length of the comparison.
     * </p>
     * @param bool $case_insensitivity [optional] <p>
     * If case_insensitivity is true, comparison is
     * case insensitive.
     * </p>
     * @return int &lt; 0 if main_str from position
     * offset is less than str, &gt;
     * 0 if it is greater than str, and 0 if they are equal.
     * If offset is equal to or greater than the length of
     * main_str or length is set and
     * is less than 1, substr_compare prints a warning and returns
     * false.
     */
    public function substr_compare($str, $offset, $length = null, $case_insensitivity = null)
    {
        $this->current = substr_compare($this->current, $str, $offset, $length, $case_insensitivity);
        return $this;
    }

    /**
     * (PHP 4 &gt;= 4.0.5, PHP 5)<br/>
     * Locale based string comparison
     * @link http://php.net/manual/en/function.strcoll.php
     * @param string <p>
     * The first string.
     * </p>
     * @param string $str2 <p>
     * The second string.
     * </p>
     * @return int &lt; 0 if str1 is less than
     * str2; &gt; 0 if
     * str1 is greater than
     * str2, and 0 if they are equal.
     */
    public function strcoll($str2)
    {
        $this->current = strcoll($this->current, $str2);
        return $this;
    }

    /**
     * (PHP 4 &gt;= 4.3.0, PHP 5)<br/>
     * Formats a number as a currency string
     * @link http://php.net/manual/en/function.money-format.php
     * @param string <p>
     * The format specification consists of the following sequence:
     * <p>a % character</p>
     * @param float $number <p>
     * The number to be formatted.
     * </p>
     * @return string the formatted string. Characters before and after the formatting
     * string will be returned unchanged.
     * Non-numeric number causes returning &null; and
     * emitting E_WARNING.
     */
    public function money_format($number)
    {
        $this->current = money_format($this->current, $number);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Return part of a string
     * @link http://php.net/manual/en/function.substr.php
     * @param string <p>
     * The input string.
     * </p>
     * @param int $start <p>
     * If start is non-negative, the returned string
     * will start at the start'th position in
     * string, counting from zero. For instance,
     * in the string 'abcdef', the character at
     * position 0 is 'a', the
     * character at position 2 is
     * 'c', and so forth.
     * </p>
     * <p>
     * If start is negative, the returned string
     * will start at the start'th character
     * from the end of string.
     * </p>
     * <p>
     * If string is less than or equal to
     * start characters long, false will be returned.
     * </p>
     * <p>
     * Using a negative start
     * ]]>
     * </p>
     * @param int $length [optional] <p>
     * If length is given and is positive, the string
     * returned will contain at most length characters
     * beginning from start (depending on the length of
     * string).
     * </p>
     * <p>
     * If length is given and is negative, then that many
     * characters will be omitted from the end of string
     * (after the start position has been calculated when a
     * start is negative). If
     * start denotes a position beyond this truncation,
     * an empty string will be returned.
     * </p>
     * <p>
     * If length is given and is 0,
     * false or &null; an empty string will be returned.
     * </p>
     * Using a negative length
     * ]]>
     * @return string the extracted part of string or false on failure.
     */
    public function substr($start, $length = null)
    {
        $this->current = substr($this->current, $start, $length);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Replace text within a portion of a string
     * @link http://php.net/manual/en/function.substr-replace.php
     * @param mixed <p>
     * The input string.
     * </p>
     * @param string $replacement <p>
     * The replacement string.
     * </p>
     * @param int $start <p>
     * If start is positive, the replacing will
     * begin at the start'th offset into
     * string.
     * </p>
     * <p>
     * If start is negative, the replacing will
     * begin at the start'th character from the
     * end of string.
     * </p>
     * @param int $length [optional] <p>
     * If given and is positive, it represents the length of the portion of
     * string which is to be replaced. If it is
     * negative, it represents the number of characters from the end of
     * string at which to stop replacing. If it
     * is not given, then it will default to strlen(
     * string ); i.e. end the replacing at the
     * end of string. Of course, if
     * length is zero then this function will have the
     * effect of inserting replacement into
     * string at the given
     * start offset.
     * </p>
     * @return mixed The result string is returned. If string is an
     * array then array is returned.
     */
    public function substr_replace($replacement, $start, $length = null)
    {
        $this->current = substr_replace($this->current, $replacement, $start, $length);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Quote meta characters
     * @link http://php.net/manual/en/function.quotemeta.php
     * @param string <p>
     * The input string.
     * </p>
     * @return string the string with meta characters quoted.
     */
    public function quotemeta()
    {
        $this->current = quotemeta($this->current);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Make a string's first character uppercase
     * @link http://php.net/manual/en/function.ucfirst.php
     * @param string <p>
     * The input string.
     * </p>
     * @return string the resulting string.
     */
    public function ucfirst()
    {
        $this->current = ucfirst($this->current);
        return $this;
    }

    /**
     * (PHP 5 &gt;= 5.3.0)<br/>
     * Make a string's first character lowercase
     * @link http://php.net/manual/en/function.lcfirst.php
     * @param string <p>
     * The input string.
     * </p>
     * @return string the resulting string.
     */
    public function lcfirst()
    {
        $this->current = lcfirst($this->current);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Uppercase the first character of each word in a string
     * @link http://php.net/manual/en/function.ucwords.php
     * @param string <p>
     * The input string.
     * </p>
     * @return string the modified string.
     */
    public function ucwords()
    {
        $this->current = ucwords($this->current);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Translate certain characters
     * @link http://php.net/manual/en/function.strtr.php
     * @param string <p>
     * The string being translated.
     * </p>
     * @param string $from <p>
     * The string replacing from.
     * </p>
     * @param string $to <p>
     * The string being translated to to.
     * </p>
     * @return string This function returns a copy of str,
     * translating all occurrences of each character in
     * from to the corresponding character in
     * to.
     */
    public function strtr($from, $to)
    {
        $this->current = strtr($this->current, $from, $to);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Quote string with slashes
     * @link http://php.net/manual/en/function.addslashes.php
     * @param string <p>
     * The string to be escaped.
     * </p>
     * @return string the escaped string.
     */
    public function addslashes()
    {
        $this->current = addslashes($this->current);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Quote string with slashes in a C style
     * @link http://php.net/manual/en/function.addcslashes.php
     * @param string <p>
     * The string to be escaped.
     * </p>
     * @param string $charlist <p>
     * A list of characters to be escaped. If
     * charlist contains characters
     * \n, \r etc., they are
     * converted in C-like style, while other non-alphanumeric characters
     * with ASCII codes lower than 32 and higher than 126 converted to
     * octal representation.
     * </p>
     * <p>
     * When you define a sequence of characters in the charlist argument
     * make sure that you know what characters come between the
     * characters that you set as the start and end of the range.
     * ]]>
     * Also, if the first character in a range has a higher ASCII value
     * than the second character in the range, no range will be
     * constructed. Only the start, end and period characters will be
     * escaped. Use the ord function to find the
     * ASCII value for a character.
     * ]]>
     * </p>
     * <p>
     * Be careful if you choose to escape characters 0, a, b, f, n, r,
     * t and v. They will be converted to \0, \a, \b, \f, \n, \r, \t
     * and \v.
     * In PHP \0 (NULL), \r (carriage return), \n (newline), \f (form feed),
     * \v (vertical tab) and \t (tab) are predefined escape sequences,
     * while in C all of these are predefined escape sequences.
     * </p>
     * @return string the escaped string.
     */
    public function addcslashes($charlist)
    {
        $this->current = addcslashes($this->current, $charlist);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Strip whitespace (or other characters) from the end of a string.
     * Without the second parameter, rtrim() will strip these characters:
     * <ul>
     * <li>" " (ASCII 32 (0x20)), an ordinary space.
     * <li>"\t" (ASCII 9 (0x09)), a tab.
     * <li>"\n" (ASCII 10 (0x0A)), a new line (line feed).
     * <li>"\r" (ASCII 13 (0x0D)), a carriage return.
     * <li>"\0" (ASCII 0 (0x00)), the NUL-byte.
     * <li>"\x0B" (ASCII 11 (0x0B)), a vertical tab.
     * </ul>
     * @link http://php.net/manual/en/function.rtrim.php
     * @param string <p>
     * The input string.
     * </p>
     * @param string $charlist [optional] <p>
     * You can also specify the characters you want to strip, by means
     * of the charlist parameter.
     * Simply list all characters that you want to be stripped. With
     * .. you can specify a range of characters.
     * </p>
     * @return string the modified string.
     */
    public function rtrim($charlist = null)
    {
        $this->current = rtrim($this->current, $charlist);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Replace all occurrences of the search string with the replacement string
     * @link http://php.net/manual/en/function.str-replace.php
     * @param $replace
     * @param mixed $subject <p>
     * The string or array being searched and replaced on,
     * otherwise known as the haystack.
     * </p>
     * <p>
     * If subject is an array, then the search and
     * replace is performed with every entry of
     * subject, and the return value is an array as
     * well.
     * </p>
     * @param int $count [optional] If passed, this will hold the number of matched and replaced needles.
     * @internal param mixed $search <p>
     * The value being searched for, otherwise known as the needle.
     * An array may be used to designate multiple needles.
     * </p>
     * @internal param $mixed <p>
     * The replacement value that replaces found search
     * values. An array may be used to designate multiple replacements.
     * </p>
     * @return mixed This function returns a string or an array with the replaced values.
     */
    public function str_replace($replace, $subject, &$count = null)
    {
        $this->current = str_replace($this->current, $replace, $subject, $count);
        return $this;
    }

    /**
     * (PHP 5)<br/>
     * Case-insensitive version of <function>str_replace</function>.
     * @link http://php.net/manual/en/function.str-ireplace.php
     * @param mixed <p>
     * Every replacement with search array is
     * performed on the result of previous replacement.
     * </p>
     * @param mixed $replace <p>
     * </p>
     * @param mixed $subject <p>
     * If subject is an array, then the search and
     * replace is performed with every entry of
     * subject, and the return value is an array as
     * well.
     * </p>
     * @param int $count [optional] <p>
     * The number of matched and replaced needles will
     * be returned in count which is passed by
     * reference.
     * </p>
     * @return mixed a string or an array of replacements.
     */
    public function str_ireplace($replace, $subject, &$count = null)
    {
        $this->current = str_ireplace($this->current, $replace, $subject, $count);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Repeat a string
     * @link http://php.net/manual/en/function.str-repeat.php
     * @param string <p>
     * The string to be repeated.
     * </p>
     * @param int $multiplier <p>
     * Number of time the input string should be
     * repeated.
     * </p>
     * <p>
     * multiplier has to be greater than or equal to 0.
     * If the multiplier is set to 0, the function
     * will return an empty string.
     * </p>
     * @return string the repeated string.
     */
    public function str_repeat($multiplier)
    {
        $this->current = str_repeat($this->current, $multiplier);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Return information about characters used in a string
     * @link http://php.net/manual/en/function.count-chars.php
     * @param string <p>
     * The examined string.
     * </p>
     * @param int $mode [optional] <p>
     * See return values.
     * </p>
     * @return mixed Depending on mode
     * count_chars returns one of the following:
     * 0 - an array with the byte-value as key and the frequency of
     * every byte as value.
     * 1 - same as 0 but only byte-values with a frequency greater
     * than zero are listed.
     * 2 - same as 0 but only byte-values with a frequency equal to
     * zero are listed.
     * 3 - a string containing all unique characters is returned.
     * 4 - a string containing all not used characters is returned.
     */
    public function count_chars($mode = null)
    {
        $this->current = count_chars($this->current, $mode);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Split a string into smaller chunks
     * @link http://php.net/manual/en/function.chunk-split.php
     * @param string <p>
     * The string to be chunked.
     * </p>
     * @param int $chunklen [optional] <p>
     * The chunk length.
     * </p>
     * @param string $end [optional] <p>
     * The line ending sequence.
     * </p>
     * @return string the chunked string.
     */
    public function chunk_split($chunklen = null, $end = null)
    {
        $this->current = chunk_split($this->current, $chunklen, $end);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Strip whitespace (or other characters) from the beginning and end of a string
     * @link http://php.net/manual/en/function.trim.php
     * @param string <p>
     * The string that will be trimmed.
     * </p>
     * @param string $charlist [optional] <p>
     * Optionally, the stripped characters can also be specified using
     * the charlist parameter.
     * Simply list all characters that you want to be stripped. With
     * .. you can specify a range of characters.
     * </p>
     * @return string The trimmed string.
     */
    public function trim($charlist = null)
    {
        $this->current = trim($this->current, $charlist);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Strip whitespace (or other characters) from the beginning of a string
     * @link http://php.net/manual/en/function.ltrim.php
     * @param string <p>
     * The input string.
     * </p>
     * @param string $charlist [optional] <p>
     * You can also specify the characters you want to strip, by means of the
     * charlist parameter.
     * Simply list all characters that you want to be stripped. With
     * .. you can specify a range of characters.
     * </p>
     * @return string This function returns a string with whitespace stripped from the
     * beginning of str.
     * Without the second parameter,
     * ltrim will strip these characters:
     * " " (ASCII 32
     * (0x20)), an ordinary space.
     * "\t" (ASCII 9
     * (0x09)), a tab.
     * "\n" (ASCII 10
     * (0x0A)), a new line (line feed).
     * "\r" (ASCII 13
     * (0x0D)), a carriage return.
     * "\0" (ASCII 0
     * (0x00)), the NUL-byte.
     * "\x0B" (ASCII 11
     * (0x0B)), a vertical tab.
     */
    public function ltrim($charlist = null)
    {
        $this->current = ltrim($this->current, $charlist);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Strip HTML and PHP tags from a string
     * @link http://php.net/manual/en/function.strip-tags.php
     * @param string <p>
     * The input string.
     * </p>
     * @param string $allowable_tags [optional] <p>
     * You can use the optional second parameter to specify tags which should
     * not be stripped.
     * </p>
     * <p>
     * HTML comments and PHP tags are also stripped. This is hardcoded and
     * can not be changed with allowable_tags.
     * </p>
     * @return string the stripped string.
     */
    public function strip_tags($allowable_tags = null)
    {
        $this->current = strip_tags($this->current, $allowable_tags);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Calculate the similarity between two strings
     * @link http://php.net/manual/en/function.similar-text.php
     * @param string <p>
     * The first string.
     * </p>
     * @param string $second <p>
     * The second string.
     * </p>
     * @param float $percent [optional] <p>
     * By passing a reference as third argument,
     * similar_text will calculate the similarity in
     * percent for you.
     * </p>
     * @return int the number of matching chars in both strings.
     */
    public function similar_text($second, &$percent = null)
    {
        $this->current = similar_text($this->current, $second, $percent);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Split a string by string
     * @link http://php.net/manual/en/function.explode.php
     * @param string <p>
     * The boundary string.
     * </p>
     * @param string $string <p>
     * The input string.
     * </p>
     * @param int $limit [optional] <p>
     * If limit is set and positive, the returned array will contain
     * a maximum of limit elements with the last
     * element containing the rest of string.
     * </p>
     * <p>
     * If the limit parameter is negative, all components
     * except the last -limit are returned.
     * </p>
     * <p>
     * If the limit parameter is zero, then this is treated as 1.
     * </p>
     * @return array If delimiter is an empty string (""),
     * explode will return false.
     * If delimiter contains a value that is not
     * contained in string and a negative
     * limit is used, then an empty array will be
     * returned. For any other limit, an array containing
     * string will be returned.
     */
    public function explode($string, $limit = null)
    {
        return new HTArray(explode($this->current, $string, $limit));
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Join array elements with a string
     * @link http://php.net/manual/en/function.implode.php
     * @param string [optional]<p>
     * Defaults to an empty string. This is not the preferred usage of
     * implode as glue would be
     * the second parameter and thus, the bad prototype would be used.
     * </p>
     * @param array $pieces <p>
     * The array of strings to implode.
     * </p>
     * @return string a string containing a string representation of all the array
     * elements in the same order, with the glue string between each element.
     */
    public function implode(array $pieces)
    {
        $this->current = implode($this->current, $pieces);
        return $this;
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * &Alias; <function>implode</function>
     * @link http://php.net/manual/en/function.join.php
     * @param string <p>
     * Defaults to an empty string. This is not the preferred usage of
     * implode as glue would be
     * the second parameter and thus, the bad prototype would be used.
     * </p>
     * @param array $pieces <p>
     * The array of strings to implode.
     * </p>
     * @return string a string containing a string representation of all the array
     * elements in the same order, with the glue string between each element.
     */
    public function join($pieces)
    {
        $this->current = join($this->current, $pieces);
        return $this;
    }
}
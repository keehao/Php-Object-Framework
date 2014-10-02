<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-28
 * Time: 下午4:55
 */

namespace HTFramework\DB;


class HTField
{
    public $select_field;
    public $field;
    public $variable;
    public $type;

    public function __construct($table_name, $field, $type = 'string')
    {
        $this->select_field = $table_name . '.' . $field . ' as ' . $table_name . '_' . $field;
        $this->variable = ':' . $table_name . '_' . $field;
        $this->field = $field;
        $this->type = $type;
    }
} 
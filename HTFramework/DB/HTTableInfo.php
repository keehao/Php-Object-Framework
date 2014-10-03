<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-10-2
 * Time: 下午5:37
 */

namespace HTFramework\DB;


class HTTableInfo
{
    public $primary_key;
    public $table_name;

    /**
     * @param array $table
     * @desc 构造表信息模型
     */
    public function __construct(array $table)
    {
        $this->table_name = $table['table_name'];
        $this->primary_key = new HTField($this->table_name,$table['primary_key'], $table['filed'][$table['primary_key']]);
        foreach ($table['filed'] as $field => $type){
            $this->$property = new HTField($this->table_name, $field, $type);
        }
    }
}

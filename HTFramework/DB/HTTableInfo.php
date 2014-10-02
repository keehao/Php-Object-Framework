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

    public function __construct()
    {
        $this->$property = new HTField('', '', 'id');
    }
}
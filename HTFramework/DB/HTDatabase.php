<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-28
 * Time: 下午4:54
 */

namespace HTFramework\DB;


class HTDatabase extends HTTable
{
    protected $pdo_stmt;

    private $run;

    public function __construct()
    {
        parent::__construct();
        $this->run = false;
    }

    public function get_count()
    {

    }

    public function notify_access()
    {
        if (!$this->run) {
            $this->pdo_stmt = null;
            $this->run = false;
        }
    }
}
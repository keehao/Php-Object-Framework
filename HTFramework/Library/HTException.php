<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-30
 * Time: 下午2:33
 */

namespace HTFramework\Library;

use Exception;

class HTException extends Exception{

    public function __construct($class)
    {
        parent::__construct();
    }
} 
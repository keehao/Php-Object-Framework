<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-28
 * Time: 下午4:54
 */

namespace HTFramework;


abstract class HTDatabase
{
    public $host;
    public $port;
    public $user;
    public $name = 'text';
    public $password;
    public $encoding;
} 
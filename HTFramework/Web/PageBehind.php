<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-29
 * Time: 下午5:14
 */

namespace HTFramework\Web;


abstract class PageBehind
{
    abstract public function page_init();
    abstract public function page_load();
    abstract public function page_title();
} 
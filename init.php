<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-11
 * Time: 下午3:15
 */

require __DIR__ . DIRECTORY_SEPARATOR . 'global.configure.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'server.configure.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'global.fun.php';


class www
{
    public $s_X = 'DefaultServer';
    public $s_Y = 'main';


    public function __construct()
    {
        /**
         * 注册
         */
        \GlobalFunc::Registration();

        /**
         * 验证参数
         */
        if (isset($_GET['x'])) {
            if (\GlobalFunc::CheckXY($_GET['x'])) {
                $this->s_X = $_GET['x'] . 'Server';
                if (isset($_GET['y'])) {
                    if (\GlobalFunc::CheckXY($_GET['y'])) {
                        $this->s_Y = $_GET['y'];
                    }
                }
            }
        }

    }

    /**
     * 析构方法
     * @access public
     * @author saligia
     * @date 2014/01/11
     * @param void
     * @return void
     */
    public function __destruct()
    {
        unset($this->s_X);
        unset($this->s_Y);
    }

    public function init()
    {
        $ServerPage = null;
        $Action = &$this->s_Y;

        if (in_array($this->s_X, ServerCollection::$a_ServerCollection)) {
            $Class = &$this->s_X;
        } else {
            $Class = 'DefaultServer';
        }

        $ServerPage = new $Class();
        $ServerPage->$Action();
        unset($ServerPage);
        unset($Action);
    }
}




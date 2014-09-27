<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-1-10
 * Time: 下午1:18
 */

namespace Factories\System;


class Error
{
    public static function ErrorDbActionLog($m_err)
    {
        print_r($m_err);
    }

    public static function ErrorDbErrorLog($m_err)
    {
        print_r($m_err);
    }

    public static function ErrorPrintNOTICE($s_err)
    {
        trigger_error( $s_err,  E_USER_NOTICE );
    }
} 
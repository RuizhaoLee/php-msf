<?php
/**
 * 协程NULL结果
 *
 * @author camera360_server@camera360.com
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\MSF\Server\CoreBase;

class CoroutineNull
{
    private static $instance;

    public function __construct()
    {
        self::$instance = &$this;
    }

    public static function &getInstance()
    {
        if (self::$instance == null) {
            new CoroutineNull();
        }
        return self::$instance;
    }
}
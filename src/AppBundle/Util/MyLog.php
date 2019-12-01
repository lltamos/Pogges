<?php

namespace AppBundle\Util;

require_once(dirname(__FILE__) . "/../../../vendor/autoload.php");

use Monolog\Formatter\JsonFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

class MyLog
{
    function logger($target, $msg)
    {
        // 创建日志服务
        $logger = new Logger('my_logger');
        // 添加一些处理器
        $stream_handler = new StreamHandler(__DIR__ . '/my_app.log', Logger::INFO);
        $stream_handler->setFormatter(new JsonFormatter());
        $logger->pushHandler($stream_handler);
        $logger->pushHandler(new FirePHPHandler());
        // 现在你就可以用日志服务了
        if (is_array($msg)) {
            $logger->info($target, $msg);
        } else {
            $logger->info($target, array($msg));
        }

    }


    function baseLogger($msg)
    {
        // 创建日志服务
        $logger = new Logger('my_logger');
        // 添加一些处理器
        $logger->pushHandler(new StreamHandler(__DIR__ . '/my_app.log', Logger::DEBUG));
        $logger->pushHandler(new FirePHPHandler());

        // 现在你就可以用日志服务了
        $logger->info($msg);
    }
}




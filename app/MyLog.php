<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
class MyLog
{
    function logger($msg) 
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
<?php




function errorLog()
{
    Logger::configure(__DIR__.'/../log4php.properties');
    $logger = Logger::getLogger('test');
    $logger->info(json_encode(array('errorCode' => 0,'message'=>'success')));
    $logger->debug(json_encode(array('errorCode' => 0,'message'=>'success')));
    echo '<pre>';print_r($logger);exit;
    $logger = Logger::getLogger('test');

    if ("" != $str) {
        $logger->debug("str的值不为空! 它的值为: " . $str . "<br>");
    }
    if (strlen($str) > 4) {
        $logger->debug("str的长度大于4!" . "<br>");
    }

//    $logger::shutdown();
    return true;
}

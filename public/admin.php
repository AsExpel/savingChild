<?php
/**
 * Created by PhpStorm.
 * User: Lauro
 * Date: 2019/12/27
 * Time: 15:22
 */

// [ 应用入口文件 ]
namespace think;



require __DIR__ . '/../vendor/autoload.php';
dump("in admin.php");
// 执行HTTP应用并响应
$http = (new  App())->http;

$response = $http->run();

$response->send();

$http->end($response);
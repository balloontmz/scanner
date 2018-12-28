<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/12/28
 * Time: 13:11
 */
require 'vendor/autoload.php';

$app = new \Tomtiddler\Test\APP();

$app->addRoute('/user/tom', function (){
   $this->responseContentType = 'application/json;charset=utf8';
   $this->responseBody = '{"name":"tomtiddler"}';
});
$app->dispatch('/user/tom');
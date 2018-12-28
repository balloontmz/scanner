<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/12/27
 * Time: 11:06
 */
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$csv = [
    "https://github.com/",
    "https://www.jianshu.com/p/54b3afc06126",
    "www.baidu.com",
    "www.tomtiddler.com",
    "www.sina.com",
    "www.yahoo.com",
];

foreach ($csv as $csvRow) {
    try{
        $httpResponse = $client->get($csvRow);

        if ($httpResponse->getStatusCode() >= 400){
            throw new \Exception($httpResponse->getStatusCode());
        }
    } catch (\Exception $e){
        echo $csvRow.'  '.$e->getMessage().PHP_EOL;
    }
}
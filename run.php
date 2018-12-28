<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/12/27
 * Time: 16:26
 */
require 'vendor/autoload.php';

$urls = [
    "https://github.com/",
    "https://www.jianshu.com/p/54b3afc06126",
    "www.baidu.com",
    "www.tomtiddler.com",
    "www.sina.com",
    "www.yahoo.com",
];

$scanner = new \Tomtiddler\Test\Url\Scanner($urls);
print_r($scanner->getInvalidUrls());
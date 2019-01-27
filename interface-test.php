<?php

/**
 * 导入类自动加载
 */

require 'vendor/autoload.php';

/**
 * 新建一个打开和保存 实现了文档接口的类实例 的 DocumentStore 类实例
 */

$document = new \InterfaceTest\DocumentStore();

// 添加 html 文档
$htmldoc = new \InterfaceTest\HtmlDocument('http://php.net');
$document->addDocument($htmldoc);

// 添加 流 文档
$streamdoc = new \InterfaceTest\StreamDocument(fopen('note.md', 'rb'));
$document->addDocument($streamdoc);

// 添加 html 文档
$commanddoc = new \InterfaceTest\CommandOutputDocument('cat note.md');
$document->addDocument($commanddoc);

print_r($document->getDocuments());
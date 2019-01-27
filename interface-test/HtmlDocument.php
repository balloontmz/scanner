<?php
namespace InterfaceTest;

use InterfaceTest\Documentable;

/**
 * 根据接口定义 html 文档，通过 curl 的方法获取 html 文档
 */
class HtmlDocument implements Documentable
{
    protected $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getId()
    {
        return $this->url;
    }

    public function getContent()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, $this->url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $this->url);
        curl_setopt($ch, CURLOPT_MAXREDIRS, $this->url);
        $html = curl_exec($ch);
        curl_close($ch);

        return $html;
    }

}
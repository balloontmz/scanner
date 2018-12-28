<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/12/27
 * Time: 15:41
 */

namespace Tomtiddler\Test\Url;

use GuzzleHttp\Client;

class Scanner
{
    /**
     * @var array 一个由 URL 组成的数组
     */
    protected $urls;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * 构造方法
     * @param array $urls 一个要扫描的 URL 数组
     */
    public function __construct(array $urls)
    {
        $this->urls = $urls;
        $this->httpClient = new Client();
    }

    /**
     * 获取死链
     * @return array
     */
    public function getInvalidUrls()
    {
        $res = [];
        foreach ($this->urls as $url) {
            try{
                $statusCode = $this->getStatusCodeForUrl($url);
            } catch (\Exception $e){
                $statusCode = $e->getMessage();
            }

            if ($statusCode){
                array_push($res, [
                    'url'  => $url,
                    'status'=>$statusCode
                ]);
            }
        }
        return $res;
    }

    /**
     * 获取指定 url 的 Http 状态码
     * @param string $url 远程 url
     * @return int http 状态码
     */
    protected function getStatusCodeForUrl($url)
    {
        //
        $httpResponse = $this->httpClient->get($url);
        return $httpResponse->getStatusCode();
    }

}
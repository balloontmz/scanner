<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/12/28
 * Time: 13:04
 */
namespace Tomtiddler\Test;

class APP
{
    protected $routes = array();
    protected $responseStatus = '200 OK';
    protected $responseContentType = 'text/html';
    protected $responseBody = 'Hello world';

    /**
     * 一个简单的路由器实现，还需要一个轮询监听的功能，就能实现简单的功能了。
     * @param $routePath
     * @param $routeCallBack
     */

    public function addRoute($routePath, $routeCallBack)
    {
        $this->routes[$routePath] = $routeCallBack->bindTo($this, __CLASS__);
    }

    public function dispatch($currentPath)
    {
        foreach ($this->routes as $routePath=>$callback){
            if ($routePath===$currentPath){
                $callback();
            }
        }

        header('HTTP/1.1 '.$this->responseStatus);
        header('Content-type: '.$this->responseContentType);
        header('Content-length: '.mb_strlen($this->responseBody));
        echo $this->responseBody;
    }
}
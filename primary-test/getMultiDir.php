<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2019/1/2
 * Time: 17:25
 */
// 获取多级目录
function getDir($path){
    $arr2[] = $path;
    if (is_file($path)){

    }else{
        $arr = scandir($path);
        foreach ($arr as $value){
            if ($value!="."&&$value!=".."){
                $arr1 = getDir($path.'/'.$value);
                $arr2 = array_merge($arr2, $arr1);
            }
        }
    }
    return $arr2;
}

$data = getDir('D:\wamp\www\laravel\scanner');
var_dump($data);
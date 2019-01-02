<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2019/1/2
 * Time: 16:12
 */
header("Content-type: image/png");
// $x 需要裁剪的宽, $y 需要裁剪的高，$filename需要处理的文件
function tailor($x, $y, $filename){
    $original = getimagesize($filename);
    $type = $original['mime'];
    $bili = 0;
    switch ($type){
        case 'image/jpeg':
        case 'image/jpg':
            $fun_name = 'imagecreatefromjpeg';
            break;
        case 'image/png':
            $fun_name = 'imagecreatefrompng';
            break;
        case 'image/gif':
            $fun_name = 'imagecreatefromgif';
            break;
    }
    $oldImg = $fun_name($filename);
    if ($original[0] > $original[1]){
        $bili = $original[0]/$x;
    }else{
        $bili = $original[1]/$x;
    }
    if ($bili > 1){
        $newWidth = $original[0]/$bili;
        $newHeight = $original[1]/$bili;
    }else{
        $newWidth = $original[0];
        $newHeight = $original[1];
    }
    $newImg = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresized($newImg, $oldImg, 0,0,0,0,$newWidth, $newHeight, $original[0], $original[1]);
    imagepng($newImg);
}
// 访问该 php 文件，直接显示处理过的图片
tailor(100, 100, 'images/2.png');
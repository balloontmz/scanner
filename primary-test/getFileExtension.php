<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2019/1/2
 * Time: 15:49
 */
// 获取文件拓展名，根据文件名显式获取，不安全。
$str = "456.html.txt.jpEG";
preg_match_all('/.[a-zA-Z0-9]+/', $str, $countArry);
echo $countArry[0][3];

echo "<br>";

$filenum = strrpos($str, ".");
echo substr($str, $filenum);
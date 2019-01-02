<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2019/1/2
 * Time: 16:33
 */
// 九九乘法表
echo '<br>';
for ($i=1; $i<=9; $i++){
    for ($j=1; $j<=$i; $j++){
        $value = $i * $j;
        echo $j .'*'.$i.'='.$value.' ';
    }
    echo '<br>';
}
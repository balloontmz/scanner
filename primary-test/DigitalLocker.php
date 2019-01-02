<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2019/1/2
 * Time: 15:58
 */
$str = '201810234587923';

function locker($str){
    $str = (string)$str;
    $arr = array('t', 'y', 'd', 'e', 'r', 'w', 'b', 'h', 'x', 'p');
    $return = '';
    for ($i=0; $i<strlen($str); $i++){
        $temp = $str[$i];
        $to_temp = $arr[$temp];
        $return .=$to_temp;
    }
    return $return;
}

function unlocker($str){
    $arr = array('t', 'y', 'd', 'e', 'r', 'w', 'b', 'h', 'x', 'p');
    $return = '';
    for ($i=0; $i<strlen($str); $i++){
        $char = $str[$i];
        $num = array_search($char, $arr);
        $return .= $num;
    }
    return $return;
}
var_dump($str);
$s = locker($str);
var_dump($s);
$s1 = unlocker($s);
var_dump($s1);
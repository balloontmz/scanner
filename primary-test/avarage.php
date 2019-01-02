<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2019/1/2
 * Time: 16:55
 */
function avg($ars){
    $sum = 0;
    if (!is_array($ars)&&!is_string($ars)){
        return false;
    } elseif (is_array($ars)){
        foreach ($ars as $p){
            $sum += $p;
        }
        $avg = $sum/count($ars);
    } else {
        $ars2 = explode(',', $ars);
        foreach ($ars2 as $k){
            $sum += $k;
        }
        $avg = $sum/count($ars2);
    }
    return round($avg, 2);
}

$s = avg(1);
$ss = avg(array(1, 2, 3));
$sss = avg('6,7,1');
var_dump($sss);
var_dump($ss);
var_dump($s);
<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2019/1/2
 * Time: 17:07
 */
// 百钱百鸡
echo '<br>';
for ($x=0; $x<100;$x++){
    for ($y=0;$y<=(100-$x);$y++){
        for ($z=0; $z<=(100-$x-$y); $z++){
            if (((5*$x+3*$y+$z/3)==100)&&(($x+$y+$z)==100)){
                echo '公鸡'.$x.'<br>';
                echo '母鸡'.$y.'<br>';
                echo '小鸡'.$z.'<br>';
                echo '-----------------';
            }
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2019/1/2
 * Time: 16:37
 */
// 水仙花数：几个单独的数的立方和恰好是其本身
for ($i=0; $i<10; $i++){
    for ($j=0;$j<10;$j++){
        for ($k=0; $k<10; $k++){
            $values = pow($i, 3) + pow($j, 3) + pow($k, 3);
            if ($values == $i*100 + $j*10 + $k && $values != 1 && $values != 0){
                var_dump($values);
            }
        }
    }
}
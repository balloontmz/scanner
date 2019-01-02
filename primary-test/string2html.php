<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2019/1/2
 * Time: 17:19
 */
$string = <<<CDATA
A>B
B<A
Tom&John
He said:"I'm fire."
CDATA;
$string2 = htmlspecialchars($string);
var_dump($string2);

var_dump($string);


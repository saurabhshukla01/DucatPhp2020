<?php

$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$str = str_shuffle($str);

$str = substr($str,0,5);

echo $str;

?>
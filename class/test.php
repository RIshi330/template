<?php
$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$str .= '0123456789';
$str .= 'abcdefghijklmnopqrstuvwxyz' ;

$password = '' ;
for($i = 0;  $i < 10; $i++) {
    $password .= $str[rand(0, strlen($str)-1)] ;
}
echo "<h1>" .$password . "</h1>";
echo "<pre>" ;
print_r($_SERVER['HTTP_REFERER']) ;
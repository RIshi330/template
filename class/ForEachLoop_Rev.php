<?php

$array = array(
    array("1","2","3","4","5","6","7","8","9"),
    array("a","b","c","d","e","f","g"),
    array("A","B","C","D","E","F"),
);


$count = 1;

// foreach ($array as $val) {
//     echo "Array Number: " . $count++ . "<br><pre>" ;
//     print_r($val) ;
//     echo "</pre><bR>" ;
// }

date_default_timezone_set("Asia/Kolkata") ;
$date = date("Y-m-d H:i:sA") ;
echo $date . "<br>" ;
$date = date("Y-m-d H:i:s", strtotime("2022-06-13 23:23:23")) ;
echo $date . "<br>" ;

$date = date("D-F-Y H:i:s", strtotime("2022-06-13 23:23:23")) ;
echo $date . "<br>" ;
echo date_default_timezone_get() ;

?>
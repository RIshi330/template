<?php

$pointer = fopen("text.txt", "a+");

fwrite($pointer, "VIKAS") ;
fseek($pointer, 0) ;

while (!feof($pointer)) {
    echo fgets($pointer) . "<br>" ;
}


?>
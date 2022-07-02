<?php

echo "<br>RUN<br><pre>" ;

$filename = "suicideBomber.php" ;
$ptr = fopen($filename, "r") ;
if (!$ptr) {
    echo "Failed" ;
}
$data = "" ;

while(!feof($ptr)) {
    $data .= fgets($ptr) ;
}

echo $data;

echo "</pre><br>TERMINATED<br>" ;

?>
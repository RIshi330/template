<?php

// $ptr = fopen("config.php", 'a');
// fwrite($ptr, '<?php $site_id = 2 ; ');
// fclose($ptr);

$reader = fopen("config.php", 'r');
$counter = 0;
// $new_str = '<?php ' ;

$site_id = 362175;
$new_str = '<?php $site_id = ' . $site_id . ';';

while (!feof($reader)) {
    $str = fgets($reader);
    echo $str . "<br>";
    $new_str .= $str;
}

fclose($reader);

$new_str .= ' ?>';

$writter = fopen("copy_config.php", 'w');
fwrite($writter, $new_str);
fclose($writter);

echo "<br>NEW CONTENT<br>";
$reader = fopen("copy_config.php", 'r');
while (!feof($reader)) {
    echo fgets($reader) . "<br>";
}





$zip = new ZipArchive();

$DelFilePath = "first.zip";

if ($zip->open($DelFilePath, ZIPARCHIVE::CREATE)) {

    $zip->addFile($DelFilePath, "copy_config.php");
    $zip->close();
} else {
    echo "error";
}

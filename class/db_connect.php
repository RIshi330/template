<?php
define("HOST", "localhost");
define("USERNAME", "root") ;
define("PASSWORD", "") ;
define("DB", "class") ;

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB);
if (!$conn)
{
    die("Could not connect to database") ;
}

?>
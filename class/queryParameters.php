<?php
require_once "db_connect.php" ;

date_default_timezone_set("Asia/Kolkata");
$date = date("Y-m-d H:i:s") ;

$qry = mysqli_prepare($conn, "INSERT INTO `student`(`name`, `father_name`, `course`, `session`, `created_date`) VALUES (?, ?, ?, ?, ?)") ;
$qry->bind_param("sssss", $name, $fatherName, $course, $session, $date) ;


$name = "Vikas" ;
$fatherName = "Tejveer Singh" ;
$course = "BCA" ;
$session = "2020-2023" ;


$qry->execute();


$name = "ABC" ;
$fatherName = "DEF" ;
$course = "BBA" ;
$session = "2020-2023" ;


$qry->execute();




if ($qry) {
    echo "Inserted" ;
} else {
    echo "Failed" ;
}

?>
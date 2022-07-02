<?php

class Animals {
    private $name;
    private $lifeSpan ;

    function __construct($name, $lifeSpan) {
        $this->name = $name;
        $this->lifeSpan = $lifeSpan;
    }

    public function getName() {
        return $this->name ;
    }

    public function getLifeSpan() {
        return $this->lifeSpan ;
    }

    public function setName($name) {
        $this->name = $name ;
    }

    public function setLifeSpan(int $lifeSpan) {
        $this->lifeSpan = $lifeSpan ;
    }
}


$Animal_Object = new Animals("Tiger", 30.54) ;

$Animal_Object->setName("Lion") ;
$Animal_Object->setLifeSpan(40.432) ;

echo $Animal_Object->getName() ;
echo "<br>" ;
echo $Animal_Object->getLifeSpan() ;
echo "<br>" ;
echo "<br>" ;
echo "<br>" ;

$a = 10;
echo $a . "<br>" ;
$a = 010;
echo $a . "<br>" ;
$a = 0x10;
echo $a . "<br>" ;
$a = 0b10;
echo $a . "<br>" ;


$str = "Vikas" ;
for ($i = 0;  $i < strlen($str); $i++) {
    echo $str[$i] . "<br>" ;
}

$null = NULL ;
var_dump($null) ;

echo "<br>" ;

define ("TITLE", "Something went wrong") ;

echo TITLE . "<br>" ;
unset($GLOBALS['TITLE']);
echo TITLE . "<br>" ;

$a = array("Vikas", 20, 20.5, false, NULL) ;

var_dump($a) ;

echo "<br>" ;

foreach ($a as $key => $val) {
    echo $key . " => " . $val . "<br>" ;
}

echo "<br>" ;

function callByReference(&$a) {
    $a++;
}

$a = 5;
callByReference($a) ;

echo $a . "<br>" ;

function recursiveFunction($a) {
    if ($a <= 0) {
        echo "Reached at the bottom <br>" ;
        return ;
    }

    echo "Call number: ". $a . "<br>" ;
    recursiveFunction($a-1) ;
    echo "Returned at " . $a . "<br>" ;
}

recursiveFunction(5) ;

if (isset($_POST['form_submitted'])) {
    $file = $_FILES['file'] ;
    echo "<pre>" ;
    print_r($file) ;
    echo "</pre><br>" ;

    move_uploaded_file($file['tmp_name'], "uploaded_files/" . time() . $file['name']) ;
}

// if (mkdir("uploaded_files")) {
//     echo "Created" ;
// }


// $files = glob("uploaded_files/*") ;
// foreach ($files as $file) {
//     unlink($file) ;
// }

// rmdir("uploaded_files") ;


// if (is_dir("uploaded_files")) {
//     rmdir("uploaded_files") ;
// } else {
//     mkdir("uploaded_files") ;
// }

echo "<br>" ;
$ptr = fopen("not_exist.txt", "a+") ;
var_dump($ptr) ;
echo "<br>" ;
print_r($ptr) ;
echo "<br>" ;

function sayHello() {
    echo "Hello" ;
}

$func = "sayHello" ;
$func() ;

echo "<br>" ;

// $conn = mysqli_connect("localhost", "root", "", "test") or die ("connection error");
// while(true) {
//     $str = rand(10, 999) ;
//     $qry = "INSERT INTO test_table(name) VALUES ('$str') " ;
//     mysqli_query($conn, $qry) ;
// }

$arr = array("abc" => "val1", "def" => "val2", "ghi" => "val3") ;
$arr = array_change_key_case($arr, CASE_UPPER);

print_r($arr) ;
echo "<br>" ;

$arr2 = array_chunk($arr, 2, true) ;
echo "<pre>" ;
print_r($arr2) ;
echo "</pre>" ;
echo "<br>" ;


$rev = array_reverse($arr) ;
echo "<pre>";
print_r($rev) ;
echo "</pre>" ;
echo "<br>" ;

if (array_search("val3", $arr)) {
    echo "Found" ;
}
echo "<br>" ;


$intersect = array_intersect($arr, $arr2[0], $rev) ;
echo "<pre>" ;
print_r($intersect) ;
echo "</pre>" ;
echo "<br>" ;



// fwrite($ptr, "data") ;
// fwrite($ptr, " \n echo 'hello'; \n") ;
// fseek($ptr, 0) ;
// while (!feof($ptr)) {
//     echo fgetc($ptr) ;
// }

// echo "<br>" ;
// echo "<br>" ;

// $size = filesize("not_exist.txt") ;
// echo $size ;
// echo "<br>" ;

// $data = fread($ptr, $size);
// echo $data;

// if (copy("not_exist.txt", "copy_not_exist.txt")) {
//     unlink("not_exist.txt");
//     echo "Copied" ;
// } else {
//     echo "Can't copy" ;
// }

// fclose($ptr) ;



$x = (5>6)?5:6;
echo $x ."<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revision</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id=""><br>
        <input type="submit" value="Submit" name="form_submitted">
    </form>
</body>
</html>
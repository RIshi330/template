<?php
session_start();
setcookie("Name", "Value", time() + 86400, "/");

if (isset($_COOKIE['Name'])) {
    echo "Set";
} else {
    echo "Not Set";
}
echo "<br>";

echo 5 ** 2 . "<br>";

echo (5 <=> 6)  . "<br>";
echo (5 <=> 5)  . "<br>";
echo (5 <=> 4)  . "<br>";

var_dump(3 > 1 && 5 < 3);
echo "<br>";
var_dump(3 > 1 <> 5 < 3);
echo "<br>";

$arr1 = array("a", "b", "c", "d", "e", "f", "g");
$arr2 = array("a", "h", "i", "j", "k", "l", "m",);

$arr3 = ($arr1 + $arr2);
echo "<pre>";
print_r($arr3);
echo "</pre>";

$x = nulL ?? 2;
echo $x . "<br>";


function InfiniteArgs()
{
    foreach (func_get_args() as $arg) {
        echo $arg . " ";
    }
}

InfiniteArgs("A", "B", "C", "D");
InfiniteArgs();

echo "<br>";

function divide($a, $b)
{
    $result = "Not Defined";
    try {
        if ($b == 0)
            throw new Exception("Mathematical Error: Can't divide by zero<bR>");
        $result = $a / $b;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $result;
}

echo divide(4, 2) . "<br>";
echo divide(3, 0)  . "<br>";


?>
<script>
    console.log(document.cookie);
</script>
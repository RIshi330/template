<?php declare (strict_types = 1) ;

require_once "style.php";

function colorGenerator()
{
    return "rgba(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ",0.".rand(1,4).")";
}

$table = 17;

echo "
<div class='container'>
<table class='border' style='width: 100%; text-align: center;'>
";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td class='border' style='background-color: " . colorGenerator() . ";'>$table * $i = " . $table * $i . "</td>";
    echo "</tr>";
}

echo "
</table>
</div>
";



$arr = array(array("Name" => "Vikas", "Father's Name" => "Tejveer"), array("Name" => "Sanskar", "Father's Name" => "Jay"), array("Name" => "Anurag", "Father's Name" => "Pankaj"));

foreach ($ass as $a) {
    // echo $a . " => " . $na . "<br>";
    echo "Name: " . $a['Name'] . "<br>";
    echo "Father's Name: " . $a["Father's Name"] . "<br>";

    echo "<br>";
    echo "<br>";
}




function sum( float $a,  float $b) : int {
    return (int) ($a + $b);
}


echo sum (5.6, 5.6) ;


echo (5 === "5") ;
<?php


function Sum(int $a, int $b): int
{
    return $a + $b;
}

$funcName = "Sum";
echo $funcName(4, 5) . "<br>";

function print_fibonacci(int $totalNumbers, int $currNumber = 0, int $first = 0, int $second = 1)
{
    
    if ($totalNumbers == $currNumber) {
        return;
    }
    echo $first . " , " ;
    print_fibonacci($totalNumbers, $currNumber+1, $second, $first+$second) ;
}


print_fibonacci(10);
echo "<br>" ;


$arr['abc'] = "A" ;
$arr['def'] = "B" ;
$arr['ds'] = "D" ;
$arr['afd'] = "C" ;

$arr = array_chunk($arr, 2, true) ;

print_r($arr);
echo "<br>" ;

$arr = array_merge($arr[0], $arr[1]) ;
print_r($arr);
echo "<br>" ;

echo count($arr) ;
echo "<br>" ;

$arr = array_change_key_case($arr, CASE_UPPER) ;
print_r($arr);
echo "<br>" ;

arsort($arr, SORT_ASC);
print_r($arr);
echo "<br>" ;

class Animals {
    private $name;

    function __construct($name) {
        $this->name = $name ;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}


$obj = new Animals("Lion") ;

echo $obj->getName() . "<br>";

$obj->setName("Tiger") ;
echo $obj->getName() . "<br>";

$a[0] = 5;
$a[1] = 6 ;

print_r($a) ;
echo "<br>" ;


echo "<pre>" ;

$a = array_reverse($a) ;
print_r($a) ;
echo "<br>" ;

$r = print("Vikas") ;
echo "<br>" ;

echo($r) ;

echo "</pre>" ;

?>
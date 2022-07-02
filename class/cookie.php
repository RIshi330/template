<?php

$name = "cookie" ;
echo urldecode(base64_decode('sAlxN59cwXA')) ;
// setcookie($name, "Value", time() + 9000, '/', 'http://localhost', true, true) ;

if (isset($_COOKIE[$name])) {
    echo "<pre>" ;
    print_r($_COOKIE) ;
    echo "</pre>" ;
} else {
    echo "Not Set" ;
}
echo '<a href="test.php">link</a>' ;
echo "<pre>" ;
print_r($_SERVER['HTTP_REFERER']) ;

?>
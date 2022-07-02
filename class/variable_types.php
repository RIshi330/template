<?php
function st_var() {
    static $a = 5;
    $a++;
    echo $a . " | " ;
}

st_var();
st_var();
st_var();
st_var();
st_var();
?>
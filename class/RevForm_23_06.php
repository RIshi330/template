<?php

print_r(fopen("localhost/class/Rev_23_06.php", "r", true)) ;

if (isset($_POST['submit'])) {
    echo "<pre>" ;
    print_r($_FILES['image']) ;
    if (isset($_FILES['image'])  &&  $_FILES['image']['error'] == 0) {
        $name = $_FILES['image']['name'] ;
        $allowed_extensions = array( 'jpg', 'png', 'gif', 'jpeg') ;
        $arr = explode(".", $name) ;
        $given_extension = strtolower($arr[count($arr)-1]) ;

        if (array_search($given_extension, $allowed_extensions) !== false) {
            $size = $_FILES['image']['size'] ;
            if ($size/(1024*1024) > 5) {
                echo "Max size limit is 5MB" ;
            } else {
                if (move_uploaded_file($_FILES['image']['tmp_name'], "./" . time() . $name)) {
                    echo "Uploaded" ;
                } else {
                    echo "Failed" ;
                }
            }
        } else {
            echo "Extension not allowed" ;
        }
    }
    echo "</pre>" ;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name" id=""><br>
        <input type="file" name="image" id="" accept="image/*"><br>
        <input type="submit" value="Save" name="submit">
    </form>
</body>
</html>
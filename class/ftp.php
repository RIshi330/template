<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file']['tmp_name'];
    $remote_file = $_FILES['file']['name'];

    $ftp_server = 'ftp.1jammu.in' ;
    $ftp_user_name = 'vikas@shopkart.gq' ;
    $ftp_user_pass = 'Vikas12#$' ;

    // set up basic connection
    $ftp = ftp_connect($ftp_server);

    // login with username and password
    $login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);
    ftp_pasv($ftp, true);

    // upload a file
    if (ftp_put($ftp, $remote_file, $file, FTP_ASCII)) {
        echo "successfully uploaded $file\n";
    } else {
        echo "There was a problem while uploading $file\n";
    }

    // close the connection
    ftp_close($ftp);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
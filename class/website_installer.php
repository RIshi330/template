<?php

if (isset($_POST['submit'])) {
    if (isset($_FILES['file']['tmp_name'])  &&  $_FILES['file']['tmp_name']  != '') {
        $file_name = $_FILES['file']['name'];
        $ext = explode('.', $file_name);
        $ext = $ext[count($ext) - 1];
        if (strtolower($ext) == 'zip') {
            $extractor = new ZipArchive();
            if ($extractor->open($_FILES['file']['tmp_name'])) {
                $directory = "installer/";

                // #########################################
                $ftp_server = 'ftp.1jammu.in';
                $ftp_user_name = 'vikas@shopkart.gq';
                $ftp_user_pass = 'Vikas12#$';

                // set up basic connection
                $ftp = ftp_connect($ftp_server);

                // login with username and password
                $login_result = ftp_login($ftp, $ftp_user_name, $ftp_user_pass);
                ftp_pasv($ftp, true);

                #####################################################################################


                $extractor->extractTo($directory);
                $files = scandir($directory);
                if (!is_dir($directory)) {
                    ftp_mkdir($ftp, $directory);
                }

                foreach ($files as $f) {
                    if (strlen($f) <= 3) {
                        continue;
                    }
                    

                    $file = $f;
                    $remote_file = $directory . $f;
                    // upload a file
                    if (ftp_put($ftp, $remote_file, $file, FTP_ASCII)) {
                        echo "successfully uploaded $file<br>";
                    } else {
                        echo "There was a problem while uploading $file<br>";
                    }
                }
                // close the connection

                #######################################################################

                ftp_close($ftp);

                $extractor->close();
                echo "Extracted";
            } else {
                echo "Can't open file";
            }
        } else {
            echo "Invalid file type";
        }
    } else {
        echo "Please select a file";
    }
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
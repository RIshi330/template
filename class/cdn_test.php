<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDN</title>
    <style>
        #para{
            transition: all 2s ease-in-out;
        }
    </style>
</head>
<body>
    <p id="para">
        Text
    </p>
    <script src="https://cdn.jsdelivr.net/gh/vkg001/scripts/jquery.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#para").css({
                    "color" : "White",
                    "background-color" : "black" ,
                }) ;
            }, 3000) ;
        })
    </script>
</body>
</html>
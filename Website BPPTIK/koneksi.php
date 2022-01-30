<!DOCTYPE html>
<html>
    <head>
        <title>Koneksi Database</title>
    </head>
    <body>
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "register";
        $koneksi = mysqli_connect($host, $username, $password, $database);
        if($koneksi){
            echo "";
        }else{
            echo "Server not connected";
        }
        ?>
    </body>
</html>
<?php
include "koneksi.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $password = $_POST['password'];
    $sql="INSERT INTO user ( name, email, address, city, password) VALUES (
    '".$name."','".$email."','".$address."','".$city."','".$password."')";
    $query=$koneksi->query($sql);
    if ($query === true){

        echo "<script>alert('Register Berhasil');window.location='register.php'</script>";

        // header('location: register.php');
    }else {
        echo "error";
    }
?>
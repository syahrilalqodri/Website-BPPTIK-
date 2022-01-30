<?php
include "koneksi.php";
    $id=$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $password = $_POST['password'];
    $sql = "UPDATE user SET name='$name', email='$email', address='$address', city='$city', password='$password' WHERE id='$id'";
    $query=$koneksi->query($sql);
    if ($query == true){
        echo "<script>alert('Update Berhasil');window.location='data_register.php'</script>";

    }else {
        echo "error";
    }
?>

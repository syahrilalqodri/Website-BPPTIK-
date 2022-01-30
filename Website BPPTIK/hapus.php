<?php
include "koneksi.php";
$id=$_GET['id'];
//query untuk delete data
$a="DELETE FROM user WHERE id='".$id."'";
$b = $koneksi->query($a);

//setelah data dihapus redirect ke halaman tampil.php
header("Location:data_register.php");
?>
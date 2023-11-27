<?php

$LIST = $_POST['list'];
include "config.php";
mysqli_query($con, "INSERT INTO `tabletodo`(`list`) VALUES ('$LIST')");

//menentukan halaman mana yg di tuju setelah data dikirim
header("location:index.php");
?>
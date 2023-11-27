<?php
include "config.php";
$ID = $_POST['id'];
$list = $_POST['list'];

mysqli_query($con, "UPDATE `tabletodo` SET `list`='$list' WHERE `tabletodo`. `id` = '$ID'");
header("location: index.php");

?>
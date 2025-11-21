<?php
$conn = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error()) ;
mysqli_select_db($conn, "zoo_manage") or die(mysqli_error ($conn));
?>
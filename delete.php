<?php
include 'config.php';
$id = $_GET['id'];
// -------------------------main Room----------------
mysqli_query($conn, "DELETE FROM `property` WHERE id = $id");

header('location:../admin/Dashboard.php'); 

?>
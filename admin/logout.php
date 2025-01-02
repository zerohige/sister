<?php 
session_start();
session_destroy();

header("location:../login.php?alert=logout");
// header("Location: /sister_2201020032/index.php?alert=logout");
?>
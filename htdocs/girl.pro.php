<?php
include_once "lib/load.php";
session::is_auth();
if(!isset($_SESSION['pro_subed'])){
    echo '<script>window.location.href="main.php";</script>';
}
get_file("head.workout");
get_file("girl.pro");
get_file("footer");?>

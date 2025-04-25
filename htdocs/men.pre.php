<?php
include_once "lib/load.php";
session::is_auth();
if(!isset($_SESSION['pre_subed'])){
    echo '<script>window.location.href="main.php";</script>';
}
get_file("head.workout");
get_file("men.pre");
get_file("footer");?>

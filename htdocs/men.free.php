<?php
include_once "lib/load.php";
session::is_auth();
get_file("head.workout");
get_file("men.free");
get_file("footer");?>
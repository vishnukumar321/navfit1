<?php
include_once "lib/load.php";
session::is_auth();
get_file("head");
get_file("profile");
get_file("footer");?>
<?php
include_once "lib/load.php";
session::is_auth();
get_file("head");
get_file("profile.edit");
get_file("footer");?>
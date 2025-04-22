<?php
include_once "lib/include/database.php";
include_once "lib/include/user.php";
include_once "lib/include/session.php";
include_once "lib/include/auth.php";
session_start();
function get_file($name){
    include $_SERVER['DOCUMENT_ROOT']."/navfit1/htdocs/lib/template/_$name.php";
}
global $conf;
$conf=file_get_contents($_SERVER['DOCUMENT_ROOT']."/navfit1/project/movieclubconfic.json");
function get_conf($name){
    global $conf;
    $data=json_decode($conf,true);
    if(isset($data[$name])){
        return $data[$name];
    }

}
?>
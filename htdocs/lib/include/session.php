<?php
include_once "lib/load.php";
class session{
    public static $conn;
    public static $data;
    public static $username;
    public static function get_value($value){
        if(!session::$conn){
            session::$conn=database::get_conn();
        }
        $dt=new user($_SESSION['username']);
        $row=$dt->data;
        // print($data[$value]);
        if(isset($row['coin'])){
            session::$data=$row[$value];
            return $row[$value];
        }  
    }
}
?>
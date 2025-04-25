<?php
include_once "lib/load.php";
class user{
    public $conn;
    public $name;
    public $id;
    public $data;
    public function __construct($uname){
        if(!$this->conn){
            $this->conn=database::get_conn();
        }
        $conn=$this->conn;
        $sql="SELECT * FROM `user` WHERE `username` = '$uname' OR `id` = '$uname'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            // $this->data=$row;
            $this->id=$row['id'];
            // $this->name=$row['username'];
            $this->data=$row;
        }
    }
    public static function signup($fname,$lname,$uname,$email,$phone,$pass,$addr1,$addr2,$city,$state,$zip,$age,$height,$weight,$reff,$gender){
        $pass=password_hash($pass,PASSWORD_BCRYPT);
        $reff=md5(rand(0,99999999).time().$addr1.$addr2.$_SERVER['HTTP_USER_AGENT']);
        $reff=substr($reff,0,8);
        $conn=database::get_conn();
        if(isset($_SESSION['one'])){
            $sql="INSERT INTO `user` (`first_name`, `last_name`, `username`, `email`, `phone`, `password`, `address1`, `address2`, `city`, `state`, `zip`, `age`, `height`, `weight`, `referral`, `gender`, `coin`)
VALUES ('$fname', '$lname', '$uname', '$email', '$phone', '$pass', '$addr1', '$addr2', '$city', '$state', '$zip', '$age', '$height', '$weight', '$reff', '$gender', '1');";    
        }else{
            $sql="INSERT INTO `user` (`first_name`, `last_name`, `username`, `email`, `phone`, `password`, `address1`, `address2`, `city`, `state`, `zip`, `age`, `height`, `weight`, `referral`, `gender`)
VALUES ('$fname', '$lname', '$uname', '$email', '$phone', '$pass', '$addr1', '$addr2', '$city', '$state', '$zip', '$age', '$height', '$weight', '$reff', '$gender');";
        }
        if($conn->query($sql) == true){
            $_SESSION['reff']=$reff;
            return true;
        }else{
            return false;
        }


    }
    public static function update($fname,$lname,$email,$phone,$addr1,$addr2,$city,$state,$zip,$age,$height,$weight,$gender){
        $conn=database::get_conn();
        $id=session::get_value('id');
        $sql="UPDATE `user` SET
`first_name` = '$fname',
`last_name` = '$lname',
`email` = '$email',
`phone` = '$phone',
`address1` = '$addr1',
`address2` = '$addr2',
`city` = '$city',
`state` = '$state',
`zip` = '$zip',
`age` = '$age',
`height` = '$height',
`weight` = '$weight',
`gender` = '$gender'
WHERE `id` = '$id';";
        if($conn->query($sql) == true){
            return true;
        }else{
            return false;
        }


    }
    public static function login($name,$pass){
        $conn=database::get_conn();
        $sql="SELECT * FROM `user` WHERE `username` = '$name'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            if(password_verify($pass,$row['password'])){
                $_SESSION['username']=$name;
                return $name;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    public static function checking($name){
        $conn=database::get_conn();
        $sql="SELECT * FROM `user` WHERE `username` = '$name'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            return true;
        }else{
            return false;
        }
    }
    public static function check_ref($ref){
        $conn=database::get_conn();
        $sql="SELECT * FROM `user` WHERE `referral` = '$ref'";
        $result=$conn->query($sql);
        if($result->num_rows==1){

            $row=$result->fetch_assoc();
            $id=$row['id'];
            $coin=$row['coin']+1;
            $query="UPDATE `user` SET `coin` = '$coin' WHERE `id` = '$id';";
            if($conn->query($query)==true){
                $_SESSION['one']=true;
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    
    // public function __call($name, $arguments)
    // {
    //     if(substr($name,0,3)=="get"){
    //         $name=substr($name,3);
    //         return $this->data_get($name);

    //     }elseif(substr($name,0,3)=="set"){
    //         $name=substr($name,3);
    //         return $this->data_set($name,$arguments);
    //     }
    // }
    // public function data_get($data){
        
    //     if(!$this->conn){
    //         $this->conn=database::get_conn();
    //     }
    //     $id=$this->id;
    //     $conn=$this->conn;
    //     $sql="SELECT * FROM `profile` WHERE `id` = '$id'";
    //     $result=$conn->query($sql);
    //     if($result->num_rows==1){
    //         $row=$result->fetch_assoc();
    //         return $row[$data];
    //     }else{
    //         return false;
    //     }
    // }
    // public function data_set($data,$arguments){
    //     if(!$this->conn){
    //         $this->conn=database::get_conn();
    //     }
    //     $id=$this->id;
    //     $conn=$this->conn;
    //     $sql="UPDATE `profile` SET `$data` = '$arguments[0]' WHERE `id` = '$id';";
    //     if($conn->query($sql)==true){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
}
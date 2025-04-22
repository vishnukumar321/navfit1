<?php
include_once "lib/load.php";
class auth{
    public $conn;
    public $data;
    public $id;
    public function __construct($token){
        if(!$this->conn){
            $this->conn=database::get_conn();
        }
        $conn=$this->conn;
        $sql="SELECT * FROM `user_session` WHERE `token` = '$token'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            $this->data=$row;
            // $this->id=$row['id'];

        }
    }
    public static function authentication($name,$pass){
        $login=user::login($name,$pass);
        if($login){
            $user=new user($login);
            $ip=$_SERVER['REMOTE_ADDR'];
            $agent=$_SERVER['HTTP_USER_AGENT'];
            $token=md5(rand(0,999999).time().$ip.$agent);
            $id=$user->id;
            date_default_timezone_set('asia/kolkata');
            $time=time();
            $sql="INSERT INTO `user_session` (`uid`, `ip`, `agent`, `token`, `time`, `active`)
VALUES ('$id', '$ip', '$agent', '$token', '$time', '1');";
            $conn=database::get_conn();
            if($conn->query($sql)==true){
                $_SESSION["token"]=$token;
                return true;
            }else{
                throw new Exception("could not insert session");
            }
        }else{
            return false;
        }
    }
    public static function authorize(){
        try{
            if(session::isset_key("token")){
                $user=new auth(session::get_sess("token"));
                if(session::get_sess("token")==$user->gettoken()){
                    if($_SERVER['HTTP_USER_AGENT']==$user->getagent()){
                        if($_SERVER['REMOTE_ADDR']==$user->getip()){
                            if($user->is_valid() and $user->is_active()){
                                return true;
                            }else{
                                throw new Exception("not valid or not active");
                            }
                        }else{
                            throw new Exception("invalid ip address");
                        }
                    }else{
                        throw new Exception("invalid user agent");
                    }
                }else{
                    throw new Exception("invalid user token");
                }
            }
        }catch(Exception $e){
            // throw new Exception("couldn't authorize:".$e);
            return false;
        }
    }
    public function __call($name, $arguments=null)
    {
        if(substr($name,0,3)=="get"){
            $name=substr($name,3);
            return $this->_get_data($name);
        }
    }
    public function _get_data($name){
        if(isset($this->data[$name])){
            return $this->data[$name];
        }else{
            throw new Exception("$name is not available in:".__CLASS__.__LINE__);
        }
    }
    public function is_valid(){
        date_default_timezone_set('asia/kolkata');
        $date=$this->data['time'];
        if($date<time()){
            $dif=time()-$date;
        }elseif(time()<$date){
            $dif=$date-time();
        }
        if(3600>$dif){
            return true;
        }else{
            return false;
        }

    }
    public function is_active(){
        $active= $this->getactive();
        session::$active=$active;
        return $active;
    }
}
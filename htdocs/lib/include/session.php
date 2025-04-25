<?php
include_once "lib/load.php";
class session
{
    public static $conn;
    public static $uid;
    public static $data;
    public static $sub_data;
    public static $username;
    public static $active = false;
    public static function get_value($value)
    {
        if (!session::$conn) {
            session::$conn = database::get_conn();
        }
        $sess = new auth($_SESSION["token"]);
        $id = $sess->data['uid'];
        $dt = new user($id);
        $row = $dt->data;
        // print($data[$value]);
        if (isset($row['coin'])) {
            session::$data = $row[$value];
            return $row[$value];
        }
    }
    public static function is_auth()
    {
        // $value=false;
        session::if_checker();
        $value = auth::authorize();
        if (!$value) {
            session::_session_redirect();

            // header('location: index.php?hi=true');
        }
    }
    public static function _session_destroy()
    {
        $user = new auth($_SESSION["token"]);
        $id = $user->data['uid'];
        session::$uid = $id;
        $conn = database::get_conn();
        $sql = "DELETE FROM `user_session` WHERE `uid` = '$id';";
        if ($conn->query($sql) == true) {
            session_destroy();
            header('location: index.php');
        } else {
            return false;
        }
    }
    public static function _session_redirect()
    {
?><script>
            alert("You can,t access...")
        </script><?php
                    // header('location: index.php');
                    // session_unset();
                    echo '<script>window.location.href="index.php";</script>';
                }
                public static function if_checker()
                {
                    if (isset($_GET['logout'])) {
                        session::_session_destroy();
                    }
                }
                public static function is_login()
                {
                    if (isset($_SESSION["token"])) {
                        header('location: main.php');
                    }
                }
                public static function add_pro_sub($id)
                {
                    $start = date('Y-M-d');  // Start date
                    $expires_in = "+30 days";     // Expiration period
                    $exp = strtotime($expires_in, strtotime($start));
                    $exp = date('Y-m-d', $exp);
                    $token = md5($exp . time() . $start . rand(0, 88888));
                    $token = substr($token, 0, 16);
                    $sql = "INSERT INTO `sub_pro` (`id`, `sub_token`, `start_date`, `exp_date`)
VALUES ('$id', '$token', '$start', '$exp');";
                    $conn = database::get_conn();
                    if ($conn->query($sql) == true) {
                        $coin=session::get_value('coin')-1;
                        $query = "UPDATE `user` SET `coin` = '$coin' WHERE `id` = '$id';";
                        if ($conn->query($query)) {
                            return true;
                        }
                    } else {
                        return false;
                    }
                }
                public static function add_pre_sub($id)
                {
                    $start = date('Y-M-d');  // Start date
                    $expires_in = "+30 days";     // Expiration period
                    $exp = strtotime($expires_in, strtotime($start));
                    $exp = date('Y-m-d', $exp);
                    $token = md5($exp . time() . $start . rand(0, 88888));
                    $token = substr($token, 0, 16);
                    $sql = "INSERT INTO `sub_premium` (`id`, `sub_token`, `start_date`, `exp_date`)
VALUES ('$id', '$token', '$start', '$exp');";
                    $conn = database::get_conn();
                    if ($conn->query($sql) == true) {
                        $coin=session::get_value('coin')-9;
                        $query = "UPDATE `user` SET `coin` = '$coin' WHERE `id` = '$id';";
                        if ($conn->query($query)) {
                            return true;
                        }
                    } else {
                        return false;
                    }
                }
                public static function check_sub_pro($id){
                    $conn=database::get_conn();
                    $sql="SELECT * FROM `sub_pro` WHERE `id` = '$id'";
                    $result=$conn->query($sql);
                    if($result->num_rows==1){
                        $row=$result->fetch_assoc();
                        session::$sub_data=$row;
                        return true;
                    }else{
                        return false;
                    }
                }
                public static function check_sub_pre($id){
                    $conn=database::get_conn();
                    $sql="SELECT * FROM `sub_premium` WHERE `id` = '$id'";
                    $result=$conn->query($sql);
                    if($result->num_rows==1){
                        $row=$result->fetch_assoc();
                        session::$sub_data=$row;
                        return true;
                    }else{
                        return false;
                    }
                }
            }
                    ?>
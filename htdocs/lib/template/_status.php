<?php
include_once "lib/load.php";
$id=session::get_value('id');
$pro=session::check_sub_pro($id);
$pre=session::check_sub_pre($id);
if($pro){
    $_SESSION['pro_subed']=true;
}elseif($pre){
    $_SESSION['pre_subed']=true;
}
if (isset($_GET['is_tel'])) {
    if (isset($_SESSION['pre_subed']) or isset($_SESSION['pro_subed'])) {
        echo '<script>window.location.href="https://t.me/+6urnbjuySlkzZTI1";</script>';
    } else {
?><script>
            alert("Please take Premium level or Pro level subscription...")
        </script><?php
        echo '<script>window.location.href="refferal.php";</script>';
                }
            }
            if (isset($_GET['is_pre'])) {
                    ?><script>
        alert("Please take premium level subscription.")
    </script><?php
                echo '<script>window.location.href="refferal.php";</script>';
            }
            $height = session::get_value('height');
            $weight = session::get_value('weight');
            $age = session::get_value('age');
            $gender = session::get_value('gender');
                ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Panel</title>
    <link rel="stylesheet" href="/lib/template/css/status.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="panel-body" style="height: 665px;width: 805px;">

        <!-- <aside>
        <h2 class="title">ZBank.</h2>

        <ul class="sidebar-container">

            <li class="sidebar-object active">
            <i class="fas fa-home"></i>
                &nbsp;&nbsp; Dashboard
            </li> 

            <div class="active-invert"></div>
            <div class="active-invert2"></div>

            <li class="sidebar-object other">
                <i class="fas fa-chart-pie-alt"></i>
                &nbsp;&nbsp; statistics
            </li>

            <li class="sidebar-object other">
                <i class="fas fa-wallet"></i>
                &nbsp;&nbsp; wallet
            </li>

            <li class="sidebar-object other">
                <i class="fas fa-inbox"></i>
                &nbsp;&nbsp; Message
            </li>     
            
            <li class="sidebar-object other">
                <i class="fas fa-users"></i>
                &nbsp;&nbsp; Profile
            </li>
            
            <li class="sidebar-object other">
                <i class="fas fa-heart"></i>
                &nbsp;&nbsp; Favorites
            </li>
            
            <li class="sidebar-object other">
                <i class="fas fa-exchange-alt"></i>
                &nbsp;&nbsp; Transfers
            </li>

            

        </ul>

        <div class="logout">
            <i class="fas fa-sign-out-alt"></i> &nbsp;Log Out
        </div>

    </aside> -->

        <div class="center-div" style="width: 816px;">

            <nav class="nav">
                <span class="welcome-title">Hi <?= session::get_value('username'); ?>,</span>
                <input class="search-box" placeholder="" type="text" maxlength="30" readonly>
            </nav>
            <?php
            $id = session::get_value('id');
            if (session::check_sub_pre($id) or session::check_sub_pro($id)) {
                $token = session::$sub_data['sub_token'];
            ?><div class="visa">
                    <img src="https://drive.google.com/uc?export=download&id=11AC_4Vf_QK1X-mO2d49btiaAOxnSKWOs" alt="" class="visa-img">
                    <span class="cart-number"><?= substr($token, 0, 4) ?>&nbsp;&nbsp;<?= substr($token, 4, 4) ?>&nbsp;&nbsp;<?= substr($token, 8, 4) ?>&nbsp;&nbsp;<?= substr($token, 12, 14) ?></span>
                    <div class="info-visa"><strong>Exp date </strong> <br><?= session::$sub_data['exp_date']; ?></div>
                </div><?php
                    } else {
                        ?><div class="visa">
                    <img src="https://drive.google.com/uc?export=download&id=11AC_4Vf_QK1X-mO2d49btiaAOxnSKWOs" alt="" class="visa-img">
                    <span class="cart-number">Free plan account</span>
                    <div class="info-visa"><strong>Please unlock subscription</strong><br></div>
                </div><?php
                    }
                    // bmr
                    $bmr = false;
                    if ($gender == "male") {
                        $bmr = (9.99 * $weight) + (6.25 * $height) - (4.92 * $age) + 5;
                    } elseif ($gender == "female") {
                        $bmr = (9.99 * $weight) + (6.25 * $height) - (4.92 * $age) - 161;
                    }
                    $bmr = substr($bmr, 0, 4);

                    // bmi
                    $height = $height / 100;
                    $height = $height * $height;
                    $bmi = $weight / $height;
                    $bmi = substr($bmi, 0, 5);
                    $color = null;
                    $status = null;
                    if ($bmi < 18.5) {
                        $color = "rgba(3, 75, 230, 0.91)";
                        $status = "Under Weight";
                    } elseif ($bmi >= 18.5 and $bmi <= 24.9) {
                        $color = "rgb(27, 168, 0)";
                        $status = "Normal Weight";
                    } elseif ($bmi >= 25.0 and $bmi <= 29.9) {
                        $color = "rgb(255, 243, 0)";
                        $status = "Over Weight";
                    } elseif ($bmi >= 30.0 and $bmi <= 34.9) {
                        $color = "rgb(255, 93, 18)";
                        $status = "Obese";
                    } elseif ($bmi >= 35.0) {
                        $color = "rgb(255, 107, 107)";
                        $status = "Extremely Obese";
                    }
                        ?>
            <div class="users" style="height: 222px !important;width: 419px;">
                <span class="chart-title">Basal metabolic rate</span>
                <span class="chart-circle-fliter" style="padding-top: 5px !important;padding-left: 0px !important;color: #a7a7a7 !important;">(BMR) :</span>
                <h2 style="margin-top: 18px;padding-top: 47px;margin-bottom: 14px;margin-left: 117px;font-size: 2rem;"><?= $bmr ?>‌&nbsp;calories</h2>
                <center>
                    <p style="font-size: 23px;color: <?= $color ?>;">Status:&nbsp;‌&nbsp;Normal‌</p>
                    <?php
                    if (isset($_SESSION['pre_subed'])) {
                    ?><a href="men.free.php"><button type="button" class="btn btn-warning">Workout</button></a><?php
                                                                                                                } else {
                                                                                                                    ?><a href="status.php?is_pre=true"><button type="button" class="btn btn-warning">Workout</button></a><?php
                                                                                                                            }
                                                                                                                                ?>

                </center>


            </div>

            <div class="column-chart">
                <!-- <span class="chart-title">Income</span>
                <span class="chart-fliter">Recent ‌&nbsp; <i class="fa fa-angle-down"></i></span>
                <div class="months">Apr</div>
                <div class="column"></div>
                <div class="months">May</div>
                <div class="column column-2"></div>
                <div class="months">Jun</div>
                <div class="column column-3"></div>
                <div class="months">Aug</div>
                <div class="column column-4"></div>
                <div class="months">Sep</div>
                <div class="column column-5"></div> -->
                <div style="width: 100%;height: 68%;padding: 30px;">
                    <center>
                        <p>Got questions about fitness, workouts, or nutrition? Our expert team is here to guide you. Ask us anything and take the next step towards your health and wellness goals today!</p>
                    </center>
                </div>
                <div style="width: 100%;height: 32%;display: flex;justify-content: center;align-items: center;">
                    <a href="status.php?is_tel=true"><button type="button" style="background-color: rgb(29,152,220);border: 1px solid rgb(29,152,220);color: white;width: 281px;height: 45px;border-radius: 13px;">Telegram Channel</button></a>
                </div>
            </div>

            <div class="column-circle" style="width: 416px;">
                <span class="chart-title">Body mass index</span>
                <span class="chart-circle-fliter" style="padding-top: 5px !important;padding-left: 0px !important;color: #a7a7a7 !important;">(BMI) :</span>

                <h2 style="margin-top: 31px;padding-top: 55px;margin-bottom: 21px;margin-left: 165px;font-size: 2rem;"><?= $bmi ?></h2>


                <!-- <div class="chart-circle-data">
                    <div class="circle-chart-1"></div>
                    <div class="chart-1-title">Status:</div>
                    <div class="chart-1-int">66%</div>
                </div>
                <div class="chart-circle-data">
                    <div class="circle-chart-2"></div>
                    <div class="chart-1-title"></div>
                    <div class="chart-1-int">26%</div>
                </div> -->

                <center>
                    <p style="font-size: 23px;color: <?= $color ?>;">Status:&nbsp;‌&nbsp;<?= $status ?></p>
                    <?php
                    if (isset($_SESSION['pre_subed'])) {
                    ?><a href="men.free.php"><button type="button" class="btn btn-outline-danger">Workout</button></a><?php
                                                                                                                        } else {
                                                                                                                            ?><a href="status.php?is_pre=true"><button type="button" class="btn btn-outline-danger">Workout</button></a><?php
                                                                                                                                }
                                                                                                                                    ?>


                </center>




            </div>



        </div>

        <!-- <div class="profile">
            <img class="img-profile" src="https://drive.google.com/uc?export=download&id=1pAsdIwosYAGwwgMT65nr9js0c3aWqFWp" alt="">
            <div class="username">MahdiyarGHD</div>
            <div class="info">FrontEnd Developer</div>
            <i class="fas fa-ellipsis-v"></i>
        </div> -->

        <!-- <hr class="hr"> -->

        <!-- <div class="orders">
            <div class="order-title">Transaction</div> <span class="orders-fliter">Monthly ‌&nbsp; <i class="fa fa-angle-down"></i></span>

            <div class="order">
                <img class="order-img" src="https://drive.google.com/uc?export=download&id=1pAsdIwosYAGwwgMT65nr9js0c3aWqFWp" alt="">
                <div class="order-name">Dribble Pro</div>
                <div class="order-info">Apr 18,2020</div>
                <div class="order-price">$25</div>
            </div>

            <hr class="hr-2">
            <div class="order">
                <img class="order-img" src="https://drive.google.com/uc?export=download&id=1pAsdIwosYAGwwgMT65nr9js0c3aWqFWp" alt="">
                <div class="order-name">Dribble Pro</div>
                <div class="order-info">Apr 18,2020</div>
                <div class="order-price">$25</div>
            </div>

            <hr class="hr-2">
            <div class="order">
                <img class="order-img" src="https://drive.google.com/uc?export=download&id=1pAsdIwosYAGwwgMT65nr9js0c3aWqFWp" alt="">
                <div class="order-name">Dribble Pro</div>
                <div class="order-info">Apr 18,2020</div>
                <div class="order-price">$25</div>
            </div>

            <hr class="hr-2">
            <div class="order">
                <img class="order-img" src="https://drive.google.com/uc?export=download&id=1pAsdIwosYAGwwgMT65nr9js0c3aWqFWp" alt="">
                <div class="order-name">Dribble Pro</div>
                <div class="order-info">Apr 18,2020</div>
                <div class="order-price">$25</div>
            </div>
            <hr class="hr-2">

            <div class="footer-title">Track your acc anytime anywhere</div>

            <img class="img-footer" src="https://drive.google.com/uc?export=download&id=1tlgvapU1WfGnhnf-LMjJC8yLV6Xipi5I" alt="">

        </div> -->
        <!-- partial -->
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
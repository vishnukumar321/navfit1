<?php
include_once "lib/load.php";
$coin=session::get_value('coin');
$id=session::get_value('id');
$pro=session::check_sub_pro($id);
$pre=session::check_sub_pre($id);
if(isset($_SESSION['pro_subed'])){
  if(!$pro){
    unset($_SESSION['pro_subed']);
  }
}elseif(isset($_SESSION['pre_subed'])){
  if(!$pre){
    unset($_SESSION['pre_subed']);
  }
}
if($pre){
  $_SESSION['pre_subed']=true;
}elseif($pro){
  $_SESSION['pro_subed']=true;
}
if(isset($_GET['pro'])){
  if(!$pro and !$pre){
    if($coin>0){
      $resolt=session::add_pro_sub($id);
      if($resolt){
        $_SESSION['pro_subed']=true;
        echo '<script>window.location.href="/refferal.php?pro_sub_true=true";</script>';
      }else{
        echo '<script>window.location.href="/refferal.php?pro_sub_false=true";</script>';
      }
    }else{
      echo '<script>window.location.href="/refferal.php?pro_sub_false=true";</script>';
    }
  }else{
    ?><script>alert("Already subscription unlocked...")</script><?php
    echo '<script>window.location.href="/refferal.php";</script>';
  }
}elseif(isset($_GET['pre'])){
  $pro=session::check_sub_pro($id);
  $pre=session::check_sub_pre($id);
  if(!$pro and !$pre){
    if($coin>8){
      $resolt=session::add_pre_sub($id);
      if($resolt){
        $_SESSION['pre_subed']=true;
        echo '<script>window.location.href="/refferal.php?pre_sub_true=true";</script>';
      }else{
        echo '<script>window.location.href="/refferal.php?pre_sub_false=true";</script>';
      }
    }else{
      echo '<script>window.location.href="/refferal.php?pre_sub_false=true";</script>';
    }
  }else{
    ?><script>alert("Already subscription unlocked...")</script><?php
    echo '<script>window.location.href="/refferal.php";</script>';
  }
}
?>
<main style="padding: 44px;">
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">Choose the plan that's right for you</h1>
      <p class="fs-5 text-body-secondary">Ready to crush your fitness goals? Explore our tailored plans below and find the perfect path to a healthier,stronger you.Your fitness journey is unique,and so shoold your plan.Discover our selection of programs,you can find or adapt a plan that works for your lifestyle.Choose your foundation and make it your own!</p>
    </div>


    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 404px;height: 414px;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title" style="margin-bottom: 49px;">FREE<small class="text-body-secondary fw-light"></small></h1>
            <ol style="margin-bottom: 81px !important">
              <li>One week access to beginner workouts&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ol>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">for free plan</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm" style="width: 404px;height: 414px;">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title" style="margin-bottom: 35px;">1<small class="text-body-secondary fw-light"> COIN</small></h1>
            <ol  style="margin-bottom: 70px !important;">
              <li>One month access to Intermediate workouts for both men & women</li>
              <li>Unlocks beginner workouts for boys & girls</li>
              <li>Get access to telegram channel link to interact with one-to-one conversations with trainers</li>
            </ol>
            <a href="/refferal.php?pro=true"><button type="button" class="w-100 btn btn-lg btn-primary"><?php
            if(isset($_SESSION['pro_subed'])){
              echo "Subscribed";
            }else{
              echo "Convert";
            }
            ?></button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary" style="width: 404px;height: 414px;">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">9<small class="text-body-secondary fw-light"> COINS</small></h1>
            <ol  style="margin-bottom: 1.5rem !important;">
              <li>Unlocks Advanced workouts for both men & women</li>
              <li>Unlocks Intermediate wokouts for both boys & girls</li>
              <li>Get access to essential diet plans</li>
              <li>Get acces to telegram channel link to interact with one-to-one conversations along with live interactive class sections through zoom meet</li>
            </ol>
            <a href="/refferal.php?pre=true"><button type="button" class="w-100 btn btn-lg btn-primary"><?php
            if(isset($_SESSION['pre_subed'])){
              echo "Subscribed";
            }else{
              echo "Convert";
            }
            ?></button></a>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">REFERRAL</h2>

    <div class="table-responsive">
      <!-- <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Free</th>
            <th style="width: 22%;">Pro</th>
            <th style="width: 22%;">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Public</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Private</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Permissions</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Sharing</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Unlimited members</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>
      </table> -->
      <h3 style="margin-left: 1042px;">My Coins:&ensp;<button type="button" class="btn btn-primary" style="width: 70px !important;height: 70px !important;    border-radius: 35px;padding: 4px;font-size: larger;"><?=session::get_value('coin');?></button></h3>
      <div style="display: flex;align-items: center;justify-content: center;flex-direction: column;margin-top: 30px;">
        <center><h2>Given below is the unique referral code id.<br>
        Refer the NavFit - your ultimate fitness website among your friends through link provided below and collect more coins and unlock the above mentioned plans to stay fit,healthier and stronger!</h2></center>
        <hr>
        <h3 style="margin-top: 20px;font-size: 37px;">1&ensp;Refer:&ensp;=&ensp;1&ensp;Coin</h3>
      </div>
      <div style="display: flex;align-items: center;justify-content: center;">
        <h3>Referral Code:&ensp;<h1 style="background-color: aqua;padding: 9px;background-color: rgb(56 56 56 / 3%);border: 2px solid rgb(247, 120, 1);border-radius: 10px;color: rgb(247, 120, 1);"><?=session::get_value('referral');?></h1></h3>
      </div><br>
      <div style="display: flex;align-items: center;justify-content: center;">
        <h3>URL:&ensp;<h5 style=" background-color: aqua;padding: 9px;background-color: rgb(56 56 56 / 3%);border: 2px solid rgb(247, 120, 1);border-radius: 10px;">https://navfit.selfmade.social/signup.php?to=<?=session::get_value('referral');?></h5></h3>
      </div>
    </div>
  </main>
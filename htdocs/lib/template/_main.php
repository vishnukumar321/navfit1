<?php
if(isset($_GET['men_is_pro'])){
  if(isset($_SESSION['pro_subed'])){
    echo '<script>window.location.href="men.pro.php";</script>';
  }else{
    ?><script>alert("Please take Pro level subscription...")</script><?php
    echo '<script>window.location.href="refferal.php";</script>';
  }
}elseif(isset($_GET['men_is_pre'])){
  if(isset($_SESSION['pre_subed'])){
    echo '<script>window.location.href="men.pre.php";</script>';
  }else{
    ?><script>alert("Please take Premium level subscription...")</script><?php
    echo '<script>window.location.href="refferal.php";</script>';
  }
}
if(isset($_GET['women_is_pro'])){
  if(isset($_SESSION['pro_subed'])){
    echo '<script>window.location.href="women.pro.php";</script>';
  }else{
    ?><script>alert("Please take Pro level subscription...")</script><?php
    echo '<script>window.location.href="refferal.php";</script>';
  }
}elseif(isset($_GET['women_is_pre'])){
  if(isset($_SESSION['pre_subed'])){
    echo '<script>window.location.href="women.pre.php";</script>';
  }else{
    ?><script>alert("Please take Premium level subscription...")</script><?php
    echo '<script>window.location.href="refferal.php";</script>';
  }
}
if(isset($_GET['boy_is_pro'])){
  if(isset($_SESSION['pro_subed'])){
    echo '<script>window.location.href="boy.pro.php";</script>';
  }else{
    ?><script>alert("Please take Pro level subscription...")</script><?php
    echo '<script>window.location.href="refferal.php";</script>';
  }
}elseif(isset($_GET['boy_is_pre'])){
  if(isset($_SESSION['pre_subed'])){
    echo '<script>window.location.href="boy.pre.php";</script>';
  }else{
    ?><script>alert("Please take Premium level subscription...")</script><?php
    echo '<script>window.location.href="refferal.php";</script>';
  }
}
if(isset($_GET['girl_is_pro'])){
  if(isset($_SESSION['pro_subed'])){
    echo '<script>window.location.href="girl.pro.php";</script>';
  }else{
    ?><script>alert("Please take Pro level subscription...")</script><?php
    echo '<script>window.location.href="refferal.php";</script>';
  }
}elseif(isset($_GET['girl_is_pre'])){
  if(isset($_SESSION['pre_subed'])){
    echo '<script>window.location.href="girl.pre.php";</script>';
  }else{
    ?><script>alert("Please take Premium level subscription...")</script><?php
    echo '<script>window.location.href="refferal.php";</script>';
  }
}
?>
<style>
  .lklkj{
    width: 316px;height: 360px;background-color: rgb(33,37,41);padding: 7px;border: 1px solid rgba(255, 255, 255, 0.34);border-radius: 9px;
  }
  .lklkj img{
    border: 1px solid rgb(33,37,41);border-radius: 9px;
    width: 300px;height: 300px;
    margin-bottom: 9px;
  }
  .lklkj:hover{
    border-color: orangered;
  }
</style>
<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary image_4" >
      <div class="col-lg-6 px-0" style="z-index: 1;">
        <h1 class="display-4" style="font-weight: 500;">Unlock the strongest version of yourself</h1>
        <p class="lead my-3">Personalized diet plans and workouts designed to fit your goals. Achieve a healthier, stronger you—starting today.Stronger every day, fitter every meal. Step into the lifestyle that transforms you.Personalized diet plans and workouts designed to fit your goals.</p>
        <p class="lead mb-0"><a href="#workout" class="text-body-emphasis fw-bold"><button type="button" class="btn btn-primary clo">Check Workouts...</button></a></p>
      </div>
    </div>
    <!-- <div class="b-example-divider"></div> -->
    <main class="container_1" id="workout">


      <div class="row mb-2">
        <div class="col-md-6">
          <div style="backdrop-filter: blur(20px);background-color: rgba(73, 73, 73, 0.17);" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ndde">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary-emphasis"></strong>
              <h3 class="mb-0">Workout for Men</h3>
              <div class="mb-1 text-body-secondary">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <div style="display: flex;justify-content: space-around;">
              <a href="men.free.php" ><button type="button" class="btn btn-primary clo1" style="width: 170px;">Beginner</button></a>
              <a href="main.php?men_is_pro=true" ><button type="button" class="btn btn-primary clo1" style="width: 170px;">Intermediate</button></a>
              <a href="main.php?men_is_pre=true" ><button type="button" class="btn btn-primary clo1" style="width: 170px;">Advanced</button></a>
              </div>            </div>
            <div class="col-auto d-none d-lg-block khkjhk">
             
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div style="backdrop-filter: blur(20px);background-color: rgba(107, 107, 107, 0.17);" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ndde">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success-emphasis"></strong>
              <h3 class="mb-0">Workout for women</h3>
              <div class="mb-1 text-body-secondary">Nov 11</div>
              <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <div style="display: flex;justify-content: space-around;">
              <a href="women.free.php" ><button type="button" class="btn btn-primary clo1" style="width: 170px;">Beginner</button></a>
              <a href="main.php?women_is_pro=true" ><button type="button" class="btn btn-primary clo1" style="width: 170px;">Intermediate</button></a>
              <a href="main.php?women_is_pre=true" ><button type="button" class="btn btn-primary clo1" style="width: 170px;">Advanced</button></a>
              </div>
            </div>
            <div class="col-auto d-none d-lg-block">
             
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div style="backdrop-filter: blur(20px);background-color: rgba(107, 107, 107, 0.17);" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ndde">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success-emphasis"></strong>
              <h3 class="mb-0">Workout for Boys</h3>
              <div class="mb-1 text-body-secondary">Nov 11</div>
              <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <div style="display: flex;justify-content: space-around;">
              <a href="main.php?boy_is_pro=true" ><button type="button" class="btn btn-primary clo1" style="width: 170px;">Beginner</button></a>
              <a href="main.php?boy_is_pre=true" ><button type="button" class="btn btn-primary clo1" style="width: 170px;">Intermediate</button></a>
              </div>            </div>
            <div class="col-auto d-none d-lg-block">
             
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div style="backdrop-filter: blur(20px);background-color: rgba(107, 107, 107, 0.17);" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ndde">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success-emphasis"></strong>
              <h3 class="mb-0">Workout for Girls</h3>
              <div class="mb-1 text-body-secondary">Nov 11</div>
              <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <div style="display: flex;justify-content: space-around;">
              <a href="main.php?girl_is_pro=true" ><button type="button" class="btn btn-primary clo1" style="width: 170px;">Beginner</button></a>
              <a href="main.php?girl_is_pre=true" ><button type="button" class="btn btn-primary clo1" style="width: 170px;">Intermediate</button></a>
              </div>             </div>
            <div class="col-auto d-none d-lg-block ">
    
            </div>
          </div>
        </div>
      </div>

    </main>
    <hr style="color: orangered;">
    <center><h1>Trainers</h1></center>
    <div style="height: 50vh;width: 100%;background-color: rgb(33,37,41);padding: 30px;display: flex;align-items: center;justify-content: space-around;margin-bottom: 50px;margin-top: 38px;">
      <div class="lklkj">
      <img   src="/lib/template/pictures/sara.jpg" alt="no">
      <center><h4>Sara Cohen
      </h4></center>
      </div>
      <div class="lklkj">
      <img src="/lib/template/pictures/vishnu.jpg" alt="no">
      <center><h4>Vishnu VK</h4></center>      </div>
      <div class="lklkj">
      <img src="/lib/template/pictures/abhinav.jpg" alt="no">
      <center><h4>Abhinav PS</h4></center>      </div>
    </div>
    <hr style="color: orangered;margin-bottom: 50px;">


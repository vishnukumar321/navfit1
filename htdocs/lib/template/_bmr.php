<link rel="stylesheet" href="/navfit1/htdocs/lib/template/css/bmi.chart.css">
<link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Barlow+Condensed&amp;display=swap'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap'>

<?php
if(isset($_GET['is_pre'])){
  if(isset($_SESSION['pre_subed'])){
    echo '<script>window.location.href="diet.php";</script>';
  }else{
    ?><script>alert("Please take Premium level subscription...")</script><?php
    echo '<script>window.location.href="refferal.php";</script>';
  }
}
include_once "lib/load.php";
if (isset($_POST['height']) and isset($_POST['weight']) and isset($_POST['age']) and isset($_POST['gender'])) {
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $bmr = false;
  if ($gender == "male") {
    $bmr = (9.99 * $weight) + (6.25 * $height) - (4.92 * $age) + 5;
  } elseif ($gender == "female") {
    $bmr = (9.99 * $weight) + (6.25 * $height) - (4.92 * $age) - 161;
  }
  $bmr = substr($bmr, 0, 4);
?><div style="width: 100%;height: 80vh;display: flex;justify-content: center;align-items: center;">
    <center>
    <div class="card" style="width: 22rem;">
      <div class="card-body">
        <h1 class="card-title"><?=$bmr?>&ensp;Calories/day</h1>
        <p class="card-text">Click on the Diet plan below to know more about the calorie related foods.</p>
        <a href="BMR.php" class="card-link" style="font-size: 22px;text-decoration: none;">Clear</a>
        <a href="BMR.php?is_pre=true" class="card-link"><button type="button" class="btn btn-danger" style="background-color: rgb(247, 120, 1) !important;border: 1px solid rgb(247, 120, 1);">Diet plan</button>
        </a>
      </div>
    </div>
    </center>
  </div><?php
      } else {
        ?>
  <main class="form-signin w-100 m-auto">
    <center class="tyrtr">
      <form action="BMR.php" method="post" class="kjhhkj">
        <h1 class="h3 mb-3 fw-normal">BMR Calculator</h1>

        <div class="form-floating">
          <input name="height" type="tel" class="form-control" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">Height</label>
        </div>
        <br>
        <div class="form-floating">
          <input name="weight" type="tel" class="form-control" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">weight</label>
        </div>
        <br>
        <div class="form-floating">
          <input name="age" type="tel" class="form-control" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Age</label>
        </div>
        <br>
        Gender :&ensp;
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" required>
          <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" required>
          <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
        <br>
        <br>
        <button class="btn btn-primary w-100 py-2" type="submit">Check</button>
      </form>
    </center>
  </main>

<?php
      }

<link rel="stylesheet" href="/lib/template/css/bmi.chart.css">
<link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Barlow+Condensed&amp;display=swap'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap'>

<?php
include_once "lib/load.php";
if(isset($_POST['height']) and isset($_POST['weight']) and isset($_POST['age']) and isset($_POST['gender']) ){
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $height=$height/100;
    $height=$height*$height;
    $bmi=$weight/$height;
    $color=null;
    $status=null;
    if($bmi<18.5){
        $color="rgba(3, 75, 230, 0.91)";
        $status="Under Weight";
    }elseif($bmi>=18.5 and $bmi<=24.9){
        $color="rgb(27, 168, 0)";
        $status="Normal Weight";
    }elseif($bmi>=25.0 and $bmi<=29.9){
        $color="rgb(255, 243, 0)";
        $status="Over Weight";
    }elseif($bmi>=30.0 and $bmi<=34.9){
        $color="rgb(255, 93, 18)";
        $status="Obese";
    }elseif($bmi>=35.0){
        $color="rgb(255, 107, 107)";
        $status="Extremely Obese";
    }
    $_SESSION['bmi_int_no']=substr($bmi,0,2);
    $_SESSION['bmi_color_no']=$color;
    $_SESSION['bmi_status_no']=$status;
    $_SESSION['bmi_float_no']=substr($bmi,0,5);
    get_file("graf_bmi");
}else{
    ?>
    <main class="form-signin w-100 m-auto" >
  <center class="tyrtr">
  <form action="BMI.php" method="post" class="kjhhkj">
    <h1 class="h3 mb-3 fw-normal">BMI Calculator</h1>

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

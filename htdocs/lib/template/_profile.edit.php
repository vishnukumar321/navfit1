<?php
include_once "lib/load.php";
$result=false;
$signup=false;
$error=false;
if(isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['addr1']) and isset($_POST['addr2']) and isset($_POST['city']) and isset($_POST['state']) and isset($_POST['zip']) and isset($_POST['age']) and isset($_POST['height']) and isset($_POST['weight']) and isset($_POST['gender'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $addr1=$_POST['addr1'];
    $addr2=$_POST['addr2'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $age=$_POST['age'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $gender=$_POST['gender'];
    $signup=user::update($fname,$lname,$email,$phone,$addr1,$addr2,$city,$state,$zip,$age,$height,$weight,$gender);
    $result=true;
}
if($result){
  if($signup){
    echo '<script>window.location.href="profile.php?update=true";</script>';
  }else{
    echo '<script>window.location.href="profile.php?no_update=true";</script>';
  }
}
if(!$result){
  ?>
  <div class="tyrtr2">
<form action="profile.edit.php" method="post" class="row g-3">
<h1 class="h1 mb-3 fw-normal nnnn">Edit Profile</h1>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">First Name</label>
    <input name="fname" type="text" class="form-control" id="inputEmail4" value="<?=session::get_value('first_name');?>" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last Name</label>
    <input name="lname" type="text" class="form-control" id="inputPassword4" value="<?=session::get_value('last_name');?>" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="inputPassword4" value="<?=session::get_value('email');?>" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Phone No</label>
    <input name="phone" type="tel" class="form-control" id="inputEmail4" value="<?=session::get_value('phone');?>" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address 1</label>
    <input name="addr1" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?=session::get_value('address1');?>" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input name="addr2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="<?=session::get_value('address2');?>" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input name="city" type="text" class="form-control" id="inputCity" value="<?=session::get_value('city');?>" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label >
    <select name="state" id="inputState" class="form-select" required>
      <option>Karnataka</option>
      <option>Kerala</option>
      <option>Tamilnadu</option>
      <option>Other</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input name="zip" type="number" class="form-control" id="inputZip" value="<?=session::get_value('zip');?>" required>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">age</label>
    <input name="age" type="number" class="form-control" id="inputZip" value="<?=session::get_value('age');?>" required>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">height</label>
    <input name="height" type="number" class="form-control" id="inputZip" value="<?=session::get_value('height');?>" required>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">weight</label>
    <input name="weight" type="number" class="form-control" id="inputZip" value="<?=session::get_value('weight');?>" required>
  </div>
 
  <label for="">Gender :&ensp;</label>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" required>
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" required>
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
</div>
  <?php
}
?>

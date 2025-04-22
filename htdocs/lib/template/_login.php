<?php
include_once "lib/load.php";
$result = false;
$login = false;
$error = false;
if (isset($_POST['name']) and isset($_POST['pass'])) {
  $name = $_POST['name'];
  $pass = $_POST['pass'];
  $login = auth::authentication($name,$pass);
  $result = true;
}
if ($result) {
  if ($login) {
    // header("Location: index.php");
    get_file("main");
  } else {
    $error = true;
  }
}
if (!$result or $error) {
?>
  <style>
    .main87:hover {
      border-color: rgb(247, 120, 1);
    }

    .main87 {
      border: 1.4px solid rgba(247, 120, 1, 0.32);
      padding: 20px;
      width: 340px;
      border-radius: 10px;
      transition: 300ms;
    }
    .yituiut{
      background-color: rgb(247, 120, 1) !important;
      border: 1px solid rgb(247, 120, 1);
      color: black;
      font-size: 20px;
    }
    .yituiut:hover{
      border: 1px solid rgb(247, 120, 1);
    }
  </style>
  <main class="form-signin w-100 m-auto">
    <center class="tyrtr" style="padding-top: 60px;">
      <form action="login.php" method="post" class="main87" style="">
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        <div class="form-floating">
          <input name="name" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">Username</label>
        </div>
        <br>
        <div class="form-floating">
          <input name="pass" type="password" class="form-control" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">Password</label>
        </div>

        <br>
        <?php
        if ($error) {
        ?><h6 style="color: red;">Invalid Username or Password</h6><?php
                                                            }
                                                              ?>
        <button class="btn btn-primary w-100 py-2 yituiut" style="" type="submit">Check</button>
      </form>
    </center>
  </main>

<?php
}
?>
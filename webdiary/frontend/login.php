<?php
$title = "Login";
$active_login = "active";
require_once "../includes/header.php";
?>

<h3>Welcome to the Login page</h3>
<div>
<form action="../backend/login_server.php" method="post">
<div class="form-floating mb-3">
  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="check1">
    <label class="form-check-label" for="check1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <!--<button onclick="registerForm();">Regiter Here</button>-->
</div>

<?php
require_once "../includes/footer.php";
?>
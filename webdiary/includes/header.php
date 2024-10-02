<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "skfada" ; ?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>


<nav class="navbar sticky-top navbar-expand-lg bg-dark navbar-inverse">
  <div class="container-fluid">
    <a class="navbar-brand text-warning" href="#"><h4>WebDiary</h4></a>
    <button class="navbar-toggler border-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item px-1">
          <a class="btn btn-outline-info btn-sm <?= $active_home?>" aria-current="page" href="../index.php">Home</a>
        </li>
        <?php if (empty($_SESSION["user_id"])):?>
          <li class="nav-item px-1">
            <a class="btn btn-outline-info btn-sm  btn-outline-info btn-sm <?= $active_login ?>" href="../frontend/login.php">Login</a>
          </li>
          <li class="nav-item px-1">
            <a class="btn btn-outline-info btn-sm <?= $active_register?>" href="../frontend/register.php">Register</a>
          </li>
        <?php else: ?>
          <li class="nav-item px-1">
            <a class="btn btn-outline-info btn-sm <?= $active_dashboard?>" href="../frontend/dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item px-1">
            <a class="btn btn-outline-info btn-sm <?= $active_logout?>" href="../backend/logout.php">Logout</a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-4">
    <!--the body begins here-->

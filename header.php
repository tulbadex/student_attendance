<?php

include('admin/database_connection.php');

session_start();

if(!isset($_SESSION["teacher_id"]))
{
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Attendance System</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- DataTable Bootstrap css -->
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <!-- Jquery -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- DataTable js -->
    <script src="js/datatables.min.js"></script>
    <!-- DataTable Boostrap js -->
    <script src="js/dataTables.bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron-small text-center" style="margin-bottom:0">
  <h1>Student Attendance System</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attendance.php">Attendance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>  
    </ul>
  </div>  
</nav>
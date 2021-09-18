<?php
session_start();
ob_start();
define("INDEX", true);

//Panggil semua file yang diperlukan pada folder library
include "../library/config.php";
include "../library/function_menu.php";
include "../library/function_table.php";
include "../library/function_form.php";

//Mengatur batas timeout
$timeout = $_SESSION['timeout'];
if (time() < $timeout) {
	$_SESSION['timeout'] = time() + 5000;
} else {
	$_SESSION['login'] = 0;
}

//Mengecek status login
if (empty($_SESSION['username']) or empty($_SESSION['password']) or $_SESSION['login'] == 0) {
	header('location: login.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Administrator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../plugin/bootstrap-4.6.0-dist/js/bootstrap.min.js"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
    <!-- div 1 -->
    <div class="contener-fluid">
      <?php include "menu.php"?>
    </div>
    <!-- div 2 -->
    <div class="contener-fluid">
        <div class="row">
            <div class="col-md-3" >
           <?php include 'sidebar.php'?>
                
            </div>
            <div class="col-md-9" >
            <?php include 'artikel.php'?>
            </div>
        </div>
    </div>
    <!-- div 3 -->
    <div class="contener-fluid" style="text-align: center;">
        <h6> copy right DEVCAMP </h6>
    </div>
    
</body>
</html>




<?php 
}

?>
<?php session_start(); ?>
<?php ob_start(); ?>
<?php require_once("../includes/db.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Educablog || Admin Panel</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="js/all.min.js"></script>
        <script src="js/feather.min.js"></script>
    </head>

<?php 

//if(isset($_SESSION['login']) && isset($_SESSION['user_rol']) && $_SESSION['user_rol'] == 'admin'){

    // code for admin users

//}else{

   // header("Location:../index.php");

    //exit(); // don't forget to exit after redirecting

//}

//?>


   

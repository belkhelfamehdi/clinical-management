<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
    ini_set('display_errors', 0);
    require 'connect.php';
    if(isset($_POST['submit'])){
        $num = $_POST['num'];
        $requet = "DELETE FROM `chambre` WHERE num = '$num'";
        $query = mysqli_query($conn, $requet);
    }
    header('Location:chambre.php');
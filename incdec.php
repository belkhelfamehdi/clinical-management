<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
    require 'connect.php';
    if(isset($_POST['inc'])){
        $gs = $_POST['gs'];
        $qt = $_POST['qt'];
        $req = "SELECT * FROM `stocks` WHERE gs = '$gs'";
                            $que = mysqli_query($conn, $req);
                            while($rows = mysqli_fetch_array($que)) {
                            $n = $rows['quantite'];
                            }
        $n = $n + intval($qt);
        $req = "UPDATE `stocks` SET `quantite`='$n' WHERE gs = '$gs'";
        $que = mysqli_query($conn, $req);
        header('Location:stockSang.php');
        
    }
    if(isset($_POST['dec'])){
        $gs = $_POST['gs'];
        $qt = $_POST['qt'];
        $req = "SELECT * FROM `stocks` WHERE gs = '$gs'";
                            $que = mysqli_query($conn, $req);
                            while($rows = mysqli_fetch_array($que)) {
                            $n = $rows['quantite'];
                            }
        $n = $n - intval($qt);
        if($n < 0){
            $n = 0;
        }
        $req = "UPDATE `stocks` SET `quantite`='$n' WHERE gs = '$gs'";
        $que = mysqli_query($conn, $req);
        header('Location:stockSang.php');
    }
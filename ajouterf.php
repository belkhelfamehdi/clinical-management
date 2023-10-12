<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
?>
 <?php
 ini_set('display_errors', 0);
 include("connect.php");
 if(isset($_POST['rand']) && ($_POST['mt']) && ($_POST['idp'])){
    $rand = $_POST['rand'];
    $mt = $_POST['mt'];
    $id = $_POST['idp'];
    $requet = "INSERT INTO `facture`(`num`,`montant`,`id_p`) VALUES ('$rand','$mt','$id')" ;
    $result = mysqli_query($conn, $requet);
    echo $rand;
 }
 ?>  
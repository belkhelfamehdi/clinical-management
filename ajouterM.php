<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
?>
<?php
ini_set('display_errors', 0);
    $num = $_POST['num'];
    $nom = $_POST['nom'];
    $qt = $_POST['qt'];
    if($qt < 0){
        $qt = 0;
    }
    require 'connect.php';
    $requet1 = "SELECT * FROM `medicament` WHERE numM = '$num'";
    $query1 = mysqli_query($conn, $requet1);
    if(mysqli_num_rows($query1) >0){
        $requet2 = "UPDATE `medicament` SET `nom`='$nom', `quantite`='$qt' WHERE numM = '$num'";
    $query2 = mysqli_query($conn, $requet2);
    }else{
    $requete = "INSERT INTO `medicament`(`numM`, `nom`, `quantite`) VALUES ('$num','$nom','$qt')";
    $query = mysqli_query($conn, $requete);
    }
    header('Location:ajoutMedic.php');
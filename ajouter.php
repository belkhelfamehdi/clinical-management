<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
?>
<?php
ini_set('display_errors', 0);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $daten = $_POST['daten'];
    $dateem = $_POST['dateem'];
    $gen = $_POST['gen'];
    $num = $_POST['num'];
    $email = $_POST['email'];  
    $fc = $_POST['fc'];                                                                                                                                 

    require 'connect.php';

    $requete = "INSERT INTO `employe`(`nom`, `prenom`, `daten`, `dateem`, `gen`, `num`, `email`,`fonction`) VALUES ('$nom','$prenom', '$daten','$dateem', '$gen' , '$num','$email','$fc')";
    $query = mysqli_query($conn, $requete);
    header('Location:formulaire.php?id = 5');
    
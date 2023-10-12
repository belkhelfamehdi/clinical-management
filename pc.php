<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
?>
<?php
ini_set('display_errors', 0);
    if(isset($_POST['submit'])){
    $id = $_POST['hidden'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dated = $_POST['daten'];
    $datef = $_POST['dateem'];
    require 'connect.php';

    $requete = "INSERT INTO `cong`(`id_em`, `dated`, `datef`) VALUES ('$id','$dated', '$datef')";
    $query = mysqli_query($conn, $requete);
    }
    header("Location:employe.php");
        ?>
<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
?>
<?php 
ini_set('display_errors', 0);
    if(isset($_POST['submit'])){
        include 'connect.php';
        $num = $_POST['rm'];
        $id_p = $_POST['pt'];
        $id_e = $_POST['em'];
        $requet = "INSERT INTO `chambre`(`num`, `id_p`, `id_e`) VALUES ('$num','$id_p','$id_e')";
        $query = mysqli_query($conn, $requet);
    }
    header('Location:chambre.php');
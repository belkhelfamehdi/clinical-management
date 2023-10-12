<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
?>
<?php
    ini_set('display_errors', 0);
    require 'connect.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `donneur` WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    if(isset($query)){
        header('Location:donneur.php');
    }else{
        echo "no";
    }
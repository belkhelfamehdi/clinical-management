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
    $gen = $_POST['gen'];
    $num = $_POST['num'];
    $email = $_POST['email'];
    $addr = $_POST['addr'];
    $gp = $_POST['gp'];
    require 'connect.php';

    $requete = "INSERT INTO `patient`(`nom`, `prenom`, `daten`, `gen`, `num`, `email`,`addr`, `gs`) VALUES ('$nom','$prenom', '$daten', '$gen' , '$num','$email','$addr', '$gp')";
    $query = mysqli_query($conn, $requete);
    if(isset($query)){
        ?>
        <script>
        document.getElementById('submit').addEventListener("click", function() {
	    document.querySelector('.alert-box success').style.display = "flex";
});
        </script>
    <?php
    header('Location:formulairept.php');
    }
    
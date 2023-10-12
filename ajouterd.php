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
    $num = $_POST['num'];
    $gp = $_POST['gp'];
    require 'connect.php';

    $requete = "INSERT INTO `donneur`(`nom`, `prenom`, `numero`, `gs`) VALUES ('$nom','$prenom','$num', '$gp')";
    $query = mysqli_query($conn, $requete);
    if(isset($query)){
        ?>
        <script>
        document.getElementById('submit').addEventListener("click", function() {
	    document.querySelector('.alert-box success').style.display = "flex";
});
        </script>
    <?php
    header('Location:formulaired.php');
    }
    
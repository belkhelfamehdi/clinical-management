<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
?>
<?php
ini_set('display_errors', 0);
    $id = $_POST['input'];
    require 'connect.php';

    $requete = "SELECT * FROM `patient` WHERE id = '$id'";
    $query = mysqli_query($conn, $requete);
    $row = mysqli_fetch_array($query);
        ?>
        <table style="width: 100%; text-align: center;">
            <tr>
                <td><label>Nom : </label><?php echo $row['nom'] ?></td>
                <td><label>Prenom : </label><?php echo $row['prenom'] ?></td>
            </tr>
        </table>
    <?php
    
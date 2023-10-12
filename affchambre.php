<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
?>
<?php
ini_set('display_errors', 0);
    require 'connect.php'; 
    if(isset($_POST["employee_id"]))  
    {  
         $query = "SELECT * FROM chambre WHERE num = '1'";  
         $result = mysqli_query($conn, $query);  
         $row = mysqli_fetch_array($result);  
         ?>

        Patient ID   : <?php echo $row["num"]; ?><br>
        Patient Name : <?php echo $row["id_p"]; ?><br>  

         <?php
    }  
?>
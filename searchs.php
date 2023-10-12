<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
?>
 <?php
 include("connect.php");
 if(isset($_POST['input'])){
    $input = $_POST['input'];
    $requet = "SELECT * FROM `salaire` WHERE `id` LIKE '{$input}%' OR  `salaire` LIKE '{$input}%'" ;
    $result = mysqli_query($conn, $requet);

    if(mysqli_num_rows($result)>0){ 
 ?>     
                        <?php
                            include_once 'connect.php';
                                          
                            while($row = mysqli_fetch_assoc($result)) {   
                                $id = $row['id']   ; 
                                $requet1 = "SELECT * FROM `employe` WHERE `id` = $id" ;
                                $result1 = mysqli_query($conn, $requet1);                                             
                            ?>
                            
                            <tr>
                            <td><?php echo $row['id'] ?></td>
                            <?php
                            while($rows = mysqli_fetch_assoc($result1)) { 
                                echo "<td>". $rows['nom']."</td>";
                                echo "<td>". $rows['prenom']."</td>";
                            }
                                ?>
                                <td><?php echo $row['salaire'] ?></td>
                                <td style="text-align: center;">
                                <?php echo "<a href='edits.php?id= ".$id."'><i class='fa-solid fa-pen-to-square fa-xl' style='color : #4e73df';'></i></a>" ?>
                                </td>
                                
                            </tr>
                                                          
                        <?php
                                }
                            }
                        }
                            ?> 
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
    $requet = "SELECT * FROM `medicament` WHERE `numM` LIKE '{$input}%' OR  `nom` LIKE '{$input}%' OR  `quantite` LIKE '{$input}%'" ;
    $result = mysqli_query($conn, $requet);
    if(mysqli_num_rows($result)>0){ 
 ?>     
                        <?php
                            include_once 'connect.php';
                                          
                            while($rows = mysqli_fetch_assoc($result)) {   
                                $id = $rows['numM']                                                 
                            ?>
                            
                            <tr>
                                <td><?php echo $rows['numM'] ?></td>
                                <td><?php echo $rows['nom'] ?></td>
                                <td><?php echo $rows['quantite'] ?></td>
                                <td style="text-align: center;">
                                <?php echo "<a href='editm.php?id= ".$id."'><i class='fa-solid fa-pen-to-square fa-xl' style='color : #4e73df';'></i></a>" ?>
                                </td>
                                <!--delete-->
                                <td style="text-align: center;">
                                <?php echo "<a onclick='checker()' href='delm.php?id= ".$id."'><i class='fa-solid fa-circle-minus fa-2xl' style='color: red;'></i></a>" ?>
                                </td>
                                <td style="text-align: center;">
                                <?php echo "<a href='viewm.php?id= ".$id."'><i class='fa-solid fa-eye fa-xl'></i></a>" ?>
                                </td>
                                
                            </tr>
                                                          
                        <?php
                                }
                            }
                        }
                            ?> 
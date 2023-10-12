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
    $requet = "SELECT * FROM `donneur` WHERE `id` LIKE '{$input}%' OR  `nom` LIKE '{$input}%' OR  `prenom` LIKE '{$input}%' OR  `numero` LIKE '{$input}%' OR `gs` LIKE '{$input}%'" ;
    $result = mysqli_query($conn, $requet);
    if(mysqli_num_rows($result)>0){ 
 ?>     
                        <?php
                            include_once 'connect.php';
                                          
                            while($rows = mysqli_fetch_assoc($result)) {   
                                $id = $rows['id']                                                 
                            ?>
                            
                            <tr>
                                <td><?php echo $rows['id'] ?></td>
                                <td><?php echo $rows['nom'] ?></td>
                                <td><?php echo $rows['prenom'] ?></td>
                                <td><?php echo $rows['numero'] ?></td>  
                                <td><?php echo $rows['gs'] ?></td> 
                                <td style="text-align: center;">
                                <?php echo "<a href='editd.php?id= ".$id."'><i class='fa-solid fa-pen-to-square fa-xl' style='color : #4e73df';'></i></a>" ?>
                                </td>
                                <!--delete-->
                                <td style="text-align: center;">
                                <?php echo "<a onclick='checker()' href='deld.php?id= ".$id."'><i class='fa-solid fa-circle-minus fa-2xl' style='color: red;'></i></a>" ?>
                                </td>
                                <td style="text-align: center;">
                                <?php echo "<a href='viewd.php?id= ".$id."'><i class='fa-solid fa-eye fa-xl'></i></a>" ?>
                                </td>
                                
                            </tr>
                                                          
                        <?php
                                }
                            }
                        }
                            ?> 
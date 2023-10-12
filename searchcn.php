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
    $requet = "SELECT * FROM `cong` WHERE `id_em` LIKE '{$input}%' OR  `dated` LIKE '{$input}%' OR  `datef` LIKE '{$input}%'  ";
    
    $result = mysqli_query($conn, $requet);
 
    if(mysqli_num_rows($result)>0){ 
 ?>     
                        <?php
                            include_once 'connect.php';
                                          
                            while($rows = mysqli_fetch_assoc($result)) {   
                                $id = $rows['id_em'];
                                $requet1 = "SELECT * FROM `employe` WHERE `id` LIKE '{$id}%'";
                                $result1 = mysqli_query($conn, $requet1);
                                while($row = mysqli_fetch_assoc($result1)) {
                                    $nom = $row['nom'] ;
                                    $prenom = $row['prenom'] ;  
                                    }                                                  
                            ?>
                            
                            <tr>
                                <td><?php echo $rows['id_em'] ?></td>
                                <td><?php echo $nom ?></td>
                                <td><?php echo $prenom ?></td>
                                <td><?php echo $rows['dated'] ?></td> 
                                <td><?php echo $rows['datef'] ?></td>
                                <!--delete-->
                                <td style="text-align: center;">
                                <?php echo "<a onclick='checker()' href='delpt.php?id= ".$id."'><i class='fa-solid fa-circle-minus fa-2xl' style='color: red;'></i></a>" ?>
                                </td>
                                <td style="text-align: center;">
                                <?php echo "<a href='viewpt.php?id= ".$id."'><i class='fa-solid fa-eye fa-xl'></i></a>" ?>
                                </td>
                                
                            </tr>
                                                          
                        <?php
                                }
                            }
                        }
                            ?> 
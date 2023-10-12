
<!DOCTYPE html>

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <link href="css/need.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">




    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/datatables.min.css" />
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
</head>
<?php
include_once 'connect.php';
?>
<body>  
    <div class="form-outline" id="search" style="width: 22%; margin-left : 70%; margin-top : 90px;">
    <input type="search" name="search" id="form1" class="form-control" placeholder="Chercher" aria-label="Search" />
</div>
<br> 
<div class="container">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:80%; margin-left : 125px; top:0;">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Début de congé</th> 
                                <th>Fin de congé</th>                                 
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table" class="old">
                            
                            <?php
                            include_once 'connect.php';
                            $requet = "SELECT * FROM `cong`" ;
                            $query = mysqli_query($conn, $requet); 
                                         
                            while($rows = mysqli_fetch_assoc($query)) {  
                                $id = $rows['num_cn'];
                                $id1 = $rows['id_em'];  
                                $requet1 = "SELECT * FROM `employe` WHERE id = '$id1'" ;
                                $query1 = mysqli_query($conn , $requet1);   
                                while($row = mysqli_fetch_assoc($query1)) {
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
                                <?php echo "<a onclick='checker()' href='delcn.php?id= ".$id."'><i class='fa-solid fa-circle-minus fa-2xl' style='color: red;'></i></a>" ?>
                                </td>
                                <td style="text-align: center;">
                                <?php echo "<a href='viewcn.php?id= ".$id1."'><i class='fa-solid fa-eye fa-xl'></i></a>" ?>
                                </td>
                                
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div> 
    </div> 




    <script src="assets/js/main.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.map"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script type="text/javascript">
        function checker(){
            var result = confirm('Voulez-vous vraiment supprimerce patient ?');
            if(result == false){
                event.preventDefault();
            }
        }
    let old_content = $('.old').html();
  $(document).ready(function(){
    $("#form1").keyup(function(){
        var input = $(this).val().trim();

        if(input != ""){
            $.ajax({
                url: "searchcn.php",
                method:"POST",
                data:{input:input},
                success:function(data){
                    $("#table").html(data);
                }
            });
        }else{
            $('.old').html(old_content);
        }
    })
  });
    </script>
</body>
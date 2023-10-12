<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- ======= style css====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">

</head>

<body>
    <!-- =============== barre de Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"></span>
                        <i id="sizeicon" class="fa-solid fa-house-medical"></i>
                        </span>
                        <span class="title">ONE HELTHE</span>
                    </a>
                </li>

                <li id="home">
                    <a id="home1" href="#">
                        <span class="icon">
                            <i class="fa-solid fa-house-chimney"></i>
                        </span>
                        <span class="title">home</span>
                    </a>
                </li>

                <li>
                    <a href="employe.php">
                        <span class="icon">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="title">Employé</span>
                    </a>
                </li>

                <li>
                    <a href="patien.php">
                        <span class="icon">
                            <i class="fa-solid fa-bed-pulse"></i>
                        </span>
                        <span class="title">Patient</span>
                    </a>
                </li>

                <li>
                    <a href="pharmacie.php">
                        <span class="icon">
                            <i class="fa-solid fa-syringe"></i>
                        </span>
                        <span class="title">Pharmacie</span>
                    </a>
                </li>

                <li>
                    <a href="chambre.php">
                        <span class="icon">
                            <i class="fa-solid fa-bed"></i>
                        </span>
                        <span class="title">Chambre</span>
                    </a>
                </li>

                <li>
                    <a href="banque.php">
                        <span class="icon">
                            <i class="fa-solid fa-heart-circle-plus"></i>
                        </span>
                        <span class="title">Banque de Sang</span>
                    </a>
                </li>

                <li>
                    <a href="facture.php">
                        <span class="icon">
                        <i class="fas fa-file-invoice"></i>
                        </span>
                        <span class="title">Facture</span>
                    </a>
                </li>
                <li>
                    <a href="rdv.php">
                        <span class="icon">
                        <i class="fa-solid fa-user-clock"></i>
                        </span>
                        <span class="title">Rendez-vous</span>
                    </a>
                </li>
                <li>
                    <a href="dev.php">
                        <span class="icon">
                        <i class="fa-solid fa-code"></i>
                        </span>
                        <span class="title">Developpeurs</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= page prancipale ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div>
                    <h1 class="titre">Gerer votre clinique</h1>
                </div>
                <div class="user">
                    <img src="assets/imgs/medicale.png" alt="">
                </div>
            </div>

            <!-- ======================= Carte ================== -->
            <div style="display: flex; flex-direction: column;">
            <div class="cardBox">
                <a href="employe.php">
                    <div class="card">
                        <div>
                            <div class="numbers">1</div>
                            <div class="cardName">Employé</div>

                        </div>

                        <div class="iconBx">
                            <i class="fa-solid fa-users"></i>
                        </div>
                    </div>
                </a>
                <a href="patien.php">
                    <div class="card">
                        <div>
                            <div class="numbers">2</div>
                            <div class="cardName">Patient</div>
                        </div>

                        <div class="iconBx">
                            <i class="fa-solid fa-bed-pulse"></i>
                        </div>
                    </div>
                </a>
                <a href="pharmacie.php">
                    <div class="card">
                        <div>
                            <div class="numbers">3</div>
                            <div class="cardName">Pharmacie</div>
                        </div>

                        <div class="iconBx">
                            <i class="fa-solid fa-syringe"></i>
                        </div>
                    </div>
                </a>
                <a href="chambre.php">
                    <div class="card">
                        <div>
                            <div class="numbers">4</div>
                            <div class="cardName">Chambre</div>
                        </div>

                        <div class="iconBx">
                            <i class="fa-solid fa-bed"></i>
                        </div>
                    </div>
                </a>
                <a href="banque.php">

                    <div class="card">
                        <div>
                            <div class="numbers">5</div>
                            <div class="cardName">Banque de sang </div>
                        </div>

                        <div class="iconBx">
                            <i class="fa-solid fa-heart-circle-plus"></i>
                        </div>
                    </div>
                </a>
                <a href="banque.php">

                    <div class="card">
                        <div>
                            <div class="numbers">6</div>
                            <div class="cardName">Facture</div>
                        </div>

                        <div class="iconBx">
                        <i class="fas fa-file-invoice"></i>
                        </div>
                    </div>
                </a>
                <a href="rdv.php">
                    <div class="card">
                        <div>
                            <div class="numbers">7</div>
                            <div class="cardName">Rendez-vous</div>

                        </div>

                        <div class="iconBx">
                        <i class="fa-solid fa-user-clock"></i>
                        </div>
                    </div>
                </a>
                <a href="dev.php">
                    <div class="card">
                        <div>
                            <div class="numbers">8</div>
                            <div class="cardName">Developpeurs</div>

                        </div>

                        <div class="iconBx">
                        <i class="fa-solid fa-code"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div style="display: flex;" id="box2">
                    <div class="cardBox" style="display: flex; flex-direction: column;">

                        <a href="#">
                            <div class="card" id="boxpat">
                                <div>
                                    <div class="cardName">Nombre emloyés actual</div>
                                    <div class="numbers"><?php 
                                    ini_set('display_errors', 0);
                            include 'connect.php' ;
                            $str = "SELECT * FROM `employe`";
                            $result = mysqli_query($conn, $str);
                            echo mysqli_num_rows($result);
                            ?></div>


                                </div>

                                <div class="iconBx">
                                    <i style="color: rgb(11, 133, 137);" class="fa-solid fa-users"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="card" id="boxpat">
                                <div>
                                    <div class="cardName">Nombre patients actuel</div>
                                    <div class="numbers"><?php include 'connect.php' ;
                            $str = "SELECT * FROM `patient`";
                            $result = mysqli_query($conn, $str);
                            echo mysqli_num_rows($result);
                            ?></div>


                                </div>

                                <div class="iconBx">
                                    <i style="color: rgb(216, 45, 18);" class="fa-solid fa-bed-pulse"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cardBox" style="display: flex; flex-direction: column;">

<a href="#">
    <div class="card" id="boxpat">
        <div>
            <div class="cardName">Nombre de chambres prises</div>
            <div class="numbers"><?php 
            ini_set('display_errors', 0);
    include 'connect.php' ;
    $str = "SELECT * FROM `chambre`";
    $result = mysqli_query($conn, $str);
    echo mysqli_num_rows($result)."/8";
    ?></div>


        </div>

        <div class="iconBx">
        <i style="color: rgb(230, 13, 111);" class="fa-solid fa-bed"></i>
        </div>
    </div>
</a>
<a href="#">
    <div class="card" id="boxpat">
        <div>
            <div class="cardName">Revenue généré par la clinique</div>
            <div class="numbers"><?php include 'connect.php' ;
    $str = "SELECT * FROM `facture`";
    $result = mysqli_query($conn, $str);
    $s = 0;
    while($rows = mysqli_fetch_assoc($result)){
        $s = $s + $rows['Montant'];
    }
    echo $s." DA";
    ?></div>


        </div>

        <div class="iconBx">
        <i style="color: rgb(23, 180, 39);" class="fa-solid fa-sack-dollar"></i>
        </div>
    </div>
</a>
</div>
                </div>
            </div>
                <!-- =========== Scripts java =========  -->
                <script src="assets/js/main.js"></script>
                <style>
           

           #boxpat {
               border: 1px solid rgb(143, 134, 134);
           }


           @media (max-width: 991px) {
               #box2 {
                   display: flex;
                   flex-direction: column;

               }

               

           }
           @media (max-width: 480px) {
               #box2 {
                   display: flex;
                   flex-direction: column;
               }


           }
           
      
       </style>

          

</body>

</html>
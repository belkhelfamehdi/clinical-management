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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <title>Document</title>
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

                <li>
                    <a href="menu.php">
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

                <li id="pharmacie">
                    <a id="pharmacie1" href="#">
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

                <h1 class="titre">Gerer votre pharmacie </h1>

                <div class="user">
                    <img src="assets/imgs/medicale.png" alt="">
                </div>
            </div>
            <!-- ======================= Carte ================== -->
            <div class="cardBox">
                <div class="card">
                <a href="ajoutMedic.php">
                    <div>
                        <div class="numbers">1</div>
                        <div class="cardName"> Ajout de medicament</div>
                    </div>
                    </a>
                    <div class="iconBx">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <a href="stockm.php">
                <div class="card">
                    <div>
                        <div class="numbers"><?php
                        ini_set('display_errors', 0);
                         include 'connect.php' ;
                            $str = "SELECT * FROM `medicament`";
                            $result = mysqli_query($conn, $str);
                            echo mysqli_num_rows($result);
                            ?></div>
                        <div class="cardName"> stock de medicament</div>
                    </div>

                    <div class="iconBx">
                        <i class="fa-solid fa-tablets"></i>
                    </div>
                </div>
                </a>

                <!-- ======================= script ================== -->
                <script src="assets/js/main.js"></script>
</body>

</html>
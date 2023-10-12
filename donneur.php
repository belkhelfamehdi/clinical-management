
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
    <title>Document</title>
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

                <li id="banque">
                    <a id="banque1" href="banque.php">
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
                    <i class="fa-solid fa-bars" style="color :black"></i>
                </div>
                <div>
                    <h1 class="titre">Ajouter un donneur</h1>
                </div>

                <div class="user">
                    <img src="assets/imgs/medicale.png" alt="">
                </div>
            </div>
            <!-- ======================= formulaire================== -->
            <div class="formulair">
            <?php ini_set('display_errors', 0); require 'C:\xampp\htdocs\pfc\tabled.php' ?> 
            </div>

            <script src="assets/js/main.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.map"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>



            <!-- ======================= script ================== -->
            <script src="assets/js/main.js"></script>

</body>

</html>
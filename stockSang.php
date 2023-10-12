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
    <style>
    .form-submit {
        margin-top: 12px;
        margin-bottom: 12px;
        margin-left: 25%;
        width: 50%;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -o-border-radius: 5px;
        -ms-border-radius: 5px;
        padding: 17px 20px;
        box-sizing: border-box;
        font-size: 14px;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        cursor: pointer;
        border: none;
        background-image: -moz-linear-gradient(to left, #74ebd5, #9face6);
        background-image: -ms-linear-gradient(to left, #74ebd5, #9face6);
        background-image: -o-linear-gradient(to left, #74ebd5, #9face6);
        background-image: -webkit-linear-gradient(to left, #74ebd5, #9face6);
        background-image: linear-gradient(to left, #74ebd5, #9face6);
    }
    </style>
</head>

<body>

</body>

</html>
<?php
    require 'connect.php';
    $requet = "SELECT `nom`, `prenom` FROM `patient`";
    $requet1 = "SELECT `nom`, `prenom` FROM `employe`";
    $requet2 = "SELECT `num` FROM `chambre`";
    $query = mysqli_query($conn, $requet);
    $query1 = mysqli_query($conn, $requet1);
    $query2 = mysqli_query($conn, $requet2);
?>
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
                <i class="fa-solid fa-bars"></i>
            </div>
            <div>
                <h1 class="titre">Stock du sang</h1>
            </div>

            <div class="user">
                <img src="assets/imgs/medicale.png" alt="">
            </div>
        </div>

        <div class="room">
            <form action="incdec.php" method="POST" style="display:flex ;flex-direction: column;">
                <div>
                    <div style="display: flex;">
                        <div class="list-choice">
                            <div class="list-choice-title">Groupe sanguin</div>
                            <div class="list-choice-objects" style="z-index : 1;">
                                <label>
                                    <input type="radio" name="gs" value="A+" /> <span>A+</span>
                                </label>

                                <label>
                                    <input type="radio" name="gs" value="A-" /> <span>A-</span>
                                </label>

                                <label>
                                    <input type="radio" name="gs" value="B+" /> <span>B+</span>
                                </label>

                                <label>
                                    <input type="radio" name="gs" value="B-" /> <span>B-</span>
                                </label>

                                <label>
                                    <input type="radio" name="gs" value="AB+" /> <span>AB+</span>
                                </label>

                                <label>
                                    <input type="radio" name="gs" value="AB-" /> <span>AB-</span>
                                </label>

                                <label>
                                    <input type="radio" name="gs" value="O+" /> <span>O+</span>
                                </label>

                                <label>
                                    <input type="radio" name="gs" value="O-" /> <span>O-</span>
                                </label>
                            </div>
                        </div>
                        <div class="list-choice">
                            <div class="list-choice-title">Quantité</div>
                            <div class="list-choice-objects" style="z-index : 1;">
                                <?php
  $i=1;
    while($i <= 4){
  ?>
                                <label>
                                    <input type="radio" name="qt" value=<?php echo $i; ?> />
                                    <span><?php echo $i; ?></span>
                                </label>
                                <?php
        $i++;
    }
    ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="form-group">
                            <table style="width : 100%">
                                <td> <input type="submit" name="inc" id="inc" class="form-submit" value="Incrémenter" />
                                </td>
                                <td><input type="submit" name="dec" id="dec" class="form-submit" value="Décrémenter" />
                                </td>
                            </table>
                        </span>
                    </div>
                </div>
            </form>

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?php include 'connect.php' ;
                            $str = "SELECT * FROM `stocks` WHERE gs = 'O+'";
                            $result = mysqli_query($conn, $str);
                            while($rows = mysqli_fetch_array($result)) {
                            $n = $rows['quantite'];
                            echo $n;
                            }
                            ?></div>
                    </div>

                    <div class="iconBx">
                        <p>O+</p>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php include 'connect.php' ;
                            $str = "SELECT * FROM `stocks` WHERE gs = 'O-'";
                            $result = mysqli_query($conn, $str);
                            while($rows = mysqli_fetch_array($result)) {
                            $n = $rows['quantite'];
                            echo $n;
                            }
                            ?></div>
                    </div>

                    <div class="iconBx">
                        <p>O-</p>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php include 'connect.php' ;
                            $str = "SELECT * FROM `stocks` WHERE gs = 'A+'";
                            $result = mysqli_query($conn, $str);
                            while($rows = mysqli_fetch_array($result)) {
                            $n = $rows['quantite'];
                            echo $n;
                            }
                            ?></div>
                    </div>

                    <div class="iconBx">
                        <p>A+</p>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php include 'connect.php' ;
                            $str = "SELECT * FROM `stocks` WHERE gs = 'A-'";
                            $result = mysqli_query($conn, $str);
                            while($rows = mysqli_fetch_array($result)) {
                            $n = $rows['quantite'];
                            echo $n;
                            }
                            ?></div>
                    </div>

                    <div class="iconBx">
                        <p>A-</p>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php include 'connect.php' ;
                            $str = "SELECT * FROM `stocks` WHERE gs = 'B+'";
                            $result = mysqli_query($conn, $str);
                            while($rows = mysqli_fetch_array($result)) {
                            $n = $rows['quantite'];
                            echo $n;
                            }
                            ?></div>
                    </div>

                    <div class="iconBx">
                        <p>B+</p>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php include 'connect.php' ;
                            $str = "SELECT * FROM `stocks` WHERE gs = 'B-'";
                            $result = mysqli_query($conn, $str);
                            while($rows = mysqli_fetch_array($result)) {
                            $n = $rows['quantite'];
                            echo $n;
                            }
                            ?></div>
                    </div>

                    <div class="iconBx">
                        <p>B-</p>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php include 'connect.php' ;
                            $str = "SELECT * FROM `stocks` WHERE gs = 'AB+'";
                            $result = mysqli_query($conn, $str);
                            while($rows = mysqli_fetch_array($result)) {
                            $n = $rows['quantite'];
                            echo $n;
                            }
                            ?></div>
                    </div>

                    <div class="iconBx">
                        <p>AB+</p>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php include 'connect.php' ;
                            $str = "SELECT * FROM `stocks` WHERE gs = 'AB-'";
                            $result = mysqli_query($conn, $str);
                            while($rows = mysqli_fetch_array($result)) {
                            $n = $rows['quantite'];
                            echo $n;
                            }
                            ?></div>
                    </div>

                    <div class="iconBx">
                        <p>AB-</p>
                    </div>
                </div>

            </div>






            <!-- ======================= script ================== -->
            <script src="assets/js/main.js"></script>
            </body>

            </html>
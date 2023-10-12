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
                        <span class="title">ONE health</span>
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
                <li id="patien">
                    <a id="patien1" href="#">
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
                <h1 class="titre">Developpeurs</h1>

                <div class="user">
                    <img src="assets/imgs/medicale.png" alt="">
                </div>
            </div>
            <!-- ======================= Carte ================== -->

            <div class="cardBox1" style="position: relative; left:60px;">

<div style="display: flex; flex-direction: column; align-items: center;" class="card1">
    <div class="iconBx" >
       <img style="border-radius: 50%; width: 200px; " src="logoman.png" alt="">
    </div>
    <p style=" color: var(--blue);  font-weight: 500;">fares bensalem </p>
</div>

<div style="display: flex; flex-direction: column; align-items: center;" class="card1">
    <div class="iconBx">
        <img style="border-radius: 50%; width: 200px;" src="logoman.png" alt="">
    </div>
    <p style=" color: var(--blue);  font-weight: 500;">mehdi belkhalfa</p>
</div>

<div style=" display: flex; flex-direction: column; align-items: center;" class="card1">
    <div class="iconBx"  >
        <img style="border-radius: 50%; width: 200px;" src="logoman.png" alt="">
    </div>
    <p  style=" color: var(--blue);  font-weight: 500;">aimad   bekka </p>
</div>
<div style="display: flex; flex-direction: column; align-items: center;" class="card1">
    <div class="iconBx">
        <img style="border-radius: 50%; width: 200px;" src="logowomen.png" alt="">
    </div>
    <p  style=" color: var(--blue);  font-weight: 500;">belkacemi zouina </p>
</div>
<div style="display: flex; flex-direction: column; align-items: center;" class="card1">
    <div class="iconBx">
        <img style="border-radius: 50%; width: 200px;" src="logowomen.png" alt="">
    </div>
    <p  style=" color: var(--blue);  font-weight: 500;">ibtissam benalaoua </p>
</div>
<div style="display: flex; flex-direction: column; align-items: center;" class="card1">
    <div class="iconBx"  >
        <img style="border-radius: 50%; width: 200px;" src="logowomen.png" alt="">
    </div>
    <p  style=" color: var(--blue);  font-weight: 500;">belili dalila </p>
</div>
<div style="display: flex; flex-direction: column; align-items: center;" class="card1">
    <div class="iconBx" >
        <img style="border-radius: 50%; width: 200px;" src="logowomen.png" alt="">
    </div>
    <p  style=" color: var(--blue);  font-weight: 500;">belhabib melina </p>
</div>

</div>



<!-- =========== Scripts java =========  -->
<script src="assets/js/main.js"></script>
<style>

.cardBox1 {
position: relative;
width: 100%;
padding: 20px;
display: grid;
grid-template-columns: repeat(4, 1fr);
grid-gap: 30px;
}

.cardBox1 .card1 {
position: relative;
background: var(--white);
padding: 30px;
border-radius: 20px;
display: flex;
justify-content: space-between;
cursor: pointer;
box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
position: relative; right: 50px;
}

.cardBox1 .card1 .numbers {
position: relative;
font-weight: 500;
font-size: 2.5rem;
color: var(--blue);
}

.cardBox1 .card1 .cardName {
color: var(--black2);
font-size: 1.1rem;
margin-top: 5px;
}

.cardBox1 .card1 .iconBx {
font-size: 3.5rem;
color: var(--black2);
}



.cardBox1 .card1:hover .numbers,
.cardBox1 .card1:hover .cardName,
.cardBox1 .card1:hover .iconBx {
color: var(--white);
cursor: default;
}

#sizeicon {
font-size: 3rem;
}

a {
text-decoration: none;
}


@media (max-width: 1400px) {

.cardBox1 {

grid-template-columns: repeat(2, 1fr);
padding: 50px;
width: 100%;
}

}
@media (max-width: 650px) {
.cardBox1 {
grid-template-columns: repeat(1, 1fr);
margin-left: 70px;
width: 65%;
padding: 50px;


}
}

</style>
</body>

</html>
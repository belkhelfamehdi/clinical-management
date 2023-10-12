<?php
session_start();
if (empty($_SESSION['username']) || $_SESSION['username'] == '') {
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
    /* @extend display-flex; */

    display-flex,
    .display-flex,
    .display-flex-center {
      display: flex;
      display: -webkit-flex;
    }

    /* @extend list-type-ulli; */


    /* Montserrat-300 - latin */

    a:focus,
    a:active {
      text-decoration: none;
      outline: none;
      transition: all 300ms ease 0s;
      -moz-transition: all 300ms ease 0s;
      -webkit-transition: all 300ms ease 0s;
      -o-transition: all 300ms ease 0s;
      -ms-transition: all 300ms ease 0s;
    }

    input,
    select,
    textarea {
      outline: none;
      appearance: unset !important;
      -moz-appearance: unset !important;
      -webkit-appearance: unset !important;
      -o-appearance: unset !important;
      -ms-appearance: unset !important;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      appearance: none !important;
      -moz-appearance: none !important;
      -webkit-appearance: none !important;
      -o-appearance: none !important;
      -ms-appearance: none !important;
      margin: 0;
    }

    input:focus,
    select:focus,
    textarea:focus {
      outline: none;
      box-shadow: none !important;
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      -o-box-shadow: none !important;
      -ms-box-shadow: none !important;
    }

    input[type=checkbox] {
      appearance: checkbox !important;
      -moz-appearance: checkbox !important;
      -webkit-appearance: checkbox !important;
      -o-appearance: checkbox !important;
      -ms-appearance: checkbox !important;
    }

    input[type=radio] {
      appearance: radio !important;
      -moz-appearance: radio !important;
      -webkit-appearance: radio !important;
      -o-appearance: radio !important;
      -ms-appearance: radio !important;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    figure {
      margin: 0;
    }

    p {
      margin-bottom: 0px;
      font-size: 15px;
      color: #777;
    }

    h2 {
      line-height: 1.66;
      margin: 0;
      padding: 0;
      font-weight: 900;
      color: #222;
      font-family: 'Montserrat';
      font-size: 24px;
      text-transform: uppercase;
      text-align: center;
      margin-bottom: 40px;
    }

    .clear {
      clear: both;
    }


    .display-flex {
      justify-content: space-between;
      -moz-justify-content: space-between;
      -webkit-justify-content: space-between;
      -o-justify-content: space-between;
      -ms-justify-content: space-between;
      align-items: center;
      -moz-align-items: center;
      -webkit-align-items: center;
      -o-align-items: center;
      -ms-align-items: center;
    }

    .display-flex-center {
      justify-content: center;
      -moz-justify-content: center;
      -webkit-justify-content: center;
      -o-justify-content: center;
      -ms-justify-content: center;
      align-items: center;
      -moz-align-items: center;
      -webkit-align-items: center;
      -o-align-items: center;
      -ms-align-items: center;
    }

    .position-center {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
    }

    .signup-content {
      background: #fff;
      border-radius: 10px;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -o-border-radius: 10px;
      -ms-border-radius: 10px;
      padding: 50px 85px;
    }

    .form-group {
      overflow: hidden;
      margin-bottom: 20px;
      width: 75%;
      margin-left: 12.5%;
    }

    .form-input {
      width: 100%;
      border: 1px solid #ebebeb;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      -o-border-radius: 5px;
      -ms-border-radius: 5px;
      padding: 17px 20px;
      box-sizing: border-box;
      font-size: 14px;
      font-weight: 500;
      color: #222;
    }

    .form-input::-webkit-input-placeholder {
      color: #999;
    }

    .form-input::-moz-placeholder {
      color: #999;
    }

    .form-input:-ms-input-placeholder {
      color: #999;
    }

    .form-input:-moz-placeholder {
      color: #999;
    }

    .form-input::-webkit-input-placeholder {
      font-weight: 500;
    }

    .form-input::-moz-placeholder {
      font-weight: 500;
    }

    .form-input:-ms-input-placeholder {
      font-weight: 500;
    }

    .form-input:-moz-placeholder {
      font-weight: 500;
    }

    .form-input:focus {
      border: 1px solid transparent;
      -webkit-border-image-source: -webkit-linear-gradient(to right, #9face6, #74ebd5);
      -moz-border-image-source: -moz-linear-gradient(to right, #9face6, #74ebd5);
      -o-border-image-source: -o-linear-gradient(to right, #9face6, #74ebd5);
      border-image-source: linear-gradient(to right, #9face6, #74ebd5);
      -webkit-border-image-slice: 1;
      border-image-slice: 1;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      -o-border-radius: 5px;
      -ms-border-radius: 5px;
      background-origin: border-box;
      background-clip: content-box, border-box;
    }

    .form-input:focus::-webkit-input-placeholder {
      color: #222;
    }

    .form-input:focus::-moz-placeholder {
      color: #222;
    }

    .form-input:focus:-ms-input-placeholder {
      color: #222;
    }

    .form-input:focus:-moz-placeholder {
      color: #222;
    }

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

    input[type=checkbox]:not(old) {
      width: 2em;
      margin: 0;
      padding: 0;
      font-size: 1em;
      display: none;
    }

    label {
      line-height: 1.66;
      margin: 0;
      padding: 0;
      font-weight: 900;
      color: #222;
      font-family: 'Montserrat';
      font-size: 12px;
      text-transform: uppercase;
      text-align: center;
      margin-bottom: 40px;
    }

    input[type=checkbox]:not(old)+label {
      display: inline-block;
      margin-top: 7px;
      margin-bottom: 25px;
    }

    input[type=checkbox]:not(old)+label>span {
      display: inline-block;
      width: 13px;
      height: 13px;
      margin-right: 15px;
      margin-bottom: 3px;
      border: 1px solid #ebebeb;
      border-radius: 2px;
      -moz-border-radius: 2px;
      -webkit-border-radius: 2px;
      -o-border-radius: 2px;
      -ms-border-radius: 2px;
      background: white;
      background-image: -moz-linear-gradient(white, white);
      background-image: -ms-linear-gradient(white, white);
      background-image: -o-linear-gradient(white, white);
      background-image: -webkit-linear-gradient(white, white);
      background-image: linear-gradient(white, white);
      vertical-align: bottom;
    }

    input[type=checkbox]:not(old):checked+label>span {
      background-image: -moz-linear-gradient(white, white);
      background-image: -ms-linear-gradient(white, white);
      background-image: -o-linear-gradient(white, white);
      background-image: -webkit-linear-gradient(white, white);
      background-image: linear-gradient(white, white);
    }

    input[type=checkbox]:not(old):checked+label>span:before {
      content: '\f26b';
      display: block;
      color: #222;
      font-size: 11px;
      line-height: 1.2;
      text-align: center;
      font-family: 'Material-Design-Iconic-Font';
      font-weight: bold;
    }

    .label-agree-term {
      font-size: 12px;
      font-weight: 600;
      color: #555;
    }

    .term-service {
      color: #555;
    }

    .loginhere {
      color: #555;
      font-weight: 500;
      text-align: center;
      margin-top: 91px;
      margin-bottom: 5px;
    }

    .loginhere-link {
      font-weight: 700;
      color: #222;
    }

    .field-icon {
      float: right;
      margin-right: 17px;
      margin-top: -32px;
      position: relative;
      z-index: 2;
      color: #555;
    }


    @media screen and (max-width: 480px) {
      .signup-content {
        padding: 50px 25px;
      }
    }

    .signup-form {
      background-color: #fff;
    }

    .form-popup {
      align-items: center;
      display: block;
      z-index: 1;
      width: 50%;
      height: 30%;
      justify-content: center;
      position: relative;
      margin: 0 auto;
      top: 10%;
    }

    .containerr {
      width: 100%;
      height: 150%;
      top: 0;
      position: absolute;
      display: none;
      z-index: 1;
      background-color: rgba(22, 22, 22, 0.5);
      /* complimenting your modal colors */
    }

    .containerr:target {
      visibility: visible;
      display: block;
    }

    .close {
      position: absolute;
      top: 0;
      right: 10px;
      font-size: 42px;
      color: #333;
      transform: rotate(45deg);
      cursor: pointer;

    }

    /*# sourceMappingURL=style.css.map */
  </style>
</head>

<body>

</body>

</html>
<?php
require 'connect.php';
$requet = "SELECT `id`,`nom`, `prenom` FROM `patient`";
$requet1 = "SELECT * FROM `employe` WHERE fonction = 'Médecin'";
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

      <li id="chambre">
        <a id="chambre1" href="chambre.php">
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
        <h1 class="titre">Gerer les chambres</h1>
      </div>

      <div class="user">
        <img src="assets/imgs/medicale.png" alt="">
      </div>
    </div>

    <div class="room">
      <form method="POST" action="addchambre.php" style="display:flex ;flex-direction: column;">
        <div>
          <div style="display: flex;">
            <div class="list-choice">
              <div class="list-choice-title">Choisir un patient</div>
              <div class="list-choice-objects" style="z-index : 1;">

                <?php
                
                while ($rows = mysqli_fetch_assoc($query)) {
                  $id = $rows['id'];
                  $requete = "SELECT * FROM `chambre` WHERE id_p = $id";
                  $queryy = mysqli_query($conn, $requete);
                  if (mysqli_num_rows($queryy) == 0) {
                ?>
                    <label>
                      <input type="radio" name="pt" value=<?php echo $rows['id']; ?> /> <span><?php echo $rows['nom'];
                                                                                              echo " ";
                                                                                              echo $rows['prenom']; ?></span>
                    </label>
                <?php
                  }
                }
                ?>
              </div>
            </div>
            <div class="list-choice">
              <div class="list-choice-title">Choisir un Médecin</div>
              <div class="list-choice-objects" style="z-index : 1;">

                <?php
                while ($rows = mysqli_fetch_assoc($query1)) {
                  $id = $rows['id'];
                ?>
                    <label>
                      <input type="radio" name="em" value=<?php echo $rows['id']; ?> /> <span><?php echo $rows['nom'];
                                                                                              echo " ";
                                                                                              echo $rows['prenom']; ?></span>
                    </label>
                <?php
                  }
                ?>
              </div>
            </div>
            <div class="list-choice">
              <div class="list-choice-title">Choisir une chambre</div>
              <div class="list-choice-objects" style="z-index : 1;">

                <?php
                $i = 1;
                while ($i <= 8) {
                  $requet3 = "SELECT * FROM `chambre` WHERE num = $i";
                  $query3 = mysqli_query($conn, $requet3);
                  if (mysqli_num_rows($query3) == 0) {
                ?>
                    <label>
                      <input type="radio" name="rm" value=<?php echo $i; ?> /> <span><?php echo $i; ?></span>
                    </label>
                <?php
                  }
                  $i++;
                }
                ?>
              </div>
            </div>
          </div>
          <div>
            <div class="form-group">
              <input type="submit" name="submit" id="submit" class="form-submit" value="Ajouter" />
            </div>
          </div>
        </div>
      </form>
      <div class="cardBox">
        <?php
        $i = 1;
        while ($i <= 8) {
          $requet = "SELECT * FROM `chambre` WHERE num = $i";
          $query = mysqli_query($conn, $requet);
          if (mysqli_num_rows($query) == 0) {
        ?>
            <a href="#" id=<?php echo $i ?> class=<?php echo "room";
                                                  echo $i; ?>>
              <div class="card">
                <div>
                  <div class="numbers"><?php echo $i ?></div>
                  <div class="cardName"> Chambre libre</div>
                </div>

                <div class="iconBx">
                  <i class="fa-solid fa-bed-pulse"></i>
                </div>
              </div>
            </a>
          <?php
          } else {
          ?>
            <a href="#" id=<?php echo $i ?> class=<?php echo "room";
                                                  echo $i; ?>>
              <div class="card">
                <div>
                  <div class="numbers"><?php echo $i ?></div>
                  <div class="cardName"> Chambre prise</div>
                </div>

                <div class="iconBx" style="color :red;">
                  <i class="fa-solid fa-bed-pulse"></i>
                </div>
              </div>
            </a>
        <?php
          }
          $i++;
        }
        ?>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </div>
      <?php

      $i = 1;
      while ($i <= 8) {
        $requet = "SELECT * FROM `chambre` WHERE num = $i";
        $query = mysqli_query($conn, $requet);
        if (mysqli_num_rows($query) > 0) {
          while ($row = mysqli_fetch_array($query)) {
            $id_p = $row['id_p'];
            $id_e = $row['id_e'];
          }
          $ex = mysqli_query($conn, "SELECT * FROM `patient` WHERE id = $id_p");
          while ($t = mysqli_fetch_assoc($ex)) {
            $nom_p = $t['nom'] . " " . $t['prenom'];
            $daten = $t['daten'];
            $gs = $t['gs'];
          }
          $ex1 = mysqli_query($conn, "SELECT * FROM `employe` WHERE id = $id_e");
          while ($t1 = mysqli_fetch_assoc($ex1)) {
            $nom_e = $t1['nom'] . " " . $t1['prenom'];
          }
      ?>
          <div class="form-popupp" id="myForm">
            <section class="signup">
              <div class="containerr" id=<?php echo "container";
                                          echo $i; ?>>
                <div class="form-popup">
                  <div class="close" id=<?php echo "close";
                                        echo $i; ?>>+</div>
                  <form method="POST" action="liberer.php" id="signup-form" class="signup-form" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); -webkit-border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; border-radius: 20px 20px 20px 20px;width: 100%; justify-content: center;">
                    <h2 class="form-title"><?php echo "Chambre ";
                                            echo $i; ?></h2>
                    <div class="form-group">
                      <input type="text" name="num" id="num" value=<?php echo $i; ?> hidden />
                    </div>
                    <div class="form-group">
                      <label for="nom" style="display : inline-block;">ID patient :</label>
                      <?php echo $id_p; ?>
                    </div>
                    <div class="form-group">
                      <label for="nom" style="display : inline-block;">Nom du patient :</label>
                      <?php echo $nom_p; ?>
                    </div>
                    <div class="form-group">
                      <label for="nom" style="display : inline-block;">Date de naissance :</label>
                      <?php echo $daten; ?>
                    </div>
                    <div class="form-group">
                      <label for="nom" style="display : inline-block;">Groupe sanguin :</label>
                      <?php echo $gs; ?>
                    </div>
                    <div class="form-group">
                      <label for="nom" style="display : inline-block;">Médecin :</label>
                      <?php echo $nom_e; ?>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" id="submit" class="form-submit" value="libérer" />
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
      <?php
        }
        $i++;
      }
      ?>
    </div>
  </div>

  <!-- ======================= script ================== -->
  <script src="assets/js/main.js"></script>
  <script src="js/jquery-3.6.0.min.map"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script>
    <?php

    $i = 1;
    while ($i <= 8) {
      $requet = "SELECT * FROM `chambre` WHERE num = $i";
      $query = mysqli_query($conn, $requet);
      if (mysqli_num_rows($query) > 0) {

    ?>
        document.getElementById('<?php echo $i; ?>').addEventListener("click", function() {
          document.querySelector('<?php echo "#container"; echo $i; ?>').style.display = "block";
        });

        document.querySelector('<?php echo "#close"; echo $i; ?>').addEventListener("click", function() {
          document.querySelector('<?php echo "#container"; echo $i; ?>').style.display = "none";
        });
    <?php
      }
      $i++;
    }
    ?>
  </script>
  </body>

  </html>
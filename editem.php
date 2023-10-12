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
    
    <style>
        /* @extend display-flex; */
        
display-flex, .display-flex, .display-flex-center {
  display: flex;
  display: -webkit-flex; }

/* @extend list-type-ulli; */


/* Montserrat-300 - latin */

a:focus, a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -webkit-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s; }

input, select, textarea {
  outline: none;
  appearance: unset !important;
  -moz-appearance: unset !important;
  -webkit-appearance: unset !important;
  -o-appearance: unset !important;
  -ms-appearance: unset !important; }

input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
  appearance: none !important;
  -moz-appearance: none !important;
  -webkit-appearance: none !important;
  -o-appearance: none !important;
  -ms-appearance: none !important;
  margin: 0; }

input:focus, select:focus, textarea:focus {
  outline: none;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -o-box-shadow: none !important;
  -ms-box-shadow: none !important; }

input[type=checkbox] {
  appearance: checkbox !important;
  -moz-appearance: checkbox !important;
  -webkit-appearance: checkbox !important;
  -o-appearance: checkbox !important;
  -ms-appearance: checkbox !important; }

input[type=radio] {
  appearance: radio !important;
  -moz-appearance: radio !important;
  -webkit-appearance: radio !important;
  -o-appearance: radio !important;
  -ms-appearance: radio !important; }

img {
  max-width: 100%;
  height: auto; }

figure {
  margin: 0; }

p {
  margin-bottom: 0px;
  font-size: 15px;
  color: #777; }

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
  margin-bottom: 40px; }

.clear {
  clear: both; }


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
  -ms-align-items: center; }

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
  -ms-align-items: center; }

.position-center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%); }

.signup-content {
  background: #fff;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -o-border-radius: 10px;
  -ms-border-radius: 10px;
  padding: 50px 85px; }

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
  color: #222; }
  .form-input::-webkit-input-placeholder {
    color: #999; }
  .form-input::-moz-placeholder {
    color: #999; }
  .form-input:-ms-input-placeholder {
    color: #999; }
  .form-input:-moz-placeholder {
    color: #999; }
  .form-input::-webkit-input-placeholder {
    font-weight: 500; }
  .form-input::-moz-placeholder {
    font-weight: 500; }
  .form-input:-ms-input-placeholder {
    font-weight: 500; }
  .form-input:-moz-placeholder {
    font-weight: 500; }
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
    background-clip: content-box, border-box; }
    .form-input:focus::-webkit-input-placeholder {
      color: #222; }
    .form-input:focus::-moz-placeholder {
      color: #222; }
    .form-input:focus:-ms-input-placeholder {
      color: #222; }
    .form-input:focus:-moz-placeholder {
      color: #222; }

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
  background-image: linear-gradient(to left, #74ebd5, #9face6); }

input[type=checkbox]:not(old) {
  width: 2em;
  margin: 0;
  padding: 0;
  font-size: 1em;
  display: none; }

input[type=checkbox]:not(old) + label {
  display: inline-block;
  margin-top: 7px;
  margin-bottom: 25px; }

input[type=checkbox]:not(old) + label > span {
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
  vertical-align: bottom; }

input[type=checkbox]:not(old):checked + label > span {
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white); }

input[type=checkbox]:not(old):checked + label > span:before {
  content: '\f26b';
  display: block;
  color: #222;
  font-size: 11px;
  line-height: 1.2;
  text-align: center;
  font-family: 'Material-Design-Iconic-Font';
  font-weight: bold; }

.label-agree-term {
  font-size: 12px;
  font-weight: 600;
  color: #555; }

.term-service {
  color: #555; }

.loginhere {
  color: #555;
  font-weight: 500;
  text-align: center;
  margin-top: 91px;
  margin-bottom: 5px; }

.loginhere-link {
  font-weight: 700;
  color: #222; }

.field-icon {
  float: right;
  margin-right: 17px;
  margin-top: -32px;
  position: relative;
  z-index: 2;
  color: #555; }

@media screen and (max-width: 768px) {
  .container {
    width: calc(100% - 40px);
    max-width: 100%; } }
@media screen and (max-width: 480px) {
  .signup-content {
    padding: 50px 25px; } }

/*# sourceMappingURL=style.css.map */

    </style>
</head>

<body>

    <?php
    
        require 'connect.php';
        $id = $_GET['id'];
        $requet = "SELECT * FROM `employe` WHERE id = '$id'" ;
        $query = mysqli_query($conn, $requet);               
        while($rows = mysqli_fetch_array($query)) {
          $nom = $rows['nom'];
          $prenom = $rows['prenom'];
          $daten = $rows['daten'];
          $dateem = $rows['dateem'];
          $gen = $rows['gen'];
          $num = $rows['num'];
          $email = $rows['email'];
          $fc = $rows['fonction'];
          
        }
        $requet1 = "SELECT * FROM `salaire` WHERE id = '$id'" ;
        $query1 = mysqli_query($conn, $requet1);               
        
        if(mysqli_num_rows($query1) > 0){
          while($row = mysqli_fetch_array($query1)) {
          $salaire = $row['salaire'];
        }
        }else{
          $salaire = null;
        }


        if(isset($_POST['submit'])){
          $nom = $_POST['nom'];
          $prenom = $_POST['prenom'];
          $daten = $_POST['daten'];
          $dateem = $_POST['dateem'];
          $gen = $_POST['gen'];
          $num = $_POST['num'];
          $email = $_POST['email']; 
          $salaire = $_POST['salaire'];
            
            // checking empty fields    
                //updating the table
                $requete = "UPDATE `employe` SET `nom`='$nom',`prenom`='$prenom',`daten`='$daten',`dateem`='$dateem',`gen`='$gen',`num`='$num',`email`='$email' WHERE id = '$id'";
                $result = mysqli_query($conn, $requete);
               
                
                if(mysqli_num_rows($query1) > 0){
                  $requet2 = "UPDATE `salaire` SET `salaire`='$salaire' WHERE id = '$id'" ;
                  $query2 = mysqli_query($conn, $requet2); 
                }else{
                  $requet2 = "INSERT INTO `salaire`(`id`, `salaire`) VALUES ('$id','$salaire')" ;
                  $query2 = mysqli_query($conn, $requet2); 
                }
                //redirectig to the display page. In our case, it is index.php
                ?>
                <script>
                  alert("L'employé a étais modifier");
                </script>
                <?php
                
        }
        
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

                <li id="employe">
                    <a id="employe1" href="employe.php">
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
                    <i class="fa-solid fa-bars" style="color :black"></i>
                </div>
                <div>
                    <h1 class="titre">Modifier un employé</h1>
                </div>

                <div class="user">
                    <img src="assets/imgs/medicale.png" alt="">
                </div>
            </div>
            <!-- ======================= formulaire================== -->

            <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="#" id="signup-form" class="signup-form" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); -webkit-border-radius: 20px 20px 20px 20px; -moz-border-radius: 20px 20px 20px 20px; border-radius: 20px 20px 20px 20px; width :60%; justify-content: center; margin-left: 21%; padding-top: 18px;">
                        <h2 class="form-title">Formulaire</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nom" id="name" placeholder="Nom" value= <?php echo $nom ?> required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="prenom" id="Prenom" placeholder="Prénom" value= <?php echo $prenom ?> required/>
                        </div>
                        <div class="form-group">
                          <label for="daten">Date de naissance :</label>
                            <input type="date" class="form-input" name="daten" id="daten" placeholder="Date de naissance" value= <?php echo $daten ?> required/>
                        </div>
                        <div class="form-group">
                          <label for="dateem">Date d'embauche :</label>
                            <input type="date" class="form-input" name="dateem" id="dateem" placeholder="Date d'embauche" value= <?php echo $dateem ?> required/>
                        </div>
                        <?php
                          if($gen == 'Homme' ){
                            ?>
                            <span class="dropdown-el" style="margin-left : 25%;">
                        <input type="radio" name="gen" value="Homme" id="sort-relevance" style="margin: 0 10px 0 10px;" checked="checked"><label for="sort-relevance">Homme</label>
                        <input type="radio" name="gen" value="Femme" id="sort-best" style="margin: 0 10px 0 30px;"><label for="sort-best">Femme</label>
                         </span>
                         <?php
                          }else if($gen == 'Femme'){
                            ?>
                            <span class="dropdown-el" style="margin-left : 25%;">
                        <input type="radio" name="gen" value="Homme" id="sort-relevance" style="margin: 0 10px 0 10px;"><label for="sort-relevance">Homme</label>
                        <input type="radio" name="gen" value="Femme" id="sort-best" style="margin: 0 10px 0 30px;"  checked="checked"><label for="sort-best">Femme</label>
                         </span>
                         <?php
                          }else{
                            ?>
                            <span class="dropdown-el" style="margin-left : 25%;">
                        <input type="radio" name="gen" value="Homme" id="sort-relevance" style="margin: 0 10px 0 10px;"><label for="sort-relevance">Homme</label>
                        <input type="radio" name="gen" value="Femme" id="sort-best" style="margin: 0 10px 0 150px;"><label for="sort-best">Femme</label>
                         </span>
                            <?php
                          }
                        ?>
              <br><br>
                        <div class="form-group">
                            <input type="number" class="form-input" name="num" id="num" placeholder="Numéro" value= <?php echo $num ?> required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" value= <?php echo $email ?> required/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="salaire" id="salaire" placeholder="Salaire" value= <?php echo $salaire ?> required/>
                        </div>
                        <div class="list-choice">
                                <div class="list-choice-title">Fonction</div>
                                <div class="list-choice-objects">
                                  <?php
                                  if($fc == 'Infirmier'){
                                  ?>
                                    <label>
                                        <input type="radio" name="fc" value="Infirmier" checked/> <span>Infirmier</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="fc" value="Médecin" /> <span>Médecin</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="fc" value="Administrateur" /> <span>Administrateur</span>
                                    </label>
                                    <?php
                                    ini_set('display_errors', 0);
                                  }elseif($fc == 'Médecin'){
                                    ?>
                                      <label>
                                          <input type="radio" name="fc" value="Infirmier"/> <span>Infirmier</span>
                                      </label>
                                      <label>
                                          <input type="radio" name="fc" value="Médecin" checked/> <span>Médecin</span>
                                      </label>
                                      <label>
                                          <input type="radio" name="fc" value="Administrateur" /> <span>Administrateur</span>
                                      </label>
                                      <?php
                                  }elseif($fc == 'Administrateur'){
                                    ?>
                                    <label>
                                          <input type="radio" name="fc" value="Infirmier"/> <span>Infirmier</span>
                                      </label>
                                      <label>
                                          <input type="radio" name="fc" value="Médecin"/> <span>Médecin</span>
                                      </label>
                                      <label>
                                          <input type="radio" name="fc" value="Administrateur" checked /> <span>Administrateur</span>
                                      </label>
                                    <?php
                                  }
                                    ?>
                                </div>
                            </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Modifier"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

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
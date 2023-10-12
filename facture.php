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
    <link rel="shortcut icon" href="assets/imgs/favicon-310x310.png" type="image/x-icon" sizes="10000x10000">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js" ></script>
    <title>Document</title>
    <style>
        #facture{
       height:600px;
       width: 845px;
      
        
        }
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
        
        header {
  padding: 16px;
  position: relative;
  color: #888;
}
header h1,
header h2 {
  font-weight: 200;
  margin: 0;
}
header h1 {
  font-size: 27pt;
  letter-spacing: 4px;
}
footer {
  padding: 16px;
}
footer p {
  font-size: 9pt;
  margin: 0;
  font-family: 'Nunito';
  color: #777;
}
section,
table {
  padding: 8px 0;
  position: relative;
}
dl {
  margin: 0;
  letter-spacing: -4px;
}
dl dt,
dl dd {
  letter-spacing: normal;
  display: inline-block;
  margin: 0;
  padding: 0px 6px;
  vertical-align: top;
}
dl.bloc > dt,
dl:not(.bloc) dt:not(:last-of-type),
dl:not(.bloc) dd:not(:last-of-type) {
  border-bottom: 1px solid #ddd;
}
dl:not(.bloc) dt {
  border-right: 1px solid #ddd;
}
dt {
  width: 49%;
  text-align: right;
  letter-spacing: 1px !important;
  overflow: hidden;
}
dd {
  width: 49%;
  text-align: left;
}
dd,
tr>td {
  font-family: 'Nunito';
}
section.flex {
  display: flex;
  flex-flow: row wrap;
  padding: 8px 16px;
  justify-content: space-around;
}
dl.bloc {
  padding: 0;
  flex: 1;
  vertical-align: top;
  min-width: 240px;
  margin: 0 8px 8px;
}
dl.bloc>dt {
  text-align: left;
  width: 100%;
  margin-top: 12px;
}
dl.bloc>dd {
  text-align: left;
  width: 100%;
  padding: 8px 0 5px 16px;
  line-height: 1.25;
}
dl.bloc>dd>dl dt {
  width: 33%;
}
dl.bloc>dd>dl dd {
  width: 60%;
}
dl.bloc dl {
  margin-top: 12px;
}
dl.bloc dd {
  font-size: 11pt;
}
table {
  width: 100%;
  padding: 0;
  border-spacing: 0px;
  text-align: center;
}
table tr {
  margin: 0;
  padding: 0;
  background: #fdfdfd;
  border-right: 1px solid #ddd;
  width: 100%;
}
table tr td,
table tr th {
  border: 1px solid #e3e3e3;
  border-top: 1px solid #fff;
  border-left-color: #fff;
  font-size: 11pt;
  background: #fdfdfd;
}
table thead th {
  background: #e9e9e9;
  background: linear-gradient(to bottom, #f9f9f9, #e9e9e9) !important;
  font-weight: 300;
  letter-spacing: 1px;
  padding: 15px 0 5px;
/*&:not(:last-child)*/
  border: none !important;
}
table tbody tr:last-child td {
  border-bottom: 1px solid #ddd;
}
table tbody td {
  min-width: 75px;
  padding: 3px 6px;
  line-height: 1.25;
}
table tfoot tr td {
/*border 1px solid #e3e3e3
      border-top 1px solid white
      border-left-color #fff*/
  height: 40px;
  padding: 6px 0 0;
  color: #000;
  text-shadow: 0 0 1px rgba(0,0,0,0.25);
  font-family: 'Cambria', 'Raleway', sans-serif;
  font-weight: 400;
  letter-spacing: 1px;
}
table tfoot tr td:first-child {
  font-style: italic;
  color: #997b7b;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
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
$requet1 = "SELECT `id`,`nom`, `prenom` FROM `employe`";
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

            <li>
                <a href="banque.php">
                    <span class="icon">
                        <i class="fa-solid fa-heart-circle-plus"></i>
                    </span>
                    <span class="title">Banque de Sang</span>
                </a>
            </li>
            <li id="employe">
                <a id="employe1" href="#">
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
                <h1 class="titre">Facture</h1>
            </div>

            <div class="user">
                <img src="assets/imgs/medicale.png" alt="">
            </div>
        </div>

        <div class="room">
            <form method="POST" style="display:flex ;flex-direction: column;">
                <div>
                    <div style="display: flex;">
                        <div class="list-choice">
                            <div class="list-choice-title">Choisir un patient</div>
                            <div class="list-choice-objects" style="z-index : 1;">

                                <?php
                                ini_set('display_errors', 0);
                                $requete = "SELECT * FROM `patient`";
                                $queryy = mysqli_query($conn, $requete);
                                $i=0;
                                while ($rows = mysqli_fetch_assoc($queryy)) {
                                    $i++;
                                    $id = $rows['id'];
                                ?>
                                        <label>
                                            <input type="radio" class="pt" name="pt" id="pt" value=<?php echo $rows['id']; ?> data-num=<?php echo $rows['num'];  ?> data-email=<?php echo $rows['email']; ?> data-addr="<?php echo"pt"; echo $i; ?>" data-id=<?php echo $rows['id']; ?>/> <span><?php echo $rows['nom'];
                                                                                                                    echo " ";
                                                                                                                    echo $rows['prenom']; ?></span>
                                        </label>
                                        <p id=<?php echo"pt";  echo $i; ?> hidden><?php echo $rows['addr']; ?></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="list-choice">
                            <div class="form-group">
                                <input type="text" class="form-input" name="service" id="service" placeholder="Service" required />
                            </div>
                        </div>
                    
                    <div class="list-choice">
                        <div class="form-group">
                            <input type="number" class="form-input" name="prix" id="prix" placeholder="Prix" required />
                        </div>
                    </div>
                </div>
        </div>
        <div>
            <div class="form-group">
                <input type="button" name="submit" id="submit" class="form-submit" value="Ajouter" />
            </div>
        </div>
    </div>
    </form>

    <div id="facture" style="  margin-left:10%;">
    <header>
    <h1>FACTURE
      <h2>Clinique One Health</h2>
    </h1>
  </header>
  <section class="flex">
    <dl>
      <dt>Facture #</dt>
      <dd id="ref"><?php
      require 'connect.php';
       $n = mt_rand(1,16000);
       $requet = "SELECT `num` FROM `facture` WHERE num = '$n'";
      $query = mysqli_query($conn, $requet);
       while(mysqli_num_rows($query) > 0){
        $n = mt_rand(1,16000);
       }
      echo $n ?></dd>
      <dt>Date de facturation</dt>
      <dd id="date"></dd>
    </dl>
  </section>
  <section class="flex">
    <dl class="bloc">
      <dt>Facturé à:</dt>
      <dd>
          <span id="addr">
        </span>
        <dl>
          <dt>Patient</dt>
          <dd id="patient"></dd>
          <dt>Téléphone</dt>
          <dd id="num"></dd>
          <dt>Courriel</dt>
          <dd id="email"></dd>
        </dl>
      </dd>
    </dl>
    <dl class="bloc">
      <dt>Services:</dt>
      <dd id="ser"></dd>
    </dl>
  </section>
  <table>
    <thead>
      <tr> 
        <th>Service</th>
        <th  colspan="2">Montant</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
    <tfoot>
      <tr> 
        <td></td>
        <td>Total:</td>
        <td><span id="total"></span>&#8202;DA</td>
      </tr>
    </tfoot>
  </table>
  <div style="position: relative;"> ​<button class="btn" onclick="generatePDF()" style="margin-left : 50%; margin-top: 25%;position: absolute;"><i class="fa fa-download"></i> Enregistrer</button></div>
</div>




</div>

</div>

<!-- ======================= script ================== -->
<script src="assets/js/main.js"></script>
<script src="js/jquery-3.6.0.min.map"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(function(){
      $('#submit').click(function(p = 0){
          var s = $('#service').val();
          var m = $('#prix').val();
          var nom = $("input[name='pt']:checked").parent('label').text();
          var ser = $("input[name='service']").val();
          var num = $("input[name='pt']:checked").data("num");
          var email = $("input[name='pt']:checked").data("email");
          var id = $("input[name='pt']:checked").data('addr');
          if(s != '' || m != ''){
          var str = "#"+id;
          var addr = $(str).text();
          document.getElementById("addr").innerHTML = addr;
          const text = document.createTextNode("-"+ser+".");
          const pNode = document.getElementById("ser");
          var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = dd + '/' + mm + '/' + yyyy;
document.getElementById("date").innerHTML = today;

pNode.appendChild(text);
linebreak = document.createElement("br");
pNode.appendChild(linebreak);
          var p = p + m;
          $('input[name=pt]').attr("disabled",true);
  var sum = parseFloat(m);
  $(".tot").each(function(){
    sum += parseFloat($(this).text());
  });
  $('#total').text(sum);

          document.getElementById("patient").innerHTML = nom;
          document.getElementById("num").innerHTML = "+213"+num;
          document.getElementById("email").innerHTML = email;
          

          var tr = '<tr><td>'+ s +'</td><td colspan="2"><span class="tot">'+ m.toString() +' DA</span></td></tr>';
          $('tbody').append(tr);
          document.getElementById("prix").value = "";
          document.getElementById("service").value = "";
        }
      });
      
  })
</script>

<script>
            async function generatePDF() {
         
                //telechargement
                var downloading = document.getElementById("facture");
                var doc = new jsPDF('l', 'pt');
          
                await html2canvas(downloading, { width: 2100}).then((canvas) => {
                //convertir vers pdf 
                    doc.addImage(canvas.toDataURL("image/png"), 'PNG', 0, 0,2000,600);
                })
          
                doc.save("Document.pdf");

                var rand = $('#ref').text();
                var mt = $('#total').text();
                var idp = $("input[name='pt']:checked").data('id');
                if( rand != '' || mt != '' || idp != ''){
                $.ajax({
                url: "ajouterf.php",
                method:"POST",
                data:{rand:rand, mt:mt, idp:idp}
            });
        }
            }
          </script>
</body>

</html>
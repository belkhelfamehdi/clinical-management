<head>
    <style>
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
    </style>
</head>

<body>
<?php
require 'connect.php';
    $np = $_POST['np'];
    $pp = $_POST['pp'];
    $drdv = $_POST['drdv'];
    $hrdv = $_POST['hrdv'];
    $m = $_POST['m'];
    $id = $_POST['id'];
    $requet = "SELECT * FROM `employe` WHERE id = '$id'";
    $query = mysqli_query($conn, $requet);
    while($rows = mysqli_fetch_assoc($query)){
        $nm = $rows['nom'];
        $pm = $rows['prenom'];
    }
?>
<div id="facture" style="  margin-left:10%; width: 50%;">
    <header>
    <h1>Rendez-vous
      <h2>Clinique One Health</h2>
    </h1>
  </header>
  <section class="flex">
    <dl style="display: flex;">
        
      <dt>Date de facturation</dt>
      <dd id="date"><?php  echo $drdv." à ".$hrdv ?></dd>
    </dl>
  </section>
  <section class="flex">
    <dl class="bloc">
      <dt>Email: Onehealth.contact@gmail.com</dt>
      <dd>
          <span id="addr">
            
        </span>
        <dl>
          <dt>Patient</dt>
          <dd id="patient"><?php  echo $np." ".$pp ?></dd>
          <dt>Médecin traitant</dt>
          <dd id="num"><?php  echo $nm." ".$pm ?></dd>
          <dt>Motif</dt>
          <dd id="email"><?php ini_set('display_errors', 0); echo $m; ?></dd>
        </dl>
      </dd>
    </dl>
    <dl class="bloc">
      <dt>Téléphone: +213#########<dt>
      <dd id="ser"></dd>
    </dl>
  </section>
  
  <div style="position: relative;"> ​<button class="btn" onclick="generatePDF()" style="margin-left : 50%; margin-top: 25%;position: absolute;"><i class="fa fa-download"></i> Enregistrer</button></div>
</div>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js" ></script>
<script>
    async function generatePDF() {
         
         //telechargement
         var downloading = document.getElementById("facture");
         var doc = new jsPDF('l', 'pt');
   
         await html2canvas(downloading, { width: 2000}).then((canvas) => {
         //convertir vers pdf 
             doc.addImage(canvas.toDataURL("image/png"), 'PNG', 0, 0,2000,400);
         })
   
         doc.save("Document.pdf");
        }
</script>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<head>
	<title>Segitiga</title>
</head>
<body>
	<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.html">Back</a>
    </li>
   </ul>

</nav>
 <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 align="center">Representasi Kurva Segitiga</h1>
          </div>
        </div>
       	 <div class="row">
        <div class="col-sm-8">
			        	<p align="justify" class="text_content" style="padding-left:  20px;padding-right: 50px">Represetasi Kurva Segitiga, pemetaan input ke derajat keanggotaannya digambarkan dengan bentuk segitiga dimana pada dasarnya bentuk segitiga tersebut gabungan antara 2 garis (linear). Nilai-nilai di sekitar b memiliki derajat keanggotaan turun yang cukup tajam (menjahui 1).
						Representasi fungsi keanggotaan untuk kurva segitiga adalah sebagai berikut:</p>
			<br>
				<center><img src="5.jpg">
			</br><br>
			<p><i>Representasi Linear Segitiga</i></p></center>
			<br>
				<center><img src="6.jpg">
			</br><br>
			<p><i>Rumus Representasi Linear Segitiga</i></p></center>
			<h4 style="padding-left : 50px"><b>Keterangan : </b></h4>
			<h5 style="padding-left: 80px">a = nilai domain yang mempunyai derajat keanggotaan nol</h5>
			<h5 style="padding-left: 80px">b = nilai domain yang mempunyai derajat keanggotaan satu</h5>
			<h5 style="padding-left: 80px">c = nilai domain terbesar yang mempunyai derajat keanggotaan nol</h5>
			<h5 style="padding-left: 80px">x = nilai input yang akan di ubah ke dalam bilangan fuzzy</h5>
        </div>
         <div class="col-sm-4">
         	<h3> Mulai Perhitungan </h3>
			 <form action="segitiga.php" method="post" style="padding-bottom: 30px">
			  <div class="row">
			    <div class="col-25">
			      <label for="nilaia">Nilai a </label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="nilaia" name="nilaia" placeholder="masukan nilai a..">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
			      <label for="nilaib">Nilai b </label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="nilaib" name="nilaib" placeholder="masukan nilai b..">
			    </div>
			  </div>
			   <div class="row">
			    <div class="col-25">
			      <label for="nilaic">Nilai c </label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="nilaic" name="nilaic" placeholder="masukan nilai c..">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
			      <label for="nilaix">Nilai x </label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="nilaix" name="nilaix" placeholder="masukan nilai x..">
			    </div>
			  </div>
			  <div class="row">
			    <input type="submit" name ="submit" value="Hitung">
			  </div>
			  </form>
			  <div class="row" style="border: solid;width: 500px;height: 300px ;padding:30px">
			  	<br>
				<?php
				if(isset($_POST['submit'])){
					$a = $_POST['nilaia'];
					$b = $_POST['nilaib'];
					$c = $_POST['nilaic'];
					$x = $_POST['nilaix'];
					
					if ($x <= $a || $x >= $c) {
						echo "<br><h5>Dikarenakan Nilai X lebih kecil dari/sama dengan  nilai A atau Nilai X lebih besar dari/ sama dengan nilai C<br>";
						echo "Maka Hasilnya adalah 0</h5>";
					}
					elseif ($a <= $x && $x <= $b) {
						$hitung = ($x - $a)/($b - $a);
						echo "<br><h5>Dikarenakan Nilai X berada diantara nilai A dan  nilai B <br>";
						echo "maka rumus yang digunakan adalah : <br>(x-a)/(b-a)<br>";
						echo "<h5>dari hasil perhitungan ,didapatkan hasil sebagai berikut :<br>";
						echo "hasil = ($x - $a) / ($b - $a)<br> ";
						echo "hasil = $hitung<br></h5>";
					}
					else{
						$hitung = ($c - $x)/($c - $b);
						echo "<br><h5>Dikarenakan Nilai X berada diantara nilai B dan  nilai C <br>";
						echo "maka rumus yang digunakan adalah : <br>(c-x)/(c-b)<br>";
						echo "<h5>dari hasil perhitungan ,didapatkan hasil sebagai berikut :<br>";
						echo "hasil = ($c - $x) / ($c - $b)<br> ";
						echo "hasil = $hitung<br></h5>";
					}
					
				}
				?>
			  </div>
        </div>
    </div>
</body>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
 .text_content{
                text-indent: 100px;

            }
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</html>
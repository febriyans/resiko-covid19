<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>covid-19</title>
	<link rel="shortcut icon"  href="img/icon.png">

  <!--Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> 
 	
 	<style type="text/css">
 		*{margin: 0;padding: 0;}
 		.box{
 			width: 100%;
 		}
 		.box img{
 			width: 100%;
 			position: relative;
 			z-index: 1;
 			top: 0px;
 		}
 		.box p{
 			position: absolute;
 			top: 10%;
 			left: 50%;
 			z-index: 2;
 			color: black;
 			text-align: center;
 			font-size: 20px;
 			font-family: Arial, Halveitca, Sans-serif;
 			color: white;
 		}

 		

 		.textbox{
			width: 15%;
			margin-bottom: 2%;
			overflow: hidden;
			font-size: 20px;
			margin-top: 8px;
			color: #e9415a;
			border-bottom:2px solid #e9415a;
		}
 		input[type=text]{
	width: 100%;
	padding: 8px;
	background-color: transparent;
	border:none;
	color:#e9415a;
}
 	</style>
</head>
<body>
	<div class="box">
		<img src="img/bg.png">
	</div>
<div class="container-fluid" style="margin-top:3%; ">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        	<h1 class="card-title" style="font-size: 50px;">Resiko terkena covid-19</h1>
                        </div>
                        <div class="card-body">
		<form action="hasil.php" method="POST">
		<div class="kotak">
			<div class="data-box">
				<div class="textbox">
					<input type="text" placeholder="Name" name="nama" value="" required>
            	</div>
            </div>
    	</div>
		<table class="table table-border">	
			<thead>
				<tr class="table-dark">	
					<th style="width: 3%;">NO</th>
					<th>KEGIATAN</th>
					<th style="width: 10%; text-align: center;">IYA</th>
					<th style="width: 10%; text-align: center;">TIDAK</th>

				</tr>
			</thead>
			<tbody>	
				<tr>	
					<th>1</th>
					<td>Pergi keluar rumah</td>		
					<td align="center"><input type="radio" name="a" value="1" required> <label for="a">Y</label></td>
					<td align="center"><input type="radio" name="a" value="0"required> <label for="a">X</label></td>
				</tr>
				<tr>	
					<th>2</th>
					<td>Menggunakan transportasi umum</td>		
					<td align="center"><input type="radio" name="b" value="1"required> <label for="b">Y</label></td>
					<td align="center"><input type="radio" name="b" value="0"required> <label for="b">X</label></td>
				</tr>
				<tr>	
					<th>3</th>
					<td>Tidak memakai masker saat berkumpul dengan orang lain</td>		
					<td align="center"><input type="radio" name="c" value="1"required> <label for="c">Y</label></td>
					<td align="center"><input type="radio" name="c" value="0"required> <label for="c">X</label></td>
				</tr>
				<tr>	
					<th>4</th>
					<td>Berjabat tangan dengan orang lain</td>		
					<td align="center"><input type="radio" name="d" value="1"required> <label for="d">Y</label></td>
					<td align="center"><input type="radio" name="d" value="0"required> <label for="d">X</label></td>
				</tr>
				<tr>	
					<th>5</th>
					<td>tidak membersihkan tangan selesai memegang sesuatu</td>		
					<td align="center"><input type="radio" name="e" value="1"required> <label for="e">Y</label></td>
					<td align="center"><input type="radio" name="e" value="0"required> <label for="e">X</label></td>
				</tr>
				<tr>	
					<th>6</th>
					<td>Menyentuh barang yang juga disentuh orang lain</td>		
					<td align="center"><input type="radio" name="f" value="1"required> <label for="f">Y</label></td>
					<td align="center"><input type="radio" name="f" value="0"required> <label for="f">X</label></td>
				</tr>
				<tr>	
					<th>7</th>
					<td>Tidak menjaga jarang dengan orang lain</td>		
					<td align="center"><input type="radio" name="g" value="1"required> <label for="g">Y</label></td>
					<td align="center"><input type="radio" name="g" value="0"required> <label for="g">X</label></td>
				</tr>
				<tr>	
					<th>8</th>
					<td>Makan diluar rumah</td>		
					<td align="center"><input type="radio" name="h" value="1"required> <label for="h">Y</label></td>
					<td align="center"><input type="radio" name="h" value="0"required> <label for="h">X</label></td>
				</tr>
				<tr>	
					<th>9</th>
					<td>Tidak minum air hangan dan mencucitangan dengan saat saat tiba di tujuan</td>		
					<td align="center"><input type="radio" name="i" value="1"required > <label for="i">Y</label></td>
					<td align="center"><input type="radio" name="i" value="0"required > <label for="i">X</label></td>
				</tr>
				<tr>	
					<th>10</th>
					<td>Berada di wilayah keluarga tempat pasien tertular</td>		
					<td align="center"><input type="radio" name="j" value="1"required > <label for="j">Y</label></td>
					<td align="center"><input type="radio" name="j" value="0"required > <label for="j">X</label></td>
				</tr>
				<tr>	
					<th>11</th>
					<td>Tidak menyediakan hand sanitizer</td>		
					<td align="center"><input type="radio" name="k" value="1"required > <label for="k">Y</label></td>
					<td align="center"><input type="radio" name="k" value="0"required > <label for="k">X</label></td>
				</tr>
				<tr>	
					<th>12</th>
					<td>Tidak mencuci tangan dengan sabun setelah tiba di rumah</td>		
					<td align="center"><input type="radio" name="l" value="1"required > <label for="l">Y</label></td>
					<td align="center"><input type="radio" name="l" value="0"required > <label for="l">X</label></td>
				</tr>
				<tr>	
					<th>13</th>
					<td>Tidak menyediakan: antiseptic, masker, sabun antiseptic, bagi keluarga di rumah</td>		
					<td align="center"><input type="radio" name="m" value="1" required> <label for="m">Y</label></td>
					<td align="center"><input type="radio" name="m" value="0" required> <label for="m">X</label></td>
				</tr>
				<tr>	
					<th>14</th>
					<td>Tidak merendam pakaian bekas pakai di luar rumah dengan air panas/sabun</td>		
					<td align="center"><input type="radio" name="n" value="1" required> <label for="n">Y</label></td>
					<td align="center"><input type="radio" name="n" value="0" > <label for="n">X</label></td>
				</tr>
				<tr>	
					<th>15</th>
					<td>Tidak segera mandi keramas saat tiba di rumah</td>		
					<td align="center"><input type="radio" name="o" value="1" required> <label for="o">Y</label></td>
					<td align="center"><input type="radio" name="o" value="0" required> <label for="o">X</label></td>
				</tr>
				<tr>	
					<th>16</th>
					<td>Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah</td>		
					<td align="center"><input type="radio" name="p" value="1" required> <label for="p">Y</label></td>
					<td align="center"><input type="radio" name="p" value="0" required> <label for="p">X</label></td>
				</tr>
				<tr>	
					<th>17</th>
					<td>Tidak terkena cahaya matahari selama 15 menit</td>		
					<td align="center"><input type="radio" name="q" value="1"  required> <label for="q">Y</label></td>
					<td align="center"><input type="radio" name="q" value="0" required> <label for="q">X</label></td>
				</tr>
				<tr>	
					<th>18</th>
					<td>Tidak berolah raga minimal 30 menit setiap hari</td>		
					<td align="center"><input type="radio" name="r" value="1" required> <label for="r">Y</label></td>
					<td align="center"><input type="radio" name="r" value="0" required> <label for="r">X</label></td>
				</tr>
				<tr>	
					<th>19</th>
					<td>Jarang minum vitamin C & E, dan kurang tidur</td>		
					<td align="center"><input type="radio" name="s" value="1" required> <label for="s">Y</label></td>
					<td align="center"><input type="radio" name="s" value="0" required> <label for="s">X</label></td>
				</tr>
				<tr>	
					<th>20</th>
					<td>Usia diatas 60 tahun</td>		
					<td align="center"><input type="radio" name="t" value="1" required> <label for="t">Y</label></td>
					<td align="center"><input type="radio" name="t" value="0" required> <label for="t">X</label></td>
				</tr>
				<tr>	
					<th>21</th>
					<td>Saya mempunyai penyakit: jantung/diabetes/gangguan pernafasan kronik</td>		
					<td align="center"><input type="radio" name="u" value="1" required> <label for="u">Y</label></td>
					<td align="center"><input type="radio" name="u" value="0" required> <label for="u">X</label></td>
				</tr>
				
			</tbody>
		</table>
		<button type="submit" class="btn btn-outline-primary" style="left: 50%">HASIL</button>
	</form>
	</div>
 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0-pre
    </div>
    <strong>Copyright &copy; 2020 <a href="http://www.instagram.com/p/Brt1bt9Fjj7/?igshid=79xow2dlvr8s">Febri</a>.</strong> All rights
    reserved.
  </footer>
	<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>

</body>
</html>
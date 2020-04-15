<!DOCTYPE html>
<html>
<head>
	<title>COVID-19</title>
	<link rel="shortcut icon"  href="img/icon.png">
	 <!--Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> 
	<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

</head>
	<?php

		$hasil = $_POST["a"] += $_POST["b"] += $_POST["c"] += $_POST["d"] += $_POST["e"] += $_POST["f"] += $_POST["g"] += $_POST["h"] += $_POST["i"] += $_POST["j"] += $_POST["k"] += $_POST["l"] += $_POST["m"] += $_POST["n"] += $_POST["o"] += $_POST["p"] += $_POST["q"] += $_POST["r"] += $_POST["s"] += $_POST["t"] += $_POST["u"] ;

		if ($hasil >= 15) {
			$resiko = "TINGGI";
		}elseif ($hasil >= 8) {
			$resiko = "SEDANG";
		}elseif ($hasil >=0) {
			$resiko = "RENDAH";
		}



		 $con = mysqli_connect("localhost","id13292531_root","d=J9UGKZ(JJR=7mM","id13292531_covid");
		 $nama = $_POST["nama"];
		 $sqlstr = "INSERT into resiko (nama,score) value ('$nama','$hasil')";
		 $kirim = mysqli_query($con,$sqlstr);

	?>
	<body>
		
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    HAI <?php echo $nama; ?>
                </div>
                    <p class="title m-b-sm"> <?php echo $resiko; ?> kemungkinan anda tertular covid-19 </p>

                <div class="links">
                   <p>click <a href="index.php">disini</a> untuk mulai lagi</p>
                </div>
            </div>
        </div>
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
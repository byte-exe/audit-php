<!DOCTYPE html>
<html>
<head>
	<title>.:kuisioner:.</title>
	 <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="./admin/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<style>
body #halaman_awal { width: 1000px; height: 100px; margin: auto; background-color:green; }	
</style>
<body style="background-color: yellow">
<div id="halaman_awal">
	<h2 style="font-weight: bold;text-align: center;padding-top: 10px;font-size: 50px; font-family: arial black">PERHITUNGAN COBIT</h2>
	<nav class="navbar navbar-default">
		<ul  class="nav navbar-nav" style="margin-left: 300px;margin-top: 5px;">
			
			<a href="index.php?halaman=input_pertanyaan" class="btn btn-primary">Input Pertanyaan</a>
			<a href="index.php?halaman=input_nilai" class="btn btn-primary">Proses Perhitungan</a>
			<a href="index.php?halaman=laporan" class="btn btn-primary">Laporan</a>
			<a href="../index.php" class="btn btn-primary">Logout</a>

		</ul>
	</nav>
</div>
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="width: 1000px;height: 1000px;margin: auto;padding-top: 50px;background-color:white" >
            <div id="page-inner">
                <?php
   if (isset($_GET['halaman']))
   {
    if($_GET['halaman']=="input_pertanyaan")
    {
      include 'input_pertanyaan.php';
    }
    elseif ($_GET['halaman']=="input_nilai") 
    {
      include 'input_nilai.php';
    }
    elseif ($_GET['halaman']=='laporan')
    {
      include 'laporan.php';
    }elseif ($_GET['halaman']=='home')
    {
      include 'home.php';
    }elseif ($_GET['halaman']=='hapus_pertanyaan')
    {
      include 'hapus_pertanyaan.php';
    }elseif ($_GET['halaman']=='hapus_nilai')
    {
      include 'hapus_nilai.php';
    }elseif ($_GET['halaman']=='list_nilai')
    {
      include 'list_nilai.php';
    }elseif ($_GET['halaman']=='list_pertanyaan')
    {
      include 'list_pertanyaan.php';
    }elseif ($_GET['halaman']=='laporan')
    {
      include 'laporan.php';
    }


}


?>   

            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
</body>
</html>
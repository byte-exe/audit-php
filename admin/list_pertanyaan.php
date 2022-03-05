<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

<h2>INFORMASI PERTANYAAN</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th style="font-family: cambria">Id Pertanyaan</th>
			<th style="font-family: cambria">Pertanyaan</th>
			<th style="font-family: cambria">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php include 'koneksi.php'; ?>
		<?php $ambil=$kon->query("SELECT * FROM pertanyaan");  ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td style="font-family: cambria"><?php echo $pecah['id']; ?></td>
				<td style="font-family: cambria"><?php echo $pecah['pertanyaan']; ?></td>
	<td>
					<a href="index.php?halaman=hapus_pertanyaan&id=<?php echo $pecah ['id']?>" class="btn btn-danger">Hapus</a>
					<a href="index.php?halaman=input_pertanyaan" class="btn btn-primary" >Tambah Data</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

</body>
</html>
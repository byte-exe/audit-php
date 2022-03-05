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

<h2 style="text-align: center;font-weight: bold;">CHECK KUISIONER</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th style="font-family: cambria;text-align: center;">ID KUISIONER</th>
			<th style="font-family: cambria;text-align: center;">PERTANYAAN</th>
			<th style="font-family: cambria;text-align: center;">SS</th>
			<th style="font-family: cambria;text-align: center;">S</th>
			<th style="font-family: cambria;text-align: center;">KS</th>
			<th style="font-family: cambria;text-align: center;">TS</th>
			<th style="font-family: cambria;text-align: center;">STS</th>
			<th style="font-family: cambria;text-align: center;">HASIL</th>
			<th style="font-family: cambria;text-align: center;">MATURITY LEVEL</th>
			<th style="font-family: cambria;text-align: center;">KETERANGAN</th>
			<th style="font-family: cambria;text-align: center;">AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php include 'koneksi.php'; ?>
		<?php $ambil=$kon->query("SELECT * FROM nilai");  ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td style="font-family: cambria;text-align: center;"><?php echo $pecah['id']; ?></td>
				<td style="font-family: cambria;text-align: center;"><?php echo $pecah['pertanyaan']; ?></td>
				<td style="font-family: cambria;text-align: center;"><?php echo $pecah['ss']; ?></td>
				<td style="font-family: cambria;text-align: center;"><?php echo $pecah['s']; ?></td>
				<td style="font-family: cambria;text-align: center;"><?php echo $pecah['ks']; ?></td>
				<td style="font-family: cambria;text-align: center;"><?php echo $pecah['ts']; ?></td>
				<td style="font-family: cambria;text-align: center;"><?php echo $pecah['sts']; ?></td>
				<td style="font-family: cambria;text-align: center;"><?php echo $pecah['hasil']; ?></td>
				<td style="font-family: cambria;text-align: center;"><?php echo $pecah['persen']; ?></td>
				<td style="font-family: cambria;text-align: center;"><?php echo $pecah['keterangan']; ?></td>
	<td>
					<a href="index.php?halaman=hapus_nilai&id=<?php echo $pecah ['id']?>" class="btn btn-danger">Hapus</a>
					<a href="index.php?halaman=input_nilai" class="btn btn-primary" >Tambah Data</a>
				</td>
			</tr>
		<?php } ?>
		<a href="index.php?halaman=input_nilai"><h4 style="font-weight: bold;">Back</h4></a>
	</tbody>
</table>

</body>
</html>
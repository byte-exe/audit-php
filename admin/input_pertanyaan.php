<?php
include 'koneksi.php';
// mencari id dengan nilai paling besar
$query = "SELECT max(id) as maxId FROM pertanyaan";
$hasil = mysqli_query($kon,$query);
$data = mysqli_fetch_array($hasil);
$id = $data['maxId'];

 
// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($id, 3, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;
 
// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "ID";
$id = $char . sprintf("%03s", $noUrut);

?>
<!DOCTYPE html>
<html>
<head>
	<title>.:Input Pertanyaan:.</title>
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
  <h2 style="font-weight: bold;">Input Pertanyaan</h2>
  <br>
<form method="post">
	<div class="form-group">
		<label style="font-weight: bold;">Id Pertanyaan</label>
  		<input type="text" name="id_pertanyaan" value="<?php echo $id ?>" readonly="readonly" class=form-control>
	</div>

	<div class="form-group">
		<label style="font-weight: bold;">Input Pertanyaan</label>
		<textarea type="text" name="pertanyaan" class="form-control"></textarea>
	</div>

	<?php
if (isset($_POST['simpan'])) 
{
  mysqli_query($kon,"INSERT INTO pertanyaan
  (id,pertanyaan)
  VALUES('$_POST[id_pertanyaan]','$_POST[pertanyaan]')");

  echo "<script>alert('Data Berhasil Di Simpan');</script>";
echo "<script>location='index.php?halaman=list_pertanyaan';</script>";
}
?>
<br>
<center>
<button class="btn btn-primary" name="simpan" style="font-weight: bold;">SIMPAN</button>
<a class="btn btn-success" href="index.php" style="font-weight: bold;">BACK</a>
<a class="btn btn-info" href="index.php?halaman=list_pertanyaan" style="font-weight: bold;">CHECK</a>

</center>
</form>


</body>
</html>

<?php
include 'koneksi.php';
error_reporting(0);
?>


<h2 style="font-weight: bold;text-align: center;">KUISIONER METODE COBIT</h2>
<hr>

<form method="post">
	<div class="form-group">
		<label>ID KUISIONER</label>
		<input type="text" name="id_kuisioner" class="form-control" value="<?php echo  $_POST["id_kuisioner"] ?>">
	</div>

<div class="form-group">
	<label>PERTANYAAN</label>
<select name="pertanyaan" class="form-control">
<?php
$con = mysqli_connect("localhost","root","","db_audit");

//display values in combobox/dropdown
$result = mysqli_query($con,"SELECT * FROM pertanyaan ORDER BY pertanyaan");
  while($row = mysqli_fetch_assoc($result))
   {
     echo "<option>$row[pertanyaan]</option>";
    } 
?>
</select>
</div>
<hr>
<h2 style="font-weight: bold;text-align: center;">RESPONDEN</h2>
<hr>

	<div class="form-group" style="width: 300px;">
		<label> SANGAT SETUJU </label>
		<input type="text" name="a" class="form-control" value="<?php echo  $_POST["a"] ?>">
	</div>
	<div class="form-group" style="width: 300px;" >
		<label> SETUJU </label>
		<input type="text" name="b" class="form-control" value="<?php echo  $_POST["b"] ?>">
	</div>
	<div class="form-group" style="width: 300px;">
		<label> KURANG SETUJU </label>
		<input type="text" name="c" class="form-control" value="<?php echo  $_POST["c"] ?>" >
	</div>
	<div class="form-group"style="width: 300px;" >
		<label> TIDAK SETUJU </label>
		<input type="text" name="d" class="form-control" value="<?php echo  $_POST["d"] ?>">
	</div>
	<div class="form-group" style="width: 300px;">
		<label> SANGAT TIDAK SETUJU </label>
		<input type="text" name="e" class="form-control" value="<?php echo  $_POST["e"] ?>">
	</div>
	<?php
if (isset($_POST['hitung'])) 
{
	$a=$_POST["a"];
	$b=$_POST["b"];
	$c=$_POST["c"];
	$d=$_POST["d"];
	$e=$_POST["e"];

	$nilai1 = $a*5;
	$nilai2 = $b*4;
	$nilai3 = $c*3;
	$nilai4 = $d*2;
	$nilai5 = $e*1;

	$hasil = $nilai1+$nilai2+$nilai3+$nilai4+$nilai5;
	$maturity = $hasil/10;

	

	if($maturity < 0.5){
		$Keterangan = "Non Existent";
	}elseif($maturity >= 0.52 and $maturity<=1.5){
		$keterangan = "Initial/ Ad Hoc";
	}elseif($maturity >=1.51 and $maturity<=2.5){
		$keterangan = "Repeatable but Intuitive";
	}elseif($maturity >=2.51 and $maturity<=3.50){
		$keterangan = "Defined Process";
	}elseif($maturity >=3.51 and $maturity<=4.50){
		$keterangan = "Managed And Measurable";
	}else{
		$keterangan = "Optimized";
	}
}
?>
	<div class="form-group">
		<label>HASIL PERHITUNGAN</label>
		<input type="text" name="hasil" class="form-control" value="<?php echo $hasil ?>" readonly="readonly">
	</div>
		<div class="form-group">
		<label>MATURITY LEVEL</label>
		<input type="text" name="maturity" class="form-control" value="<?php echo "$maturity" ?>" readonly="readonly">
	</div>

		<div class="form-group">
		<label>KETERANGAN</label>
		<input type="text" name="keterangan" class="form-control" value="<?php echo $keterangan?>" readonly="readonly">
	</div>
	<hr>
<center>
<button name="hitung" class="btn btn-info" style="font-weight: bold;">HITUNG</button>
<?php
if (isset($_POST['simpan'])) 
{
  mysqli_query($kon,"INSERT INTO nilai
  (id,pertanyaan,ss,s,ks,ts,sts,hasil,persen,keterangan)
  VALUES('$_POST[id_kuisioner]','$_POST[pertanyaan]','$_POST[a]','$_POST[b]','$_POST[c]','$_POST[d]','$_POST[e]','$_POST[hasil]','$_POST[maturity]','$_POST[keterangan]')");

  echo "<script>alert('Data Berhasil Di Simpan');</script>";
echo "<script>location='index.php?halaman=list_nilai';</script>";
}
?>
<button name="simpan" class="btn btn-primary" style="font-weight: bold;">SIMPAN</button>
<a class="btn btn-danger" href="index.php" style="font-weight: bold;">HAPUS</a>
<a class="btn btn-warning" href="index.php?halaman=list_nilai" style="font-weight: bold;">CHECK</a>
</center>
	

</form>	

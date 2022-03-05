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

	
	<hr>
<center>
<?php
if (isset($_POST['simpan'])) 
{
  mysqli_query($kon,"INSERT INTO responden
  (id,pertanyaan,ss,s,ks,ts,sts)
  VALUES('$_POST[id_kuisioner]','$_POST[pertanyaan]','$_POST[a]','$_POST[b]','$_POST[c]','$_POST[d]','$_POST[e]')");

  echo "<script>alert('Data Berhasil Di Simpan');</script>";
}
?>
<button name="simpan" class="btn btn-primary" style="font-weight: bold;">SIMPAN</button>

</center>
	

</form>	

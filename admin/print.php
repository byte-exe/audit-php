<script type="text/javascript">
	window.print();
</script>
<!DOCTYPE html>
<html>
<head>
  <title>.:Laporan:.</title>
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
<h2 align="center" style="font-weight: bold;">LAPORAN HASIL KUISIONER COBIT</h2>
<hr>

<table class="table table-bordered">
  <thead>
    <tr style="background-color: orange">
      <th style="text-align: center;">ID KUISIONER</th>
      <th style="text-align: center;">PERTANYAAN</th>
      <th style="text-align: center;">SS</th>
      <th style="text-align: center;">S</th>
      <th style="text-align: center;">KS</th>
      <th style="text-align: center;">TS</th>
      <th style="text-align: center;">STS</th>
      <th style="text-align: center;">HASIL</th>
      <th style="text-align: center;">MATURITY LEVEL</th>
      <th style="text-align: center;">KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
    <?php include 'koneksi.php'; ?>
    <?php $ambil=$kon->query("SELECT * FROM nilai");  ?>
    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
      <tr>
        <td style="text-align: center;"><?php echo $pecah['id']; ?></td>
        <td style="text-align: center;"><?php echo $pecah['pertanyaan']; ?></td>
        <td style="text-align: center;"><?php echo $pecah['ss']; ?></td>
        <td style="text-align: center;"><?php echo $pecah['s']; ?></td>
        <td style="text-align: center;"><?php echo $pecah['ks']; ?></td>
        <td style="text-align: center;"><?php echo $pecah['ts']; ?></td>
        <td style="text-align: center;"><?php echo $pecah['sts']; ?></td>
        <td style="text-align: center;"><?php echo $pecah['hasil']; ?></td>
        <td style="text-align: center;"><?php echo $pecah['persen']; ?></td>
        <td style="text-align: center;"><?php echo $pecah['keterangan']; ?></td>

      </tr>

    <?php } ?>

  </tbody>
</table>
<br><br>
<p style="float: left;">Keterangan :</p>
<p style="float: left;">SS = Sangat Setuju,</p>
<p style="float: left;">S  = Setuju,</p>
<p style="float: left;">KS = Kurang Setuju,</p>
<p style="float: left;">TS = Tidak Setuju,</p>
<p style="float: left;">STS= Sangat Tidak Setuju</p> 
<p style="margin-left:800px;font-weight: bold">Mengetahui,</p>
<p style="margin-left: 800px;">Padang,......,....,2022</p>
<br>
<br>
<br>
<p style="margin-left: 800px;">(...........................)</p>
</body>
</html>
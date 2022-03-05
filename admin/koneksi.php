<?php
$host="localhost";
$user="root";
$pass="";
$db="db_audit";
$kon=mysqli_connect($host,$user,$pass);
$kon_db=mysqli_select_db($kon,$db);
/*
if($kon){
echo "Terkoneksi Ke Database Server.! <br>";
   if($kon_db){
	   echo "Terkoneksi Ke $db <br>";
   }else{
	   echo "Tidak Terkoneksi Ke Database '-'..!!";
   }
}else{
echo "Tidak Terkoneksi Ke Database server '-'..!";
}

?>
*/
<?php
include ('config.php');

$nama=$_POST['nama'];
$alamat=$_POST['alamt'];
$no_tel=$_POST['no_tel'];
$status=$_POST['status'];
$nama_pasangan=$_POST['nama_pasangan'];





echo"<br>";

$query="insert into penduduk values
('$nama','$alamat','$no_tel','$status','$nama_pasangan')";
if(mysql_query($query)){
if ($result==TRUE) header("Location:senarai.php");
if ($result==FALSE) header("Location:senarai.php");
}
	
else

echo " Salah ? ";
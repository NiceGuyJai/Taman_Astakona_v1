<head>
<title> Senarai Pelajar </title><body>
<form id="form" name="form" method="post" action="pros_insert.php">
<center>
<div id="daftar">
  <?php 
include 'config.php';
?>

<style>

body {
  
  font-family:"sans-serif";
    background-image:url("streets.jpg");
	background-size:cover;

}

table,tr,th,td
{
  border: 1px solid black;
  padding: 25px;
}
table
{
  border-collapse:collapse;

}
td {
  text-align: center;
  color: black;
}


th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: darkorange;
    color: white;
}

table td button a{
  text-decoration: none;
  color: black;
}

h1{
  color: black;
}


</style>
<center>
  <P>
    <h1>Senarai Penduduk</h1>
<p> 

<table>
<tr>
<th>Nama</th>
<th>Alamat</th>
<th>No telefon(tanpa -)</th>
<th>Status</th>
<th>Nama pasangan</th>



</tr>

<?php
$data = "SELECT * FROM penduduk";
$result = mysqli_query($conn, $data);
?>
<tr>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['alamat']; ?></td>
<td><?php echo $data['no_tel']; ?></td>
<td><?php echo $data['status']; ?></td>
<td><?php echo $data['nama_pasangan']; ?></td>
</tr>

<?php 

?>

</table>
</center>


</div>
</center></form>
</div>
</body>
</html>
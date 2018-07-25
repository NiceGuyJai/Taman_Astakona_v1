<head>
<title>Daftar Pelajar</title><body>
<form id="form" name="form" method="post" action="pros_insert.php">
<body>
<center>
<div id="daftar">
<style>

body{
	background-image:url('streets.jpg');
	background-size:cover;
	font-family:sans-serif;
	}
	

	
table,tr,th,td
{
 border-radius: 5px;
  padding: 5px;
}
table
{
  border-collapse:collapse;
 
}
h1{
  color: black;
}

td {
  text-align: center;
   
}

th{

    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: grey;
    color: black;
    font-size: 15px;
    
}

}
div {
   
    background-color: #f2f2f2;
    padding: ;
}


}

table td button a{
  text-decoration: none;
 
}
input[type=submit] {
    width:220px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 25px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=reset] {
    width:200px;
    background-color: red;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=text]
{
width: 250px;
    padding: 10px 5px;
    margin: auto;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
select {

    width: 250px;
    padding: 6px 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color:white;
}

.topnav a{
	float: right;
	display: block;
	background-color: black;
	color: lightblue;
	text-align: center;
	padding: 20px 22px;
	text-decoration: none;
	}
	
.topnav a:hover{
	background-color: white;
	color: black;
	}

</style>
<?php
include ('config.php');

?>
<font face="">
<p>
  <br>
  <br>
  <br>
  <br>
  <br>
 <h1>Daftar Nama Anda Sebagai Penduduk</h1>
 <p>
 <div class="topnav a">
	<a href="senarai.php">Senarai penduduk</a>
	<a href="form.php">Daftar masuk</a>
	<a href="index.php">Utama</a>
</div>
<br><br><br><br>
<br>
<table width="500" border="0">
  <div class="form"><h2>
<tr>
  <th scope="col"> Nama : </th>
  <th scope="col"><div align="left">
  <input type="text" name="nama" value="" size="45"/>
  </div>
  </th>
  </tr><tr>
   <th scope="col"> Alamat : </th>
  <th scope="col"><div align="left">
  <input type="text" name="alamat" values="" size="45"/>
 </div>
 </th>
 </tr>
  <tr>
  <th scope="col">  No telefon(tanpa -): </th>
  <th scope="col"><div align="left">
  <input type="text" name="no_tel" value="" size="45"/>
  </div>
  </th>
  </tr>
    <tr>
  <th scope="col">	Status: </th>
  <th scope="col"><div align="left">
     <input type="text" name="status" value="" size="45"/>
  </div>
  </th>
  </tr>
  

<tr>
<th scope="col"> Nama pasangan : </th>
<th scope="col"><div align="left">
 <input type="text" name="nama_pasangan" value="" size="45"/>
  </div>
  </th>
  </tr>
</h2></font>
</table>

<p>
<br><input type="submit" name="Hantar" class="btn">
<input type="reset" name="Isi semula" class="btn">

</div>

</center></form>
</div>
</body>
</html>
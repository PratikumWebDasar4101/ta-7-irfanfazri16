<?php
require_once("konek.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<form action="tampil.php" method= "get">
			<td>
			<input type="hidden" name="aksi" value="search">
			<input type="text" name="data">
			<input type="submit" name="cari" value="search">
			</td>
	</form>
	</tr>
<?php
if(isset($_GET['aksi'])&& $_GET['aksi']=='search'&& isset($_GET['data'])){
	$data    = $_GET['data'];
	$sql  		="SELECT `nama` ,`nim` FROM `mahasiswa` WHERE `nim` LIKE '%$data%' OR nama LIKE '%$data%'";
}else{
		$sql="SELECT*from `mahasiswa`";
}
?>
	<tr>
		<th>Nama</th>
		<th>Nim</th>
		<th>Aksi</th>
	</tr>

	<?php
	 $result = mysqli_query($koneksi, $sql);
     $row = mysqli_num_rows($result);
     if ($row>0) {
     	while ($row=mysqli_fetch_array($result)) {
     		$id=$row['nim'];
     		echo "<tr>";
     		echo "<td>".$row['nama']."</td>";
     		echo "<td>".$row['nim']."</td>";
     		echo "<td>" . "<a href='delete.php?nim=$id'>Delete</a> | <a href='detail.php?nim=$id'>Detail</a>| <a href='input.php?nim=$id'>Kembali</a>" . "</td>";

     		echo "</tr>";
     		# code...
     	}
     }else{
     	 echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";
     }
     ?>




</table>
</body>
</html>
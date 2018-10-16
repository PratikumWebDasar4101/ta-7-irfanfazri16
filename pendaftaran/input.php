<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>
<body>
<form method="post" action="simpan.php" enctype="multipart/form data">
	<table>
		<h1>Inputkan Data Anda</h1>
	<tr><td>nama<td><input type="text" name="nama">
	<tr><td>nim<td><input type="text" name="nim">
	<tr><td>jenis kelamin<td><input type="radio" name="jk" value="laki-laki">laki-laki
	<input type="radio" name="jk" value="perempuan">perempuan
	<tr><td>program studi
	<td><select name="prodi" id="dropdown">
		<option value="MI">MI</option>
		<option value="TK">TK</option>
		<option value="MULTIMEDIA">MULTIMEDIA</option>
	</select>

	<tr><td>fakultas
	<td><select name="fakultas" id="dropdown">
		<option value="ilmu terapan">ilmu terapan</option>
		<option value="bisnis">bisnis</option>
		<option value="dokter">kedokteran</option>
	</select>

	<tr><td>asal
	<td><input type="text" name="asal">

	<tr><td>Motto hidup
	<td><textarea name="motto"></textarea>
	<tr><td><input type="submit" name="simpan" value="masukan">
	</table>
</form>
</body>
</html>
<?php
require_once("konek.php");

$id = $_GET["nim"];

$sql = "SELECT * FROM mahasiswa WHERE nim=$id";
$result = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="edit.php" enctype="multipart/form data">
        <table>
            <h1>Edit Data Anda</h1>
    <tr><td>nama<td><input type="text" name="nama" ></td></td></tr>
   <tr><td>Nim<td><input type="text" name="nim2" value="<?php echo $row["nim"]; ?>" disabled>
                      <input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>">
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
    <tr><td><input type="text" name="asal">

    <tr><td>Motto hidup
    <tr><td><textarea name="motto"></textarea>
    <tr><td><input type="submit" name="simpan" value="simpan">
        </table>
    </form>
</body>
</html>
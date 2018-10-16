<?php
require_once("konek.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Data</title>
</head>
<body>
    <table width="400px" border=1>
        <tr align="left">
            <th>Nama</th>
            <th>Nim</th>
            <th>Jenis Kelamin</th>
            <th>Program Studi</th>
            <th>Fakultas</th>
            <th>Asal</th>
            <th>Motto Hidup</th>

            
            
        </tr>

     <?php
            $sql = "SELECT * FROM mahasiswa";

            $result = mysqli_query($koneksi, $sql);
            $row = mysqli_num_rows($result);

            if ($row > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["nim"];
                    echo "<tr>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["nim"] . "</td>";
                  
                    echo "<td>".$row['jeniskelamin']."</td>";
                    echo "<td>".$row['programstudi']."</td>";
                    echo "<td>".$row['fakultas']."</td>";
                    echo "<td>".$row['asal']."</td>";
                    echo "<td>".$row['motto']."</td>";
                    
                     echo "</tr>";
                   
                }
                echo"<a href='inedit.php?nim=$id'>Edit</a> | <a href='tampil.php?nim=$id'>Kembali</a>" ;
            }else {
                echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";
            }
        ?>

    </table>
</body>
</html>
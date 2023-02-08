<!DOCTYPE html>
<html lang="en">
<head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>pppppppppppppp</title>
</head>
<body>
<center>
    <table border="1">
        <tr>
            <td>  nama peminjam</td>
            <td>  alamat</td>
            <td>  umur</td>
            <td>  keperluan</td>
            <td>  jaminan</td>
            <td> nomor rangka</td>
            <td>  jenis motor</td>
            <td>  tahun motor</td>
            <td>  tanggal pinjam</td>
            <td>  tanggal kembali</td>
            <td>  mengubah</td>
        </tr> 
        
        <?php
        include("koneksi.php");
        $query = mysqli_query($db, "SELECT * FROM tb_peminjam INNER JOIN
     tb_motor ON tb_peminjam.id_motor = tb_motor.id_motor");
        
        while($pinjam=mysqli_fetch_array($query)){
            echo "<tr>";
                       echo "<td>".$pinjam['nama_peminjam']."</td>";
                       echo "<td>".$pinjam['alamat']."</td>";
                       echo "<td>".$pinjam['umur']."</td>";
                       echo "<td>".$pinjam['keperluan']."</td>";
                       echo "<td>".$pinjam['jaminan']."</td>";
                       echo "<td>".$pinjam['nomor_rangka']."</td>";
                       echo "<td>".$pinjam['jenis_motor']."</td>";
                       echo "<td>".$pinjam['tahun_motor']."</td>";
                       echo "<td>".$pinjam['tanggal_pinjam']."</td>";
                       echo "<td>".$pinjam['tanggal_kembali']."</td>";
                       echo "<td>";
                       echo "<a href='edit.php?id=".$pinjam['id_peminjam']."'>Edit</a> |";
                       echo "<a href='hapus.php?id=".$pinjam['id_peminjam']."'>hapus</a>";
                       echo "</td>";
            echo "</tr>";
           }
        ?>
        <h4><a class="action-btn" href="tambah.php" name="Tambah" value="tambah">Tambah</a></h4>
  </table>
  <h4><a  class="action-btn" href="index.php">Menu Utama</a></h4><br>
        </center>
</body>
</html>
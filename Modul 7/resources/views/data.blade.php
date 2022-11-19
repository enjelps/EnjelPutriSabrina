@extends('layouts.main')    
@section('content')
<?php
    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
    $sql = "SELECT * FROM tbl_mahasiswa";
    $hasil = mysqli_query($koneksi, $sql);
    $no_urut = 0;
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <br><h1><b>Data Mahasiswa</b></h1><br>
    <table border="1">
        <tr>
            <td>No</td>
            <td>NRP</td>
            <td>NAMA</td>
            <td>Email</td>
            <td>Alamat</td>
            <td colspan="2">Operasi</td>
        </tr>
        <?php
            while($baris = mysqli_fetch_array($hasil)) {
                $no_urut++;
        ?>
        <tr>
            <td><?php echo $no_urut?></td>
            <td> <?=$baris['nrp']?> </td>
            <td> <?=$baris['nama']?> </td>
            <td> <?=$baris['email']?> </td>
            <td> <?=$baris['alamat']?> </td>
            <td>
                <a href="input_edit.blade.php?id_edit=<?$baris['nrp'];?>"> Edit </a>
            </td>
            <td>
                <a href="delete.blade.php?id_hapus=<?php echo $baris['nrp'];?>" 
                onclick="return confirm('Apakah Anda yakin ingin menghapus data dari <?php echo $baris['nama'];?>?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
</body>
</html>
@endsection
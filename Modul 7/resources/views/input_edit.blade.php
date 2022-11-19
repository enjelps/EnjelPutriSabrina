<?php
    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

    $nrp = $_GET["id_edit"];
    $sql = "SELECT * FROM tbl_mahasiswa WHERE nrp='$nrp' ";
    $hasil = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        while($baris = mysqli_fetch_assoc($hasil)){
    ?>
    <form action="proses.blade.php" method="POST">
        <label>NRP</label>
        <input type="number" name="nrp" value="<?php echo $baris['nrp'] ?>"><br>

        <label>NAMA</label>
        <input type="text" name="nama" value="<?php echo $baris['nama'] ?>"><br>

        <label>Email</label>
        <input type="text" name="email" value="<?php echo $baris['email'] ?>"><br>

        <label>Alamat</label>
        <input type="text" name="alamat" value="<?php echo $baris['alamat'] ?>"><br>

        <input type="submit" name="kirim" value="Perbarui">
    </form>
    <?php } ?>
</body>
</html>
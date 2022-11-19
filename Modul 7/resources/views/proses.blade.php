<?php
    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];

    $sql = "INSERT INTO tbl_mahasiswa VALUES('$nrp','$nama','$email','$alamat')";
    $add = mysqli_query($koneksi, $sql);

    if($add){
        header("location: data.blade.php");
    }
    else{
        echo "<script> alert('Gagal Menambahkan Data') </script>";
    }
?>


<?php
    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];

    $sql = "UPDATE tbl_mahasiswa set nama='$nama', email='$email', alamat='$alamat' WHERE nrp='$nrp' ";
    $edit = mysqli_query($koneksi, $sql);

    if($edit){
        header("location: data.blade.php");
    }
    else{
        echo "<script> alert('Gagal Melakukan Update Data') </script>";
    }
?>
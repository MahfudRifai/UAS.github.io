<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['Nama'];
    $nokendaraan = $_POST['No_Kendaraan'];
    $keluhan = $_POST['Keluhan'];
    $tanggal = $_POST['Tanggal'];

    $sql = "INSERT INTO service_motor(Nama,No_Kendaraan,Keluhan,Tanggal) VALUES('$nama','$nokendaraan','$keluhan','$tanggal')";
    //Cek apakah proses simpan berhasil
    if (mysqli_query($koneksi, $sql)) {
        //Jika berhasil, Redirect ke index.php
        header('location:index.php');
    } else {
        //jika tidak berhasil maka akan tampil 
        echo "Oupss... Maaf Proses Penyimpanan Data Tidak Berhasil";
    }
}
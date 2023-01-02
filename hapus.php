<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "DELETE FROM service_motor where Nama='$id'");

if ($data) {
    header('location:index.php');
} else {
    //jika tidak berhasil
    echo "Maaf proses Menghapus data tidak berhasil";
}
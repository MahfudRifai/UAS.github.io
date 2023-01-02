<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM service_motor where Nama='$id'");
while ($hasil = mysqli_fetch_array($data)) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Menambahkan Data Klien</title>
        <style>
            .h1 {
                text-shadow: 3px 2px 1px grey;
                font-size: 40px;
            }

            .kotak {
                box-shadow: inset 3px 3px 2px rgba(0, 0, 0, 0.4);
                padding: 10px;
                border: 1px solid grey;
            }
        </style>
    </head>

    <body>
        <h1 align="center" class="h1">Ubah Data Klien Service Motor</h1>
        <form method="post" action="tambah.php" align="center">
            <fieldset>
                <br>
                <legend align="center">Ubah Data</legend>
                <label>Nama</label>
                <input type="text" name="Nama" value="<?php echo $hasil['Nama']; ?>"><br>
                <br>
                <label>No Kendaraan</label>
                <input type="text" name="No_Kendaraan" value="<?php echo $hasil['No_Kendaraan']; ?>"><br>
                <br>
                <label>Keluhan</label>
                <input type="text" name="Keluhan" value="<?php echo $hasil['Keluhan']; ?>"><br>
                <br>
                <label>Tanggal</label>
                <input type=" text" name="Tanggal" value="<?php echo $hasil['Tanggal']; ?>"><br>
                <br>
                <button type=" submit" name="simpan" class="kotak">Simpan</button> <button class="kotak"><a href="index.php">Kembali</a></button>
            </fieldset>
        </form>
    <?php
}
    ?>
    </body>

    </html>
    <?php
    include "koneksi.php";

    if (isset($_POST['simpan'])) {
        $nama = $_POST['Nama'];
        $nokendaraan = $_POST['No_Kendaraan'];
        $keluhan = $_POST['Keluhan'];
        $tanggal = $_POST['Tanggal'];

        $sql = "UPDATE service_motor SET Nama='$nama',No_Kendaraan='$nokendaraan',Keluhan='$keluhan',Tanggal='$tanggal' WHERE Nama='$nama'";
        //Cek apakah proses simpan berhasil
        if (mysqli_query($koneksi, $sql)) {
            //Jika berhasil, Redirect ke index.php
            header('location:index.php');
        } else {
            //jika tidak berhasil maka akan tampil 
            echo "Oupss... Maaf Proses Penyimpanan Data Tidak Berhasil";
        }
    }
    ?>
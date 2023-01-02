<!DOCTYPE html>
<html>

<head>
    <title>Menambahkan Data Service Motor</title>
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
    <h1 align="center" class="h1">Tambah Data Service Motor</h1>
    <form method="post" action="tambah.php" align="center">
        <fieldset>
            <br>
            <legend align="center">Tambah Data</legend>
            <label>Nama</label>
            <input type="text" name="Nama"><br>
            <br>
            <label>No Kendaraan</label>
            <input type="text" name="No_Kendaraan"><br>
            <br>
            <label>Keluhan</label>
            <input type="text" name="Keluhan"><br>
            <br>
            <label>Tanggal</label>
            <input type="text" name="Tanggal"><br>
            <br>
            <button type="submit" name="simpan" class="kotak">Simpan</button> <button class="kotak"><a href="index.php">Kembali</a></button>
        </fieldset>

    </form>
</body>

</html>
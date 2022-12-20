<?php
$id = $_GET['jenis'];
include 'database.php';
$database = new Database();
$data = $database->edit($id);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Barang</title>
    </head>
    <body>
        <h1>Edit Barang</h1>
        <a href="index.php">Kembali</a>
        <br><br>
        <form action="proses.php" method="post">
            <label>Tanggal</label>
            <br>
            <input type="text" name="tgl" value="<?php echo $data->tgl ?>">
            <br>
            <label>Jenis</label>
            <br>
            <input type="text" name="jenis" value="<?php echo $data->jenis ?>">
            <br>
            <label>Merek</label>
            <br>
            <input type="text" name="merek" value="<?php echo $data->merek ?>">
            <br>
            <label>Keluar</label>
            <br>
            <input type="text" name="keluar" value="<?php echo $data->keluar ?>">
            <br>
            <label>Masuk</label>
            <br>
            <input type="text" name="masuk" value="<?php echo $data->masuk ?>">
            <br>
            <label>Stok Awal</label>
            <br>
            <input type="text" name="stok_awal" value="<?php echo $data->stok_awal ?>">
            <br><br>
            <button type="submit" name="submit_edit">Submit</button>
        </form>
    </body>
</html>

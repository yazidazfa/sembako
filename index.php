<?php
include 'database.php';
$database = new Database();
$index = 1;
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Data Sembako</title>
    </head>
    <body>
        <div>
            <h1>Data Stok Sembako</h1>
            <a href="tambah.php">Tambah Data</a>
            <br><br>
            <table border="1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Jenis</th>
                        <th>Merek</th>
                        <th>Keluar</th>
                        <th>Masuk</th>
                        <th>Stok awal</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $database->tampil_data();
                    if ( !empty($result) ) {
                        foreach ($result as $data): ?>
                        <tr>
                        <td><?=$index++ ?></td>
                        <td><?=$data->tgl ?></td>
                        <td><?=$data->jenis ?></td>
                        <td><?=$data->merek ?></td>
                        <td><?=$data->keluar ?></td>
                        <td><?=$data->masuk ?></td>
                        <td><?=$data->stok_awal ?></td>
                        <td><?=$data->stok ?></td>
                        <td>
                            <a name="edit" id="edit" href="edit.php?jenis=<?=$data->jenis ?>">Edit</a>
                            <a name="hapus" id="hapus" href="proses.php?jenis=<?=$data->jenis ?>">Delete</a>
                        </td>
                    </tr>
                        <?php endforeach;
                    } else{ ?>
                    <tr>
                        <td colspan="9">Belum ada data pada tabel stok barang.</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
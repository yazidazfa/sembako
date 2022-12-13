<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <h3>Tambah Data Sembako</h3>
        <hr/>
        <form method="post" action="proses.php">
            <table>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><input type="text" name="tgl"/></td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td>:</td>
                    <td><input type="text" name="jenis"/></td>
                </tr>
                <tr>
                    <td>Merek</td>
                    <td>:</td>
                    <td><input type="text" name="merek"/></td>
                </tr>
                <tr>
                    <td>Masuk</td>
                    <td>:</td>
                    <td><input type="text" name="masuk"/></td>
                </tr>
                <tr>
                    <td>Keluar</td>
                    <td>:</td>
                    <td><input type="text" name="keluar"/></td>
                </tr>
                <tr>
                    <td>Stok Awal</td>
                    <td>:</td>
                    <td><input type="text" name="stok_awal"/></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td><input type="text" name="stok"/></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit_simpan">Simpan</td>
                </tr>
            </table>
        </form>
    </body>
</html>
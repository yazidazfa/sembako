<?php
include 'database.php';
if (isset($_POST['submit_simpan'])){
    $tgl = $_POST['tgl'];
    $jenis = $_POST['jenis'];
    $merek = $_POST['merek'];
    $keluar = $_POST['keluar'];
    $masuk = $_POST['masuk'];
    $stok_awal =$_POST['stok_awal'];
    $database = new Database();
    $database->tambah($tgl, $jenis, $merek, $keluar, $masuk, $stok_awal);
    header('location:index.php');
}

if (isset($_GET['jenis'])){
    $id = $_GET['jenis'];
    $database = new Database();
    $database->hapus($id);
    header('location:index.php');
}

if (isset($_POST['submit_edit'])){
    $tgl = $_POST['tgl'];
    $jenis = $_POST['jenis'];
    $merek = $_POST['merek'];
    $keluar = $_POST['keluar'];
    $masuk = $_POST['masuk'];
    $stok_awal = $_POST['stok_awal'];
    $database = new Database();
    $database->update($tgl, $jenis, $merek, $keluar, $masuk, $stok_awal);
    header('location:index.php');

}

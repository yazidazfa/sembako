<?php
include 'koneksi.php';
class Database extends Koneksi{
    public function __construct(){
        $this->konek = $this->get_connection();
    }
    
    public function tambah($tgl, $jenis, $merek, $keluar, $masuk, $stok_awal, $stok ){
        $sql = "INSERT INTO tbl_sembako (tgl, jenis, merek, keluar, masuk, stok_awal, stok) VALUES ('$tgl', '$jenis', '$merek', '$keluar', '$masuk', '$stok_awal', '$stok')";
        $this->konek->query($sql);
    }

    public function tampil_data(){
        $sql = "SELECT * FROM tbl_sembako";
        $bind = $this->konek->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if(!empty($baris)){
            return $baris;
        }
    }

    public function hapus($jenis){
        $sql = "DELETE FROM tbl_sembako WHERE jenis='$jenis'";
        $this->konek->query($sql);
    }

    public function edit($id){
        $sql = "SELECT * FROM tbl_sembako WHERE jenis='$id'";
        $bind = $this->konek->query($sql);
        while ($obj = $bind->fetch_object()){
            $baris = $obj;
        }
        return $baris;
    }

    public function update($tgl, $jenis, $merek, $keluar, $masuk, $stok){
        $sql = "UPDATE tbl_sembako SET tgl='$tgl', jenis='$jenis', merek='$merek', keluar='$keluar', masuk='$masuk', stok='$stok'";
        $this->konek->query($sql);
    }
}

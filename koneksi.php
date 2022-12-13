<?php
class Koneksi{
    public function get_connection(){
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "sembako";
        $koneksi = new mysqli($host, $username, $password, $database);
        return $koneksi;
    }

}
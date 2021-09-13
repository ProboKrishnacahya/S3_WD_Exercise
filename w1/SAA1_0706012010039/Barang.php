<?php

abstract class Barang {
    public $nama;
    public $barcode;
    public $tanggal_masuk;
    public $jumlah;

    public function __construct() {
    $this->nama = "";
    $this->barcode = "";
    $this->tanggal_masuk = "";
    $this->jumlah = 0;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getBarcode(){
        return $this->barcode;
    }

    public function setBarcode($barcode){
        $this->barcode = $barcode;
    }

    public function getTanggalMasuk(){
        return $this->tanggal_masuk;
    }

    public function setTanggalMasuk($tanggal_masuk){
        $this->tanggal_masuk = $tanggal_masuk;
    }

    public function getJumlah(){
        return $this->jumlah;
    }

    public function setJumlah($jumlah){
        $this->jumlah = $jumlah;
    }

    abstract public function getAllData();
}

?>
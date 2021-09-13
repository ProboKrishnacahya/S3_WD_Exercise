<?php

abstract class Barang {
    public $nama;
    public $barcode;
    public $tanggalMasuk;
    public $jumlah;

    public function __construct() {
    $this->nama = "";
    $this->barcode = "";
    $this->tanggalMasuk = "";
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
        return $this->tanggalMasuk;
    }

    public function setTanggalMasuk($tanggalMasuk){
        $this->tanggalMasuk = $tanggalMasuk;
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
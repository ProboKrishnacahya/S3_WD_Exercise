<?php

abstract class Barang {
    public $nama;
    public $barcode;
    public $tanggal_masuk;
    public $jumlah;

    function __construct($nama, $barcode, $tanggal_masuk, $jumlah) 
    {
        $this->nama = $nama;
        $this->barcode = $barcode;
        $this->tanggal_masuk = $tanggal_masuk;
        $this->jumlah = $jumlah;
    } 

    function getNama(){
        return $this->nama;
    }

    function setNama($nama){
        $this->nama = $nama;
    }

    function getBarcode(){
        return $this->barcode;
    }

    function setBarcode($barcode){
        $this->barcode = $barcode;
    }

    function getTanggalMasuk(){
        return $this->tanggal_masuk;
    }

    function setTanggalMasuk($tanggal_masuk){
        $this->tanggal_masuk = $tanggal_masuk;
    }

    function getJumlah(){
        return $this->jumlah;
    }

    function setJumlah($jumlah){
        $this->jumlah = $jumlah;
    }

    abstract public function getAllData();
}

?>
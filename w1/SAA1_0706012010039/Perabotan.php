<?php

require_once "Barang.php";

class Perabotan extends Barang{

    private $bahan;

    public function __construct($nama, $barcode, $tanggal_masuk, $jumlah, $bahan){
        parent::__construct($nama, $barcode, $tanggal_masuk, $jumlah);
        $this->bahan = $bahan;
    }

    function getBahan(){
        return $this->bahan;
    }

    function setBahan($bahan){
        $this->bahan = $bahan;
    }

    function getAllData(){
        $data = array();
        $data['nama'] = $this->nama;
        $data['barcode'] = $this->barcode;
        $data['tanggal_masuk'] = $this->tanggal_masuk;
        $data['jumlah'] = $this->jumlah;
        
        $data['keterangan'] = $this->bahan;

        return $data;
    }   
}

?>
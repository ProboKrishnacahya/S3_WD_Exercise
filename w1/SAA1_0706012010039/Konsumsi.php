<?php

require_once "Barang.php";

class Konsumsi extends Barang{
    
    private $expired;

    public function __construct($nama, $barcode, $tanggal_masuk, $jumlah, $expired){

        parent::__construct($nama, $barcode, $tanggal_masuk, $jumlah);
        $this->expired = $expired;

    }

    function getExpired(){

        return $this->expired;

    }

    function setExpired($expired){

        $this->expired = $expired;
    
    }

    function getAllData(){

        $data = array();
        $data['nama'] = $this->nama;
        $data['barcode'] = $this->barcode;
        $data['tanggal_masuk'] = $this->tanggal_masuk;
        $data['jumlah'] = $this->jumlah;
        
        $data['keterangan'] = $this->expired;

        return $data;


    }

    
}

?>
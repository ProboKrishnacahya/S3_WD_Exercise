<?php

require_once "Barang.php";

class Elektronik extends Barang
{
    private $daya;

    function __construct($nama, $barcode, $tanggal_masuk, $jumlah, $daya)
    {
        parent::__construct($nama, $barcode, $tanggal_masuk, $jumlah);
        $this->daya = $daya;
    }

    function getdaya()
    {
        return $this->daya;
    }

    function setdaya($daya)
    {
        $this->daya = $daya;
    }

    function getAllData()
    {
        $data = array();
        $data['nama'] = $this->nama;
        $data['barcode'] = $this->barcode;
        $data['tanggal_masuk'] = $this->tanggal_masuk;
        $data['jumlah'] = $this->jumlah;
        $data['daya'] = $this->daya;
        return $data;
    }
};
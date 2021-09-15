<?php
session_start();

require "Elektronik.php";
require "Konsumsi.php";
require "Perabotan.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST["nama"]) &&
        !empty($_POST["barcode"]) &&
        !empty($_POST["tanggal"]) &&
        !empty($_POST["jumlah"]) &&
        !empty($_POST["exampleRadios"])
    ) {
        if (isset($_SESSION["data"])) {
            $list = unserialize($_SESSION["data"]);
        } else {
            $list = array();
        }

        $nama = $_POST['nama'];
        $barcode = $_POST['barcode'];
        $tanggal = $_POST['tanggal'];
        $jumlah = $_POST['jumlah'];

        if ($_POST["exampleRadios"] == "Konsumsi") {
            $expired = $_POST['expired'];
            $object = new Konsumsi($nama, $barcode, $tanggal, $jumlah, $expired);
            array_push($list, $object);
        } else if ($_POST["exampleRadios"] == "Elektronik") {
            $keterangan = $_POST['daya'];
            $object = new Elektronik($nama, $barcode, $tanggal, $jumlah, $keterangan);
            array_push($list, $object);
        } else if ($_POST["exampleRadios"] == "Perabotan") {
            $bahan = $_POST['jenis'];
            $object = new Perabotan($nama, $barcode, $tanggal, $jumlah, $bahan);
            array_push($list, $object);
        }

        $_SESSION["data"] = serialize($list);
        header("Location: index.php");
        exit();
    } else {
        header("Location: Form_Barang.php");
        exit();
    }
}

?>
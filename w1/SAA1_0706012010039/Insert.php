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

        if ($_POST["exampleRadios"] == "Konsumsi") {

            // Code here
            // Push object to array

        } else if ($_POST["exampleRadios"] == "Elektronik") {

            // Code here
            // Push object to array

        } else if ($_POST["exampleRadios"] == "Perabotan") {

            // Code here
            // Push object to array

        }

        $_SESSION["data"] = serialize($list);
        header("Location: index.php");
        exit();
    } else {
        header("Location: Form_Barang.php");
        exit();
    }
}

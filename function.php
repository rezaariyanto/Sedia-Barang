<?php
session_start();

// Membuat Koneksi menuju Database
$conn = mysqli_connect("localhost","root","","sedia_barang");

// Menambah barang baru
if(isset($_POST["addnewbarang"])){
    $namabarang = $_POST["namabarang"];
    $deskripsi = $_POST["deskripsi"];
    $stock = $_POST["stock"];

    $addtotable = mysqli_query($conn,"insert into persediaan (namabarang, deskripsi, stock) values ('$namabarang', '$deskripsi', '$stock')");
    if($addtotable){
        header('location:index.php');
    } else {
        echo "GAGAL";
        header('location:index.php');
    }
};

// Menambah barang masuk
if(isset($_POST["barangmasuk"])){
    $namabarang = $_POST["namabarang"];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qty'];

    $addtotable = mysqli_query($conn,"insert into barang_masuk (idbarang, penerima, qty) values ('$namabarang', '$penerima','$qty')");
    if($addtotable){
        header('location:masuk.php');
    } else {
        echo "GAGAL";
        header('location:masuk.php');
    }
};




// Menambah barang keluar
if(isset($_POST["barangmasuk"])){
    $namabarang = $_POST["namabarang"];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qty'];

    $addtotable = mysqli_query($conn,"insert into barang_keluar (idbarang, penerima, qty) values ('$namabarang', '$penerima','$qty')");
    if($addtotable){
        header('location:keluar.php');
    } else {
        echo "GAGAL";
        header('location:keluar.php');
    }
};




?>
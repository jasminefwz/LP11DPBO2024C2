<?php

/******************************************
Asisten Pemrogaman 13
 ******************************************/

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");

$tp = new TampilPasien();

//menampilkan form add
if (isset($_GET['add'])) {
    //memanggil form tambah pasien
    $data = $tp->formadd();
}

//menampilkan form update
else if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //memanggil form tambah pasien
    $data = $tp->formedit($id);
}

//menampilkan tabel
else {
    $data = $tp->tampil();
}
<?php

// menambhkabn class databese
require('../db/database.php');
$db = new Database();

//mengambil data no menggunakan POST
$id=$_POST['id'];
$no_induk=$_POST['no_induk'];
$id_cus=$_POST['id_cus'];

$db->query('UPDATE loans SET id_cus = :id_cus, no_induk = :no_induk WHERE id = :id');

    // binding data query dengan variable
    $db->bind(':id', $id);
    $db->bind(':id_cus', $id_cus);
    $db->bind(':no_induk', $no_induk);


// execute query ke database
$db->execute();

//kembalikan ke halaman data_buku.php
header("Location:../data_pinjam.php");



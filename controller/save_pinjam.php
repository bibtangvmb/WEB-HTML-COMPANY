<?php

require('../db/database.php');

// print_r($_POST);

$no_induk = $_POST['no_induk'];
$id_cus = $_POST['id_cus'];


$db = new database();


$db->query('INSERT iNTO loans (id_cus,no_induk,start_date) VALUES (:id_cus,:no_induk, now())');

$db->bind(':id_cus',$id_cus);
$db->bind(':no_induk',$no_induk);

$db->execute();

header("Location: ../data_pinjam.php");
<?php
session_start();
/*
File: exs.php
Fungsi: File untuk Export ke format exel.
Auth: ShowCheap
*/

require '../sistem/config.php';

if($_GET['mode']=='dwn'){
    $tabel=$_GET['tabel'];
    sambung();
    $xl=new exel();
    $xl->setNama("Paramount-$tabel");
    $a=$xl->doExport("SELECT * FROM $tabel");
}
?>

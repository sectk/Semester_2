<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $row = $db->getITEM("SELECT * FROM tabelpelanggan WHERE idpelanggan = $id");

    if ($row['aktif']==0) {
        $aktif = 1;

    }else {
        $aktif = 0;
    }


    $sql = "UPDATE tabelpelanggan SET aktif=$aktif WHERE idpelanggan=$id";
    $db->runSQL($sql);

    header("location:?f=pelanggan&m=select");
}





?>

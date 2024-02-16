<?php

    require_once "../function.php";

    // $id = 3;
    $sql = "DELETE FROM tabelkategori WHERE idkkategori = $id";

    $result = mysqli_query($koneksi, $sql);

        
    header("location:http://localhost/belajarE/restoran/kategori/select.php");

?>

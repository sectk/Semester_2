<?php


    require_once "../function.php";

    echo $id;

    $sql = "SELECT * FROM tabelkategori WHERE idkkategori = $id";
    $result = mysqli_query($koneksi, $sql);

    $row = mysqli_fetch_assoc($result);

    echo $row['kategori'];
    
    // $kategori = 'Es Jus';
    // $id = 21;
    // $sql = "UPDATE tabelkategori SET kategori = '$kategori' WHERE idkkategori = $id ";

    // $result = mysqli_query($koneksi, $sql);

    // echo $sql;

?>

<form action="" methdo="post">

ketegori:
<input type="text" name="kategori" value="<?php echo $row['kategori']?>">
<br>
<input type="submit" name="simpan" value="simpan">

</form>

<?php

    if(isset($_POST['simpan'])){
        $kategori = $_POST['kategori'];
    
        $sql = "UPDATE tabelkategori SET kategori = '$kategori' WHERE idkkategori = $id";
        $result = mysqli_query($koneksi, $sql);
        echo $sql;

        header("location:http://localhost/belajarE/restoran/kategori/select.php");
    }


?>



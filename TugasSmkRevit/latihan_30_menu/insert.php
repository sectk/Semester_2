<?php

    $row = $db->getALL("SELECT * FROM tabelkategori ORDER BY kategori ASC");

?>

<h3>insert menu</h3>

<div class="form-group">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group w-50">
        <label for="">kategori</label>
        <select name="opsi" id="" onchange="this.form.submit()">
            <option value="">
          
            </option>
        </select>


    </div>
    <div class="form-group w-50">

        <label for="">menu</label>
        <input type="text" name="harga" required placeholder="isi menu" class="form-control">

    </div>
    <div class="form-group w-50">
    <label for="">harga</label>
    <input type="text" name="harga" number required placeholder="isi harga" class="form-control">
    </div>
    <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </div>

</div>

<?php

if(isset($POST['simpan'])){
    $idkkategori = $_POST['kategori'];
    $menu = $_POST['menu'];
    $harga= $_POST['harga'];
    $gambar = $_FILES['gambar']['menu'];
    $temp = $_FILES['gambar']['tmp_name'];

    if(!empty($gambar)){
        echo "<h3> Gambar kosong </h3>";
    }else {
        $sql = "INSERT INTO tabelmenu VALUES ('','idkkategori', '$menu', '$gambar, $harga)";
        move_uploaded_file($temp,'../upload/'.$gambar);
        $db->runSQL($sql);
        header("location:?f=menu&m=select");


    }


}

?>

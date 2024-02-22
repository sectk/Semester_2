<h3>insert kategori</h3>
<div class="form-group">
    <form action="" method="post"></form>
    <div class="form-group w-50">
        <label for="">kategori</label>
        <input type="text" name="kategori" required placeholder="isi kategori" class="form-control">

    </div>
    <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </div>

</div>

<?php

if(isset($POST['simpan'])){
    $kategori = $_POST['kategori'];


    $sql = "INSERT INTO tabelkategori VALUE ('', '$kategori')";
    echo $sql;
}



?>



<?php 

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $sql = "SELECT * FROM tabelkategori WHERE idkkategori = $id";

        $row = $db ->getITEM($sql);
    }


?>

<h3>insert kategori</h3>
<div class="form-group">
    <form action="" method="post"></form>
    <div class="form-group w-50">
        <label for="">kategori</label>
        <input type="text" name="kategori" required value="<?php echo $ro['kategori'] ?>" class="form-control">

    </div>
    <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </div>




</div>

<?php

if(isset($POST['simpan'])){
    $kategori = $_POST['kategori'];


    $sql = "UPDATE tabelkategori SET kategori='$kategori' WHERE idkkategori=$id";
  
    // $db ->runSQL($sql);

    // header("location:?f=kategori&m=select");





?>

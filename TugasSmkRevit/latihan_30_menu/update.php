<?php

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $sql="SELECT * FROM tabelmenu WHERE idmenu=$id";

        $item = $db->getIETM($sql);

        $idkkategori = $item['idkkategori'];
        $gambar = $item['gambar'];




    }
    $row = $db->getALL("SELECT * FROM tabelkategori ORDER BY kategori ASC");

?>

<h3>update menu</h3>

<div class="form-group">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group w-50">

        <label for="">kategori</label>
        <select name="idkkategori" id="">
        <?php foreach($row as $r): ?>
            <option value="">
                <?php echo $r['idkkategori'] ?> <?php echo $r['kategori'] ?>
            </option>
            <?php endforeach ?>
        </select>


    </div>
    <div class="form-group w-50">

        <label for="">menu</label>
        <input type="text" name="menu" required placeholvalueder="<?php echo $item['menu']?>" class="form-control">

    </div>
    <div class="form-group w-50">
    <label for="">harga</label>
    <input type="text" name="harga" number required placeholder="<?php echo $item['harga'] ?>" class="form-control">
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

    if (!empty($temp)) {
        $gambar=$_FILES['gambar']['nama'];
        move_uploaded_file($temp,'../upload/'.$gambar);
    }

    $sql = "UPDATE tabelmenu SET idkkategori=$idkkategori, menu='$menu',
            gambar='$gambar',harga'$harga' WHERE idmenu=$id";
    

    $db->runSQL($sql);
    header("location:?f=menu&m=select");




}

?>

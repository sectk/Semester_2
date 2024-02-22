<div class="float-left mr-4">
    <a class="btn btn-primary" href="?f=kategori&m=insert" role="button">TAMBAH DATA</a>
</div>

<h1>MENU</h1>

<?php 

// if(isset($POST['opsi'])){
//     $p = $_POST['opsi'];
   
//     $where = "WHERE idkkategori = $opsi";

//     echo $opsi;
// }else {
//     $opsi = 0;
//     $where = "";
// }
    

?>

<div class="mt-4 mb-4">
    <?php
        $row = $db ->getALL("SELECT * FROM tabelkategori ORDER BY kategori ASC");

    
    ?>
    <form action="" method="post">
        <select name="opsi" id="" onchange="this.form.submit()">
            <?php foreach($row as $r): ?>
            <option value=""><?php if($r['kategori']==$opsi) echo "selected";?>value="<?php echo $r['kategori']?></option>
            <?php endforeach ?>
      
          
        </select>
    </form>
</div>

<?php
//     $jumlahdata = $db->rowCOUNT("SELECT idmenu FROM tabelmenu $where");

//     $banyak = 3;

//     if(isset($_GET['p'])){
//         $p = $_GET['p'];
//         $mulai = ($p * $banyak) - $banyak;
//     }else {
//         $mulai = 0;

//     }
//   $sql = "SELECT * FROM tabelmenu $where ORDER BY menu ASC LIMIT $mulai,$banyak";
//   $row = $db -> getALL($sql);


//     $no = 1 + $mulai;


?>

<table class="table table-bordered w-50 ">
    <thead>
        <th>No</th>
        <th>menu</th>
        <th>harga</th>
        <th>gambar</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php if(!empty ($row)){   ?>
        <?php foreach($row as $r): ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $r['menu'] ?></td>
        <td><?php echo $r['harga']?></td>
        <td><img style="width:40px; src="../upload/<?php echo $r['gambar']?>" alt=""></td>
        <td><a href="?f=menu&m=delete&id=><?php echo $r['idmenu']?>">delete</a></td>
        <td><a href="?f=menu&m=update&id=><?php echo $r['idmenu']?>">update</a></td>
        </tr>
        <?php endforeach ?>
        <? php }?>
    </tbody>
</table>


<?php 

    // for($i=1; $i<= $halaman ; $i++ ){
    //     echo '<a href="?f=kategori&m=select&p'.$i.'">'.$i.'</a>';
    //     echo '&nbsp &nbsp &nbsp';
    // }

?>

<!-- <img src="../upload/mangga.jpg" alt=""> -->

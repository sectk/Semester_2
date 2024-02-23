<?php
    $jumlahdata = $db->rowCOUNT("SELECT idkkategori FROM tabelkategori");

    $banyak = 3;

    if(isset($_GET['p'])){
        $p = $_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;

    }
  $sql = "SELECT * FROM tabelkategori ORDER BY kategori ASC";
  $row = $db -> getALL($sql);


    $no = 1 + $mulai;


?>
<div class="float-left mr-4">
    <a href="?fpelanggan&m=insert" role="button">TAMBAH DATA</a>
</div>
<h1>pelanggan</h1>
<table class="table table-bordered w-50 mt-4">
    <thead>
        <tr>
            <th>No</th>
            <th><?php echo $r['pelanggan']?></th>
            <th><?php echo $r['alamat']?></th>
            <th><?php echo $r['telpon']?></th>
            <th><?php echo $r['email']?></th>
            <th>delete</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($row as $r):   ?>
        <tr>
            <?php
            
            if ($r['aktif']==1) {
                $status = 'AKTIF';
            }else {

                $status = 'TIDAK AKTIF';
            }



            ?>
            <td><?php echo $no++ ?></td>
            <td><?php echo $r['kategori'] ?></td>
            <td><a href="?f=kategori&m=delete&id=><?php echo $r['idkkategori']?>">delete</a></td>
            <td><a href="?f=kategori&m=update&id=><?php echo $r['idkkategori']?>"><?php echo $status?></a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>


<?php 

    for($i=1; $i<= $halaman ; $i++ ){
        echo '<a href="?f=kategori&m=select&p'.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }

?>

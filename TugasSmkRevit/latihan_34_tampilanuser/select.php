<?php
    $jumlahdata = $db->rowCOUNT("SELECT iduser FROM tabeluser");

    $banyak = 3;

    if(isset($_GET['p'])){
        $p = $_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;

    }
  $sql = "SELECT * FROM tabeluser ORDER BY user ASC";
  $row = $db -> getALL($sql);


    $no = 1 + $mulai;


?>
<div class="float-left mr-4">
    <a class="btn btn-primary" href="?f=user&m=insert" role="button"></a>
</div>
<h1>user</h1>
<table class="table table-bordered w-70 mt-4">
    <thead>
        <tr>
            <th>No</th>
            <th>user</th>
            <th>email</th>
            <th>level</th>
            <th>delete</th>
            <th>update</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($row as $r):   ?>
            <?php
            
            if ($r['aktif']==1) {
                $status = 'AKTIF';
            }else {

                $status = 'BANNED';
            }
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $r['user'] ?></td>
            <td><?php echo $r['email'] ?></td>
            <td><?php echo $r['level'] ?></td>
            <td><a href="?f=kategori&m=delete&id=><?php echo $r['iduser']?>">delete</a></td>
            <td><a href="?f=kategori&m=update&id=><?php echo $r['iduser']?>"><?php echo $status?></a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>


<?php 

    for($i=1; $i<= $halaman ; $i++ ){
        echo '<a href="?f=user&m=select&p'.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }

?>

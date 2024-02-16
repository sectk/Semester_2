<div style="margin:auto; width:900px;">

<h3><a href="http://localhost/belajarE/restoran/kategori/insert.php">TAMBAH DATA</a></h3>

<?php 

    require_once "../funcion.php";



    $sql = "SELECT idkkategori FROM tabelkategori";
    $result = mysqli_query($koneksi, $sql);

    $jumlahdata = mysqli_num_rows($result);

    
    $mulai = 3;
    $banyak = 3;

    $halaman = ceil ($jumlahdata / $banyak);
 
    for ($i=1; $i <=$halaman; $i++){
        echo '<a href="?p=' .$i'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }

    echo '<br>' '<br>';

    if(isset($_GET['p'])){
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;
    }



    $sql = "SELECT * FROM tabelkategori LIMIT $mulai, $banyak";
    $result = mysqli_num_rows($koneksi, $sql);

    
    // var_dump($result);

    $jumlah = mysqli_num_rows($result);
    // echo "<br>";
    // echo $jumlah;

    echo '
    
    <table border="1px">
    <tr>
        <th>NO</th>
        <th>Kategori</th>
    </tr>

    ';

    if ($jumlah >0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>'.$row['idkkategori'].'</td>';
            echo '<td>'.$row['kategori'].'/td>';
            echo '<br>';
            echo '</tr>';
        }
    }
    
    echo '</table>';
?>


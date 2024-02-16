<?php 

    require_once "../funcion.php";
    $sql = "SELECT*FROM  tabelkategori";

    $result = mysqli_query($koneksi, $sql);

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

 
   

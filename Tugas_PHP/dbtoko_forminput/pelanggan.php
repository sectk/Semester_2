<form action="" method="post">
    pelanggan :
    <input type="text" name="pelanggan" placeholder="pelanggan">
    <br>
    alamat :
    <input type="text" name ="alamat" placeholder="alamat">
    <br>
    telepon :
    <input type="number" nama="telepon" placeholder="telepon">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
    

    // code koneksi php ke mysql
    $host = "127.0.0.1";
    $user = "root";
    $password = ""; 
    $db = "dbtoko";

    $koneksi =new mysqli($host, $user, $password, $db);

    if (isset($_POST["simpan"])){
        $pelanggan = $_POST["pelanggan"];
        $alamat = $_POST["alamat"];
        $telepon = $_POST["telepon"];
        $sql = "INSERT INTO namapelanggan (pelanggan, alamat, telepon) VALUES('$pelanggan', '$alamat', $telepon)";
        $hasil = mysqli_query($koneksi, $sql);
    }

    $sql = "SELECT*FROM namapelanggan";
    $hasil = mysqli_query($koneksi,$sql);
    var_dump($hasil);
    
    echo "<table border=2px>
    <thead>
    <tr>

        <th>
        PELANGGAN
        </th>

        <th>
        HARGA
        </th>

        <th>
        STOK
        </th>
    </tr>
    </thead>
    <tbody>";

    while($row=mysqli_fetch_array($hasil)){
            echo"<tr>";

            echo "<td>" .$row[1]."</td>";
            echo "<td>" .$row[2]."</td>";
            echo "<td>" .$row[3]."</td>";

            echo "</tr>";
    }
    echo"</tbody>
        </table>";
    
?>

  

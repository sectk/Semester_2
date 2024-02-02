<form action="" method="post">
    pelanggan :
    <input type="text" name="pelanggan" placeholder="pelanggan">
    <br><br>
    alamat :
    <input type="text" name ="alamat" placeholder="alamat">
    <br><br>
    telepon :
    <input type="number" nama="telepon" placeholder="telepon">
    <br><br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
    

    // code koneksi php ke mysql
    $host = "127.0.0.1";
    $user = "root";
    $password = ""; 
    $db = "dbtoko";

    $koneksi =new mysqli($host, $user, $password, $db);

    //fitur menambah barang
    if (isset($_POST["simpan"])){
        $pelanggan = $_POST["pelanggan"] ?? null;
        $alamat = $_POST["alamat"] ?? null;
        $telepon = $_POST["telepon"] ?? null;

        if(isset($_POST["id"])){
            $id = $_POST["id"];
        }
       else{
        $sql = "INSERT INTO namapelanggan (pelanggan, alamat, telepon) VALUES('$pelanggan', '$alamat', $telepon)";
        $hasil = mysqli_query($koneksi, $sql);
    }
}

    //fitur menghapus
    if(isset($_GET["hapus"])){
        $id = $_GET["hapus"];
        $sql = "DELETE FROM namapelanggan WHERE id= ". $id;
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

        <th>
        HAPUS
        </th>

    </tr>
    </thead>
    <tbody>";

    while($row=mysqli_fetch_array($hasil)){
            echo"<tr>";

            echo "<td>" .$row[1]."</td>";
            echo "<td>" .$row[2]."</td>";
            echo "<td>" .$row[3]."</td>";
            echo "<td>" ."<a href ='?hapus=".$row[0]."'>hapus</a>". "</td>";

            echo "</tr>";
    }
    echo"</tbody>
        </table>";
    
?>

  

<?php 
         // code koneksi php ke mysql
    $host = "127.0.0.1";
    $user = "root";
    $password = ""; 
    $db = "dbtoko";

    $koneksi =new mysqli($host, $user, $password, $db);

    $id = 0;
    $pelanggan ="";
    $alamat="";
    $telepon=0;

     //fitur ubah
     if(isset($_GET["ubah"])){
        $id=$_GET["ubah"];
        $sql="SELECT * FROM namapelanggan WHERE id=".$id ;
        $hasil=mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($hasil)>0){
            $row=mysqli_fetch_array($hasil);
            $id=$row[0];
            $pelanggan=$row[1];
            $alamat=$row[2];
            $telepon=$row[3];
        }
    }
?>
    
    <form action="" method="post">
    nama :
    <input type="text" name="pelanggan" placeholder="namapelanggan" value="<?php echo $pelanggan?>">
    alamat :
    <input type="text" name ="alamat" placeholder="alamat" value="<?php echo $alamat?>">
    telepon :
    <input type="number" name="telepon" placeholder="telepon" value="<?php echo $telepon?>">

    <input type="submit" name="simpan" value="simpan">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    </form>

<?php
     
    //fitur menambah barang
    $pelanggan=$_POST["pelanggan"] ?? null;
    $alamat=$_POST["alamat"] ?? null ;
    $telepon=$_POST["telepon"] ?? null  ;

    if(isset($_POST["id"])){
        $id=$_POST["id"];
        if($id==0){
            $sql="INSERT INTO namapelanggan(pelanggan, alamat, telepon) VALUES('$pelanggan','$alamat',$telepon)";
            $hasil=mysqli_query($koneksi,$sql);
        } 
        else{
            $sql="UPDATE namapelanggan SET pelanggan='$pelanggan',alamat='$alamat',telepon=$telepon WHERE id= ".$id;
            $hasil=mysqli_query($koneksi, $sql);
            header("location:http://localhost/toko");
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
    
    echo "<table border=2px>
    <thead>
    <tr>

        <th>
        PELANGGAN
        </th>

        <th>
        ALAMAT
        </th>

        <th>
        TELEPON
        </th>  

        <th>
        HAPUS
        </th>

        <th>
        UBAH
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
            echo "<td>". "<a href='?ubah=". $row[0]."'>ubah</a>"."</td>";

            echo "</tr>";
    }
    echo"</tbody>
        </table>";
    
?>

  

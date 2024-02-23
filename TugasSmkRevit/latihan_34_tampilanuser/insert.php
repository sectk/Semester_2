<?php

    $row = $db->getALL("SELECT * FROM tabeluser ORDER BY user ASC");

?>

<h3>insert user</h3>

<div class="form-group">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group w-50">
        <label for="">user</label>
        <select name="opsi" id="" onchange="this.form.submit()">
            <option value="">
          
            </option>
        </select>


    </div>
    <div class="form-group w-50">

        <label for="">nama user</label>
        <input type="text" name="user" required placeholder="isi user" class="form-control">

    </div>

    <div class="form-group w-50">

        <label for="">email</label>
        <input type="password" name="email" required placeholder="email" class="form-control">

    </div>

    <div class="form-group w-50">

        <label for="">password</label>
        <input type="text" name="password" required placeholder="password" class="form-control">

    </div>

    <div class="form-group w-50">

     <label for="">konfirmasi password</label>
     <input type="password" name="konfirmasi" required placeholder="password" class="form-control">

    </div>

    <div class="form-group w-50">
        <label for="">level</label><br>
        <select name="level" id="">
            <option value="admin">admin</option>
            <option value="koki">koki</option>
            <option value="kasir">kasir</option>
        </select>
    </div>

    <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </div>

</div>

<?php

if(isset($POST['simpan'])){
   $user=$_POST['user'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $konfirmasi=$_POST['konfirmasi'];
   $level=$_POST['level'];

   if (password === $konfirmasi) {
    $sql = "INSERT INTO tabeluser VALUES ('','$user','$email','$password','$level',1)";
    $db->runSQL($sql);
    header("location:?f=user&m=select");
    
   }else {
    echo "<h3>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h3>";
   }



//    $db->runSQL($sql);

//    header("location:?f=user&m=select");

}

?>

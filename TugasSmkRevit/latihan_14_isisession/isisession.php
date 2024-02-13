<nav>
    <ul>
        <li><a href="#">isi</a></li>
        <li><a href="#">hapus</a></li>
        <li><a href="#">destroy</a></li>
    </ul>
</nav>

<?php  
    session_start();

    echo $_SESSION['user'] = 'joni';

    echo '<br>';

    echo $_SESSION['alamat'] = 'sidoarjo';
    
    echo '<br>';

    echo $_SESSION['nama'] = 'joni rambo';

    
    var_dump($_SESSION);


    foreach ($_SESSION as $key => $value){
        echo $key.'=>'.$value.'<br>';
    }
 ?>

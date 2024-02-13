<nav>
    <ul>
        <li><a href="#">isi</a></li>
        <li><a href="#">hapus</a></li>
        <li><a href="#">destroy</a></li>
    </ul>
</nav>

<?php  
    session_start();

    var_dump($_SESSION);
    echo '<br>';   

    if(isset($_GET['menu'])){
        $menu = $_GET['menu'];

        echo $menu;

        switch($menu){
            case 'isi';
                isisession();
                break;
            case 'hapus';
                unset($_SESSION['user']);
                break;
            case 'destroy';
                session_destroy();
                break;
            default;

                break;
        }
    }

    function isiSession(){
        echo $_SESSION['user'] = 'joni';

        echo $_SESSION['alamat'] = 'sidoarjo';
    
        echo $_SESSION['nama'] = 'joni rambo';
    }

 ?>

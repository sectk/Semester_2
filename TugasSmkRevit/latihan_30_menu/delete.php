<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "DELETE FROM tabelmenu WHERE idmenu = $id";

    $db->runSQL($sql);

    header("location:?f=menu&m=select");
}

?>

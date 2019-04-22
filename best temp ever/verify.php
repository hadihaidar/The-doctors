<?php 
    $db = new PDO("mysql:dbname=thedoctors", "root", "");
    $vkey = $db->quote($_REQUEST['vkey']);
    $query = $db->exec("UPDATE `user` SET `verified`=1 WHERE `vkey`=$vkey");
    if ($query){
        echo('the acount has been verified');
    }
    else {
        echo('Something went wrong');
    }
?>
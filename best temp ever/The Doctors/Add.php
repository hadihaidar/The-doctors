<?php
    session_start();
    if (!isset($_SESSION['name'])) {
        header("location:index.php");
    }

    $db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
    $from = $db->quote($_SESSION['user']);
    $to = $db->quote($_REQUEST['to']);
    $go=$_REQUEST['to'];
    if (isset($_POST['accept'])) {
        //update the enum to accepted
        $x= 'accepted';
        $x=$db->quote($x);
        $query = $db->exec("UPDATE friends SET s=$x where (t=$from)AND(f=$to) ;");
        $query = $db->exec("INSERT INTO notifications VALUES (NULL,$from,$to,'accepted',NOW());");
        header("location:page1.php?account=$go");
    }
    if (isset($_POST['reject'])) {
        //delete the request from the table
        $query = $db->exec("DELETE FROM friends WHERE ((t=$from)AND(f=$to))OR ((f=$from)AND(t=$to));");
        header("location:page1.php?account=$go");
    }
    if (isset($_POST['unfriend'])) {
        //delete the request from the table
        $query = $db->exec("DELETE FROM friends WHERE (t=$from)AND(f=$to);");
        if ($query){

          $query = $db->exec("DELETE FROM friends WHERE (f=$from)AND(t=$to);");
        }
        //header("location:page1.php?account=$go");
    }
    if (isset($_POST['cancel'])) {
        //delete the request from the table
        $query = $db->exec("DELETE FROM friends WHERE (f=$from)AND(t=$to);");
        header("location:page1.php?account=$go");
    }
    if (isset($_POST['delete'])) {
        //delete the request from the table
        $query = $db->exec("DELETE FROM friends WHERE (t=$from AND f=$to) OR (f=$from AND t=$to);");
        header("location:page1.php?account=$go");
    }
    if (isset($_POST['add'])) {
        //add a request to the table with enum pending
        $query = $db->exec("INSERT INTO friends VALUES (NULL,$from,$to,now(),'pending');");
        $query = $db->exec("INSERT INTO notifications VALUES (NULL,$from,$to,'sent',NOW());");
        header("location:page1.php?account=$go");
    }
?>

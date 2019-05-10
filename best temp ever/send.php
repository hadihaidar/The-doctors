<?php

    session_start();
    if (!isset($_SESSION['name'])) {
        header("location:index.php");
    }
    if (isset($_POST['send'])) {
        //add a request to the table with enum pending
        $db = new PDO("mysql:dbname=thedoctors", "root", "");
        $from = $db->quote($_SESSION['user']);
        $to = $db->quote($_REQUEST['to']);
        $body = $db->quote($_POST['message']);
        $query = $db->exec("INSERT INTO messages VALUES (NULL,$from,$to,NOW(),$body,'unread');");
        header("location:page1.php?account=" . $_REQUEST['to']);
    }
?>
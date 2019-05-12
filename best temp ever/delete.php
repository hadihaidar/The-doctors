<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("location:index.php");
}

$db = new PDO("mysql:dbname=thedoctors", "root", "");
if (isset($_REQUEST['acc'])){
    $user = $db->quote($_REQUEST['acc']);
    $query = $db->exec("DELETE FROM user WHERE (Email=$user)");
    header("location:index.php");
}
if (isset($_REQUEST['user'])){
    $user = $db->quote($_REQUEST['user']);
    $query = $db->exec("DELETE FROM user WHERE (Email=$user)");
    header("location:admin.php");
}
if (isset($_REQUEST['post'])){
    $db = new PDO("mysql:dbname=thedoctors", "root", "");
    $i = $db->quote($_REQUEST['post']);
    $query = $db->exec("DELETE FROM media WHERE (PostId=$i)");
    $query = $db->exec("DELETE FROM post1 WHERE (ID=$i)");
    $s= explode(".com", $_REQUEST['post']);
    header("location:posts.php?user=".$s[0].".com");
}
?>
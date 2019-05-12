<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("location:index.php");
}

$db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
$id = $db->quote($_REQUEST['post']);
$user = $db->quote($_SESSION['user']);
if (isset($_REQUEST['post'])&& !isset($_REQUEST['is'])) {
    if (isset($_REQUEST['unlike'])) {
        $query = $db->exec("DELETE FROM likes WHERE (Post_ID=$id AND User=$user)");
    } else {
        $query = $db->exec("INSERT INTO likes VALUES (NULL,$id,$user,NOW());");
    }
}
if (isset($_REQUEST['is'])) {
    $query = $db->query("SELECT * FROM likes");
    foreach ($query as $row) {
        if($row['User']==$_SESSION['user'] && $row['Post_ID']==$_REQUEST['post']){
        echo("true");}
    }
}

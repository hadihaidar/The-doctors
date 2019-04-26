<?php
session_start();
    $db = new PDO("mysql:dbname=thedoctors", "root", "");
    $query = $db->query("SELECT * FROM user");
    $COUNT = 0;
    foreach ($query as $row){
        if ($row['Email'] == $_POST['email']){
            $COUNT = 1;
            if($row['Password'] == md5($db->quote($_POST["password"]))){
                $_SESSION['user']= $_POST['email'];
                $_SESSION['name']=$row['FirstName'];
                header("location:activity.php");
            }
            else{
            header("location:index.php?empty=Incorrect Password");
            }
        }
    }
    if($COUNT==0){
        header("location:index.php?empty=Email doesn't exist");
    }
?>
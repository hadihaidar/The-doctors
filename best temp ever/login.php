<?php
  
    $db = new PDO("mysql:dbname=thedoctors", "root", "");
    $query = $db->exec("SELECT * FROM user");
    foreach ($db as $row){
        if ($row['Email'] == $_POST['email']){
            //check password
            if($row['Password'] == md5($_POST['password'])){
                //allow login
            }
        }
        else{
            //user name doen't exist
        }
    }
?>
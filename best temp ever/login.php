<?php
session_start();
if (isset($_POST['login'])) {
    $db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
    $query = $db->query("SELECT * FROM user");
    $COUNT = 0;
    foreach ($query as $row) {
        if ($row['Email'] == $_POST['email']) {
            $COUNT = 1;
            if ($row['verified'] == 0) {
                header("location:index.php?empty=This email isn\'t verified yet");
            } else {
                if ($row['Password'] == md5($db->quote($_POST["password"]))) {
                    $_SESSION['user'] = $_POST['email'];
                    $_SESSION['name'] = $row['FirstName'];
                    $_SESSION['last'] = $row['LastName'];
                    $_SESSION['field'] = $row['Field'];
                    $_SESSION['country'] = $row['County'];
                    header("location:activity.php");
                } else {
                    header("location:index.php?empty=Incorrect Password");
                }
            }
        }
    }
    if ($COUNT == 0) {
        header("location:index.php?empty=Email doesn't exist");
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    header("location:index.php");
}

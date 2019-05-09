<?php
session_start();
if (isset($_POST['login'])) {
    $db = new PDO("mysql:dbname=thedoctors", "root", "");
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
                    $_SESSION['about'] = $row['about'];
										$sqlstmt="SELECT image from user where  Email =(:em)";
										$res = $db->prepare($sqlstmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
										$res->execute(array(':em'=>$_SESSION['user']));
										$id = $res->fetchColumn(0);
										if ($id !== false) {
												if($id!=="default.png"){
												$default= "media/".$_SESSION['user']."/"."ProfilePictures/".$id;
										}
											else{
												$default="media/".$id;
											}

									}
										$_SESSION['img']=$default;
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

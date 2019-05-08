<?php

	$db2 = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
  $sqlstmt="SELECT image from user where  Email =(:em)";
  $res = $db2->prepare($sqlstmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
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
$_SESSION['img'] =$default;


   ?>

<form class="" action="testing.php" method="post">

<textarea name="name" rows="8" cols="80" placeholder="hi">
</textarea>
<input type="submit" name="" value="submit">
<?php


if (strlen($_POST["name"]) > strlen){
  echo "YASS";

}
else{
  echo"ana hmar";}
?>

</form>



<form class="" action="work.php" method="post">
  <textarea id="special" name="post" rows="10" cols="80" placeholder="What's on your mind, <?=$_SESSION['name']?>?"></textarea>

    <input type="submit" name="submitMe" class="buttons-navbar btn btn-primary" value="POST" />
    <?php
    if (isset($_POST["submitMe"])) {
      $db = new PDO("mysql:port=3302;dbname=thedoctors", "root", "");
      $Data = $_POST["post"];
      $postData = $db->quote($_POST["post"]);	//user's post
      $user = $db->quote($_SESSION["user"]);	//user's email
      // $stmt = $db->prepare("INSERT INTO post (body, timee,likes,comments,userem) VALUES (?, ?, ?, ?, ?);");
      //
      // //
      // // // set parameters and execute
      // $first = ".$postData.";
      // $timee = NOW();
      // $like= 0;
      // $comment=0;
      // $emaill ='hmh75@mail.aub.edu';
      // $stmt->bind_param("ssiis", $first, $timee,$like,$comment, $emaill);	//Now() returns current time
      // $stmt->execute();
      // $result = $stmt->get_result();
      // header("location:activity.php");
      if (strlen($Data)>3000 || strlen($Data)<1) {
          echo("<script>alert('Make sure your post is of correct length!');</script>");

      }
      else{
          $stmt = $db->query("INSERT INTO post (body,timee,likes,comments,userem) VALUES (".$postData.", NOW(), 0, 0, $user);");
      echo("<script>alert('Post uploaded! You can check it in your profile!');</script>");
    }
  }

     ?>

</form>

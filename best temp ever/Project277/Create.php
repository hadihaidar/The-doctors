<?php
  if(isset($_POST['create'])){
    $db = new PDO("mysql:port=3302;dbname=restaurant", "root", "");
    $name = $db->quote($_POST["Name"]);
    $address = $db->quote($_POST["address"]);
    $website = $db->quote($_POST["website"]);
    $close = $db->quote($_POST["closed"].':00');
    $open = $db->quote($_POST["opened"].':00');
    $phone = $db->quote($_POST["phone"]);
    $query = $db->exec("INSERT INTO restaurant VALUES ($name,$address,$website,$open,$close,$phone)");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Restaurant</title>
  </head>
  <body>
<form class="" action="Create.php" method="post">

    <h1 style="text-align:center;">Create Your Restaurant!</h1>
    <div style="text-align:center;">
    <b>Restaurant Name: </b><input type="text" name="Name" value=""> <br><br>
    <b>Address:</b> <input type="text" name="address" value=""> <br> <br>
    <b>Website:</b> <input type="url" name="website" value=""placeholder="https://example.com"> <br><br>
    <b>Closing Hours: </b><input type="time" name="closed" value=""><br><br>
    <b>Openning Hours: </b><input type="time" name="opened" value=""><br><br>
    <b>Phone Number: </b><input type="number" name="phone" value=""><br><br>
    <input type="submit" name="create" value="Create!">
</div>

</form>
  </body>
</html>

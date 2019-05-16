  <link rel="stylesheet" href="styles.css">
<?php
$db = new PDO("mysql:port=3302;dbname=restaurant", "root", "");

if (isset($_REQUEST['Employee'])){
  $var="";
    $user = $_REQUEST['Employee'];
    $query = $db->prepare("SELECT * FROM employee WHERE (SSN= $user);");
    $query->execute();
    $row = $query->fetch();

    $query2 = $db->prepare("SELECT * FROM cashier WHERE (SSN= $user);");
    $query2->execute();
    $row2 = $query2->fetch();
    $count2 = $query2->rowCount();
    if ($count2!=0){
      $var="Cashier";
    }

    $query3 = $db->prepare("SELECT * FROM headchef WHERE (SSN= $user);");
    $query3->execute();
    $row3 = $query3->fetch();
    $count3 = $query3->rowCount();
    if ($count3!=0){
      $var="Head Chef";
    }
    $query4 = $db->prepare("SELECT * FROM waiter WHERE (SSN= $user);");
    $query4->execute();
    $row4 = $query4->fetch();
    $count4 = $query4->rowCount();

    if ($count4!=0){
      $var="Waiter";
    }
      if (isset($_POST['submit'])){
        $resto = $db->quote($_POST["resto"]);
        $pos = $db->quote($_POST["positions"]);
        $ssn = $db->quote($_POST["ssn"]);
        $first = $db->quote($_POST["first"]);
        $last = $db->quote($_POST["last"]);
        $date = $db->quote($_POST["birth"]);
        $shift = $db->quote($_POST["shift"]);
        $salary = $db->quote($_POST["salary"]);
        $years = $db->quote($_POST["years"]);
        $tag = $db->quote($_POST['tag']);
        $q =$db->exec("UPDATE employee SET (RestaurantName=$resto, SSN=$ssn, Shift=$shift, Salary=$salary, YearsOfExperiance=$years, NameTag=$tag,DateOfBirth=$date,FirstName=$first,LastName=$last) WHERE SSN=$user");
        if ($q){
          echo "<script>alert('Employee Successfully updated!')
          window.location.replace(\"http://localhost:8666/GitHub/The-doctors/best%20temp%20ever/Project277/supervisor.php\");
          </script>";
        }
      }
    }
      ?>

      <form action="supervisor.php" method="post">

        <h1 style="text-align:center;">Edit Your Employee Information!</h1>
        <div style="text-align:center;" id="form">
          <b>Select Restaurant Name </b><select class="" name="resto">

              <option value="<?= $row['RestaurantName'] ?>"><?= $row['RestaurantName'] ?></option>

          } ?>

          </select><br><br>
          <b>Select Job Position:</b> <select class="" name="positions">
            <option value="<?=$var?>"><?=$var?></option>

          </select> <br><br>

          <label> Enter SSN: </label><input class="Box" name='ssn' value="<?=$row['SSN']?>">
          <label> FirstName: </label><input class="Box2" name='first' value="<?=$row['FirstName']?>">
          <label> LastName: </label><input class="Box2" name='last' value="<?=$row['LastName']?>">
          <label> DateOfBirth: </label><input type="date" class="Box3" name='birth'value="<?=$row['DateOfBirth']?>">
          <label> Shift: </label><input class="Box2" name='shift'value="<?=$row['Shift']?>">
          <label> Salary: </label><input class="Box" name='salary' value="<?=$row['Salary']?>">
          <label> YearsOfExperiance: </label><input class="Box" name='years'value="<?=$row['YearsOfExperiance']?>">
          <label> NameTag: </label><input class="Box" name='tag' value="<?=$row['NameTag']?>">
          <br><br>

          <input type="submit" name="submit" value="Update">
        </div>

      </form>

    </body>

    </html>

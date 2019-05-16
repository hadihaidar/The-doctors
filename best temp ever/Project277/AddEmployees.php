<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="styles.css">
  <meta charset="utf-8">
  <title>Employees</title>
</head>

<body>
  <?php
  $db = new PDO("mysql:port=3302;dbname=restaurant", "root", "");
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
    $query = $db->exec("INSERT INTO employee VALUES ($resto,$ssn,$shift,$salary,$years,$tag,$date,$first,$last)");
    if($_POST['positions'] == 'SuperVisor'){
      $query = $db->exec("INSERT INTO supervisor VALUES ($ssn)");
      echo "<script>alert('Employee successfully added!')</script>";
    }
    if($_POST['positions'] == 'Waiter'){
      $query = $db->exec("INSERT INTO waiter VALUES ($ssn)");
        echo "<script>alert('Employee successfully added!')</script>";
    }
    if($_POST['positions'] == 'Cashier'){
      $query = $db->exec("INSERT INTO cashier VALUES ($ssn)");
        echo "<script>alert('Employee successfully added!')</script>";
    }
    if($_POST['positions'] == 'headchef'){
      $query = $db->exec("INSERT INTO headchef VALUES ($ssn)");
      echo "<script>alert('Employee successfully added!')</script>";
    }
  }
  ?>
  <form action="AddEmployees.php" method="post">

    <h1 style="text-align:center;">Add Your Employee Information!</h1>
    <div style="text-align:center;" id="form">
      <b>Select Restaurant Name </b><select class="" name="resto">
        <?php
        $restos = $db->query("SELECT Name FROM restaurant");
        foreach ($restos as $resto) {
          ?>
          <option value="<?= $resto[0] ?>"><?= $resto[0] ?></option>
        <?php
      } ?>
      </select><br><br>
      <b>Select Job Position:</b> <select class="" name="positions">
      <option value=-1>Position</option>
        <option value="SuperVisor">SuperVisor</option>
        <option value="Waiter">Waiter</option>
        <option value="headchef">Head Chef</option>
        <option value="Cashier">Cashier</option>
      </select> <br><br>
      <label> Enter SSN: </label><input class="Box" name='ssn'>
      <label> FirstName: </label><input class="Box2" name='first'>
      <label> LastName: </label><input class="Box2" name='last'>
      <label> DateOfBirth: </label><input type="date" class="Box3" name='birth'>
      <label> Shift: </label><input class="Box2" name='shift'><label> Salary: </label><input class="Box" name='salary'>
      <label> YearsOfExperiance: </label><input class="Box" name='years'>
      <label> NameTag: </label><input class="Box" name='tag'>
      <br><br>

      <input type="submit" name="submit" value="Submit">
    </div>

  </form>

</body>

</html>

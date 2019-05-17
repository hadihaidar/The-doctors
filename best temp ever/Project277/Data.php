  <link rel="stylesheet" href="styles.css">
<?php

  $db = new PDO("mysql:port=3302;dbname=restaurant", "root", "");

    ?>
    <div style="text-align: center">
        <h1> Find Restaurants in Available Areas!</h1>
        <form action='Data.php' method='post'>
            Select Address <select name="address">

                <?php
                    $ad = $db->query("SELECT DISTINCT Address FROM restaurant");
                    foreach ($ad as $address) {
                        ?>
                        <option value="<?= $address[0] ?>"><?= $address[0] ?></option>
                <?php
                    }
                    ?>
            </select><br><br>


            <input type='submit' value="Search Restaurants" name= "submit"><br><br>
        </form>
      </div>
<?php
      if (isset($_POST['address'])){
        $r= $db->quote($_POST['address']);
 ?>
    <table id="tab1"border="1" style="margin: 0px auto;">
        <tr><th>Employees</th></tr>
        <tr><th>RestaurantName </th><th>SSN </th><th>First Name</th><th>last Name</th> <th>Date of Birth</th><th>Shift</th><th>Salary</th><th>Years of Experience</th><th>Name Tag</th></tr>
    <?php
      $d = $db ->query("CREATE VIEW dataa AS SELECT RestaurantName, SSN, Shift, Salary, YearsOfExperiance, NameTag, DateOfBirth, FirstName, LastName
        FROM employee,restaurant WHERE Address = $r ");
      $m = $db->query("SELECT * FROM dataa");

    foreach ($m as $emplo){
        ?>
    <tr>
                <td><?=$emplo['RestaurantName']?></td>
                <td><?=$emplo['SSN']?></td>
                <td><?=$emplo['FirstName']?></td>
                <td><?=$emplo['LastName']?></td>
                <td><?=$emplo['DateOfBirth']?></td>
                <td><?=$emplo['Shift']?></td>
                <td><?=$emplo['Salary']?></td>
                <td><?=$emplo['YearsOfExperiance']?></td>
                <td><?=$emplo['NameTag']?></td>
    </tr>
    <?php
}
}

?>
</table>

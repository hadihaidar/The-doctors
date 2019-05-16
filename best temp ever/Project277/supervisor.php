<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>supervisor</title>
  </head>
  <body>

<?php
$db = new PDO("mysql:port=3302;dbname=restaurant", "root", "");
?>
<div style="text-align: center">
    <h1> Manage Your Employees!</h1>
    <form action='supervisor.php' method='post'>
        Enter SSN <select name="ssn">
            <option value=-1>Employee</option>
            <?php
                $employee = $db->query("SELECT SSN FROM supervisor");
                foreach ($employee as $emp) {
                    ?>
            <option value="<?= $emp[0] ?>"><?= $emp[0] ?></option>
            <?php
                }
                ?>
        </select><br><br>


        <input type='submit' value="Get Employees" name= "submit"><br><br>
    </form>
    <?php
            if (isset($_POST['ssn'])){
                $SSN = $db->quote($_POST['ssn']);
                $get = $db->query("SELECT * FROM employee WHERE `SSN` IN(SELECT Employee_SSN FROM supervises WHERE (Superviser_SSN =$SSN AND NOT Employee_SSN =Superviser_SSN)) ");
                ?><table id="tab1"border="1" style="margin: 0px auto;">
                    <tr><th>Employees</th></tr>
                    <tr><th>SSN </th><th>First Name</th><th>last Name</th> <th>Date of Birth</th><th>Shift</th><th>Salary</th><th>Years of Experience</th><th>Name Tag</th><th>Actions</th></tr>
                <?php
                foreach ($get as $emplo){
                    ?>
                <tr>
                    <td><?=$emplo['SSN']?></td>
                    <td><?=$emplo['FirstName']?></td>
                            <td><?=$emplo['LastName']?></td>
                            <td><?=$emplo['DateOfBirth']?></td>
                            <td><?=$emplo['Shift']?></td>
                            <td><?=$emplo['Salary']?></td>
                            <td><?=$emplo['YearsOfExperiance']?></td>
                            <td><?=$emplo['NameTag']?></td>

                <td>
                    <a href= 'delete.php?Employee=<?=$emplo['SSN']?>'>DELETE</a>
                    <a href= 'edit.php?Employee=<?=$emplo['SSN']?>'> EDIT</a>
                </td>

                </tr>
                <?php
            }


        }
        ?>
        </table>




</div>
</body>
</html>

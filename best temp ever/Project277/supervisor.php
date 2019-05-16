<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>supervisor</title>
  </head>
  <body>

<?php
$db = new PDO("mysql:dbname=restaurant", "root", "");
?>
<div style="text-align: center">
    <h1> Manage Your Employees!</h1>
    <form action='supervisor.php' method='post'>
        Enter SSN <select name="ssn">
            <option value=-1>Employee</option>
            <?php
                $employee = $db->query("SELECT SSN FROM employee");
                foreach ($employee as $emp) {
                    ?>
            <option value="<?= $emp[0] ?>"><?= $emp[0] ?></option>
            <?php
                }
                ?>
        </select><br><br>

        
        <input type='submit' value="Get Employees" name= "submit">
    </form>
        <table id="tab1"border="1" style="text-align: center;">
            <tr><th>Employees</th></tr>
            <tr><th>SSN </th><th>First Name</th><th>last Name</th> <th>Date of Birth</th><th>Shift</th><th>Salary</th><th>Years of Experience</th><th>Name Tag</th><th>Actions</th></tr>
            <?php
            if (isset($_POST['ssn'])){
                $SSN = $db->quote($_POST['ssn']);
                $get = $db->query("SELECT * FROM employee WHERE `SSN` IN(SELECT Employee_SSN FROM supervises WHERE (Superviser_SSN =$SSN)) ");

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
                    <a href= 'delete.php'>DELETE</a>
                    <a href= 'edit.php'> EDIT</a>
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
        <?php
        if (isset($_POST['ssn'])){?>
            <script> document.getElementById('tab1').display.style='';</script>
        <?php }?>

<?php
    session_start();
    if (!isset($_SESSION['name']) ) {
        session_destroy();
        header("location:index.php");
    }
    $db = new PDO("mysql:dbname=thedoctors", "root", "");
    $teams = $db->query("SELECT * From user");
    ?>
<h1> Users</h1>

<table border="1" style="text-align: center">
    <tr><th>Users</th></tr>
    <tr><th>Email </th><th>First Name</th><th>last Name</th> <th>Country</th><th>Field</th><th>Actions</td></tr>
    <?php foreach ($teams as $row){
        ?>
        <tr><td><a href="posts.php?user=<?=$row['Email']?>"><?=$row['Email']?></td> <td><?=$row['FirstName']?></a></td>
            
                    <td><?=$row['LastName']?></td>
                    <td><?=$row['County']?></td>
                    <td><?=$row['Field']?></td>
                                      
        <td>
            <a href="delete.php?user=<?=$row['Email']?>">DELETE</a>
        </td>

        </tr>
        <?php
    }
    ?>


</table>
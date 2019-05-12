<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("location:index.php");
}
    $db = new PDO("mysql:dbname=thedoctors", "root", "");
    $user = $db->quote($_REQUEST['user']);
    $teams = $db->query("SELECT * From post1 where UserEmail=$user");
    ?>
<h1> Posts</h1>

<table border="1" style="text-align: center">
    <tr><th><?=$_REQUEST['user']?></th></tr>
    <tr><th>ID </th> <th>Time</th><th>Actions</td></tr>
    <?php foreach ($teams as $row){
        ?>
        <tr>            
                    <td><?=$row['ID']?></td>
                    <td><?=$row['timee']?></td>
                                      
        <td>
            <a href="delete.php?post=<?=$row['ID']?>">DELETE</a>
        </td>

        </tr>
        <?php
    }
    ?>


</table>
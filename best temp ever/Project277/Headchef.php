<?php
$db = new PDO("mysql:port=3302;dbname=restaurant", "root", "");
if (isset($_POST['submit'])){

$order = $db->quote($_POST['order']);
$query = $db->exec("DELETE  FROM onphoneorder WHERE (ID=$order)");
$query = $db->exec("DELETE  FROM inplaceorder WHERE (ID=$order)");
$query = $db->exec("DELETE  FROM takes WHERE (ID=$order)");
$query = $db->exec("DELETE  FROM gives WHERE (Order_ID=$order)");
echo "<script>alert('Order successfully done!')</script>";
}
?>
<div style="text-align: center">
    <h1> Check Ongoing Orders!</h1>
    <form action='headchef.php' method='post'>

        Order<select name="order">
            <option value=-1>Order </option>
            <?php
                $orders = $db->query("SELECT ID FROM onphoneorder union select ID FROM takes ");
                foreach ($orders as $orderr) {
            ?>
            <option value="<?= $orderr[0] ?>"><?= $orderr[0] ?></option>
            <?php
                }
            ?>
        </select><br><br>
        <input type='submit' value="Order is Done!" name= "submit">
    </form>
</div>

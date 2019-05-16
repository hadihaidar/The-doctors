<?php
$db = new PDO("mysql:dbname=restaurant", "root", "");
if (isset($_POST['submit'])){
$cashier = $db->quote($_POST["cashier"]);
$head = $db->quote($_POST["headchef"]);
$order = $db->quote($_POST['order']);
$query = $db->exec("INSERT INTO gives VALUES ($head,$cashier,$order)");}
?>
<div style="text-align: center">
    <h1> Cashier</h1>
    <form action='Cashier.php' method='post'>
        Cashier <select name="cashier">
            <option value=-1>Cashier</option>
            <?php
                $cash = $db->query("SELECT SSN FROM cashier");
                foreach ($cash as $cashier) {
            ?>
            <option value="<?= $cashier[0] ?>"><?= $cashier[0] ?></option>
            <?php
                } 
            ?>
        </select><br><br>
        Head Chef <select name="headchef">
            <option value=-1>Head Chef </option>
            <?php
                $head = $db->query("SELECT SSN FROM headchef");
                foreach ($head as $cashier) {
            ?>
            <option value="<?= $cashier[0] ?>"><?= $cashier[0] ?></option>
            <?php
                } 
            ?>
        </select><br><br>
        Order<select name="order">
            <option value=-1>Order </option>
            <?php
                $orders = $db->query("SELECT ID FROM onphoneorder union select ID FROM takes ");
                foreach ($orders as $order) {
            ?>
            <option value="<?= $order[0] ?>"><?= $order[0] ?></option>
            <?php
                } 
            ?>
        </select><br><br>
        <input type='submit' value="give order" name= "submit">
    </form>
</div>
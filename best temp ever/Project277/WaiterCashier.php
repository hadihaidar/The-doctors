<?php
$db = new PDO("mysql:dbname=restaurant", "root", "");
if(isset($_POST['submit'])){
    $cashier = $db->quote($_POST["cashiers"]);
    $waiter = $db->quote($_POST["waiters"]);
    $order = $db->quote($_POST['orders']);
    $query = $db->exec("INSERT INTO takes VALUES ($waiter,$cashier,$order)");
}
?>
<div style="text-align: center">
    <h1> Waiter to Cashier</h1>
    <form action="WaiterCashier.php" method="post">
        Waites:
        <select name="waiters">
            <option value=-1> Waiters</option>
            <?php
            $orders = $db->query("SELECT SSN FROM waiter");
            foreach ($orders as $order) {
                ?>
                <option value="<?= $order[0] ?>"><?= $order[0] ?></option>
            <?php
        }
        ?>
        </select>
        <br>
        <br>
        Orders:
        <select name="orders">
            <option value=-1> Orders</option>
            <?php
            $orders = $db->query("SELECT ID FROM inplaceorder");
            foreach ($orders as $order) {
                ?>
                <option value="<?= $order[0] ?>"><?= $order[0] ?></option>
            <?php
        }
        ?>
        </select>
        <br>
        <br>
        Cashiers:
        <select name="cashiers">
            <option value=-1> Cashiers</option>
            <?php
            $orders = $db->query("SELECT SSN FROM cashier");
            foreach ($orders as $order) {
                ?>
                <option value="<?= $order[0] ?>"><?= $order[0] ?></option>
            <?php
        }
        ?>
        </select>
        <br>
        <br>
        <input type="submit" value="process order" name="submit">
    </form>
</div>
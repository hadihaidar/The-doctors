  <link rel="stylesheet" href="styles.css">
<?php
    $db = new PDO("mysql:port=3302;dbname=restaurant", "root", "");
    if (isset($_POST['inplace'])){
        $item = $db->quote($_POST["meal"]);
        $price = $db->quote($_POST['price']);
        $id = $db->quote(time());
        $table = $db->quote($_POST['num1']);
        $query = $db->exec("INSERT INTO `order` VALUES ($id,$price,$item)");
        $query = $db->exec("INSERT INTO `inplaceorder` VALUES ($table,$id)");
    }
    if(isset($_POST['OnPhone'])){
        $item = $db->quote($_POST["meal"]);
        $price = $db->quote($_POST['price']);
        $id = $db->quote(time());
        $add = $db->quote($_POST['address']);
        $phone = $db->quote($_POST['num']);
        $query = $db->exec("INSERT INTO `order` VALUES ($id,$price,$item)");
        $query = $db->exec("INSERT INTO `onphoneorder` VALUES ($add,$phone,$id)");
    }
?>
<html style="text-align:center;">
<h1>Enter Order Details</h1>
<form id="form" action="Order.php" method ="post">
    labelOrder Type: <input type="checkbox" id="Inplace" name="inplace" value="Inplace" onclick="toggleCheckbox()"> Inplace
    <input type="checkbox" id="On-Phone" name="OnPhone" value="On-Phone" onclick="f()"> On-Phone <br> <br>
    meal: <input name='meal' typr="text"><br><br>
    Price: <input name="price" type="text"><br><br>
    <div id="test">Address: <input name="address"><br><br> Phone Number: <input type="number" name="num"><br><br></div>
    <div id="test1">Table Number: <input name="num1" type="number"></div>
    <input type="submit" name="click">

</form>
<script>
    var x = 0;
    document.getElementById('test').style.display = 'none'

    document.getElementById('test1').style.display = 'none'

    function toggleCheckbox() {
        if (document.getElementById('Inplace').checked) {
            document.getElementById('test').style.display = 'none'
            document.getElementById('test1').style.display = ''
            document.getElementById('On-Phone').checked = false;
        }
        if (!document.getElementById('On-Phone').checked && !document.getElementById('Inplace').checked) {
            document.getElementById('test1').style.display = 'none'
            document.getElementById('Inplace').checked = false;
        }
    }

    function f() {
        if (document.getElementById('On-Phone').checked) {
            document.getElementById('test').style.display = ''
            document.getElementById('test1').style.display = 'none'
            document.getElementById('Inplace').checked = false;
        }
        if (!document.getElementById('On-Phone').checked && !document.getElementById('Inplace').checked) {
            document.getElementById('test').style.display = 'none'
            document.getElementById('Inplace').checked = false;
        }
    }
</script>




</html>

<?php
$db = new PDO("mysql:port=3302;dbname=restaurant", "root", "");

if (isset($_REQUEST['Employee'])){
    $user = $_REQUEST['Employee'];
    $query = $db->exec("DELETE FROM employee WHERE (SSN=$user)");
      echo "<script>alert('Employee Successfully removed!')
      window.location.replace(\"http://localhost:8666/GitHub/The-doctors/best%20temp%20ever/Project277/supervisor.php\");
      </script>";
}

?>

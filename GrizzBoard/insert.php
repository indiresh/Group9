<?php
include "mysql-connector.php";

$startDate=$_POST['startDate'];
$endDate=$_POST['endDate'];
$content=$_POST['content'];

$query = "INSERT INTO listing_info VALUES
('','$startDate','$endDate','$userName','$content')";

mysql_query($query);

mysql_close();
?>
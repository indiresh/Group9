<?php 
include "mysql-connector.php";

$query="SELECT * FROM listing_info";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();
?>

<table border="0" cellspacing="2" cellpadding="2">
<tr>
  <td><font face="Arial, Helvetica, sans-serif"><b>Listing ID</b></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><b>Start Date</b></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><b>End Date</b></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><b>Listing User</b></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><b>Content</b></font></td>
</tr>
<?php
$i=0;
while ($i < $num) {

$f1=mysql_result($result,$i,"id");
$f2=mysql_result($result,$i,"startDate");
$f3=mysql_result($result,$i,"endDate");
$f4=mysql_result($result,$i,"user");
$f5=mysql_result($result,$i,"content");
?>
<tr>
  <td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
</tr>
<?php
$i++;
}
?>

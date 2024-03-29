<?php 
$host='localhost';
$user='root';
$password='';
$db='libraryproject';
$dbcon=mysqli_connect($host,$user,$password,$db);
$query="SELECT referencenumber,customername,emailid,issuetype, message FROM supportmessage WHERE resolvestatus='0'";
$querytodb=mysqli_query($dbcon,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Details</title>
</head>
<body>
<fieldset style="background-color: black; color:white">Customer Issues</fieldset>
</body>
</html>
<table border="2" style="width: 100%;">
   <thead style="background-color: black; color:white">
      <tr>
         <td><strong>Reference Id </strong></td>
         <td><strong>Name</strong></td>
         <td><strong>Email</strong></td>
         <td><strong>Issue Category </strong></td>
         <td><strong>Issue Descrription </strong></td>
         </tr>
   </thead>
   <tbody>
  <?php 
  while ($row=mysqli_fetch_assoc($querytodb))
  {
    echo "<tr>";
    echo "<td>";
    echo $row['referencenumber'];
    echo "</td>";
    echo "<td>";
    echo $row['customername'];
    echo "</td>";
    echo "<td>";
    echo $row['emailid'];
    echo "</td>";
    echo "<td>";
    echo $row['issuetype'];
    echo "</td>";
    echo "<td>";
    echo $row['message'];
    echo "</td>";
    echo "</tr>";
  }
 
  ?>
</table>
<hr>
<iframe src="/resolve.php" style="width: 100%; height:75vh"></iframe>

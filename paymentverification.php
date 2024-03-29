<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Payemt Verifications</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit],.finalbutton {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:blue;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Payment Verification Portal</h3> 
<form method="post">
<input type="submit" value="Check List" name="buttonone"> 
<input type="text" style="width: 25%; margin-left:53%" placeholder="🔎" name="searchvalues">
<input type="submit" value="Check Individual"  name="buttontwo">
<form>
<hr>
</body>
</htmL>
<table  border="1" style="width:85%;border:2px solid black" cellpadding="2">
<thead>
    <td><strong>Serial No </strong></td>
    <td><strong>Registration No </strong></td>
    <td><strong>Payment Reason</strong></td>
    <td><strong>Book Id</strong></td>
    <td><strong>Amount(₹)</strong></td>
    <td><strong>Status</strong></td>
    
</thead>
<tbody>
<?php
 if(isset($_POST['buttonone']))
 {
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
@$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
$query ="SELECT * FROM fineanddues WHERE sellelmentstatus='0'";
$querytodb =mysqli_query($databaseconnection,$query);
$row=mysqli_fetch_assoc($querytodb);
$i=1;
$sign='';
while ($row=mysqli_fetch_assoc($querytodb))
{   
  echo "<tr>";
  echo "<td>";
  echo $i;
  echo "</td>";
  echo "<td>";
  echo $row['registrationid'];
  echo "</td>";
  echo "<td>";
  $sign=deciosn($row['reason']);
  echo $sign;
  echo "</td>";
  echo "<td>";
  echo $row['bookid'];
  echo "</td>";
  echo "<td>";
  echo $row['amount'];
  echo "</td>";
  echo "<td>";
  if($row['sellelmentstatus']=='0')
  {
    echo "<button style='background-color:red;color:white;border-radius:2px;'>Not Paid</button>";
  }
  echo "</td>";
  
 echo "</tr>";
  $i++;

}

}

else if (isset($_POST['buttontwo']))
{
$search=$_POST['searchvalues'];
if ($search !="")
{
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
@$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
$queryone ="SELECT * FROM fineanddues where sellelmentstatus='0' and (registrationid='$search' or bookid='$search')";
$querytodbo =mysqli_query($databaseconnection,$queryone);
$i=1;
$sign='';
while ($i>0 and $rows=mysqli_fetch_assoc($querytodbo))
{   
  echo "<tr>";
  echo "<td>";
  echo $i;
  echo "</td>";
  echo "<td>";
  echo $rows['registrationid'];
  echo "</td>";
  echo "<td>";
  $sign=deciosn($rows['reason']);
  echo $sign;
  echo "</td>";
  echo "<td>";
  echo $rows['bookid'];
  echo "</td>";
  echo "<td>";
 echo $rows['amount'];
  echo "</td>";
  echo "<td>";
  if($rows['sellelmentstatus']=='0')
  {
    echo "<button style='width:50%;background-color:red;color:white;border-radius:25px;'>Not Paid</button>";
  }
  echo "</td>";
  echo "</tr>";
  $i++;

}     
}   
else {echo "Empty";}
}

  ?>
</tbody>
</tr>
</table>
 <!-- --------------------------------- -->
 <?php 
  function deciosn($p)
  { $a='';
    switch($p)
    {
        case '1':
        $a= 'Yearly Membership Fees';
        break;
        case '2':
        $a= 'Late';
        break;
        case '3':
        $a= 'Lost';
        break;
        case '2':
        $a= 'Damaged';
        break;
        default:
        $a='others';
    }
    return $a;
}
?>
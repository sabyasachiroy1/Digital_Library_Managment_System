<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Payemt Actions</title>
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

<h3>Fine/Charges Actions</h3><hr>
<form method="post">
<input type="text"  name="userbookid" style="width: 55%;" id="bookoruserid" placeholder="Book/Registration Number ">
<input type="submit" value="Check Individual"  name="buttontwo">
<form>
<hr>
</body>
</htmL>
<table  border="1" style="width:85%;border:2px solid black" cellpadding="5">
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
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
@$uid=$_POST['userbookid'];
@$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
if(isset($_POST['buttontwo']))
{
$query ="SELECT * FROM fineanddues WHERE sellelmentstatus='0' and (registrationid='$uid' or bookid='$uid')";
$querytodb =mysqli_query($databaseconnection,$query);
$payment ="SELECT  sum(amount) FROM fineanddues WHERE sellelmentstatus='0' and (registrationid='$uid' or bookid='$uid');";
$paymentverify=mysqli_query($databaseconnection,$payment);
$paymentsum =mysqli_fetch_row($paymentverify);
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
else if (isset($_POST['buttonverify']))
{
    $importantid =$_POST['userdatavalues'];
    $changetype =$_POST['selecttypes'];
    if ($changetype =='0')
    {
         echo "<script>alert('Please Choose Action Type');</script>";
    }
    else if ($changetype=='1')
    {
    $updates ="UPDATE fineanddues SET sellelmentstatus='1' WHERE (registrationid='$importantid' or bookid='$importantid')";
    $updateindb =mysqli_query($databaseconnection,$updates);
    if ($updates)
    {
        echo "<script>alert('Fees Status Updated');</script>";
    }
    else {
        echo "<script>alert('Unable To Update');</script>";
    }
    }
    else if ($changetype=='2')
    {
        echo "<script>alert('Notification Sent To Member');</script>";
     
    }
    else {
         echo "";
    }
}

?>
</tbody>
<tfoot>
    <tr style="background-color:darkred; color:white"><td colspan="6"><strong>Total Dues(₹):&nbsp;
  <?php 
  echo @$paymentsum[0];
  ?>
    </strong>
</td>
</tr>
</tfoot>
</table>
<hr>
<form method="post">
<fieldset>
<legend><strong>Action </strong></legend>
<input type="text" value="<?php echo $uid?>" readonly style="width:25%" name="userdatavalues">
<select style="width: 25%;" name="selecttypes">
<option value="0">Select Actions</option>
<option value="1">Fees Submitted</option>
<option value="2">Notify The Member</option>
</select>
<input type="submit" value="Apply"  name="buttonverify" style="background-color: red;">
</fieldset>
</form>
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
<!-- function cehcking fotr the time -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Payemt Verifications</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


input[type=submit],.finalbutton {
  background-color:blue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:red;
}
</style>
</head>
<body>
<form method="post">
<input type="submit" value="Issue Fine/Charges" name="buttonone"> 
<input type="submit" value="Due List " name="butttwo"> 
<input type="submit" value="Payment Verification"  name="buttonthree">
<form>
<hr>
</body>
</htmL>
<?php
if(isset($_POST['buttonone']))
{
    echo "<script> location.replace('http://localhost/dueorfines.php');</script>"; 
}
else if (isset($_POST['butttwo']))
{
    echo "<script> location.replace('http://localhost/paymentverification.php');</script>"; 
}
else if (isset($_POST['buttonthree']))
{
    echo "<script> location.replace('http://localhost/paymentactions.php');</script>"; 
}
else {
    echo "<img src='/wifi.gif' style='width:35px';>";
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Payment Portal</h3> <hr>

<div class="container">
  <form method="get">
    <label for="userid">Registration Id</label>
    <input type="text" id="userid" name="userids" required>

    <label for="bookid">Book Id</label>
    <input type="text" id="bookid" name="bookids"  required value="0"> 

    <label for="finereasons">Payment Reasons</label>
    <select id="finereasons" name="paymentreason">
    <option value="0">Select Reason</option>
    <option value="1">Yearly Membership Fees</option>
        <option value="2">Late</option>
      <option value="3">Lost</option>
      <option value="4">Damaged</option>
      <option value="5">Others</option>
    </select>
    <label for="amount">Amount</label>
    <input type="text" id="Amount" name="amount" required>
    <label for="message">Write Something</label>
    <textarea placeholder="Write Something" id="message" name="messageregardings"></textarea>
    <input type="submit" value="Submit">
   
  </form>
</div>

</body>
</html>
<!-- ----------------------------------- -->
<?php 
@$host ='localhost';
@$username='root';
@$password='';
@$databasename='libraryproject';
@$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
@$uids=$_GET['userids'];
@$book_id =$_GET['bookids'];
@$reason =$_GET['paymentreason'];
if ($reason>0)
{
@$amount_cash =$_GET['amount'];
@$serial='0';
@$specialmessage =$_GET['messageregardings'];
$querys= "INSERT INTO fineanddues VALUES ('$serial','$uids','$book_id','$reason','$amount_cash','0','$specialmessage')";
$dbinsert = mysqli_query($databaseconnection,$querys);
if (!$dbinsert)
{
  echo "<script>alert('Technical Problem Occured');</script>";
}
else {
  echo "<script>alert('Payment Issued Sucsessfully');</script>";
}
}
else {
    echo "<script> alert('Remember To Add Payemt Type');</script>";
}
?>
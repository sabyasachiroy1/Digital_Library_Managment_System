<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <script src="/power.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member Dashboard</title>
</head>
<body>
<div class="adminbannerdashboard">
<pre><h2>BOOKPLUS LIBRARY MEMBER  DASHBOARD </h2> <button class="logoutbuttonss" onclick="logout()">Logout</button></pre>
</div>
<div class="asidebardiv">
<hr>
<aside class="sidebanners">
  <form method="post">
<button class="admin_buttonone" name="refreshbutoons" value="Refresh">Home</button>

  </form>
</aside>
</div>
<center>
<div class="userinformationsetsts" style="margin-top:0.5%;">
  <table border="1"  cellpadding="25" style="width:30vw;height:10vh;border:3px solid black;background-color:darkgreen">
  <thead>
    <tr style="background-color:black;color: white;">
    <td>
        <label for="memebrno"><strong>Book Name</strong></label>
      </td>
      <td>
        <label for="memebrno"><strong>Book Id</strong></label>
      </td>
      <td>
        <label for="staffno"><strong>Status</strong></label>
      </td>
     </tr>
  </thead>
  <!--  -->
  <?php
session_start();
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
@$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
@$registercode=$_SESSION["defautregisid"];
@$uids=$_SESSION["Useridnfos"];
@$unames=$_SESSION['Nameofuser'];
//fines--------
@$payment ="SELECT sum(amount) FROM fineanddues WHERE sellelmentstatus='0' and registrationid='$registercode'";
@$paymentverify=mysqli_query($databaseconnection,$payment);
@$paymentsum =mysqli_fetch_row($paymentverify); 
// 
if(isset($_POST['refreshbutoons']))
{
  $queryset="SELECT newbooks.bookname , newbooks.bookid FROM newbooks INNER JOIN userbookinf ON newbooks.bookid = userbookinf.booknumber WHERE  userinfo='$registercode' and status='0'";
  @$qtodb=mysqli_query($databaseconnection,$queryset);
}

?>
  <!--  -->
 <tbody>
<?php 
while ($row =mysqli_fetch_assoc(@$qtodb))
{
    echo "<tr style='color:white;'>";
    echo "<td>";
    echo  $row['bookname'];
    echo "<td>";
    echo  $row['bookid'];
    echo "</td>";
    echo "<td>";
    echo "<button style='background-color:red;color:white; height:100%;width:100%; border-radius:20px' onclick='press()'>Not Returned</button>";
    echo "</td>";
    echo "</tr>";
}
?>
</tbody>
</table>

  <!-- --------------------------------------------------------------------------- -->
</div>
<div class="divforuiss">
<select>
<pre>
<option>Welcome:  <?php echo @$unames ?></option>
<option>Userid:  <?php echo @$uids?></option>
<option>Registration Id: <?php echo @$registercode?> </option>
<option>Dues: <?php echo $paymentsum[0] ?></option>
</pre>
</select> 
</table>
</div>
<div class="adminbannerdashboard">
<marquee><pre><h3><img src="/library.jpg" style="width:35px;">BOOKPLUS LIBRARY MEMBER DASHBOARD </h3></marquee>
 </div>
</center>
</body>
</html>
<style>
  body {
    background-color: rgb(63, 61, 61);
  }
</style>
<script>
function logout()
{  
  a= confirm("Logout");
   if (a==true)
   {
   
    a= confirm("Logout Sucsessfully");
  location.replace("http://localhost/")
  }
   else {
    location.replace("http://localhost/memberdashboard.php")    
   }
}
function press()
{
   confirm ("Book Not Returned");
}
</script>
<style>
    .divforuiss{
        position: absolute;
        top:71px;
        right: 20px;
      
    }

</style>


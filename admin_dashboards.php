<?php
$host='localhost';
$user='root';
$password='';
$database='libraryproject';
$con=mysqli_connect($host,$user,$password,$database);
$querys="SELECT COUNT(bookid) FROM newbooks";
$querytodb=mysqli_query($con,$querys);
$row=mysqli_fetch_row($querytodb);
$querytwo="SELECT COUNT(userid) FROM new_member_registration WHERE status='1' and acessLEVEL='99'";
$querytwotodb=mysqli_query($con,$querytwo);
$rowtwo=mysqli_fetch_row($querytwotodb);
$qthree="SELECT COUNT(userid) FROM new_member_registration WHERE status='1' and acessLEVEL='100'";
$qtodb=mysqli_query($con,$qthree);
$rowthree=mysqli_fetch_row($qtodb);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <script src="/power.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>
<body>
<div class="adminbannerdashboard">
<pre><h2>BOOKPLUS LIBRARY ADMIN  DASHBOARD </h2> <button class="logoutbuttonss" onclick="logout()">Logout</button></pre>
</div>
<div class="asidebardiv">
<hr>
<aside class="sidebanners">
<button class="admin_buttonone"><a href="">Home</a></button>
<a href="/checkuser.php" target="_blank"><button class="admin_button">Check User </button></a>
<a href="/issuebooks.php"><button class="admin_button">Issue Books</button></a>
<a href="/recivebooks.php"><button class="admin_button">Recive Books</button></a>
<a href="/checkbooks.php"><button class="admin_button">Search Books </button></a>
<a href="/addnewbook.php"><button class="admin_button">Add New Books</button></a>
<a href="/payment.php"><button class="admin_button">Due/Fines</button></a>
<a href="/booknotretuned.php"><button class="admin_button">Check Book History</button></a>
<a href="/permissionchange.php"><button class="admin_button">Change Permission</button></a>
<a href="/issuedata.php"><button class="admin_button">Customer Support</button></a>
<a href="/changepassword.php"><button class="admin_button">Change Password</button></a>
<a href="/databaseadminlogin.php"><button class="admin_button">Database Acsess</button></a>
</aside>
</div>
<div class="userinformationsetsts">
  <table  >
  <thead>
    <tr style="background-color: blue;color: white;">
      <td>
        <label for="memebrno"><strong>Members</strong></label>
      </td>
      <td>
        <label for="staffno"><strong>Staff Members</strong></label>
      </td>
      <td>
        <label for="noofbooks"><strong>Total Books</strong></label>
      </td>
    </tr>
  </thead>
  <tbody>
    <tr style="border: 1px solid red;">
      <td>
        <input type="text" id="memebrno" readonly class="inputforuseage" value="<?php echo $rowtwo[0]?>">
      </td>
      <td>
        <input type="text" id="staffno" readonly class="inputforuseage" value="<?php echo$rowthree[0]?>">
      </td>
      <td>
        <input type="text" id="noofbooks" readonly class="inputforuseage" value="<?php echo $row[0]?>">
      </td>
    </tr>
    
  </tbody>
  
  </table>
</div>

<div class="adminbannerdashboard">
  <marquee><pre><h3><img src="/library.jpg" style="width:35px;">BOOKPLUS LIBRARY ADMIN  DASHBOARD </h3></marquee>
  </div>
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
    location.replace("http://localhost/admin_dashboards.php?")    
   }
}
</script>
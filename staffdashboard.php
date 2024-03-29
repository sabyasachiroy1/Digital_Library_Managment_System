<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <script src="/power.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Dashboard</title>
</head>
<body>
<div class="adminbannerdashboard">
<pre><h2>BOOKPLUS LIBRARY STAFF  DASHBOARD </h2> <button class="logoutbuttonss" onclick="logout()">Logout</button></pre>
</div>
<div class="asidebardiv">
<hr>
<aside class="sidebanners" style="background-color:white;">
<button class="admin_buttonone" style="background-color: blue;"><a href="">Home</a></button>
<a href="/checkuser.php" target="_blank"><button class="staff_button">Check User </button></a>
<a href="/issuebooks.php" target="_blank"><button class="staff_button">Issue Books</button></a>
<a href="/recivebooks.php" target="_blank"><button class="staff_button">Recive Books</button></a>
<a href="/checkbooks.php" target="_blank"><button class="staff_button">Search Books </button></a>
<a href="/addnewbook.php" target="_blank"><button class="staff_button">Add New Books</button></a>
<a href="/dueorfines.php" target="_blank"><button class="staff_button">Due/Fines</button></a>
<a href="/issuedata.php" target="_blank"><button class="staff_button">Customer Support</button></a>
</aside>
</div>
<div class="adminbannerdashboard">
  <marquee><pre><h3><img src="/library.jpg" style="width:35px;background-color:beige" >BOOKPLUS LIBRARY STAFF  DASHBOARD </h3></marquee>
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
<style>
.staff_button {
    height: 29px;
    width: 100%;
    margin-top: 6px;
    background-color:blue;
    color: white;
    border-radius: 10px;
    cursor: pointer;
}
</style>
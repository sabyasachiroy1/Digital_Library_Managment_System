
<!DOCTYPE html>
<html>
<head>
    <title>Permission Change </title>
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

<h3>Permission </h3> <hr>

<div class="container">
  <form method="post">
    <label for="userid">Registration Id </label>
    <input type="text" id="userid" name="userids">
   <label for="finereasons">Acsess Types</label>
    <select id="finereasons" name="actiontemplates">
    <option value="1">Select Permission Type</option>
    <option value="5">Verify User</option>
    <option value="2">Make Staff</option>
    <option value="3">Make Admin</option>
      <option value="4">Block Account</option>
      </select>
    <input type="submit" value="Apply">
  </form>
</div>
</body>
</html>
<?php
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
@$ids =$_POST['userids'];
@$actoions =$_POST['actiontemplates'];
switch ($actoions)
{
  case '1':
  echo "<script>alert ('Please Select Action');location.replace('http://localhost/permissionchange.php');</script>";
  echo "<h4 style='color:Red'>Unable To Change Pemission</h4>";
  break;
  case '2':
    $query ="UPDATE new_member_registration SEt acessLEVEL='100' where (rscode='$ids' or userid=' $ids' )";
    $dbt= mysqli_query($databaseconnection,$query);
    if (!$dbt)
    {
        echo "<h4 style='color:Red'>Unable To Change Pemission</h4>";
    }
    else if($dbt)
    {   echo "<script>alert('Permission Changed');</script>";  
        echo "<h4 style='color:Green'>Permission Changed Successfully</h4>";
    }
    else {
      echo "<script>alert ('');</script>";
    }
    break;
    case '3':
      $queryone="UPDATE new_member_registration SEt acessLEVEL='101' where (rscode= '$ids' or userid=' $ids' )";
      $dbtone= mysqli_query($databaseconnection,$queryone);
      if (!$dbtone)
      {
          echo "<h4 style='color:Red'>Unable To Change Pemission</h4>";
      }
      else if($dbtone)
      {
         echo "<script>alert('Permission Changed');</script>";  
        echo "<h4 style='color:Green'>Permission Changed Successfully</h4>";
      }
      else {
        echo "<script>alert ('Invalid Id');</script>";
      }
      break;
  case '4':
    $querytwo ="UPDATE new_member_registration SEt status='0' where (rscode= '$ids' or userid=' $ids' )";
    $dbttwo= mysqli_query($databaseconnection,$querytwo);
    if (!$dbttwo)
    {
        echo "<h4 style='color:Red'>Unable To Change Pemission</h4>";
    }
    else if($dbttwo)
    {
        echo "<script>alert('Permission Changed');</script>";  
        echo "<h4 style='color:Green'>Permission Changed Successfully</h4>";
    }
    else {
      echo "<script>alert ('Invalid Id');</script>";
    }
    break;
    case '5':
      $querylast ="UPDATE new_member_registration SEt status='1' where (rscode= '$ids' or userid=' $ids' )";
      $dbtlast= mysqli_query($databaseconnection,$querylast);
      if (!$dbtlast)
      
      {
          echo "<h4 style='color:Red'>Unable To Change Pemission</h4>";
      }
      else if($dbtlast)
      {
          echo "<script>alert('Permission Changed');</script>";  
          echo "<h4 style='color:Green'>Permission Changed Successfully</h4>";
      }
      else {
        echo "<script>alert ('Invalid Id');</script>";
      }
      break;
  default:
  echo "<h4 style='color:Red'>Unable To Change Pemission</h4>";
}
 ?>
<!-- php ends -->
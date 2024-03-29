<!-- php -->
<?php 
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
@$use=$_POST['userids'];
$signaturte='';
@$eligibility='';
if(isset($_POST['buttononme']))
{ 
   $useridss= $_POST['userids'];
   $queryss= "SELECT status FROM new_member_registration WHERE rscode='$useridss';";
   $dbforward=mysqli_query($databaseconnection,$queryss);
   @$values =mysqli_fetch_assoc($dbforward);
   @$statuss= $values['status']; //-------------------------->
   $bookcount="SELECT COUNT(status='0') FROM userbookinf WHERE userinfo='$useridss';";
   $bookcontdb=mysqli_query($databaseconnection,$bookcount);
   $rowthree=mysqli_fetch_row($bookcontdb);
  
   switch($statuss)
   {
    case '0':
    @$signaturte="❌";
    break;
    case '1':
    @$signaturte="✅";
    break;
    default:
    @$signaturte="❗";
   }
  //  -----------------------
   if($statuss=='1' and $rowthree[0]<'6')
   {
    $eligibility='✅';
   }
  
  else 
  {
    $eligibility='❌';

  }
    // _____________________________________-
   
}
else if (isset($_POST['buttontwo']))  {
@$userinfotwo =$_POST['userinformatiosn'];
@$booknumbers =$_POST['booknumber'];
$id='0';
$status='0';
$issuebook ="INSERT INTO userbookinf values ('$id','$userinfotwo','$booknumbers','$status');";
@$issuequery =mysqli_query($databaseconnection,$issuebook);
if (!$issuequery)
{
    echo "<script>alert('Unable To Assign Books');</script>";
}
else {
    echo "<script>alert('Book Issued Successfully');</script>";
  
}
}
?>
<!-- php end -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Issue Books</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid rgb(0, 0, 0), 177, 177292;
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

<h3>Issue Books</h3> <hr>
<div class="container">
  <form method="post">
  <label for="Userid">Userid</label>
    <input type="text" id="userid" name="userids" required> 
    <input type="submit" value="Check User" name="buttononme">
  </form>
  <hr>
   <tr>
    <td>
        <label for="Userstatus"><strong>User Status: </strong></label>
    </td>
    <td><?php echo "$signaturte"; ?></td>
   </tr>
   <tr>
    <br>
   <td><strong>Eligibility: <?php echo $eligibility ; ?></strong></td>
   </tr>
   
 <hr>
 <!-- bookids -->
</div>
<div class="container">
  <form method="post">
  <label for="userinfor">User Id </label>
    <input type="text" id="userinfor" name="userinformatiosn"  value="<?php echo @$useridss?>"> 
 <label for="Bookid">Book Id</label>
    <input type="text" id="bookid" name="booknumber" required> 
    <input type="submit" value="Issue Book" name="buttontwo" style="background-color: red;">
  </form>
  <hr>
</div>
</body>
</html>

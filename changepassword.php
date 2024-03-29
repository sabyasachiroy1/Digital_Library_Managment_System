<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
<fieldset>
    <legend><strong>Change Password</strong></legend>
    <form method="post">
    <table style="width: 50%;">
        <tr>
           <td>
                <strong>User id/ Registraion Id </strong>
            </td>
            <td>
                <input type="text" required name="uidorods">
            </td>
          
            </tr>
        <tr>
        <td>
            <strong>New Password </strong>
            </td>
            <td>
                <input type="password" name="npwsod">
            </td>
        </tr>
        <tr>
            <td><button style="background-color: red;color:white" name="searchbutton">Apply</button></td>
        </tr>
        
    </table>
    </form>
</fieldset>
</body>
</html>
<?php 
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
@$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
 if(isset($_POST['searchbutton']))
 {
      @$uorris=$_POST['uidorods'];
      @$np =$_POST['npwsod'];
      @$encryptrd =md5($np);
      @$query="UPDATE new_member_registration set  password='$encryptrd' WHERE userid='$uorris' or rscode='$uorris'";
      $dbts=mysqli_query($databaseconnection,$query);
      if ($dbts)
       {
           echo "<script>alert ('Password Changed Sucessfully');</script>";
           echo "<script>location.replace('http://localhost/admin_dashboards.php');</script>";
        }
      else {
        echo "<script>alert ('Technical Problem');</script>";
           echo "Status: ❌"; 
      }
 }
?>
<html>
  <head>
    <script src="/power.js"></script>
  </head>
</html>
<?php
session_start();
 $host='localhost';
 $user='root';
 $password='';
 $database='libraryproject';
 $con=mysqli_connect($host,$user,$password,$database);
 if (!$con)
{
  echo "<script>alert('Unable To Login At Now'); location.replace('http://localhost/');</script>";
}
else {
@$level=$_POST['usertypes'];
@$inputuserid=$_POST['userids'];
@$userinputpassword=$_POST['passcodess'];
@$saltcode=md5($userinputpassword);
@$query="SELECT firstname,Lastname,rscode,userid,password,acessLEVEL,status FROM new_member_registration where userid='$inputuserid'";

@$querytodb= mysqli_query($con,$query);
@$indivitualdata=mysqli_fetch_assoc($querytodb);
// ---------------------------------------------
@$serveruserid=$indivitualdata['userid'];
@$serverpassword=$indivitualdata['password'];
@$onoff=$indivitualdata['status'];
@$usertype=$indivitualdata['acessLEVEL'];
@$registration=$indivitualdata['rscode'];
@$userfullname=$indivitualdata['firstname']." ".$indivitualdata['Lastname'];
// --------------------------------------------
@$idverification=strcmp($serveruserid,$inputuserid);
@$passwordverify=strcmp($serverpassword,$saltcode);
if ($idverification=='0' and $passwordverify=='0' and $onoff=='1' and $usertype=='99')
{
$_SESSION["defautregisid"]="$registration";
$_SESSION["Useridnfos"]="$serveruserid";
$_SESSION['Nameofuser']="$userfullname";
echo "<script>alert('Welcome, $userfullname');location.replace('http://localhost/memberdashboard.php');</script>";
}
else if($idverification=='0' and $passwordverify=='0' and $onoff=='1' and $usertype=='100')
{
echo "<script>alert('Welcome $userfullname');location.replace('http://localhost/staffdashboard.php');</script>";
}
else if($idverification=='0' and $passwordverify=='0' and $onoff=='1' and $usertype=='101')
{
echo "<script>alert('Welcome $userfullname');location.replace('http://localhost/admin_dashboards.php');</script>";
}
else {
  echo "<script>alert('Account Is Not Verified');location.replace('http://localhost/login.php');</script>";
}
// end codes;
}
?>


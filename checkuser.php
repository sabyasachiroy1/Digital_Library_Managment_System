<!-- php code -->
<?php 
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
@$rsno =$_POST['userrono'];
// query stars
$queryuserid="SELECT rscode FROM new_member_registration WHERE rscode='$rsno' ";
$queryfname="SELECT firstname FROM new_member_registration WHERE rscode='$rsno' ";
$querylname="SELECT lastname FROM new_member_registration WHERE rscode='$rsno' ";
$dob="SELECT Dob FROM new_member_registration WHERE rscode='$rsno' ";
$gender="SELECT Gender FROM new_member_registration WHERE rscode='$rsno' ";
$mobile ="SELECT mobileno FROM new_member_registration WHERE rscode='$rsno' ";
$mail="SELECT Email FROM new_member_registration WHERE rscode='$rsno' ";
$useridss="SELECT userid FROM new_member_registration WHERE rscode='$rsno' ";
$idtype="SELECT idtype FROM new_member_registration WHERE rscode='$rsno' ";
$idnumber ="SELECT idnumber FROM new_member_registration WHERE rscode='$rsno' ";
$accessstatus ="SELECT status FROM new_member_registration WHERE rscode='$rsno' ";

// query connections
$connectone =mysqli_query($databaseconnection,$queryuserid);
$connecttwo =mysqli_query($databaseconnection,$queryfname);
$connecthree=mysqli_query($databaseconnection,$querylname);
$connectfour=mysqli_query($databaseconnection,$dob);
$connectgender=mysqli_query($databaseconnection,$gender);
$connectfive =mysqli_query($databaseconnection,$mail);
$connectmobile =mysqli_query($databaseconnection,$mobile);
$connectionuserid=mysqli_query($databaseconnection,$useridss);
$idtypes=mysqli_query($databaseconnection,$idtype);
$idnumber =mysqli_query($databaseconnection,$idnumber);
$acsessstatus =mysqli_query($databaseconnection,$accessstatus);
$updates="update new_member_registration set status='1' where rscode='$rsno' ";
$seconds ="update new_member_registration set status='0' where rscode='$rsno'";
@$status =$_POST['actionsteps'];
// ----------------------------------------------------------+
if (isset($_POST['approvebuttons']))
{   if ($status=='1')
    {
        $approve =mysqli_query($databaseconnection,$updates);
        echo "<script>alert('Application Approved');</script>";

    }
    else if ($status=='0')
    {
        $approveons =mysqli_query($databaseconnection,$seconds);
        echo "<script>alert('Application Blocked');</script>";

    }
}


?>
<!-- htmt part -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check User</title>
</head>
<body>
    <div class="headingcontainers">
        <a href=""class="headingmains">Check User</a>
        </div>
<fieldset style="margin-top: 25px; height:10vh";>
<form method="post">
   <ul type="none">
    <li>
        <label for="userid"><strong>Registration Id</strong></label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="userid" name="userrono">&nbsp;&nbsp;&nbsp;
        <button style="background-color:blue; color: white; border-radius: 2px; margin-top: 12px;">Check</button>
        <select name="actionsteps">
<option value="1">Approve Account</option>
<option value="0">Block Account</option>
</select>
        <input type="submit" value="Apply Changes " id="buttonsss" style="background-color: Red; color:white" name="approvebuttons"></td>
    </li>
   </ul>

    </form>
</fieldset> 
<div class="backandhome">
    <a href=""><button>Back</button></a>
    <a href=""><button>Home</button></a>
</div>
</body>

</html>
<hr>
<table border="2" style="width: 89%; margin-top:3%";>
<thead style="background-color: darkblue; color:white">
    <tr>
        <td><strong>Registration Id </strong></td>
        <td><strong>First Name</strong></td>
        <td><strong>Last Name </strong></td>
        <td><strong>Dob</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Contact No</strong></td>
        <td><strong>Email Id </strong></td>
        <td><strong>User Id</strong></td>
        <td><strong>Identity Card Type</strong></td>
        <td><strong>Id Card Number </strong></td>
        <td><strong>Access Status</strong></td>
    </tr>
</thead>
<tbody>
   <tr>
    <td>
    <?php
    while ($row=mysqli_fetch_row($connectone))
    {
    printf("%s",$row[0]);
    }
    ?>
    </td>
    <td>
    <?php
    while ($row=mysqli_fetch_row($connecttwo))
    {
    printf("%s",$row[0]);
    }
    ?>
    </td>
    <td>
    <?php
    while ($row=mysqli_fetch_row($connecthree))
    {
    printf("%s",$row[0]);
    }
    ?>
    </td>
    <td>
    <?php
    while ($row=mysqli_fetch_row($connectfour))
    {
    printf("%s",$row[0]);
    }
    ?>
    </td>
    <td>
    <?php
    while ($row=mysqli_fetch_row($connectgender))
    {
    printf("%s",$row[0]);

    }
    ?>
    </td>
    <td>
    <?php
    while ($row=mysqli_fetch_row($connectmobile ))
    {
    printf("%s",$row[0]);

    }
    ?>
    </td>
    <td>
    <?php
    while ($row=mysqli_fetch_row($connectfive))
    {
    printf("%s",$row[0]);

    }
    ?>
    </td>
   <td><?php
    while ($row=mysqli_fetch_row($connectionuserid))
    {
    printf("%s",$row[0]);
    }
    ?>
    </td>
    <td>
    <?php
    while ($row=mysqli_fetch_row($idtypes))
    {
    printf("%s",$row[0]);

    }
    ?>
    </td>
    <td>
    <?php
    while ($row=mysqli_fetch_row($idnumber))
    {
    printf("%s",$row[0]);

    }
    ?>
    </td>
    <td>
    <?php
    while ($row=mysqli_fetch_row($acsessstatus))
    {
      if ($row[0]=='0')
      {
        echo "<img src='delete.png' style='width:25px';>";
       
      }
      else 
      {
        echo "<img src='check-mark.png' style='width:25px';>";
      }

    }
    ?>
    </td>
   </tr>
</tbody>
</table>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="/power.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resolve Customer</title>
</head>
<body>
<fieldset style="background-color: black; color:white"><pre><h2>CUSTOMER SUPPORT</h2></pre></fieldset>
<div class="checkingcuso">
<fieldset class="seacrchcosh" style="margin: 25px; border:2px solid black; height:10vh">
<legend>Check Reference Number </legend>
<form method="post">
<table >
<tr>
<td>
<label for="Customerid"><b>Reference Id&nbsp;&nbsp;</b></label>
</td>
<td><input type="text" id="Customerid" class="inputsetss" name="referencenumbers" style="width:30vw;"></td>
<td><input type="submit" value="Search" id="buttonsss"></td>
<td>
<input type="submit" value="Issue Resolved" id="buttonsss" style="background-color: green; color:white" name="resolvebuttonss"></td>
</tr>
</table>
</form>
</fieldset>
</div>
<hr>
<!-- php codessss -->
<?php
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
@$datapath = $_POST['referencenumbers'];
$queryzero ="SELECT referencenumber from supportmessage WHERE referencenumber='$datapath';";
$queryone ="SELECT customername from supportmessage WHERE  referencenumber='$datapath';";
$querytwo="SELECT emailid from supportmessage WHERE referencenumber ='$datapath';";
$querythree="SELECT issuetype from supportmessage WHERE referencenumber ='$datapath';";
$queryfour="SELECT message from supportmessage WHERE referencenumber ='$datapath';";
$queryfive="SELECT resolvestatus from supportmessage WHERE referencenumber ='$datapath';";
$updates = "update supportmessage set resolvestatus='1' where referencenumber='$datapath' ";
$result =mysqli_query($databaseconnection,$queryzero);
$resultone =mysqli_query($databaseconnection,$queryone);
$resulttwo =mysqli_query($databaseconnection,$querytwo);
$resultthree =mysqli_query($databaseconnection,$querythree);
$resulfour=mysqli_query($databaseconnection,$queryfour);
$resulfive=mysqli_query($databaseconnection,$queryfive);
if(isset($_POST['resolvebuttonss']))
{
$updatconnect = mysqli_query($databaseconnection,$updates);
if ($updatconnect)
{
 echo "<script>alert('Issue Resolved Sucessfully');</script>";
 
}
}
?>
</body>
</html>
<table border="2" style="width: 100%;">
   <thead style="background-color: black; color:white">
      <tr>
         <td><strong>Reference Id </strong></td>
         <td><strong>Name</strong></td>
         <td><strong>Email</strong></td>
         <td><strong>Issue Category </strong></td>
         <td><strong>Issue Descrription </strong></td>
         <td><strong>Issue Status</strong></td>
      </tr>
   </thead>
   <tbody>
      <tr style="height: 50px;">
         <td>
            <?php
            while ($row=mysqli_fetch_row($result))
            {
               printf("%s",$row[0]);
            }
            ?>
         </td>
         <td>
            <?php
            while ($row=mysqli_fetch_row($resultone))
            {
               printf("%s",$row[0]);
            }
            ?>
         </td>
         <td>
         <?php
            while ($row=mysqli_fetch_row($resulttwo))
            {
               printf("%s",$row[0]);
            }
            ?>
         </td>
         <td>
         <?php
            while ($row=mysqli_fetch_row($resultthree))
            {
               printf("%s",$row[0]);
            }
            ?>
         </td>
         <td>
         <?php
            while ($row=mysqli_fetch_row($resulfour))
            {
               printf("%s",$row[0]);
            }
            ?>
         </td>
         <td>
         <?php
            while ($row=mysqli_fetch_row($resulfive))
            {
              if ($row[0]==0)
              {
               echo "<button style='background-color:red;color:white';>Not Solved</button>";

              }
              else
              {
               echo "<button style='background-color:green;color:white';>Solved</button>";
              }
            }
            ?>
         </td>
      </tr>
   </tbody>
</table>
<hr>


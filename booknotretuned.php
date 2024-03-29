<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="background-color: blue; color:white";>
    <h3>Check Issued Books List</h3>
</div>
    <form method="post">
        <button name="serchbuttons" value="Book Not Returned" style="background-color: green;color:white ">Search</button>
    </form>
</body>
</html>
<hr>
<?php
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
if(isset($_POST['serchbuttons']))
{
$query="SELECT userinfo,booknumber,status FROM userbookinf ;";
$connection =mysqli_query($databaseconnection,$query);

}

 ?>
<!-- nnnn -->

<table border="1" cellpadding="25">
<thead>
    <tr>
        <td> Userid </td>
        <td> Book Id  </td>
        <td> Return Status </td>
    </tr>
</thead>
<tbody>
<?php
while ($row=mysqli_fetch_assoc($connection))
{
     echo "<tr>";
     echo "<td>";
     echo $row['userinfo'];
     echo "</td>";
     echo "<td>";
     echo $row['booknumber'];
     echo "</td>";
     echo "<td>";
     if ($row['status']=='0')
     {
           echo "<button style='background-color:Red;color:white' onclick='notsubmitted()'> Not Returned</button>";
     }
     if ($row['status']=='1')
     {
           echo "<button style='background-color:Green;color:white' onclick='submitted()'>Returned</button>";
     }
     echo "</td>";
     echo "</tr>";
}?>
</tbody>
</table>
<script>
    function notsubmitted()
    {
        alert ("Not Submitted");
    }
    function submitted()
    {
        alert ("Submitted");
    }
</script>
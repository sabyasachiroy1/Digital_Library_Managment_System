<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<h3>Recive Book</h3> <hr>
<div class="container">
  <form method="post">
    <label for="bookid">Book Id</label>
    <input type="text" id="bookid" name="bookidss"> 
    <input type="submit" value="Recive" name="buttonones">
  </form>
</div>

</body>
</html>
<!-- php -->
<?php 
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
if(isset($_POST['buttonones']))
{
$recivebook =$_POST['bookidss'];
$recivequery="UPDATE userbookinf set status='1' WHERE booknumber='$recivebook';";
$dbgo =mysqli_query($databaseconnection,$recivequery);
if (!$dbgo)
{
  echo "Unable To Return Book";
}
else {
  echo "<script>alert('Book Returned Successfully');</script>" ;
}
}
?>
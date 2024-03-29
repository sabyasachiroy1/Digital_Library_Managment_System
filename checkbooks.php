<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Books</title>
</head>
<body>
<div class="headingcontainers">
<a href=""class="headingmains">Check Books</a>
</div>
<fieldset style="margin-top: 25px;">
<ul type="none">
<li>
    <form method="post">
<li style="margin-top: 5px;">
<li style="margin-top: 5px;">
<label for="Bookuniqueid"><strong>Book Idno : </strong></label>
<input type="text" id="Bookuniqueid" name="boookidss" style="width:40%; height:25px; outline:1px solid white; border:1px solid white;border-bottom:1px solid black">&nbsp;&nbsp;
</li>
<li>
<button style="background-color: red; color: white; border-radius: 2px; margin-top: 12px;">Check</button>
</li>
</ul>
</form>
</fieldset> 
</body>
</html>

<!-- php codesss-------------- -->
<?php 
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
@$ids =$_POST['boookidss'];
$checkbook ="SELECT bookname,bookcategory,bookauthour,publishername,bookid FROM newbooks WHERE bookid='$ids'";
@$con=mysqli_query($databaseconnection,$checkbook);
$values='';
$sign='';
if (!$con)
{
    echo "<script>alert('Book Not Found');</script>";
   
}
else {
   $value = mysqli_fetch_assoc($con);
 
@$bookids=$value['bookid'];
@$bookname =$value['bookname'];
@$book_category=$value['bookcategory'];
@$authours =$value['bookauthour'];
@$publisher=$value['publishername'];
$book='';
if ($book_category=='10')
{
    $book ="Nobel Books";
}
else if ($book_category=='11')
{
    $book ="Science Book";
}
else if ($book_category=='12')
{
    $book ="Humanities";
}
else if ($book_category=='13')
{
    $book ="Commerce";
}
else if ($book_category=='14')
{
    $book ="Story Book";
}
else if ($book_category=='15')
{
    $book ="Others";
}
else {
    $book="Magazine/News Paper";
}



// 

   echo "
   <table border='2' style='width:85%;margin-top:2%;'>
   <thead >
   <tr style='background-color:black;color:white';>
   
   <td><strong>Book Id </strong></td>
   <td><strong>Book Name </strong></td>
   <td><strong>Category</strong></td>
   <td><strong>Authours</strong></td>
   <td><strong>Publication</strong></td>
   </tr>
   </thead>
   <tbody>
  
    <td><strong>$bookids</strong></td>
    <td><strong>$bookname </strong></td>
    <td><strong> $book</strong></td>
    <td><strong>$authours </strong></td>
    <td><strong>$publisher</strong></td>
    </tbody>
   </table>
   ";
   unset($bookids);
}

?>
 
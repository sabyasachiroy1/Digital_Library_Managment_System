<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<body>
    <div class="headingcontainers">
        <a href=""class="headingmains">BOOKPLUS LIBRARY NEW BOOK ADD</a>
        </div>
<fieldset style="margin-top: 25px;">
    <legend><strong>New Book Add</strong></legend>
   <ul type="none">
    <form method="post">
    <li>
        <label for="bookname"><strong>Book Name</strong></label>
        <input type="text" id="bookname" name="booknames" required>&nbsp;&nbsp;&nbsp;
        <label for="booktype"><strong>Book Category</strong></label>
         <select name="bookcategory" required>
            <option value="null">Select Book Type</option>
            <option value="10">Nobel Book</option>
            <option value="11">Science</option>
            <option value="12">Humanities</option>
            <option value="13">Commerce</option>
            <option value="14">Story Book</option>
            <option value="15">Others</option>
         </select>&nbsp;&nbsp;&nbsp;
         <label for="author"><strong>Authour </strong></label>
        <input type="text" id="author" name="authournamesd" required>&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="publication"><strong>Publication Name </strong></label>
        <input type="text" id="publication" name="publicationname" required>
    </li>
    <li>
        <button style="background-color: red; color: white; border-radius: 2px; margin-top: 12px;">Submit</button>
    </li>
    </ul>
    </form>
</fieldset> 
</body>
</html>
<!-- php code -->
<?php
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
$databaseconnection = mysqli_connect($host,$username,$password,$databasename);
@$bookname =$_POST['booknames'];
@$bookcategory=$_POST['bookcategory'];
@$author= $_POST['authournamesd'];
@$publication=$_POST['publicationname'];
$a=Date(1,24);
$v=strlen($bookname);
$n=$a+time();
$s=rand(01,250);
$bookid=$v+$n+$s;
$timezone =date_default_timezone_get();
date_default_timezone_set('Asia/Kolkata');
$date =date('d.m.y');
$time =date('h:i:sa');




// ----------------------------------------------testing--------------------------------
if ($bookcategory!="null")
{
    $newbookadd =" INSERT INTO newbooks VALUES ('$bookname','$bookcategory','$author','$publication','$bookid');";
    $booktodb = mysqli_query($databaseconnection,$newbookadd);
    $book='';
   
  
    switch($bookcategory)
    {
        case '10':
        $book='Nobel Books';
        break;
        case '11':
        $book='Science';
        break;
        case '12':
        $book='Humanities';
        break;
        case '13':
        $book='Commerce';
        break;
        case '14':
        $book='Story Book';
        break;
        case '15':
        $book='Others';
        break;
        default:
        $book="Magazine";


    }
    $kls='';
    $sign='';
   

if (!$booktodb)
{
    echo'<script>alert("Unable Add Books");
    location.replace("http://localhost/addnewbook.php");
    </script>';
    $kls='0';
}

else {
    $kls='1';
    if ($kls=='0'){
        $sign='❌';
    }
    else if ($kls=='1')
    {
        $sign='✅';
       
    }
    else {
        $sign='⭕';
    }
   echo"
    <table border='2' style='margin-top:25px';>
    <tr>
    <td><strong>Status</strong></td>
    <td><strong>$sign</strong></td>
    </tr>
    <tr>
    <td class='heingparts'><strong>Book Number : </strong></td>
    <td ><strong>$bookid</strong></td>
    </tr>
    <tr>
    <td class='heingparts'><strong>Book Name : </strong></td>
    <td><strong>$bookname</strong></td>
    </tr>
    <tr>
    <td class='heingparts'><strong>Book Category : </strong></td>
    <td><strong>$book</strong></td>
    </tr>
    <tr>
    <td class='heingparts'><strong>Authour Name: </strong></td>
    <td><strong>$author</strong></td>
    </tr>
    <tr>
    <td class='heingparts'><strong>Publisher </strong></td>
    <td><strong>$publication</strong></td>
    </tr>
    <tr>
    <td class='heingparts'><strong>Date </strong></td>
    <td><strong>$date</strong></td>
    </tr>
    <td class='heingparts'><strong>Time </strong></td>
    <td><strong>$time</strong></td>
    </table>
    ";

unset($bookname,$bookcategory,$author,$bookid);
echo "<script>alert('New Book Add Sucessfully');</script>";


}

}
// 
else {
    echo'<script>
    confirm("Please Select Book Category");
    location.replace("http://localhost/addnewbook.php");
</script>';
}
?>
<style>
    .heingparts {
        background-color:black;
        color: white;
    }
</style>
<?php 
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
$con= mysqli_connect($host,$username,$password,$databasename);
if ($con !=$con)
{
   echo'<script>alert("Unable To Process Your Request");
   location.replace("http://localhost/support.php");
   </script>';
  
}
else {
    $customername=$_POST['fullnames'];
    $email_adress =$_POST ['emailadress'];
    $issue= $_POST ['supportinssuetype'];
    $mesasage =$_POST['subjectmessage'];
    $support='0';
    $a = date("ABC");
    $n= strlen($customername);
    $b= $a.time()+$n;
    $datainsert ="insert into  supportmessage values ('$b','$customername','$email_adress',' $issue','$mesasage','$support');";
    $test =mysqli_query($con,$datainsert);
    if (!$test)
    {
        echo'<script>alert("Unable To Process Your Request");
   location.replace("http://localhost/support.php");
   </script>';
    }
    else {
         
        echo'<script>alert("Request Submitted Sucsessfully");</script>';
        echo "<h1>Abc Library</h1>\n<hr>\nReference Id  : $b";
        echo "<hr>";
         echo "(\nSave The Document For Future Reference)\n";
        echo "<hr>";
        echo "<button style='background-color:blue;color:white'><a href='http://localhost' style='color:white';>Back</a></button> &nbsp;";
        echo "<button onclick='window.print();'style='background-color:pink;color:black';>Print</button>";
        
    }
    
}
?>

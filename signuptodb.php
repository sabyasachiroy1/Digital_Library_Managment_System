<?php 
$host ='localhost';
$username='root';
$password='';
$databasename='libraryproject';
$con= mysqli_connect($host,$username,$password,$databasename);
if ($con !=$con)
{
   echo'<script>alert("❌Failed To Submit The Form");
   location.replace("http://localhost/");
   </script>';
}
else {
$firstname =$_POST['Firstnames'];
$lastname =$_POST['lastnames'];
$dob =$_POST['dateofnirths'];
$gender =$_POST['gender'];
$mobileno =$_POST['contactnumbers'];
$mailid=$_POST['emailidformemebers'];
$userid= $_POST['createuserids'];
$passworfirst=$_POST['passwordone'];
$conformpassword= $_POST['passwordoneconform'];
$mainpasscode=$conformpassword;
$idcardname=$_POST ['idcardtypes'];
$idnumber =$_POST ["idnumbers"];
$accsesslevel='99';
$status='0';
$a=time();
$n= strlen($lastname)+ strlen($firstname);
$rscodes= $a+$n;
if ($mainpasscode==$passworfirst and $idcardname!="null")
{
 $securepassword=md5("$conformpassword");
$insertquery="insert into new_member_registration values ('$firstname','$lastname','$dob','$gender','$mobileno','$mailid','$userid','$securepassword','$idcardname','$idnumber','$status','$rscodes','$accsesslevel')";
$concheck =mysqli_query($con,$insertquery);
if (!$concheck)
{
    echo'<script>alert("Unable To Process Your Request");
    location.replace("http://localhost/");
    </script>';
}
else {
    echo'<script>alert("Membership Application Submitted Sucsessfully");</script>';
    echo "<h1>BookPlus Library</h1>\n<hr>\nRegistration Number  : $rscodes";
    echo "<hr>";
    echo "Verification: ❌";
    echo "<hr>";
    echo "<h2><marquee style='color: red;'>Please Visit the library with actual id card to verify your account,else you will be unable to login into your account;</marquee></h2>";
    echo "(\nSave The Document For Future Reference)\n";
    echo "<hr>";
    echo "<button style='background-color:blue;color:white'><a href='http://localhost' style='color:white';>Back</a></button> &nbsp;";
    echo "<button onclick='window.print();'style='background-color:pink;color:black';>Print</button>";
    
   

}
}
// 
else {
    echo'<script>
    confirm("Please Fill The Form Properly");
    location.replace("http://localhost");
</script>';
}
}



?>

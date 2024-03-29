<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>New Member Registation Form</title>
</head>
<body>
<table border="2" style="width: 100%;">
    <thead>
        <tr colspan="2">
            <td class="headinmgsets">
                <h3 id="mainheadingsets"><pre><a href="/index.html">BOOKPLUS LIBRARY  NEW MEMBER  REGISTRATION  FORM </a></pre> </h3>
            </td>
        </tr>
    </thead>
    
</table>
<form action="/signuptodb.php" method="post">
<fieldset class="fieldsetcopys">
<table style="width: 100%; margin-top: 12px; border: 1px dotted;">
<tr>
    <td colspan="2" class="bannertypes">
   <b> Personal Details </b>
    </td>
</tr>
<tr>
    <td>
        <label for="firstname"><strong>First Name </strong></label>
    </td>
    <td>
        <input type="text" required id="firstname" class="inputforemployeeregistratiosn" name="Firstnames">
    </td>
</tr>
<tr>
    <td>
        <label for="lastname"><strong>Last  Name </strong></label>
    </td>
    <td>
        <input type="text" required id="lastname" class="inputforemployeeregistratiosn" name="lastnames">
    </td>
</tr>
<tr>
    <td>
        <label for="dateofbirth"><strong>Date Of Birth </strong></label>
    </td>
    <td>
        <input type="date" id="dateofbirth" required class="inputforemployeeregistratiosn" name="dateofnirths">
    </td>
</tr>
<tr>
    <td>
        <label for="gender"><strong>Gender </strong></label>
    </td>
    <td>
        <input type="radio" required value="Male" name="gender">Male
        <input type="radio" required value="Female" name="gender">Female
        <input type="radio" required value="others" name="gender">Others
    </td>
    
</tr>
<tr>
    <td>
        <label for="mobile_no"><strong>Contact No </strong></label>
    </td>
    <td>
        <input type="number" required id="mobile_no" class="inputforemployeeregistratiosn" name="contactnumbers" maxlength="10">
    </td>
</tr>
<tr>
    <td>
        <label for="email_id"><strong>Email Id </strong></label>
    </td>
    <td>
        <input type="email" required id="email_id" class="inputforemployeeregistratiosn" name="emailidformemebers">
    </td>
</tr>
<tr>
    <td colspan="2" class="bannertypes">
   <b> User Id/Password </b>
    </td>
    <tr>
        <td>
        <label for="defaultconformatuosn"><strong>Make Email Id As Default User Id </strong></label>
        </td>
        <td>
        <input type="checkbox" required id="defaultconformatuosn"  name="defaultconformatiosn" onclick="emailasuserid()" value="1" >
        </td>
    </tr>
    <tr>
        <td>
            <label for="useridata"><strong>Create User Id</strong></label>
        </td>
        <td>
            <input type="text" required id="useridata" class="inputforemployeeregistratiosn" name="createuserids">
        </td>
    </tr>
</tr>
<tr>
    <td>
        <label for="passwordone"><strong>Create Password </strong></label>
    </td>
    <td>
        <input type="password" required id="passwordone" class="inputforemployeeregistratiosn" name="passwordone">
    </td>
</tr>
<tr>
    <td>
        <label for="passwordtwo"><strong>Conform Password </strong></label>
    </td>
    <td>
        <input type="password" required id="passwordtwo" class="inputforemployeeregistratiosn" name="passwordoneconform">
    </td>
</tr>
</tr>
</tr>
<tr>
        <td colspan="2" class="bannertypes">
       <b>Identity Proof</b>
        </td>
    </tr>
    <tr>
        <td>
            <label for="identitycard"><strong>Identity Card Name  </strong></label>
        </td>
        <td>
            <select class="inputforemployeeregistratiosn" name="idcardtypes">
             <option value="null">Select Id Card </option>
             <option value="school/collegeId"><strong>School/College Id Card </strong></option>
             <option value="Aadhar"><strong>Aadhar Card</strong></option>
             <option value="voter"><strong>Voter Card</strong></option>
             <option value="others"><strong>Others</strong></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="id_card_number"><strong>Identity Card Number</strong></label>
        </td>
        <td>
            <input type="text" required id="id_card_number" class="inputforemployeeregistratiosn" name="idnumbers">
        </td>
    </tr>
   <tr>
    <td colspan="2">
        <button class="buttonmenus "style="background-color: green;"> Submit </button>
        <input type="reset" class="buttonmenus" style="background-color: red;">
    </td>
    </tr>
</table>
</fieldset>
</form>
</body>
</html>
<style>
    *{
        cursor: pointer;
    }
body {
    background-color: rgb(251, 254, 255);
}
.bannerdivs {
    background-color: rgb(244, 6, 6);
    color: white;
    height: 25px;
    text-align: center;

}
.fieldsets{
    height:50px;
    border: 2px solid rgb(0, 0, 0);
}
.buttonmenus {
margin: 10px;
font-size: 1em;
height: 30px;
width: fit-content;
display: inline-block;
background-color: rgb(158, 6, 6);
color: white;

}
/* employee registation  */
.headinmgsets{
    background-color: rgb(0, 12, 21);
    color: white;
    text-align: center;
}
.inputforemployeeregistratiosn {
    height: 25px;
    width: 98%;
    font-size: 1em;
}
.bannertypes {
    height: 25px;
    background-color: black;
    color: white;
    text-align: center;
    
}
label {
    padding-left: 5px;
}

.fieldsetcopys {
    overflow: auto;
    height:420px;
    width: 80%;
    margin-left: 10%;
}
a{
    text-decoration: none;
    color: white;
}

</style>

<script>
    function emailasuserid()
    {
        
        let a = document.getElementById("defaultconformatuosn").value;
        if (a==1)
        { 
             let emails= document.getElementById("email_id").value;
            let userid = document.getElementById("useridata").value=emails;
          
        }
        
    }
</script>
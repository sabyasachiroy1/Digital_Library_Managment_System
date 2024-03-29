
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/power.js">      
    </script>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div class="wholecodes">
<main>

    <fieldset class="fieldsets">
        <div class="bannerdiv">
           <h3 id="bannerlogos"> <pre>BOOK PLUS LIBRARY LOGIN</pre> </h3>
        </div>
       <div class="loginsets">
        <form action="/adminusermembercheck.php" method="post">
            <table  id="tableforloin">
                <tr>
                    <td><label for="loginas"><strong><img src="/privacy.png" class="loginasimages"></strong></label></td>
                    <td>
                      <select name="usertypes" required>
                        <option value="10">Select Login Type</option>
                        <option value="99">Member</option>
                        <option value="100">Staff</option>
                        <option value="101">Admin</option>
                        </select>   
                    </td>
                  </tr>
              <tr>
                <td><label for="userid"><strong>User Id <sup style="color: red;">*</sup></strong></label></td>
                <td><input type="text" id="userid" class="logininputs" name="userids" required></td>
              </tr>
              <tr>
                <td><label for="password"><strong>Password<sup style="color: red;">*</sup></strong></label></td>
                <td><input type="password" id="password" class="logininputs" name="passcodess" required></td>
               </tr>
              
  <tr>
   <td><input type="submit" value="Login" id="buttons" name="buttonforredirect"></td></tr>
            </table>
            
        </form>
       </div>
     
    </fieldset>
  </main>
</div>
</body>
</html>

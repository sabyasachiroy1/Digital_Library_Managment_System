<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select,textarea,#email{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
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

<h3>Support</h3> <hr>

<div class="container">
  <form action="/contactissuesupport.php" method="post">
    <label for="fullname">Name</label>
    <input type="text" id="fullname" name="fullnames" placeholder="Your name.." required>

    <label for="email">Email Id</label>
    <input type="email" id="email" name="emailadress" placeholder="Your Email Id" required>

    <label for="Types">Type</label>
    <select name="supportinssuetype" >
    <option value="null" required>Select Issue Type</option>
          <option value="Signup">Unable To Signup</option>
      <option value="Login">Unable To Login</option>
      <option value="Enquery">Enquery</option>
      <option value="Report">Report</option>
      <option value="others">Others</option>
    </select>

    <label for="subject">Please Write About the issue</label>
    <textarea id="subject" name="subjectmessage" style="height:100px" required></textarea>

    <input type="submit" value="Submit" name="submitbutton">
  </form>
</div>

</body>
</html>

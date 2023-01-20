<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style1.css" />
    <title>SIGNUP</title>
  </head>
  <body class="bgnd">
    <div class="sign">
      <form id="sign" method="POST">
        <br /><br />
        <label for="name"><b>NAME</b> </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" size="20" name="dbname" required/>
        <br /><br />
        <label for="age"><b>AGE</b> </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text"size="20" name="dbage" required />
        <br /><br />

        <label for="gender"><b>GENDER</b> </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" size="20" name="dbgender" required />
        <br /><br />

        <label for="phno"><b>PHONE NUMBER</b> </labe>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="integer" style="font-weight:normal" size="20" name="dbphno" required />
        <br /><br />

        <label for="aadharno"><b>AADHAR NUMBER</b> </label>&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="integer" style="font-weight:normal" size="20"name="dbaadhar" required />
        <br /><br />

       <label for="usname"><b>USERNAME</b> </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text"  style="font-weight:normal" size="20"  name="dbusername" required />
        <br /><br />

        <label for="pass"><b>PASSWORD</b> </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="password" style="font-weight:normal" size="20" name="dbpassword" required />
        <br /><br />


        <button type="submit" class="signup_btn" name="signupbutton">SIGNUP</button>
        <br /><br />
        <br /><br />
      </form>
    </div>

    <?php
if(isset($_POST["signupbutton"])){  
$con = mysqli_connect('localhost', 'root', '','railway');

// get the post records
$dbname = $_POST['dbname'];
$dbage = $_POST['dbage'];
$dbgender = $_POST['dbgender'];
$dbphno = $_POST['dbphno'];
$dbaadhar= $_POST['dbaadhar'];
$dbusername= $_POST['dbusername'];
$dbpassword = $_POST['dbpassword'];


// database insert SQL code
$sql = "INSERT INTO `user` (`dbid`,`dbname`,`dbage`,`dbgender`,`dbphno`,`dbaadhar`,`dbusername`,`dbpassword`) VALUES ('0','$dbname','$dbage','$dbgender','$dbphno','$dbaadhar','$dbusername','$dbpassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

header("Location: login.php");  
}
?>
  </body>
</html>

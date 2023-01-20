<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>LOGIN</title>
  </head>
  <body class="demo">
    <div class="login">
      <form id="login" method="post">
        <br /><br />
        <label for="username"><b>USERNAME</b> </label>&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="username" required />
        <br /><br />
        <label for="password"><b>PASSWORD</b> </label>&nbsp&nbsp&nbsp&nbsp
        <input type="Password" name="password" required />
        <br /><br />
        <button type="submit" class="login_btn" name="loginbutton">
          LOGIN
        </button>
        <br /><br />
        <br /><br />
      </form>
    </div>
    <?php  
if(isset($_POST["loginbutton"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $username=$_POST['username'];  
    $password=$_POST['password'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con, "railway") or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM user WHERE dbusername='".$username."' AND dbpassword='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['dbusername'];  
    $dbpassword=$row['dbpassword'];  
    }  
  
    if($username == $dbusername && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$username;  
  
    /* Redirect browser */  
    header("Location: home.php");  
    }  
    } 
    else if($username == 'admin' && $password == 'pass') {
      header("Location: admin.php"); 
    }
    else {  
    echo '<script>alert("INVALID USERNAME OR PASSWORD")</script>';
    }  
  
} else {  
    echo '<script>alert("ALL FIELDS ARE REQUIRED")</script>';  
}  
}  
?>
    <script>
      // Get the modal
      var modal = document.getElementById("id01");

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    </script>
  </body>
</html>

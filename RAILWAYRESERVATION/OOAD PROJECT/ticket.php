<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style4.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header_img">
 <a href=""><img class="img_head" src="data:image/png;base64,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"></a>
  <br><div class="para" style="color:#5b5e56">RAILWAY&nbspRESERVATION&nbspSYSTEM</div>
  <a href=""><img class="imge" src="data:image/jpeg;base64,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"></a>
</div>
</div>

<div style="padding-left:16px">
</div>

<?php
if(isset($_POST["submitbutton"])){  
$con = mysqli_connect('localhost', 'root', '','railway');

// get the post records
$cusname = $_POST['cusname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address= $_POST['address'];
$mobno= $_POST['mobno'];
$aadhar = $_POST['aadhar'];
$trainno = $_POST['trainno'];
$classtrain = $_POST['classtrain'];
$random=rand(10000,20000);
$sql = "INSERT INTO `booking` (`dbid`,`dbname`,`dbage`,`dbgender`,`dbdob`,`dbaddress`,`dbmobno`,`dbaadhar`,`dbtrano`,`dbclass`,`dbtickno`) VALUES ('0','$cusname','$age','$gender','$dob','$address','$mobno','$aadhar','$trainno','$classtrain','$random')";
$rs = mysqli_query($con, $sql);
if($rs){
    echo '<script type="text/javascript">';
    echo 'alert("YOUR BOOKING HAS BEEN SUCCESSFULLY DONE");';
    echo '</script>';
  }
$sqll="SELECT * from `booking` WHERE dbtickno='".$random."'";

if($classtrain=='AC FIRST CLASS'){
  $sl="UPDATE schedule SET dbacfirstclass=dbacfirstclass-1 WHERE dbtrano=$trainno";
  $sq=mysqli_query($con,$sl);
}
if($classtrain=='FIRST CLASS'){
  $sl="UPDATE schedule SET dbfirstclass=dbfirstclass-1 WHERE dbtrano=$trainno";
  $sq=mysqli_query($con,$sl);
}
if($classtrain=='SLEEPER'){
  $sl="UPDATE schedule SET dbsleeperclass=dbsleeperclass-1 WHERE dbtrano=$trainno";
  $sq=mysqli_query($con,$sl);
}
$rsa=mysqli_query($con, $sqll);
while($r=mysqli_fetch_assoc($rsa)){
?>

<br><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="name">NAME</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" size="20"style="font-size:20px" name="cusname" value="<?php echo $r['dbname'];?>" readonly />
        <br /><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label for="name">AGE</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" size="20"style="font-size:20px" name="age" value="<?php echo $r['dbage'];?>" readonly />
        <br /><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label for="name">GENDER</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" size="20"style="font-size:20px" name="gender" value="<?php echo $r['dbgender'];?>" readonly />
        <br /><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label for="name">DATE OF BIRTH</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="date" size="20"style="font-size:20px" name="dob" value="<?php echo $r['dbdob'];?>" readonly />
        <br /><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label for="name">ADDRESS</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" size="20" style="font-size:20px" name="address"  value="<?php echo $r['dbaddress'];?>" readonly/>
        <br /><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label for="name">MOBILE NUMBER</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" size="20" style="font-size:20px" name="mobno" value="<?php echo $r['dbmobno'];?>" readonly />
        <br /><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label for="name">AADHAR&nbspNUMBER</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="integer" size="20" style="font-size:20px" name="aadhar"  value="<?php echo $r['dbaadhar'];?>" readonly />
        <br /><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label for="name">TRAIN NUMBER</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="integer" size="20" style="font-size:20px" name="trainno"  value="<?php echo $r['dbtrano'];?>" readonly />
        <br /><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       
        <label for="name">CLASS</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="integer" size="20" style="font-size:20px" name="class"  value="<?php echo $r['dbclass'];?>" readonly />
     <br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label for="name">TICKET&nbspNUMBER</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="integer" size="20" style="font-size:20px" name="tickno"  value="<?php echo $r['dbtickno'];?>" readonly />
     
        <br /><br><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button name="print" type="submit" class="submitbook"style="font-size:20px" onclick="window.print();">PRINT</button>
<br><br>
<?php
}
}
?>
 

</body>

</html>
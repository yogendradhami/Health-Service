<?php
session_start();
if (!isset($_SESSION['email'])) {
   header("Location:../home.php");
}
if(isset($_POST["changepsw"]))
{
$email = $_SESSION['email'];
$oldpsw= md5($_POST["oldpsw"]);
$newpsw= md5($_POST["newpsw"]);
$conpsw= md5($_POST["conpsw"]);
require("../requires/db.php");
$qry1 = "SELECT * FROM blood_signup where email='$email';";
$re = mysqli_query($conn,$qry1);
$row = mysqli_fetch_array($re);
$dbpsw= $row['password'];
 
if($dbpsw==$oldpsw)
{
 
if($newpsw==$conpsw)
{
 
$qrys="UPDATE blood_signup SET password='$newpsw' WHERE email='$email';";
$results= mysqli_query($conn,$qrys);
if($results==true)
{
session_destroy();
?>
<script>alert("Password Change Successfully");
window.location.href = "memberprofile.php";
</script>
<?php
}
else
{
?>
<script>alert("Password Not Changed");
window.location.href = "changepassword.php";
</script>
<?php
}
mysqli_close($conn);
}
else
{
?>
<script>alert("Password Not Matched");
window.location.href = "changepassword.php";
</script>
<?php
}
}
else
{
?>
<script>alert("Old password is wrong");
window.location.href = "changepassword.php";
</script>
<?php
}
}
?>
<!DOCTYPE html>

    <head>
        <title>Home care</title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Blood Donation Website">
        <meta name="author" content="Exceptional Programmers">

        <link rel="stylesheet" href="style.css">

        <!-- Bootstrap Link CSS Files -->
    
        <link rel="stylesheet" type="text/css" href="../bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<style type="text/css">
    #nav1{
  height: 75px;
    background-color: crimson;
}
#nav1 #a{
  color: white;
  text-decoration: none;
  font-size: 50px;
  position: relative;
  top: 10px;
  right:20px;
  text-align:right;
}
/*.page-footer{
  position:fixed;
  bottom:0px;
  width:100%;
}
*/


</style>
    </head>
<body>
     <div id="nav1">
        <h1 id="a" href="#">HOMEPAGE</h1>
    </div> 
<?php
include('header.php');

?>


  <center><h2>Change Password</h2></center><hr>
<form method="post" action="#">
<label>Current Password</label>
     <div class="form-group pass_show"> 
                <input type="password"  class="form-control" placeholder="Current Password" name="oldpsw"> 
            </div> 
        <label>New Password</label>
            <div class="form-group pass_show"> 
              <input class="form-control " type="password" required=" " id="pass1" name="newpsw" placeholder="Password">
            </div> 
        <label>Confirm Password</label>
            <div class="form-group pass_show"> 
               <input class="form-control " type="password" required=" " id="pass2" onkeyup="checkPass(); return false;" placeholder="Confirm Password" name="conpsw">
                                         <span id="confirmMessage"></span>
            </div> 
            <div class="form-group pass_show"> 
                <input type="submit"  class="btn btn-primary" value="Change Password" name="changepsw" id="cp"> 
            </div> 
            </form>
<?php
include('footer.php');

?> 

</body>
<script src="../jquery-3.5.1.slim.min.js"></script>
<script src="../bootstrap.bundle.min.js" ></script>
    
    <!-- Fontawesome Icon JS-->
    

<script type="text/javascript">
  function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
        $('#cp').prop('disabled', false);
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
        $('#cp').prop('disabled', true);
    }
}  
</script>

<script type="text/javascript">
  function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
        $('#cp').prop('disabled', false);
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
        $('#cp').prop('disabled', true);
    }
}  
</script>
    
</html>
    


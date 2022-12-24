<?php
session_start();
 include_once "requires/db.php";

if(isset($_POST['login'])){
 $email=$_POST['email'];
 $password=md5($_POST['password']);
 if ($email== "" && $password == ""){
 	echo "<script>alert('Please enter email/password to login')</script>";
 }
 else{
 $sql="SELECT * FROM blood_signup WHERE email='$email' and password='$password'";
 $res=mysqli_query($conn,$sql);
 
 $numRows=mysqli_num_rows($res);
 	if($numRows==1) {
        session_start();
        $_SESSION["email"] = $email;
        header("Location:member/memberprofile.php");
    } else {
        $_SESSION['msg1']="Invalid Login Information";   
    }
	
}
}
?>


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
/*form*/
main .card {
  background-color: #3475;
  background: linear-gradient(
    to right,
    #f83600,
    #fe8c00
  );
  background: -webkit-linear-gradient(
    to right,
    #f83600,
    #fe8c00
  ); 
}


h3 {
  font-family: Times New Roman;
  font-weight: bold;
}
hr {
  border-bottom: solid white 1px;
}

.btn-block {
  background: #0f2027; /* fallback for old browsers */
  background: -webkit-linear-gradient(
    to right,
    #2c5364,
    #203a43,
    #0f2027
  ); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(
    to right,
    #2c5364,
    #203a43,
    #0f2027
  ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

input {
  background-color: #3475 !important;
  color: white !important;
}

::placeholder {
  color: white !important;
}



</style>
	</head>
<body>
	 <div id="nav1">
        <h1 id="a" href="#">DONATE THE BLOOD</h1>
    </div> 
<?php
include('home.php');

?>
<p style="color:red"><?php echo $_SESSION['msg1']='';?></p>	
<main class="container my-5">
  <div class="row">

    <section class="col-md-6 my-5 offset-md-3">

      <div class="card shadow p-5">
        <form action="signin.php" method="post">

          <h3 class="text-center text-uppercase mb-4">Login</h3>
          <hr>

          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" class="form-control">
          </div>

          <label for="Password">Password</label>
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" aria-label="Enter Password" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2"><i class="fa fa-eye" aria-hidden="true"></i>
              </span>
            </div>
          </div>

          <button name="login" class="btn btn-block btn-secondary rounded-pill mt-3">Login</button>

          <p class="mt-3 text-white">Don't have an Account ? <a href="signup.php" class="text-white"> Create Here</a></p>

        </form>
      </div>
    </section>
  </div>
</main>
<?php include 'footer.php';
?>

</body>
<script src="jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap.bundle.min.js" ></script>
    
    <!-- Fontawesome Icon JS-->
    <script defer src="fontawesome/js/all.js"></script>

	

<script>
		$(document).ready(function () {
  $("#basic-addon2").click(function () {
    let passwordField = $("#password");
    let passwordFieldAttr = passwordField.attr("type");

    if (passwordFieldAttr == "password") {
      passwordField.attr("type", "text");
      $(this).html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
    } else {
      passwordField.attr("type", "password");
      $(this).html('<i class="fa fa-eye" aria-hidden="true"></i>');
    }
  });
});

	</script>
</html>

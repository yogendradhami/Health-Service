<?php
require 'requires/db.php';
if(isset($_POST['Submit'])){
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$contactno=$_POST['contactno'];
	$password=$_POST['password'];
	$hpassword=md5($password);
	$dateofbirth=$_POST['dateofbirth'];
	$gender=$_POST['gender'];
	$bloodgroup=$_POST['bloodgroup'];
	$city=$_POST['city'];
	// image

	$imagefilename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];    
    $folder = "userimage/".$imagefilename;
      move_uploaded_file($tempname, $folder);

    $sql="INSERT INTO pt(firstname,middlename,lastname,email,contactno,password,dateofbirth,gender,bloodgroup,city,image) values ('$firstname','$middlename','$lastname','$email','$contactno','$hpassword','$dateofbirth','$gender','$bloodgroup','$city','$imagefilename')";
   $query=mysqli_query($conn,$sql);
   if($query){
   	echo "<script>alert('You created account Sucessfully')</script>";
   }

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
	<title></title>
</head>
<body>

</body>
</html>

<style type="text/css">
	
	#nav1{
  height: 75px;
    background-color: crimson;
}
/*#nav1 #a{
  color: white;
  text-decoration: none;
  font-size: 50px;
  position: relative;
  top: 10px;
  right:20px;
  text-align:right;
}
.red-bar{
	color: red;
}*/
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'poppins',sans-serif;
}
body{
	background:rgba(255, 200, 144, 0.5);
	
}
.container{
	/*text-align: center;*/
	/*margin-top:20px ;*/
	margin-left: 400px;
}
.form-container h3{
	font-size: 50px;
	font-weight: 600;
	color: aqua;
	text-decoration: underline;
}
.form-group{
	line-height: 50px;
	}
	.form-group h1{
		margin: 10px;
	}
	#body .form-group{
		color: red;
		font-size: 20px;
	}
<?php 
	include 'home.php';
?>


</style>

<body>
<div class="container size" >
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
					<!-- <hr class="red-bar" -->
					
          <form action="signup.php" method="post" enctype="multipart/form-data">

	<div id="form-group">
<h1>Register For Donate Blood</h1>
<p>it's quick and easy.</p></div>

	
<div id="body">
	 <div class="form-group">
	 <label for="First Name">First Name:</label>
	<input type="text" name="firstname" placeholder="First name" class="form-control">
</div>
 <div class="form-group">
	<label for="Middle Name">Middle Name:</label>
	<input type="text" name="middlename" placeholder="Middle name" class="form-control">
</div>
 <div class="form-group">
	<label for="Last Name">Last Name:</label>
	<input type="text" name="lastname" placeholder="last name" class="form-control">
</div>
	 <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
					</div>
	<!-- <input type="number/username" name="" placeholder="Mobile number or email address"><br> -->


	<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contactno" value="" placeholder="03********" class="form-control"  maxlength="10">
            </div><!--End form-group-->
	<!-- <input type="password" name="" placeholder="New password"><br> -->
	 <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern="{6,}">
            </div><!--End form-group-->
           <!--  <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}">
            </div> --><!--End form-group-->
            <div class="form-group">
	  <label for="date">Birthday</label><br>
	<input type="date" name="dateofbirth" class="form-control">
	</div>

	<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		<input type="radio" name="gender" id="gender" value="Male">  Male
				              		<input type="radio" name="gender" id="gender" value="Female">    Female
				    </div><!--gender-->

<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="bloodgroup" required>
                <option value="">---Select Your Blood Group---</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div><!--End form-group-->
<!-- -->

            <div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
				<option value="">--select--</option><optgroup title="kanchanpur(bhimdatta)" label="&raquo; kanchanpur(bhimdatta)"></optgroup>
								<option value="Dodharachadani">Dodharachadani</option><option value="Mahendranagar">Mahendranagar</option><option value="Bharamdeu">Bharamdeu</option><option value="Gaddachauki">Gaddachauki</option>
								<option value="Belauri">Belauri</option><option value="Bhgatpur">Bhgatpur</option><option value="Punarbas">Punarbas</option><option value="Jhalari">Jhalari</option><option value="Daiji">Daiji</option><option value="Kaluwapur">Kaluwapur</option><option value="Baani">Baani</option><option value="Gulariya">Gulariya</option>
								<optgroup title="Kailali" label="&raquo; Kailali"></optgroup>
								<option value="Attariya">Attariya</option><option value="Dhangadi">Dhangadi</option><option value="Tikapur">Tikapur</option><option value="sukhhad">sukhhad</option><option value="bhajani">bhajani</option><option value="Lamki">Lamki</option><option value="Chisapani">Chisapani</option><option value="Musariya">Musariya</option><option value="Chaumala">Chaumala</option>
								<optgroup title="Dadheldhura" label="&raquo; Dadheldhura"></optgroup>
								<option value="Baagbazar">Baagbazar</option><option value="Bagarkot"></option><option value="Bagarkot"></option><option value="Aalitaal">Aalitaal</option><option value="Jogbuda">Jogbuda</option><option value="Naula">Naula</option><option value="Sahukharka">Sahukharka</option>
							</select>
            </div><!--city end-->

<div class="form-group">
				              <label for="gender">Donar Image</label><br>
				              		<input type="file" name="image" class="form-control">
				    </div>
     <div class="form-inline">
              <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					

    	<!-- By clicking Sign Up, you agree to our <a href="terms">Terms</a> -->


	     <div class="form-group">
						<button id="submit" name="Submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Register</button>
					</div>
		</div>
				
			
		</div>
		</form>
	</div>
</div>
	
</div>
</body>

<?php
include('footer.php');

?> 

</body>
<script src="jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap.bundle.min.js" ></script>
    
    <!-- Fontawesome Icon JS-->
    <script defer src="fontawesome/js/all.js"></script>

	

<script>
		

	</script>

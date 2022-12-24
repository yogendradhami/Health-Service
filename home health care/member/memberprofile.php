<?php
session_start();
if (!isset($_SESSION['email'])) {
   header("Location:../home.php");
}
?>
<!DOCTYPE html>

	<head>
		<title>Home  care</title>
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



</style>
	</head>
<body>
	 <div id="nav1">
        <h1 id="a" href="#">HOMEPAGE</h1>
    </div> 
<?php
include('header.php');

?>
<?php require 'patient.php'; ?>

<?php
include('footer.php');

?> 

</body>
<script src="../jquery-3.5.1.slim.min.js"></script>
<script src="../bootstrap.bundle.min.js" ></script>

 
    <!-- Fontawesome Icon JS-->
    <script defer src="fontawesome/js/all.js"></script>

	
</html>


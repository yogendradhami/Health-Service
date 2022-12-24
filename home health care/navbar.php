<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'poppins',sans-serif;
	}
	header{
		z-index: 999;
		position: fixed;
		top: 0;
		left: 0;

		width: 100%;
		display: flex;
		justify-content: space-between;
		align-items: center;
		background: #23252B;
		box-shadow: 0 5px 25px rgba(0 0 0 / 20%);
		padding: 0  100px;
		transition: 0.6s;


	}
	header .logo{
		color: #fff;
		font-size: 1.8em;
		font-weight: 700;
		text-decoration: none;
		letter-spacing: 2px;

	}
	header .navigation{
		position: relative;

		line-height: 75px;
	}
	header .navigation .menu{
		position: relative;
		display: flex;
		justify-content: center;
		list-style: none;
		user-select: none;

	}
	.menu-item > a{
		color: #fff;
		font-size: 1em;
		text-decoration: none;
		margin: 20px;
		padding: 25px 0;
	}
.menu-item > a:hover{
	color: #469DFF;
	transition: 0.3s;
}
.menu-item .sub-menu{
	position: absolute;
	background: #23252B;
	top: 74px;
	line-height: 40px;
	list-style: none;
	border-radius: 0 0 8px 8px;
	box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
	pointer-events: none;
	transform: translateY(20px);
	opacity: 0;
	transition: 0.3s;
	transition-property: transform, opacity;
}
.menu-item:hover .sub-menu{
	pointer-events: all;
	transform: translateY(0);
	opacity: 1;

}

.menu-item .sub-menu .sub-item{
	position: relative;
	padding: 7px 0;
	cursor: pointer;
	box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
}
.menu-item .sub-menu .sub-item a{
	color: #fff;
	font-size: 1em;
	text-decoration: none;
	padding: 15px 30px;
}
.menu-item .sub-menu .sub-item:hover{
	background: #4080EF;
}
.menu-item .sub-menu .sub-item:last-child:hover{
	border-radius: 0 0 8px 8px;
}
i{
	padding-right: 5px;
}
.more .more-menu{
	position: absolute;
	background: #23252B;
	list-style: none;
	top: 0;
	left: 100%;
	white-space: nowrap;
	border-radius: 0 8px 8px 8px;
	overflow: hidden;
	pointer-events: none;
	transform: translateY(20px);
	opacity: 0;
	transition: 0.3s;
	transition-property: transform,opacity;
}
.more:hover .more-menu{
	pointer-events: all;
	transform: translateY(0);
	opacity: 1;	
}
.more .more-menu .more-item{
	padding: 7px 0;
	box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
	transition: 0.3s;

}
.more .more-menu .more-item:hover{
	background: #4080EF;

}
@media (max-width:  1060px){
	header .navigation .menu {
    position: fixed;
    display: block;
    background: #23252b;
    min-width: 350px;
    height: 100vh;
    top: 0;
    right: -100;
    padding: 90px 50px;
    overflow-y: auto;
    /*justify-content: center;*/
    
}
.menu-item{
	position: relative;
}
.menu-item .sub-menu{
	opacity: 1;
	position: relative;
	top: 0;
	transform: translateX(10px);
	background: rgba(255, 255, 255, 0.1);
	border-radius: 5px;
	overflow: hidden;
	/*display: none;*/
}
.menu-item:hover .sub-menu{
	transform: translateX(10px);
}
.menu-item .sub-menu .sub-item{
	box-shadow: none;

}
.menu-item .sub-menu .sub-item:hover{
	background: none;
}
.menu-item .sub-menu .sub-item a:hover{
	color: #4080EF;
	transition: 0.3s;
}
.more .more-menu{
	opacity: 1;
	position: relative;
	left: 0;
	transform: translateY(0);
	background: rgba(255, 255, 255, 0.1);
	border-radius: 5px;
	/*display: hidden;*/
}
.more .more-menu .more-item{
	box-shadow: none;
}
.more .more-menu .more-item:hover{
	background: none;
}
.more .more-menu .more-item a{
	margin-left: 20px;
}
.close-btn{
	position: absolute;
	/*background: url();*/
	top: 0;
	left: 0;
	color: #fff;
	font-size: 50px;
	position: absolute;
	cursor: pointer;
	margin: 15px;
}
.menu-btn{
	font-size: 50px;
	cursor: pointer;
	color: #fff;

}


</style>


<!-- start of heading section -->
<header>
	<a href="home.php" class="logo"><!-- <i class="fas fa-house"></i> -->HOMEPAGE</a>
	<div class="navigation">
		<ul class="menu">
			<!-- <div class="close-btn"> <i class="fas fa-close"></i></div> -->
			<li class="menu-item"><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
			<li class="menu-item">

				<a class="sub-btn" href="purchase.php"><i class="fas fa-shopping-cart"></i>Purchase Medicine <!-- <i class="fas fa-angle-down"></i> --> </a>
				<!-- <ul class="sub-menu">
					<li class="sub-item"><a href="#">sub item1</a></li>
					<li class="sub-item"><a href="#">sub item2</a></li>
					<li class="sub-item"><a href="#">sub item3</a></li>
				</ul> -->

			</li>
			<li class="menu-item">
				<a class="sub-btn" href="dashbord.php"><i class="fas fa-chart-line"></i>Dashbord <i class="fas fa-angle-down"></i></a>
				<!-- <ul class="sub-menu">
					<li class="sub-item"><a href="#">sub item1</a></li>
					<li class="sub-item"><a href="#">sub item2</a></li>
					<li class="sub-item"><a href="#">sub item3</a></li>
					<li class="sub-item more">
						<a class="more-btn" href="#">More Items <i class="fas fa-angle-right"></i></a>
						<ul class="more-menu">
							<li class="more-item"><a href="#">more item1</a></li>
							<li class="more-item"><a href="#">more item2</a></li>
						</ul>

					</li>
					
				</ul> -->
			</li>
			<li class="menu-item"><a href="Service.php"><i class="fab fa-servicestack"></i>Services</a></li>
			<li class="menu-item"><a href="signup.php"><i class="fas fa-user-plus"></i>SignUp</a></li>
			<li class="menu-item"><a href="about.php"><i class="fas fa-address-card"></i>About Us</a></li>
			<!-- <li class="menu-item"><a href="#"><i class="fas fa-home"></i>Profile <i class="fas fa-angle-down"></i></a>
			</li> -->


			<li class="menu-item">

				<a class="sub-btn" href=""><i class="fas fa-user-circle"></i>Profile <i class="fas fa-angle-down"></i> </a>
				<ul class="sub-menu">
					<li class="sub-item"><a href="signin.php">Login</a></li>
					
				</ul>

			</li>

			
		</ul>
		<!-- <div class="menu-btn"> <i class="fas fa-envelope"></i></div> -->
	</div>
</header>



<!-- end of the heading section -->




<!-- start of jquery -->
<script type="text/javascript">
	// jquery for the toggle Dropdown
	$(document).ready(function(){
		// toggle sub-menu
		$(".sub-btn").click(function(){
			$(this).next(".sub-menu").slideToggle();
		});
		// toggle more-menu
		$(".more-btn").click(function(){
			$(this).next(".more-menu").slideToggle();
		});
	});

</script>



<!-- end of the jquery -->
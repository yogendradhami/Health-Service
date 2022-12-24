<div class="menu-btn">
	<i class="fas fa-bars"></i>
</div>


<div class="side-bar">
	<div class="close-btn">
		<i class="fas fa-times"></i>
	</div>
	<div class="menu">
		<div class="item"><a href="#"><i class="fas fa-desktop"></i>Dashbord</a></div>
		<div class="item">

			<a class="sub-btn"><i class="fas fa-table"></i>Tables <i class="fas fa-angle-right dropdown"></i> </a>
				<div class="sub-menu">
					<a href="#" class="sub-item">Sub Item 01</a>
					<a href="#" class="sub-item">Sub Item 02</a>
					<a href="#" class="sub-item">Sub Item 03</a>
				</div>

		</div>
		<div class="item"><a href="#"><i class="fas fa-th"></i>Forms</a></div>
		<div class="item">

			<a class="sub-btn"><i class="fas fa-cogs"></i>Setting  <i class="fas fa-angle-right dropdown"></i></a>
				<div class="sub-menu">
					<a href="#" class="sub-item">Sub Item 01</a>
					<a href="#" class="sub-item">Sub Item 02</a>
					<a href="#" class="sub-item">Sub Item 03</a>
				</div>

		</div>
		<div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
	</div>
</div>

<section class="main">
	<!-- <h1>sidebar menu  with <br>sub menus</h1> -->


	
	
</section>

<script type="text/javascript">
	$(document).ready(function(){
		// jquery for toggle sub-menu
		$('.sub-btn').click(function(){
			$(this).next('.sub-menu').slideToggle();
			$(this).find('.dropdown').toggleClass('rotate');
		});
		// jquery for expand and collapse sidebar
		$('.menu-btn').click(function(){
			$('.side-bar').addClass('active');
			$('.menu-btn').css("visibility", "hidden");
		});
		$('.close-btn').click(function(){
			$('.side-bar').removeClass('active');
			$('.menu-btn').css("visibility", "visible");
		});

	});
</script>
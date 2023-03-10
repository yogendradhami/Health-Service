<?php
	include 'home.php';

?>
<style>
	body{
		margin-top: 100px;
	}
</style>


<body>


    <!-- Menu Bar -->
    <!--/.nav-collapse -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="http://localhost/pharmacy-management-ci/Main/enter">Dashboard</a></li>
					<li><a href="http://localhost/pharmacy-management-ci/ShowForm/create_medicine_name/main">Create Options</a>
					</li>
					<li><a href="http://localhost/pharmacy-management-ci/ShowForm/medicine_purchase_info/main">Inventory</a></li>
					<li><a href="http://localhost/pharmacy-management-ci/ShowForm/sell_medicine/main">Sales</a></li>
					<li><a href="http://localhost/pharmacy-management-ci/ShowForm/profit_loss/main">Accounting</a></li>
					<li><a href="http://localhost/pharmacy-management-ci/ShowForm/manage_staff/main">Manage Staff</a></li>
				</ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#">Welcome</a></li>
                    <li><a href="http://localhost/pharmacy-management-ci/main/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.nav End -->

    <header id="header">
        <div class="container">
            <div class="col-md-10">
                <h2>
                    <i class="fa fa-medkit"></i>
					Pharmacy Management System 
                </h2>
            </div>
        </div>
        
    </header>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Create Option</a></li>
			<li class="active"></li>
		</ol>
	</div>
</section>

<!-- /.container -->
<section id="main">
	<div class="container">

		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="index.html" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Create Option</a>
					<a href="http://localhost/pharmacy-management-ci/ShowForm/create_medicine_presentation/main" class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Medicine Presentation</a>
					<a href="http://localhost/pharmacy-management-ci/ShowForm/create_generic_name/main" class="list-group-item">
						<span class="fa fa-plus-circle" aria-hidden="true"></span> Generic Name </a>
					<a href="http://localhost/pharmacy-management-ci/ShowForm/create_medicine_name/main" class="list-group-item">
						<span class="fa fa-pills" aria-hidden="true"></span> Medicine Name</a>
<!--					<a href="--><!--ShowForm/create_product_category/main" class="list-group-item">-->
<!--						<span class="fa fa-tasks" aria-hidden="true"></span> Product Category</a>-->
<!--					<a href="--><!--ShowForm/create_product_name/main" class="list-group-item">-->
<!--						<span class="fa fa-plus" aria-hidden="true"></span> Product Name</a>-->
					<a href="http://localhost/pharmacy-management-ci/ShowForm/create_supplier/main" class="list-group-item">
						<span class="fa fa-truck-moving" aria-hidden="true"></span> Supplier</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Create Medicine Name</h3>
					</div>

					<div class="panel-body">

						<!-- /.Panel End -->
								<form action="http://localhost/pharmacy-management-ci/index.php/Insert/medicine_name" enctype="multipart/form-data" method="post" accept-charset="utf-8">
								<div class="box-body">
									<div class="row">
									<div class="col-sm-6" style="">
										<label for="generic_name">Generic Name</label>
										<select name="generic_name" id="generic_name" class="form-control selectpicker" data-live-search="true">
											<option value="">-- Select --</option>
																							<option value="Antiviral">Antiviral</option>
																							<option value="Paracetamol">Paracetamol</option>
																							<option value="Amlodipine">Amlodipine</option>
																							<option value="Latanoprost Solution">Latanoprost Solution</option>
																							<option value="Levocetirizine Dihydrochloride">Levocetirizine Dihydrochloride</option>
																							<option value="Meloxicam">Meloxicam</option>
																							<option value="Acyclovir Capsule">Acyclovir Capsule</option>
																							<option value="Simvastatin Tablets">Simvastatin Tablets</option>
																					</select>
									</div>
									<div class="col-sm-6">
<!--									<div class="form-group" style="width: 400px;">-->
										<label for="medicine_name">Medicine Name</label>
										<input type="text" class="form-control" id="medicine_name" placeholder="" name="medicine_name">
<!--									</div>-->
								</div>
									</div>
									<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="submit" class="pull-left btn btn-primary">Create</button>
								</div>
									</div>
								
							</div></form>
					</div>
				</div><!-- /.Panel End -->
				<!-- /.Panel 2nd -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Medicine Name List</h3>
					</div>
					<div class="panel-body">
						<div class="panel-body">
							<table class="table table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th style="text-align: center;">#</th>
									<th style="text-align: center;">Generic Name</th>
									<th style="text-align: center;">Medicine Name</th>
									<th style="text-align: center;">Action</th>
								</tr>
								</thead>
								<!-- /.Row from DB-->
								<tbody>
																	<tr>
										<td style="text-align: center;">1</td>
										<td style="text-align: center;">Antiviral</td>
										<td style="text-align: center;">Antiva??</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/1">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">2</td>
										<td style="text-align: center;">Paracetamol</td>
										<td style="text-align: center;">Napa Extra</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/2">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">3</td>
										<td style="text-align: center;">Paracetamol</td>
										<td style="text-align: center;">Ace Plus</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/3">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">4</td>
										<td style="text-align: center;">Amlodipine</td>
										<td style="text-align: center;">Amdocal 10</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/6">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">5</td>
										<td style="text-align: center;">Amlodipine</td>
										<td style="text-align: center;">Amdocal 5</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/7">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">6</td>
										<td style="text-align: center;">Paracetamol</td>
										<td style="text-align: center;">Notem Plus</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/8">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">7</td>
										<td style="text-align: center;">Paracetamol</td>
										<td style="text-align: center;">Niko</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/9">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">8</td>
										<td style="text-align: center;">Latanoprost Solution</td>
										<td style="text-align: center;">Xalatan</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/10">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">9</td>
										<td style="text-align: center;">Levocetirizine Dihydrochloride</td>
										<td style="text-align: center;">Xyzal</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/11">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">10</td>
										<td style="text-align: center;">Meloxicam</td>
										<td style="text-align: center;">Mobic</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/12">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">11</td>
										<td style="text-align: center;">Acyclovir Capsule</td>
										<td style="text-align: center;">Zovirax</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/13">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">12</td>
										<td style="text-align: center;">Simvastatin Tablets</td>
										<td style="text-align: center;">Zocor</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/14">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">13</td>
										<td style="text-align: center;">Amlodipine</td>
										<td style="text-align: center;">KJHJGHGJH</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/15">Delete
											</a>
										</td>
									</tr>
																	<tr>
										<td style="text-align: center;">14</td>
										<td style="text-align: center;">Latanoprost Solution</td>
										<td style="text-align: center;">IUYJJUIK</td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger" href="http://localhost/pharmacy-management-ci/Delete/medicine_name/16">Delete
											</a>
										</td>
									</tr>
																</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>

<!-- /.Footer -->
<!--<footer id="footer" >-->
	<footer id="footer" class="">
	<p>?? B.M.ASHIK MAHMUD,  2021  </p>
	</footer>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		window.jQuery ||
		document.write(
			'<script src="../../assets/js/vendor/jquery.min.js"><\/script>'
		);
	</script><script src="../../assets/js/vendor/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
	
</body>
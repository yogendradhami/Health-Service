<?php include 'home.php';
?>


<style> 
body{
margin-top: 100px;</style>

<body>
	


	<section id="breadcrumb">
	<div class="container" id="no_print2">
		<ol class="breadcrumb">
			<li><a href="#">Sales / Sell Medicine </a></li>
			<li class="active"></li>
		</ol>
	</div>
</section>



<section id="main">
	<div class="container">

		<div class="row">
			<div class="col-md-3" id="no_print3">
				<div class="list-group">
					<a href="index.html" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Sales</a>
					<a href="http://localhost/pharmacy-management-ci/ShowForm/sell_medicine/main" class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Sell Medicine</a>
					<a href="http://localhost/pharmacy-management-ci/ShowForm/sell_statement/main" class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Sales Statement</a>
<!--					<a href="--><!--ShowForm/medicine_purchase_statement/main" class="list-group-item">-->
<!--						<span class="fa fa-plus-circle" aria-hidden="true"></span> Client Payment</a>-->
<!--					<a href="--><!--ShowForm/supplier_payment/main" class="list-group-item">-->
<!--						<span class="fa fa-pills" aria-hidden="true"></span> Supplier Payment</a>-->
					<!--					<a href="--><!--ShowForm/create_product_name/main" class="list-group-item">-->
					<!--						<span class="fa fa-plus" aria-hidden="true"></span> Ledger</a>-->
				</div>
			</div>
			<div class="col-md-9" id="full_page">
				<div class="panel panel-default" id="no_print1">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title"> Sales Medicine </h3>
					</div>

					<div class="panel-body">

						<!-- /.Panel End -->

						<div class="box-body">
							<div class="row">
								<div class="col-sm-2" style="">
									<label for="date">Date</label>
									<input type="text" class="form-control datepicker" placeholder="Insert Date" name="date" id="date" value="2021-11-19" autocomplete="off">
								</div>
								<div class="col-sm-3" style="">
									<label for="customer_name">Customer Mail</label>
									<input type="email" class="form-control" placeholder="Enter Email" name="customer_email" id="customer_email" autocomplete="off" required="">
								</div>
								<div class="col-sm-7" style="">
									<label for="medicine_name">Medicine Name</label>
									<select name="medicine_name" id="medicine_name" class="form-control selectpicker" data-live-search="true">
										<option value="">-- Select --</option>
																					<option value="3###Ace Plus###Paracetamol###Tablet">Ace Plus - Paracetamol  - Pcs [ Tablet - 200 ]</option>
																					<option value="2###Napa Extra###Paracetamol###Tablet">Napa Extra - Paracetamol  - Pcs [ Tablet - 200 ]</option>
																					<option value="###Amdocal 10###Amlodipine###Tablet">Amdocal 10 - Amlodipine  - Pcs [ Tablet - 60 ]</option>
																					<option value="###Amdocal 5###Amlodipine###Tablet">Amdocal 5 - Amlodipine  - 5 gm [ Tablet - 200 ]</option>
																					<option value="9###Niko###Paracetamol###Tablet">Niko - Paracetamol  - 1000 [ Tablet - 4936 ]</option>
																					<option value="10###Xalatan###Latanoprost Solution###Liquid / Syrup">Xalatan - Latanoprost Solution  - 2 [ Liquid / Syrup - 2100 ]</option>
																					<option value="11###Xyzal###Levocetirizine Dihydrochloride###Tablet">Xyzal - Levocetirizine Dihydrochloride  - 2.5 mg/5 mL [ Tablet - 1804 ]</option>
																					<option value="13###Zovirax###Acyclovir Capsule###Capsule">Zovirax - Acyclovir Capsule  - 30 grams [ Capsule - 1566 ]</option>
																					<option value="14###Zocor###Simvastatin Tablets###Tablet">Zocor - Simvastatin Tablets  - 30 [ Tablet - 1800 ]</option>
																					<option value="6###Amdocal 10###Amlodipine###Tablet">Amdocal 10 - Amlodipine  - 10 [ Tablet - 1000 ]</option>
																			</select>
								</div>
								<div class="col-sm-4">
									<label for="qty">Quantity</label>
									<input type="number" class="form-control" id="qty" name="qty" value="0" autocomplete="off">
								</div>

								<div class="col-sm-4">
									<label for="unit_sales_price">Selling Price</label>
									<input type="number" class="form-control" id="unit_sales_price" placeholder="$" name="unit_sales_price" readonly="">
								</div>

								<div class="col-sm-4">
									<label for="purchase_price">Total Amount</label>
									<input type="number" class="form-control" id="purchase_price" placeholder="$" name="purchase_price" readonly="">
								</div>

								<div class="col-sm-4" style="margin-top: 25px;">
									<button type="button" class="pull-left btn btn-primary" id="add_item">ADD</button>
								</div>
							</div>


						</div>
					</div>
				</div><!-- /.Panel End -->
			</div>
			<!-- /.Panel 2nd -->
			<div class="col-md-12" id="no_print4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Sales Medicine</h3>
					</div>


					<table id="salesList" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th style="text-align: center;">Date</th>
							<th style="text-align: center;">Medicine</th>
							<th style="text-align: center;">Unit Price</th>
							<th style="text-align: center;">Quantity</th>
							<th style="text-align: center;">Amount</th>
							<th style="text-align: left;">Action</th>
						</tr>
						</thead>
						<tbody id="show_all_sales">

						</tbody>
						<tbody><tr>
							<td colspan="">
								Amount<input type="text" class="form-control" id="amount" style="color: black; border: black 2px solid;" value="0" name="amount" readonly="">
							</td>
							<td colspan="">
								Discount<input type="number" class="form-control" id="discount" style="color: black; border: black 2px solid;" value="0" placeholder="Discount" name="discount">
							</td>
							<td colspan="2">
								Sub Total<input type="text" class="form-control" id="sub_total" value="0" style="color: black; border: black 2px solid;" name="sub_total" readonly="">
							</td>
							<td colspan="2">
								Amount Paid<input type="number" class="form-control" id="pay" value="0" style="color: black; border: black 2px solid;" name="pay">
							</td>
<!--							<td colspan="2">-->
<!--								Due<input type="text" class="form-control" id="due"-->
<!--										  value="0" style="color: black; border: black 2px solid;" name="due"-->
<!--										  readonly>-->
<!--							</td>-->
							<td colspan="2">
								<div style="margin-top: 20px;color: #a61717;">
								<button style="" type="button" class=" btn btn-success " id="sell_btn">Sell</button>
								</div>
							</td>
						</tr>
					</tbody></table>

				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>
</body>


<script type="text/javascript">
	$("#medicine_name").on("change paste keyup", function () {
		// var medicine_name = $('#medicine_name').val();
		var medicine = $('#medicine_name').val().split("###");
		var medicine_name_id = medicine[0];
		var medicine_name = medicine[1];
		var post_data = {
			'medicine_name': medicine_name,'medicine_name_id': medicine_name_id,
			'ci_csrf_token': ''
		};

		$.ajax({
			type: "POST",
			url: "http://localhost/pharmacy-management-ci/Get_ajax_value/get_medicine_price",
			data: post_data,
			success: function (data) {
				$('#unit_sales_price').val(data);
			}
		});
	});  // Medicine Price
	//amount calculation
	$("#qty").on("change paste keyup", function () {
		var unit_sales_price = $('#unit_sales_price').val();
		var qty = $('#qty').val();
		var total = parseFloat(unit_sales_price) * parseFloat(qty);
		$('#purchase_price').val(total);
	});

	// ADD MEDICINE
	var complete_total = 0;
	var all_purchase = new Array();
	var product_count = 0;
	$("#add_item").click(function () {
		var date = $('#date').val();
		// var customer_name = $('#customer_name').val();
		var customer_email = $('#customer_email').val();
		var medicine = $('#medicine_name').val().split("###");
		var medicine_name_id = medicine[0];
		var medicine_name = medicine[1];
		var generic_name = medicine[2];
		var medicine_presentation = medicine[3];
		var unit_sales_price = $('#unit_sales_price').val();
		var qty = $('#qty').val();
		var purchase_price = $('#purchase_price').val();
		all_purchase[product_count] = new Array(date,medicine_name,unit_sales_price,qty,purchase_price,
			medicine_name_id, generic_name, medicine_presentation, customer_email);
		var full_table = "";
		var test_total = 0;
		for (var i = 0; i < all_purchase.length; i++) {
			test_total += Number(all_purchase[i][4]);
			full_table += "<tr>";
			for (var j = 0; j < all_purchase[i].length-4; j++) {
				full_table += "<td style='text-align: center;'>" + all_purchase[i][j] + "</td>";
			}
			full_table += "<td><button class='btn btn-danger' onclick='delete_data(" + i + ")'>Delete</button></td></tr>";
		}
		$('#show_all_sales').html(full_table);
		$('#unit_sales_price').val('');
		$('#qty').val('0');
		$('#medicine_name').val('');$('#purchase_price').val('');
		product_count++;
		complete_total = test_total;
		calculation();
	});
	// DELECT ADDED MEDICINE
	function delete_data(arr_no) {
		all_purchase.splice(arr_no, 1);
		var full_table = "";
		var test_total = 0;
		for (var i = 0; i < all_purchase.length; i++) {
			test_total += Number(all_purchase[i][5]);
			full_table += "<tr>";
			for (var j = 0; j < all_purchase[i].length-4; j++) {
				full_table += "<td style='text-align: center;'>" + all_purchase[i][j] + "</td>";
			}
			full_table += "<td><button class='btn btn-danger' onclick='delete_data(" + i + ")'>Delete</button></td></tr>";
		}
		$('#show_all_sales').html(full_table)

		product_count--;
		console.log(all_purchase);
		complete_total = test_total;
		calculation();
	}

	$("#discount, #pay").on("change paste keyup", function () {
		calculation();
	});
	function calculation() {
		$('#amount').val(complete_total);
		var discount = $('#discount').val();
		if (discount == "") {
			discount = 0;
		}
		$('#sub_total').val(Number(complete_total - discount));
		var pay = $('#pay').val();
		if (pay == "") {
			pay = 0;
		}
		var after_pay = Number(complete_total - discount - pay);
		if (after_pay >= 0) {
			$('#due').val(after_pay);
		}
	}
	$("#sell_btn").click(function () {
		//$(#no_print4).hide();
		var amount = $('#amount').val();
		var discount = $('#discount').val();
		var sub_total = $('#sub_total').val();
		var pay = $('#pay').val();
		var due = $('#due').val();
if(pay == 0 || pay<0){
	alert("Can't Sell");
}else {
	var post_data = {
		'amount': amount, 'discount': discount, 'sub_total': sub_total, 'pay': pay, 'due': due,
		'all_purchase': all_purchase
	};
	$.ajax({
		type: "POST",
		url: "http://localhost/pharmacy-management-ci/Get_ajax_value/sales_confirm",
		data: post_data,
		success: function (data) {
			$('#full_page').html(data);

		}
	});
}
	});
</script>
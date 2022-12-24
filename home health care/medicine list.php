<?php
	include 'home.php';

?>
<style>
	.body{
		margin-top: 100px;
	}
</style>

<div class="body">
<div class="list">
	<h2>Medicine list</h2>
</div>




<table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">Details</th>
                                        <th style="text-align: center;">Supplier</th>
                                        <th style="text-align: center;">Total Qty</th>
                                        <th style="text-align: center;">Unit Price</th>
										  <th style="text-align: center;">Total Amount</th>
										 <th style="text-align: center;">Selling Price</th>
										   <th style="text-align: center;">Paid</th>
										  <th style="text-align: center;">Due</th>
										<th style="text-align: center;">Expiry</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <!-- /.Row from DB-->
                                <tbody>
                                    
                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: left;">
										<b>Medicine:</b>	Ace Plus  <br>
										<b>Generic:</b>	Paracetamol<br>
										<b>Presentation:</b>	Tablet <br>
										<b>Volume:</b>	Pcs <br>
										<b>P. Date:</b>	2019-03-29										</td>
                                        <td style="text-align: center;">Square Pharmaceuticals Ltd.</td>
                                        <td style="text-align: center;">200</td>
                                        <td style="text-align: center;">$2.52</td>
										<td style="text-align: center;">$504</td>
										<td style="text-align: center;">$3</td>
										<td style="text-align: center;">$350</td>
										<td style="text-align: center;">$154</td>
										<td style="text-align: center;">2021-01-01</td>
                                        <td style="text-align: center;">
											<a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/10">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/10">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="text-align: center;">2</td>
                                        <td style="text-align: left;">
										<b>Medicine:</b>	Napa Extra  <br>
										<b>Generic:</b>	Paracetamol<br>
										<b>Presentation:</b>	Tablet <br>
										<b>Volume:</b>	Pcs <br>
										<b>P. Date:</b>	2019-03-30										</td>
                                        <td style="text-align: center;">Beximco Pharmaceuticals Ltd.</td>
                                        <td style="text-align: center;">200</td>
                                        <td style="text-align: center;">$2.5</td>
										<td style="text-align: center;">$500</td>
										<td style="text-align: center;">$3</td>
										<td style="text-align: center;">$300</td>
										<td style="text-align: center;">$200</td>
										<td style="text-align: center;">2020-01-01</td>
                                        <td style="text-align: center;">
											<a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/12">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/12">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="text-align: center;">3</td>
                                        <td style="text-align: left;">
										<b>Medicine:</b>	Amdocal 10  <br>
										<b>Generic:</b>	Amlodipine<br>
										<b>Presentation:</b>	Tablet <br>
										<b>Volume:</b>	Pcs <br>
										<b>P. Date:</b>	2019-04-05										</td>
                                        <td style="text-align: center;">Beximco Pharmaceuticals Ltd.</td>
                                        <td style="text-align: center;">60</td>
                                        <td style="text-align: center;">$6</td>
										<td style="text-align: center;">$360</td>
										<td style="text-align: center;">$7</td>
										<td style="text-align: center;">$300</td>
										<td style="text-align: center;">$60</td>
										<td style="text-align: center;">2019-04-01</td>
                                        <td style="text-align: center;">
											<a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/13">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/13">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="text-align: center;">5</td>
                                        <td style="text-align: left;">
										<b>Medicine:</b>	Amdocal 5  <br>
										<b>Generic:</b>	Amlodipine<br>
										<b>Presentation:</b>	Tablet <br>
										<b>Volume:</b>	5 gm <br>
										<b>P. Date:</b>	2019-04-06										</td>
                                        <td style="text-align: center;">Beximco Pharmaceuticals Ltd.</td>
                                        <td style="text-align: center;">200</td>
                                        <td style="text-align: center;">$4</td>
										<td style="text-align: center;">$800</td>
										<td style="text-align: center;">$4.5</td>
										<td style="text-align: center;">$500</td>
										<td style="text-align: center;">$300</td>
										<td style="text-align: center;">2019-04-30</td>
                                        <td style="text-align: center;">
											<a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/20">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/20">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="text-align: center;">6</td>
                                        <td style="text-align: left;">
										<b>Medicine:</b>	Niko  <br>
										<b>Generic:</b>	Paracetamol<br>
										<b>Presentation:</b>	Tablet <br>
										<b>Volume:</b>	1000 <br>
										<b>P. Date:</b>	2021-08-03										</td>
                                        <td style="text-align: center;">ACI Pharmaceuticals</td>
                                        <td style="text-align: center;">4936</td>
                                        <td style="text-align: center;">$1</td>
										<td style="text-align: center;">$5000</td>
										<td style="text-align: center;">$2</td>
										<td style="text-align: center;">$5000</td>
										<td style="text-align: center;">$0</td>
										<td style="text-align: center;">2022-05-18</td>
                                        <td style="text-align: center;">
											<a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/21">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/21">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="text-align: center;">7</td>
                                        <td style="text-align: left;">
										<b>Medicine:</b>	Xalatan  <br>
										<b>Generic:</b>	Latanoprost Solution<br>
										<b>Presentation:</b>	Liquid / Syrup <br>
										<b>Volume:</b>	2 <br>
										<b>P. Date:</b>	2021-08-17										</td>
                                        <td style="text-align: center;">XYZ Pharmaceuticals Ltd</td>
                                        <td style="text-align: center;">2100</td>
                                        <td style="text-align: center;">$89</td>
										<td style="text-align: center;">$186900</td>
										<td style="text-align: center;">$97</td>
										<td style="text-align: center;">$186900</td>
										<td style="text-align: center;">$0</td>
										<td style="text-align: center;">2024-03-19</td>
                                        <td style="text-align: center;">
											<a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/22">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/22">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="text-align: center;">8</td>
                                        <td style="text-align: left;">
										<b>Medicine:</b>	Xyzal  <br>
										<b>Generic:</b>	Levocetirizine Dihydrochloride<br>
										<b>Presentation:</b>	Tablet <br>
										<b>Volume:</b>	2.5 mg/5 mL <br>
										<b>P. Date:</b>	2021-08-17										</td>
                                        <td style="text-align: center;">Ademez Pharmaceuticals</td>
                                        <td style="text-align: center;">1804</td>
                                        <td style="text-align: center;">$0.3</td>
										<td style="text-align: center;">$555</td>
										<td style="text-align: center;">$0.55</td>
										<td style="text-align: center;">$555</td>
										<td style="text-align: center;">$0</td>
										<td style="text-align: center;">2025-10-15</td>
                                        <td style="text-align: center;">
											<a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/23">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/23">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="text-align: center;">9</td>
                                        <td style="text-align: left;">
										<b>Medicine:</b>	Zovirax  <br>
										<b>Generic:</b>	Acyclovir Capsule<br>
										<b>Presentation:</b>	Capsule <br>
										<b>Volume:</b>	30 grams <br>
										<b>P. Date:</b>	2021-08-17										</td>
                                        <td style="text-align: center;">XYZ Pharmaceuticals Ltd</td>
                                        <td style="text-align: center;">1566</td>
                                        <td style="text-align: center;">$4.99</td>
										<td style="text-align: center;">$7814.34</td>
										<td style="text-align: center;">$5.45</td>
										<td style="text-align: center;">$7814</td>
										<td style="text-align: center;">$0.34</td>
										<td style="text-align: center;">2024-12-26</td>
                                        <td style="text-align: center;">
											<a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/24">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/24">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="text-align: center;">10</td>
                                        <td style="text-align: left;">
										<b>Medicine:</b>	Zocor  <br>
										<b>Generic:</b>	Simvastatin Tablets<br>
										<b>Presentation:</b>	Tablet <br>
										<b>Volume:</b>	30 <br>
										<b>P. Date:</b>	2021-08-17										</td>
                                        <td style="text-align: center;">Acezm Pharmaceuticals</td>
                                        <td style="text-align: center;">1800</td>
                                        <td style="text-align: center;">$6</td>
										<td style="text-align: center;">$10800</td>
										<td style="text-align: center;">$7.55</td>
										<td style="text-align: center;">$5210</td>
										<td style="text-align: center;">$5590</td>
										<td style="text-align: center;">2025-10-16</td>
                                        <td style="text-align: center;">
											<a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/25">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/25">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="text-align: center;">11</td>
                                        <td style="text-align: left;">
										<b>Medicine:</b>	Amdocal 10  <br>
										<b>Generic:</b>	Amlodipine<br>
										<b>Presentation:</b>	Tablet <br>
										<b>Volume:</b>	10 <br>
										<b>P. Date:</b>	2021-11-18										</td>
                                        <td style="text-align: center;">ACI Pharmaceuticals</td>
                                        <td style="text-align: center;">1000</td>
                                        <td style="text-align: center;">$5000</td>
										<td style="text-align: center;">$1333360</td>
										<td style="text-align: center;">$13313</td>
										<td style="text-align: center;">$122</td>
										<td style="text-align: center;">$22</td>
										<td style="text-align: center;">1996-12-12</td>
                                        <td style="text-align: center;">
											<a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/26">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/26">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <!--									// foreach-->
                                </tbody>
                            </table>
                            </div>
<?php 
	include 'home.php';
?>
<style>
	.container{
		margin-top: 100px;
		overflow-y: auto;
			
	}
</style>

<div class="container">
	<div class="heading">
		<h2>Buy Medicines</h2>
	</div>


<table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">S/n</th>
                                        <th style="text-align: center;">Customer Name</th>
                                        <th style="text-align: center;">Address</th>
                                        <th style="text-align: center;">Contact</th>
                                        <th style="text-align: center;">Email</th>
                                        <th style="text-align: center;">Medicine Name</th>
                                        <th style="text-align: center;">quantity</th>
										  
										 
                                    </tr>
                                </thead>
                                <!-- /.Row from DB-->
                                <tbody>
                                	
                                       <tr>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: left;">
                                        	<b><input type="text" name="name" id="name"></b>  <br></td>
                                        <td style="text-align: center;">
                                        	
                                        	<select name="city" id="city"  demo-default" required>
				<option value="">--select--</option><optgroup title="kanchanpur(bhimdatta)" label="&raquo; kanchanpur(bhimdatta)"></optgroup>
								<option value="Dodharachadani">Dodharachadani</option><option value="Mahendranagar">Mahendranagar</option><option value="Bharamdeu">Bharamdeu</option><option value="Gaddachauki">Gaddachauki</option>
								<option value="Belauri">Belauri</option><option value="Bhgatpur">Bhgatpur</option><option value="Punarbas">Punarbas</option><option value="Jhalari">Jhalari</option><option value="Daiji">Daiji</option><option value="Kaluwapur">Kaluwapur</option><option value="Baani">Baani</option><option value="Gulariya">Gulariya</option>
								<optgroup title="Kailali" label="&raquo; Kailali"></optgroup>
								<option value="Attariya">Attariya</option><option value="Dhangadi">Dhangadi</option><option value="Tikapur">Tikapur</option><option value="sukhhad">sukhhad</option><option value="bhajani">bhajani</option><option value="Lamki">Lamki</option><option value="Chisapani">Chisapani</option><option value="Musariya">Musariya</option><option value="Chaumala">Chaumala</option>
								<optgroup title="Dadheldhura" label="&raquo; Dadheldhura"></optgroup>
								<option value="Baagbazar">Baagbazar</option><option value="Bagarkot"></option><option value="Bagarkot"></option><option value="Aalitaal">Aalitaal</option><option value="Jogbuda">Jogbuda</option><option value="Naula">Naula</option><option value="Sahukharka">Sahukharka</option>
							</select>

                                        </td>
                                        <td style="text-align: center;"> <input type="number" name="contactno" placeholder="98********" maxlength="10"></td>
                                        <td style="text-align: center;"><input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"></td>
										<td style="text-align: center;"><input type="text" name="mname" id="texrt"></td>
										<td style="text-align: center;"><input type="number" name="number"></td>
										
											<!-- <a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/26">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/26">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a> -->
                                        </td>
                                    </tr>
                                    <!--									// foreach-->
                                </tbody>
                                 <tbody>
                                	
                                       <tr>
                                        <td style="text-align: center;">2</td>
                                        <td style="text-align: left;">
                                        	<b><input type="text" name="name" id="name"></b>  <br></td>
                                        <td style="text-align: center;">
                                        	
                                        	<select name="city" id="city"  demo-default" required>
				<option value="">--select--</option><optgroup title="kanchanpur(bhimdatta)" label="&raquo; kanchanpur(bhimdatta)"></optgroup>
								<option value="Dodharachadani">Dodharachadani</option><option value="Mahendranagar">Mahendranagar</option><option value="Bharamdeu">Bharamdeu</option><option value="Gaddachauki">Gaddachauki</option>
								<option value="Belauri">Belauri</option><option value="Bhgatpur">Bhgatpur</option><option value="Punarbas">Punarbas</option><option value="Jhalari">Jhalari</option><option value="Daiji">Daiji</option><option value="Kaluwapur">Kaluwapur</option><option value="Baani">Baani</option><option value="Gulariya">Gulariya</option>
								<optgroup title="Kailali" label="&raquo; Kailali"></optgroup>
								<option value="Attariya">Attariya</option><option value="Dhangadi">Dhangadi</option><option value="Tikapur">Tikapur</option><option value="sukhhad">sukhhad</option><option value="bhajani">bhajani</option><option value="Lamki">Lamki</option><option value="Chisapani">Chisapani</option><option value="Musariya">Musariya</option><option value="Chaumala">Chaumala</option>
								<optgroup title="Dadheldhura" label="&raquo; Dadheldhura"></optgroup>
								<option value="Baagbazar">Baagbazar</option><option value="Bagarkot"></option><option value="Bagarkot"></option><option value="Aalitaal">Aalitaal</option><option value="Jogbuda">Jogbuda</option><option value="Naula">Naula</option><option value="Sahukharka">Sahukharka</option>
							</select>

                                        </td>
                                        <td style="text-align: center;"> <input type="number" name="contactno" placeholder="98********" maxlength="10"></td>
                                        <td style="text-align: center;"><input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"></td>
										<td style="text-align: center;"><input type="text" name="mname" id="texrt"></td>
										<td style="text-align: center;"><input type="number" name="number"></td>
										
											<!-- <a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/26">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/26">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a> -->
                                        </td>
                                    </tr>
                                    <!--									// foreach-->
                                </tbody>
                                 <tbody>
                                	
                                       <tr>
                                        <td style="text-align: center;">3</td>
                                        <td style="text-align: left;">
                                        	<b><input type="text" name="name" id="name"></b>  <br></td>
                                        <td style="text-align: center;">
                                        	
                                        	<select name="city" id="city"  demo-default" required>
				<option value="">--select--</option><optgroup title="kanchanpur(bhimdatta)" label="&raquo; kanchanpur(bhimdatta)"></optgroup>
								<option value="Dodharachadani">Dodharachadani</option><option value="Mahendranagar">Mahendranagar</option><option value="Bharamdeu">Bharamdeu</option><option value="Gaddachauki">Gaddachauki</option>
								<option value="Belauri">Belauri</option><option value="Bhgatpur">Bhgatpur</option><option value="Punarbas">Punarbas</option><option value="Jhalari">Jhalari</option><option value="Daiji">Daiji</option><option value="Kaluwapur">Kaluwapur</option><option value="Baani">Baani</option><option value="Gulariya">Gulariya</option>
								<optgroup title="Kailali" label="&raquo; Kailali"></optgroup>
								<option value="Attariya">Attariya</option><option value="Dhangadi">Dhangadi</option><option value="Tikapur">Tikapur</option><option value="sukhhad">sukhhad</option><option value="bhajani">bhajani</option><option value="Lamki">Lamki</option><option value="Chisapani">Chisapani</option><option value="Musariya">Musariya</option><option value="Chaumala">Chaumala</option>
								<optgroup title="Dadheldhura" label="&raquo; Dadheldhura"></optgroup>
								<option value="Baagbazar">Baagbazar</option><option value="Bagarkot"></option><option value="Bagarkot"></option><option value="Aalitaal">Aalitaal</option><option value="Jogbuda">Jogbuda</option><option value="Naula">Naula</option><option value="Sahukharka">Sahukharka</option>
							</select>

                                        </td>
                                        <td style="text-align: center;"> <input type="number" name="contactno" placeholder="98********" maxlength="10"></td>
                                        <td style="text-align: center;"><input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"></td>
										<td style="text-align: center;"><input type="text" name="mname" id="texrt"></td>
										<td style="text-align: center;"><input type="number" name="number"></td>
										
											<!-- <a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/26">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/26">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a> -->
                                        </td>
                                    </tr>
                                    <!--									// foreach-->
                                </tbody>
                                 <tbody>
                                	
                                       <tr>
                                        <td style="text-align: center;">4</td>
                                        <td style="text-align: left;">
                                        	<b><input type="text" name="name" id="name"></b>  <br></td>
                                        <td style="text-align: center;">
                                        	
                                        	<select name="city" id="city"  demo-default" required>
				<option value="">--select--</option><optgroup title="kanchanpur(bhimdatta)" label="&raquo; kanchanpur(bhimdatta)"></optgroup>
								<option value="Dodharachadani">Dodharachadani</option><option value="Mahendranagar">Mahendranagar</option><option value="Bharamdeu">Bharamdeu</option><option value="Gaddachauki">Gaddachauki</option>
								<option value="Belauri">Belauri</option><option value="Bhgatpur">Bhgatpur</option><option value="Punarbas">Punarbas</option><option value="Jhalari">Jhalari</option><option value="Daiji">Daiji</option><option value="Kaluwapur">Kaluwapur</option><option value="Baani">Baani</option><option value="Gulariya">Gulariya</option>
								<optgroup title="Kailali" label="&raquo; Kailali"></optgroup>
								<option value="Attariya">Attariya</option><option value="Dhangadi">Dhangadi</option><option value="Tikapur">Tikapur</option><option value="sukhhad">sukhhad</option><option value="bhajani">bhajani</option><option value="Lamki">Lamki</option><option value="Chisapani">Chisapani</option><option value="Musariya">Musariya</option><option value="Chaumala">Chaumala</option>
								<optgroup title="Dadheldhura" label="&raquo; Dadheldhura"></optgroup>
								<option value="Baagbazar">Baagbazar</option><option value="Bagarkot"></option><option value="Bagarkot"></option><option value="Aalitaal">Aalitaal</option><option value="Jogbuda">Jogbuda</option><option value="Naula">Naula</option><option value="Sahukharka">Sahukharka</option>
							</select>

                                        </td>
                                        <td style="text-align: center;"> <input type="number" name="contactno" placeholder="98********" maxlength="10"></td>
                                        <td style="text-align: center;"><input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"></td>
										<td style="text-align: center;"><input type="text" name="mname" id="texrt"></td>
										<td style="text-align: center;"><input type="number" name="number"></td>
										
											<!-- <a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/26">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/26">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a> -->
                                        </td>
                                    </tr>
                                    <!--									// foreach-->
                                </tbody>
                                 <tbody>
                                	
                                       <tr>
                                        <td style="text-align: center;">5</td>
                                        <td style="text-align: left;">
                                        	<b><input type="text" name="name" id="name"></b>  <br></td>
                                        <td style="text-align: center;">
                                        	
                                        	<select name="city" id="city"  demo-default" required>
				<option value="">--select--</option><optgroup title="kanchanpur(bhimdatta)" label="&raquo; kanchanpur(bhimdatta)"></optgroup>
								<option value="Dodharachadani">Dodharachadani</option><option value="Mahendranagar">Mahendranagar</option><option value="Bharamdeu">Bharamdeu</option><option value="Gaddachauki">Gaddachauki</option>
								<option value="Belauri">Belauri</option><option value="Bhgatpur">Bhgatpur</option><option value="Punarbas">Punarbas</option><option value="Jhalari">Jhalari</option><option value="Daiji">Daiji</option><option value="Kaluwapur">Kaluwapur</option><option value="Baani">Baani</option><option value="Gulariya">Gulariya</option>
								<optgroup title="Kailali" label="&raquo; Kailali"></optgroup>
								<option value="Attariya">Attariya</option><option value="Dhangadi">Dhangadi</option><option value="Tikapur">Tikapur</option><option value="sukhhad">sukhhad</option><option value="bhajani">bhajani</option><option value="Lamki">Lamki</option><option value="Chisapani">Chisapani</option><option value="Musariya">Musariya</option><option value="Chaumala">Chaumala</option>
								<optgroup title="Dadheldhura" label="&raquo; Dadheldhura"></optgroup>
								<option value="Baagbazar">Baagbazar</option><option value="Bagarkot"></option><option value="Bagarkot"></option><option value="Aalitaal">Aalitaal</option><option value="Jogbuda">Jogbuda</option><option value="Naula">Naula</option><option value="Sahukharka">Sahukharka</option>
							</select>

                                        </td>
                                        <td style="text-align: center;"> <input type="number" name="contactno" placeholder="98********" maxlength="10"></td>
                                        <td style="text-align: center;"><input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"></td>
										<td style="text-align: center;"><input type="text" name="mname" id="texrt"></td>
										<td style="text-align: center;"><input type="number" name="number"></td>
										
											<!-- <a style="margin: 5px;" title="Update" href="http://localhost/pharmacy-management-ci/ShowForm/edit_purchase_info/26">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
                                            <a style="margin: 5px;" title="Delete" href="http://localhost/pharmacy-management-ci/Delete/medicine_purchase_info/26">
												<span class="	fa fa-trash" style="color:crimson"></span>
                                            </a> -->
                                        </td>
                                    </tr>
                                    <!--									// foreach-->
                                </tbody>


                                </table>
                                <button id="submit">Buy</button>
                                <button id="reset">Reset</button>
</div>


<?php 
include 'footer.php';
?>
<!-- data-spy="scroll" data-target="#navSection" data-offset="100" -->
<div class="content-body">
    <!-- header -->
    <div class="content-header">
        <div>
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">UI Library</a></li>
                    <li class="breadcrumb-item"><a href="#">Components</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project (DataTable)</li>
                </ol>
            </nav> -->

        </div>
    </div><!-- content-header -->

	<form action="<?php echo base_url();?>index.php/ClientProject/save" method="post" enctype="multipart/form-data">
    <div class="pd-x-5 pd-b-15">
		
			<div class="component-section px-5 shadow" style="border-radius: 13px;">

				<h3 class="text-dark mb-4">Project</h3>

					
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"
							name="name" placeholder="Enter Name" style="border-radius:10px" <?php if($no==1 || $no==2){ ?>value="<?php echo $project_name?>" <?php }else{?>value=""<?php } ?>>

					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Requirement</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
							placeholder="Enter Requirement" style="border-radius:10px" name="requirement" ></textarea>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group ">
								<label for="exampleFormControlTextarea1">Estimated Budget(optional)</label>
								<textarea class="form-control " id="exampleFormControlTextarea1" rows="3"
									placeholder="Enter Budget" style="border-radius:10px"
									name="estimated_budget" ></textarea>
							</div>
						</div>
						<div class="col-md-3 px-5 mx-0">
							<label for="exampleInputEmail1">End date</label>
							
							<div class="form-check">

								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="due_date_type" value="To be decided" onclick="check1()"  >To be
									decided
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="due_date_type" onclick="check()"
										value="Specific Date">Specific Date
								</label>
							</div>
							
							<div class=" mt-1">
								<input type="text" class="form-control" placeholder="Choose date" id="datepicker5" 
									name="specific_date_value" style="border-radius:10px;display:none;">
							</div>

						</div>
						<div class="col-md-3">
							<label for="exampleInputEmail1">Type</label>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="type"
										value="Recurring Project">Recurring Project
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="type" value="Not Sure">Not Sure
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio" class="form-check-input" name="type" value="On Going">On Going
								</label>
							</div>
						</div>
					</div>
					<p class="mt-3">Category</p>
					<div class="row mt-2 mb-5">
						<?php foreach ($items as $item){?>

						<div class="col-md-2">
							<div class="form-check">

								<input type="radio" class="form-check-input" name="category_id" 
									value="<?php echo $item->name?>" ><?php echo $item->name?>

							</div>
						</div>
						<?php } ?>

					</div>
					</div>

					<div class=" px-5 pt-5 pb-5 mt-5 shadow" style="border-radius: 13px;">
						<div class=" mt-2 w-100">
							<h5 id="section2" class="mb-4">Required Skills</h5>
						</div>


						<input id="input2" type="text" class="form-control" value="HTML,CSS" 
							data-role="tagsinput" name="required_skills[]" >



						


						<br/>
						
						
						
					
					
						<hr>

					</div>
					<div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;">
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group" id="fields">
									<h5 id="section2" class="mb-4">Services</h5>
									<div class="controls">
										<div class="entry input-group upload-input-group">
											<form name="add_name" id="add_name">
												<div class="table-responsive">
													<table class="table" id="dynamic_field">
														<tbody>
															<tr>
																<td>
																	
																<?php if($no == 2){ foreach($team_name as $key => $value){   ?>
																	
																	<select class="custom-select m-input mb-2"
																		style="border-radius:10px ;width:26rem;background-color:yellow;"
																		name="services">
																		<!-- <option selected>-- Choose Team --</option> -->
																		

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	
																	</select>
																		

																<?php } } if($no==3 || $select_non==2){?>

																<select class="custom-select m-input mb-2"
																		style="border-radius:10px ;width:26rem;"
																		name="services" id="category">
																		<option selected>-- Choose Category --</option>
																		<?php foreach ($teams as $item){?>
																		<option value="<?php echo $item->team_id?>">
																			<?php echo $item->name?>
																		</option>
																		<?php } ?>
																	</select>

																<?php } ?>
																</td>
																<td>
																	
																<?php if($no == 2){ foreach($service_name as $key => $value){ ?>
																	<select class=" custom-select m-input  mx-4 mb-2"
																		style="border-radius:10px;width:26rem;background-color:yellow;" 
																		name="service_id[]">

																		
																						<option value="<?php echo $key?>">
																							<?php echo $value?>
																						</option>

																		
																		<!-- <option selected>-- Choose Packages --</option> -->
																	</select>
																		

																<?php } } if($no==3 || $select_non==2){ ?>
																
																<select class=" custom-select m-input  mx-4"
																		style="border-radius:10px;width:26rem;" id="service"
																		name="service_id[]">

																		<option  style="margin-left:-100px!important;" disabled  selected>-- Choose Services --</option>

																	</select>
																
																	<?php } ?>
																</td>
																<td><button type="button" name="add" id="add"
																		class="btn btn-success"><i class="fa fa-plus"></button></td>
															</tr>
														<tbody>
													</table>
													<!-- <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
												</div>
											</form>
										</div>

									</div>
									<!-- 
										<button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

								</div>


							</div>

						</div>

						<!-- </form>Attachment -->
					</div>

					<div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;">
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group" id="fields">
									<h5 id="section2" class="mb-4">Packages</h5>
									<div class="controls">
										<div class="entry input-group upload-input-group">
											<!-- <form name="add_name" id="add_name"> -->
												<div class="table-responsive">
													<table class="table" id="dynamic_field1">
														<tbody>
															<tr>
																<td>
																<?php if($no == 1){ foreach($team_name as $key => $value){   ?>
																	
																	<select class="custom-select m-input"
																		style="border-radius:10px ;width:26rem;background-color:yellow;"
																		name="services">
																		<!-- <option selected>-- Choose Team --</option> -->
																		

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	
																	</select>
																		

																<?php } }if($no==3 || $select_non==1){?>

																	<select class="custom-select m-input"
																		style="border-radius:10px ;width:26rem;"
																		name="services" id="team2">
																		<option selected>-- Choose Team --</option>
																		
																		<?php foreach ($teams as $item){?>
																		<option value="<?php echo $item->team_id?>">
																			<?php echo $item->name?>
																		</option>
																		<?php } ?>
																	</select>

																<?php } ?>

																
																	</td>
																<td>
																<?php if($no == 1){ foreach($package_name as $key => $value){ ?>
																	<select class=" custom-select m-input mx-4"
																		style="border-radius:10px;width:26rem;background-color:yellow;" 
																		name="package_id[]">

																		
																						<option value="<?php echo $key?>">
																							<?php echo $value?>
																						</option>

																		
																		<!-- <option selected>-- Choose Packages --</option> -->
																	</select>
																		

																<?php } } if($no==3 || $select_non==1){ ?>
																	<select class=" custom-select m-input mx-4"
																		style="border-radius:10px;width:26rem;" id="package"
																		name="package_id[]">

																		<option disabled selected>-- Choose Packages --</option>

																	</select>
																<?php } ?>
																</td>
																<td><button type="button" name="add" id="add1"
																		class="btn btn-success"><i class="fa fa-plus"></button></td>
															</tr>
														<tbody>
													</table>
													<!-- <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
												</div>
											<!-- </form> -->
										</div>

									</div>
									<!-- 
										<button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

								</div>


							</div>

						</div>

						<!-- </form>Attachment -->
					</div>
					
				
					<!-- <button type="submit" class="btn btn-secondary py-2 px-4 service-input-box">Create</button>
					</form> -->
					<!-- component-section -->


					


					

					<!-- <div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="row form-group">
								<div class="col-12 col-md-12">
									<div class="control-group" id="fields">
										<h5 id="section3" class="mb-4">Mieloston</h5>
										<div class="controls3">
											<div class="entry3 input-group upload-input-group">


												<input type="text" class="form-control" id="exampleInputEmail1"
													aria-describedby="emailHelp" placeholder="Name" style="border-radius:10px">

												<input type="text" class="form-control mx-4" id="exampleInputEmail1"
													aria-describedby="emailHelp" placeholder="Progress" style="border-radius:10px">
												<input type="text" class="form-control" id="exampleInputEmail1"
													aria-describedby="emailHelp" placeholder="Description"
													style="border-radius:10px">
												<input type="text" class="form-control mx-4" id="exampleInputEmail1"
													aria-describedby="emailHelp" placeholder="Date" style="border-radius:10px">



												<button class="btn btn-upload btn-success btn-add3" type="button">
													<i class="fa fa-plus"></i>
												</button>
											</div>

										</div>
										<button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button>

									</div>


								</div>

							</div>

						</form>
					</div> -->

					<div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;">
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group" id="fields">
									<h5 id="section2" class="mb-4">Attachment</h5>
									<div class="controls1">
										<div class="entry1 input-group upload-input-group">
											<input class="form-control" name="images[]" type="file" style="border-radius:10px;margin-bottom:10px" multiple="">
											<!-- <button class="btn btn-upload btn-success btn-add1 " style="margin-left: 24px;"
													type="button">
													<i class="fa fa-plus"></i>
												</button> -->
										</div>
									</div>
									<!-- <button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

								</div>


							</div>

						</div>

						<!-- </form>Attachment -->
					</div>
					
				
			<!-- Submit -->


			<button type="submit" class="btn btn-primary mt-5 mb-5">Submit Project</button>
		</form>

    </div><!-- content-body -->


    <div class="content-footer">
        &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
    </div><!-- content-footer -->
</div><!-- content -->

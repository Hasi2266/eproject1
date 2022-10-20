<!-- data-spy="scroll" data-target="#navSection" data-offset="100" -->
<div class="content-body content-card-body" >
	<body onload="loadImage()">
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
	<?php foreach ($projects as $project){?>
	<form action="<?php echo base_url();?>index.php/ClientProject/update/<?php echo $project->project_id ?>" method="post" enctype="multipart/form-data">
    
	<div class="pd-x-5 pd-b-15">
		
	<div class="card card-hover card-projects  card-task-one dashCardHover  mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >

	<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Update Project</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>

								<div class="card-body">

		<input type="hidden" name="project_id" value="<?php echo $project->project_id?>">
				
					<div class="form-group">
					<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Project Name</h6></label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
							name="name" placeholder="Enter Name" style="border-radius:10px" value="<?php echo $project->name ?>" >
					</div>

					<div class="form-group">
					<label for="exampleFormControlTextarea1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Requirement</h6></label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
							placeholder="Enter Requirement" style="border-radius:10px"  name="requirement"><?php echo $project->requirement?></textarea>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group ">
							<label for="exampleFormControlTextarea1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Estimated Budget(optional)</h6></label>
								<textarea class="form-control "  id="exampleFormControlTextarea1" rows="3"
									placeholder="Enter Budget" style="border-radius:10px"
									name="estimated_budget"><?php echo $project->estimated_budget?></textarea>
							</div>
						</div>
						<div class="col-md-3 px-5 mx-0">
						<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">End date</h6></label>
							
							<div class="form-check">

								<label class="form-check-label">

									<input type="radio"  class="form-check-input" name="due_date_type" <?php if(($project->end_date)=='To be decided') {echo "checked";}?> value="To be decided" onclick="check1()">To be
									decided
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio"  class="form-check-input" name="due_date_type"  <?php if(($project->end_date)=="Specific Date") {echo "checked";}?> onclick="check()"
										value="Specific Date"  id="sepcic_data">Specific Date
								</label>
								
							</div>
							
							<div class=" mt-1">
								<input type="text"  class="form-control" placeholder="Choose date" id="datepicker5" 
									name="specific_date_value" style="border-radius:10px;display:none;" value="<?php echo $project->date?>">
							</div>

						</div>
						<div class="col-md-3">
						<label for="exampleInputEmail1"><h6 class="card-title mg-b-1" style="margin-top:1px;">Type</h6></label>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio"  class="form-check-input" name="type" <?php if(($project->type)=='Recurring Project') {echo "checked";}?>
										value="Recurring Project">Recurring Project
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio"  class="form-check-input" name="type" value="Not Sure" <?php if(($project->type)=='Not Sure') {echo "checked";}?>>One time project
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="radio"  class="form-check-input" name="type" value="On Going" <?php if(($project->type)=='On Going') {echo "checked";}?>>On Going project
								</label>
							</div>
						</div>
					</div>
					<h6 class="mg-b-1" style="margin-top:1px;">Category</h6>
					<div class="row mt-2 mb-5">
						<?php foreach ($items as $item){?>

						<div class="col-md-2">
							<div class="form-check">

								<input type="radio"  class="form-check-input" name="category_id" <?php if(($project->category_id) == $item->name) {echo "checked";}?> value="<?php echo $item->name?>"><?php echo $item->name?>

							</div>
						</div>
						<?php } ?>

					</div>
					</div>
					<div class=" mt-5 card card-projects card-task-one dashCardHover content-card-body" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:-3rem;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-3  bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 mx-1" style="margin-top:1px;margin-bottom:-6px;margin-left:-12px">Required Skills</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>

								<div class="card-body px-3">
								
							<input id="input2" type="text" class="form-control badge badge-pill badge-info py-2" value="<?php echo $project->required_skills?>" style="border-radius:10px"
							data-role="tagsinput" name="required_skills[]" style="background-color:#17a2b8;font-size:12px;margin-right:0.2rem;">

						</div>

						<!-- <input class="form-control" name="images[]" type="file" style="border-radius:10px;" multiple="">  -->


						<br/>
						
						
						
					
					
						<hr>

					</div>
					

					<div class=" mt-5  card card-projects card-task-one dashCardHover content-card-body" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:3rem; " >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-4 bg-transparent pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 mx-1" style="margin-top:1px;margin-bottom:-6px;margin-left:-12px">Add Services</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group" id="fields">
									
									<div class="controls">
										<div class="entry input-group upload-input-group">
											<form name="add_name" id="add_name">
												<div class="table-responsive">
													<table class="table" id="dynamic_field">
														<tbody>
                                                            
															<tr>
                                                               
																<td>
																


																<?php 
																
																
																if(empty($service)){?>

																	<select class="custom-select m-input"
																		style="border-radius:10px ;width:26rem;"
																		name="services" id="category">
																		<option selected>-- Choose Team --</option>
																		<?php foreach ($teams as $item){?>
																		<option value="<?php echo $item->team_id?>">
																			<?php echo $item->name?>
																		</option>
																		<?php } ?>
																	</select>

															<?php	}else{

                                                                        $i = 1;
																foreach($team_name2 as $key => $value){   ?>
																	
																	<select class="custom-select m-input mb-2"
																		style="border-radius:10px ;width:26rem;background-color:#637382;color:white"
																		name="services" id="<?php echo 'teams_no_'.$i;?>" >
																		<!-- <option selected>-- Choose Team --</option> -->
																		

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	
																	</select>

                                                                    <?php $i = $i + 1; ?>

																<?php } }?>
                                                                    
                                                                <br/>
                                                                    <button type="button" name="add" id="add" class="btn btn-all mt-3 text-white" style="font-size:10px !important;"><i class="fa fa-plus" ></i> Add Service</button>
                                                                </td>
																<!-- <select class="custom-select m-input"
																		style="border-radius:10px ;width:26rem;"
																		name="services" id="category">
																		<option selected>-- Choose Category --</option>
																		<?php foreach ($teams as $item){?>
																		<option value="<?php echo $item->team_id?>">
																			<?php echo $item->name?>
																		</option>
																		<?php } ?>
																	</select> -->

																
																
																<td>
																	
																

																<?php 
															 
																
																if(empty($service)){ ?>

																	<select class=" custom-select m-input px-5 mx-4"
																		style="border-radius:10px;width:26rem;" id="service"
																		name="service_id[]">
																		
																		<option selected disabled>Choose service</option>

																	</select>

																	<?php }else{

                                                                            $i = 1;
																foreach($service as $key => $value){ ?>

                                                                    
                                                                  
                                                                
																	<select class="custom-select m-input mx-4 mb-2"
																		style="border-radius:10px ;width:26rem;background-color:#637382;color:white;"
																		name="service_id[]" id="<?php echo 'service_id_'.$i;?>">
																		<!-- <option selected>-- Choose Team --</option> -->
																		
                                                                       

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	
																	</select>
																		
                                                                    <!-- <input type="text" value="<?php  echo $i;  ?>"> -->
                                                               
                                                                   
                                                                  
                                                                    
                                                                    
                                                            
                                                                    <?php $i = $i + 1; ?>


																<?php }  }?>
																
																<td>
                                                                <?php 
															 
																
                                                                     if(!empty($service)){
                                                                        
                                                                        $i = 1;
                                                                        
                                                                        foreach($service as $key => $value){
                                                                            
                                                                            if($i == 1) {?>
                                                                                <button type="button" name="remove"  id="btnClearService1" class="btn btn-danger btn_remove btn-b" ><span class="fa fa-trash" ></button>
                                                                          
                                                                          <?php  }else{?>

                                                                            <button type="button" name="remove"  id="<?php echo 'btn_remove_'.$i;?>" class="btn btn-danger btn_remove btn_remove2 mt-2"><span class="fa fa-trash"></button>

                                                                        <?php  }
                                                                            
                                                                            ?>

                                                                              
                                                                        
                                                                                <?php $i = $i + 1; ?>
                                                                     <?php } }?>
                                                                </td>
                                                                           
                                                               
																
																
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
		

					<div class=" mt-5  card card-projects card-task-one dashCardHover content-card-body" style="border-radius: 8px;margin-bottom:2rem !important;padding-bottom:3rem; " >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-4 bg-transparent pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 mx-1" style="margin-top:1px;margin-bottom:-6px;margin-left:-12px">Add Packages</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group" id="fields">
									<!-- <h5 id="section2" class="mb-4">Packages</h5> -->
									<div class="controls">
										<div class="entry input-group upload-input-group">
											<!-- <form name="add_name" id="add_name"> -->
												<div class="table-responsive">
													<table class="table" id="dynamic_field1">
														<tbody>
															<tr>
																<td>
																
																

																<?php 

																
																if(empty($package)){?>

																	<select class="custom-select m-input"
																		style="border-radius:10px ;width:26rem; mb-2"
																		name="services" id="team2">
																		<option selected>-- Choose Team --</option>
																		
																		<?php foreach ($teams as $item){?>
																		<option value="<?php echo $item->team_id?>">
																			<?php echo $item->name?>
																		</option>
																		<?php } ?>
																	</select>

																	<?php	}else{
																
                                                                $i = 1;

																foreach($team_name1 as $key => $value){   ?>
																	
																	<select class="custom-select m-input mb-2"
																		style="border-radius:10px ;width:26rem;background-color:#637382;color:white;"
																		name="services" id="<?php echo 'teams_no1_'.$i;?>">
																		<!-- <option selected>-- Choose Team --</option> -->
																		
																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
												
																	</select>

                                                                    <?php $i = $i + 1; ?>

																	


																<?php } }?>

                                                                
																	<!--  -->
																	<br/>
                                                                    <button type="button" name="add" id="add1"
																		class="btn btn-all text-white mt-3" style="font-size:10px !important;"><i class="fa fa-plus"></i> Add Package</button>
																	</td>
																	
																<td>
																
																

																<?php 
																
																if(empty($package)){?>

																	<select class=" custom-select m-input px-5 mx-4"
																		style="border-radius:10px;width:26rem;" id="package"
																		name="package_id[]">

																		
																		<option selected disabled>-- Choose Packages --</option>
																		
																	</select>

																	<?php }else{	

                                                                        $i = 1;
																foreach($package as $key => $value){   ?>
																	
																	<select class="custom-select m-input mx-4 mb-2"
																		style="border-radius:10px ;width:26rem;background-color:#637382;color:white;"
																		name="package_id[]" id="<?php echo 'package_id_'.$i;?>">
																		<!-- <option selected>-- Choose Team --</option> -->
																		

																				<option value="<?php echo $key?>">
																					<?php echo $value?>
																				</option>
																		
																	
																	</select>
																		
                                                                    <?php $i = $i + 1; ?>

																<?php }} ?>
																	<!--  -->
															
																</td>
                                                                <td>
                                                                <?php 
															 
																
                                                                     if(!empty($package)){
                                                                        
                                                                        $i = 1;
                                                                        
                                                                        foreach($package as $key => $value){
                                                                            

                                                                            
                                                                            if($i == 1) {?>
                                                                                <button type="button" name="remove"  id="btnClearPackage1" class="btn btn-danger btn_remove btn-b" ><span class="fa fa-trash" ></button>
                                                                          
                                                                          <?php  }else{?>

                                                                            <button type="button" name="remove"  id="<?php echo 'btn_remove1_'.$i;?>" class="btn btn-danger btn_remove btn_remove3 mt-2"><span class="fa fa-trash"></button>

                                                                        <?php  }
                                                                            
                                                                            ?>

                                                                              
                                                                        
                                                                                <?php $i = $i + 1; ?>
                                                                     <?php } }?>
                                                                </td>

																<!-- <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><span class="fa fa-trash"></button></td> -->
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
				
					<div class=" mt-5  card card-projects card-task-one dashCardHover content-card-body" style="border-radius: 8px;margin-bottom:2rem !important; " >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<div class="card-header mb-4 bg-transparent pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 mx-1" style="margin-top:1px;margin-bottom:-6px;margin-left:-12px">Attachment</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group  px-3" id="fields">
									<!-- <h5 id="section2" class="mb-4">Attachment</h5> -->
									<div class="controls1">
										<div class="entry1 input-group upload-input-group">
											
										
												
										<div class="card-deck">
												<?php
													$i= 1;
													// print_r($images);die;

													if(empty($images)){?>

														 <span class="badge badge-pill badge-danger mx-2 pt-1  " style="font-size:13px;margin-bottom:50px;">There is no attachemet in this project</span>
                                                            <!-- <input class="form-control" name="images[]" type="file" style="border-radius:10px;display:none;" multiple="" value="1">  -->
															<input type="file" name="images[]" class="custom-file-input mt-5 mb-5" id="customFile"  multiple="" style="margin-left:-80px;">
												<label class="custom-file-label" for="customFile" style="border-radius:10px;margin-top:45px;margin-bottom:50px;">Choose file</label>
												<?php	} 

                                                    if (!empty($images)){

                                                        foreach($images as $key => $value){
															
															// echo $value;die;

                                                            if(empty($value)){

                                                                $img = "";
                                                                $href= "";

                                                            ?>
                                                           
                                                            <span class="badge badge-pill badge-danger mx-2 pt-1  " style="font-size:13px;margin-bottom:50px;">There is no attachemet in this project</span>
                                                            <!-- <input class="form-control" name="images[]" type="file" style="border-radius:10px;display:none;" multiple="" value="1">  -->
															<input type="file" name="images[]" class="custom-file-input mt-5 mb-5" id="customFile"  multiple="" style="margin-left:-80px;">
												<label class="custom-file-label" for="customFile" style="border-radius:10px;margin-top:45px;margin-bottom:50px;">Choose file</label>
												
                                                   <?php  } }}
                                                    
                                                        
                                                           
                                                           
													
                                                       
														
												 
													if (!empty($images)){?>

														<div class="row px-2">
															
														

                                                    <?php foreach($images as $key => $value){
														
														
													// foreach($images as $key => $value){ 
														// echo $value;die;
														$img = "/uploads/$value";
														$href= "/uploads/$value";
													?>
													   
													   <div class="col-md-3 mt-3 mx-2">
																
																
													<!-- <div class="card-deck bg-danger"> -->
													<?php if(!empty($value)){ 
														// echo $value;
														?>
														<div class="card" style="width:15rem;height:15rem;">
															
															<a href="<?php echo base_url();?><?php echo $href;?>" download="<?php echo $project->name.'_'.$i;?>">
																
																		<img class="card-img-top  " src="<?php echo base_url();?><?php echo $img;?>" style="width:15rem;height:15rem;">
																
															</a>
															
														
														<!-- <label class="label" for="upload1" ><i class="fas fa-edit"></i><?php echo $value;?></label> -->
														<br/>
														<input type="hidden" name="images1[]" value="<?php echo $value;?>" style="margin-top:40px;">
														<!-- <input type="file" id="upload" name="img" hidden>
								<label class="label" for="upload"><i class="fas fa-edit"></i></label> -->
													</div>
													<?php } ?>
													<input class="form-control" name="images1[]" type="file" style="border-radius:10px;" multiple="" style="margin-bottom:500px;">
													
													<!-- </div>	 -->
													
													
												<?php 	$i++; ?>
												</div>
												<?php }}?>										
												</div>
									</div>

									

								</div>


							</div>

						</div>
						

						<!-- </form>Attachment -->
					</div>
					
                   
													</div>
													 
			<!-- Submit -->

			
			
			<!-- <?php if (($project->add_proposal)== 1) { ?>

				<a href="<?php echo base_url();?>index.php/AdminProject"><button class="btn btn-primary">Save</button></a>
			<?php } else { ?>
				<button type="submit" class="btn btn-primary">Submit Proposal</button>


			<?php } ?> -->

			
            </div>
			<div class="row" style="display:flex;align-items:left;justify-content:left" >
				<button type="submit" class="btn btn-dark  mt-3 mb-3 btn-submit ml-5" >Update Project</button>
				<!-- <button type="button" class="btn btn-primary mt-5 mb-5 btn-submit mx-2">Save As Draft</button> -->
				<a href="<?php echo base_url();?>index.php/ClientProject"><button type="button" class="btn btn-dark mx-3 mt-3 mb-3 btn-submit">Cancel Project</button></a>
			</div>
		</form>
        

    </div>
	
	
	<!-- content-body -->
<?php } ?>

   <!-- content-footer -->
</div><!-- content -->

<script>
function loadImage() {
//   alert("Image is loaded");
	if(document.getElementById('sepcic_data').checked == true) {   
		var y = document.getElementById("datepicker5");
		if(y.style.display === "none"){
			y.style.display = "block";
		}
		else{
			y.style.display = "none";
		}
	} 
	// var x = document.getElementById('sepcic_data').value;
	
}
</script>

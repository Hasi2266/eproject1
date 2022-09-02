<div class="content-header">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">UI Library</a></li>
              <li class="breadcrumb-item"><a href="#">Components</a></li>
              <li class="breadcrumb-item active" aria-current="page">Table (DataTable)</li>
            </ol>
          </nav>
         
        </div>
      </div><!-- content-header -->
     
      <div class="pd-x-65 pd-b-15" >
         
       
       <form action="<?php echo base_url();?>index.php/AdminProject/saveProposal" method="post" enctype="multipart/form-data">
        
			 <?php  foreach($projects as $project){
			 
			 ?>
			 <input type="hidden" name="project_id" value="<?php echo $project->project_id ?>">
			 <input type="hidden" name="client_id" value="<?php echo $project->client_id ?>">

			 <?php } ?>
			 <div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;" >
				<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group" id="fields">
									<h5 id="section2" class="mb-4">Mieloston</h5>
									<div class="controls">
										<div class="entry input-group upload-input-group">
											<!-- <form name="add_name" id="add_name"> -->
												<div class="table-responsive">

												<!-- <input type="text" class="calc" value="">
<input type="text" class="calc" value="">
<input type="text" class="calc" value="">
<input type="text" class="calc" value="">
<input type="text" class="calc" value="">
<input type="text" class="calc" value="" id="total">
<span id="total"></span> -->
													<table class="table" id="dynamic_field2">
														<tbody>
															<tr name="milestone_tr[]">

																<td> <input type="text" name="milestone_name[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" style="border-radius:10px"></td>
																<td><input type="text" name="milestone_weight[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Weight" style="border-radius:10px"></td>
																<td><input type="text" name="milestone_progress[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Progress" style="border-radius:10px"></td>
																<td><input type="text" name="milestone_description[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description" style="border-radius:10px"></td>
                              	<td><input type="text" name="start_date[]" class="form-control" placeholder="Start date" id="datepicker6"  style="border-radius:10px;"></td>
																<td><input type="text" name="end_date[]" class="form-control" placeholder="End date" id="datepicker7"  style="border-radius:10px;"></td>
																<td><input type="text" name="amount[]" class="form-control calc" id="milestone_amount" aria-describedby="emailHelp" placeholder="Amount" style="border-radius:10px"></td>
																
																<td><button type="button" name="add" id="add3" class="btn btn-success"><i class="fa fa-plus"></button></td>
															</tr>
														<tbody>
													</table>
													<!-- <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->
												</div>
											<!-- </form> -->
										</div>

									</div>
									<div class="d-flex flex-row-reverse">
                        <div class="p-2" style="margin-left:140px;" >
												<input type="text" id="total" name="milestone_total">
			 </div>
												
                        <div class="p-2" >Total</div>
                  </div>
									<!-- 
										<button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

								</div>


							</div>

				</div>
				
        </div>

        <div class=" px-5 pt-5 pb-5 mt-5 shadow" style="border-radius: 13px;" >
          <div class=" mt-2 w-100">
          <h5 id="section2" class="mb-4">Project Duration</h5>
        </div>
        <div class="form-group">
          <div class="d-flex flex-row">
            <div class="">
              <input type="text" class="form-control" name="duration_no" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Duration" style="border-radius:10px">
            </div>
            
            <div class=" px-4">
              <select class="custom-select m-input " style="border-radius:10px" name="duration_type">
              <option selected>duration</option>
              <option value="1">Month</option>
              <option value="2">Year</option>
              <option value="3">Date</option>
            </select></div>
          </div>
          
         
        </div>
        </div><!-- component-section -->
    
        <div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;" >
          <h5 id="section2" class="mb-4">Cover Letter</h5>
          <div class="form-group">
            
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="border-radius: 13px;" name="cover_letter"></textarea>
          </div>

        </div>
        
        <div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;" >
            <div class="row form-group">
                <div class="col-12 col-md-12">
                    <div class="control-group" id="fields">
                      <h5 id="section2" class="mb-4">Attachment</h5>
                        <div class="controls1">
                            <div class="entry1 input-group upload-input-group">
														<input class="form-control" name="images[]" type="file" style="border-radius:10px;" multiple=""> 
                            </div>
    
                        </div>
                       
    
                    </div>
    
    
                </div>
    
            </div>
    
       
        </div>
     
     
      <div class="d-flex flex-row">
        <div class="p-2"><button type="submit" class="btn btn-primary mt-5 mb-5 px-4" style="border-radius:10px">Submit Proposal</button></div>
				<!-- <div class="p-2 "><button type="submit" class="btn btn-primary mt-5 mb-5 px-4" style="border-radius:10px" formtarget="_blank">Save As Draft</button></div> -->
       
				</div>

			</form>
			<div class="p-2 mx-5"><a href="<?php echo base_url();?>index.php/AdminProject"><button type="submit" class="btn btn-primary mb-5 px-4" style="border-radius:10px; margin:-140px 0 0 200px ;">Cancel</button></div>
			
		</div>
  
        
     

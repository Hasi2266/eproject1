<div class="content-header">
        <div>
          <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">UI Library</a></li>
              <li class="breadcrumb-item"><a href="#">Components</a></li>
              <li class="breadcrumb-item active" aria-current="page">Table (DataTable)</li>
            </ol>
          </nav> -->
         
        </div>
      </div><!-- content-header -->
     
      <div class="pd-x-20 pd-b-15" >
         
       
      
        
			 <?php  foreach($item as $items){ ?>

			 <input type="hidden" name="proposal_id" value="<?php echo $items->proposal_id ?>">

		
			

				<div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;" >
				<h5 id="section2" class="mb-4">Mieloston</h5>
        <table id="example1" class="table " disabled>
          <thead>
            <tr>
              <th class="wd-9p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
                <input disabled type="checkbox" class="custom-control-input" id="customCheck1" >
                <label class="custom-control-label" for="customCheck1"></label>
              </div></th>
              <th class="wd-15p">Name </th>
              <th class="wd-15p">Weight</th>
              <th class="wd-15p">Progress</th>
              <th class="wd-15p">Description</th>
              <th class="wd-15p">Start Date</th>
              <th class="wd-15p">End Date</th>
							<th class="wd-15p">Amount</th>
              
            </tr>
          </thead>
          <tbody>
           <?php  foreach($milestones as $item){?>
            <tr >
              <td><div class="custom-control custom-checkbox">
                <input disabled type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1"></label>
              </div></td>
              <td><?php echo $item->milestone_name?></td>
              <td><?php echo $item->milestone_weight?></td>
							<td><div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $item->milestone_progress?>%;" aria-valuenow="<?php echo $item->milestone_progress?>" aria-valuemin="0" aria-valuemax="100"><?php echo $item->milestone_progress?></div>
              </div></td>
							<td><?php echo $item->milestone_description?></td>
              <td><?php echo $item->start_date?></td>
              <td><?php echo $item->end_date?></td>
							<td><?php echo $item->	milestone_amount?></td>
						
              
            </tr>
			<?php } ?>
          
           
           
            
          </tbody>
        </table>

				<div class="p-2" >Total : Rs. <?php echo $items->	milestone_total_price?></div>
      </div>

        <div class=" px-5 pt-5 pb-5 mt-5 shadow" style="border-radius: 13px;" >
          <div class=" mt-2 w-100">
          <h5 id="section2" class="mb-4">Project Duration</h5>
        </div>
        <div class="form-group">
          <div class="d-flex flex-row">
            <div class="">
              <input type="text" class="form-control" disabled name="duration_no" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Duration" style="border-radius:10px" value="<?php echo $items->duration_no?>"> 
            </div>
            
            <div class=" px-4">
              <select class="custom-select m-input " disabled style="border-radius:10px" name="duration_type" >
              <option selected><?php echo $duration_type?></option>
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
            
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="border-radius: 13px;" name="cover_letter" disabled><?php echo $items->	cover_letter?></textarea>
          </div>

        </div>
        
				<div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;">
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						<div class="row form-group">
							<div class="col-12 col-md-12">
								<div class="control-group" id="fields">
									<h5 id="section2" class="mb-4">Attachment</h5>
									<div class="controls1">
										<div class="entry1 input-group upload-input-group">
											
										
												
										<div class="card-deck">
												<?php
													$i= 1;
													foreach($images as $key => $value){?>
													<div class="card-deck ">
														<div class="card" style="width:15rem;height:15rem;margin-right:20px">
															<a href="<?php echo base_url();?>/uploads/<?php echo $value;?>" download="<?php echo $items->proposal_id.'_'.$i;?>">
																		<img class="card-img-top " src="<?php echo base_url();?>/uploads/<?php echo $value;?>" alt="Card image cap" style="width:15rem;height:15rem;">
															</a>
														</div>
													</div>
													</div>		
												<?php 	$i++; ?>
												<?php }?>
												
											<!-- <button class="btn btn-upload btn-success btn-add1 " style="margin-left: 24px;"
													type="button">
													<i class="fa fa-plus"></i>
												</button> -->
										

									</div>
									<!-- <button class="btn btn-primary mt-2" style="border-radius:10px">Upload</button> -->

								</div>


							</div>

						</div>

						<!-- </form>Attachment -->
					</div>
     
     
      <div class="d-flex flex-row">
        <div class="p-2 "><button type="submit" class="btn btn-primary mt-5 mb-5 px-4" style="border-radius:10px">Approve</button></div>
        <div class="p-2 mx-5"><a href="<?php echo base_url();?>index.php/ClientProject/Proposal"><button type="submit" class="btn btn-primary mt-5 mb-5 px-4" style="border-radius:10px">Cancel</button></div>
        
      </div>

		
			<?php } ?>
</div>
  
        
     

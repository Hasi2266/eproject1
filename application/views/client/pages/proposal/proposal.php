<div class="content-header content-card-body">
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
      
        <div class="row">
					<div class="px-3"style="margin-left:69rem;margin-top:0rem;" >
          <!-- btn-all -->
            <a href="<?php echo base_url();?>index.php/ClientProject/cerateProject"><button type="button" class="btn btn-danger text-white  py-2 "style="border-radius: 8px;">New project</button></a>
          </div>
            <!-- <div class="">
              <button type="button" class="btn btn-primary text-right  py-2"style="border-radius: 8px;">Add to project</button>
            </div> -->
          
        
<!-- my -->

        

      </div>

      <div class="card card-hover card-projects  card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Proposal</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       <!-- <h3 class="text-dark  mb-4">Proposal</h3> -->
       <div class="card-body">
        <table id="example1" class="table1 table table-hover" style="border-radius:10px ;font-size:13px;">
          <thead>
            <tr>
			<!-- <th class="wd-9p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
                <input type="checkbox" class="custom-control-input" id="customCheck1" >
                <label class="custom-control-label" for="customCheck1"></label>
              </div></th> -->
              <th class="wd-20p">Project</th>
              <th class="wd-12p">Update Date</th>
              <th class="wd-12p">Status</th>
              <th class="wd-12p">Created By</th>
              <th class="wd-12p">Created date</th>
              <th class="wd-12p">Approved By</th>
              <th class="wd-12p">Approved date</th>
            </tr>
          </thead>
          <tbody>
		  <?php foreach($proposals as $proposal){ ?>

				<tr data-url="<?php echo base_url()?>index.php/ClientProject/viewProposal/<?php echo $proposal->proposal_id ?>" style="cursor:pointer;">
				
				<!-- <td><div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="customCheck1">
					<label class="custom-control-label" for="customCheck1"></label>
				</div></td> -->
				
				<td><?php echo $proposal->name?></td>
				<td><?php echo $proposal->proposal_created_date?></td>
				<?php 
				
						if(($proposal->proposal_status) == 1){
							
								$status = "Proposal Submitted";

						}else if(($proposal->proposal_status) == 2){
							$status = "Proposal Approved";
						}
							?>

							<td><span class="badge badge-pill badge-info" style="background-color:#36b8b;"><?php echo $status;?></span></td>
								
					
					<td>Admin</td>
					
					<td><?php echo $proposal->proposal_created_date?></td>
					<td></td>
					<td></td>
					
					<!-- <td>24 May 2022</td> -->
					
				</tr>
				
           <?php } ?> 
           
            
          </tbody>
        </table>
					</div>
      </div><!-- component-section -->


      </div><!-- content-body -->
      

      <!-- <div class="content-footer">
        &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
      </div> -->
.

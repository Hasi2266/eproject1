<div class="content-header content-card-body" >
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
      
        <div class="row ">
          <div class="px-3"style="margin-left:69rem;margin-top:0rem;" >
            <a href="<?php echo base_url();?>index.php/ClientProject/cerateProject"><button type="button" class="btn btn-danger text-white  py-2 "style="border-radius: 8px;">New project</button></a>
          </div>
            <!-- <div class="" style="msrgin-top:-1rem">
              <button type="button" class="btn btn-primary text-right py-2"style="border-radius: 8px;">Add to project</button>
            </div> -->
          
        
<!-- my -->

      </div>

      <div class="card card-hover card-projects  card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Projects</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body">

        <table id="example1" class="table1 table table-hover " style="border-radius:10px ;font-size:13px;">
          <thead>
            <tr>
              <!-- <th class="wd-12p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
                <input type="checkbox" class="custom-control-input" id="customCheck" >
                <label class="custom-control-label" for="customCheck1"></label>
              </div></th> -->
							
              <th class="wd-20p">Project Name</th>
              <th class="wd-12p">Update</th>
              <th class="wd-12p">Status</th>
              <th class="wd-12p">Progress</th>
              <th class="wd-12p">Due date</th>
            </tr>
          </thead>
          <tbody>
					<?php foreach($items as $item){ ?>

						<?php 
									if((($item->project_status) == 1)){
										$status = 'Project Submitted ';
									}
									else if(($item->project_status) == 5){
										$status = 'Prooposal Submitted';
									}
									else if(($item->project_status) == 2){
										$status = 'Project Approved';
									}
									else if(($item->project_status) == 3){
										$status = 'In Progress ';
									}	
									else if(($item->project_status) == 4){
										$status = 'Project Hold';
									}
									else{
										$status = 'Project Completed';
									}	

									if(($item->end_date)== 'Specific Date'){
										$due_date = $item->date;
									}
									else{
										$due_date = $item->end_date;
									}

								?>

				<tr data-url="<?php echo base_url()?>index.php/ClientProject/updateProject/<?php echo $item->project_id ?>" style="cursor:pointer;">
				
				<!-- <td><div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="customCheck1">
					<label class="custom-control-label" for="customCheck1"></label>
				</div></td> -->
				
				<td><?php echo $item->name?></td>
				<td><?php echo $item->update_date?></td>
				<td><span class="badge badge-pill badge-info" style="background-color:#36b8b;"><?php echo $status?></span></td>
				<td><div class="progress mt-2" style="height:0.65rem;border-radius:10px">
											<div class="progress-bar bg-<?php if($item->project_progress >= 50){echo "green";}else{echo "danger";} ?> wd-<?php echo $item->project_progress?>p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>		</td>
				<td><?php echo $due_date?></td>
					
					
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

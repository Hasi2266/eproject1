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
          <div class="px-3"style="margin-left:70rem;margin-top:0rem;" >
            <a href="<?php echo base_url();?>index.php/ClientProject/cerateProject"><button type="button" class="btn btn-all text-white  py-2 "style="border-radius: 8px;">New project</button></a>
          </div>
            <!-- <div class="" style="msrgin-top:-1rem">
              <button type="button" class="btn btn-primary text-right py-2"style="border-radius: 8px;">Add to project</button>
            </div> -->
          
        
<!-- my -->

      </div>

      <div class="component-section px-5 shadow content-card-body" style="border-radius: 13px;margin-bottom:2rem !important;padding-bottom:3rem;" >
        <!--btn-->
       <h3 class="text-dark  mb-4">Projects</h3>
       
        <table id="example1" class="table1 table-hover">
          <thead>
            <tr>
              <th class="wd-12p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
                <input type="checkbox" class="custom-control-input" id="customCheck" >
                <label class="custom-control-label" for="customCheck1"></label>
              </div></th>
							
              <th class="wd-12p">Project Name</th>
              <th class="wd-12p">Update</th>
              <th class="wd-12p">Status</th>
              <th class="wd-12p">Progress</th>
              <th class="wd-12p">Due date</th>
            </tr>
          </thead>
          <tbody>
		  <?php foreach($items as $item){ ?>

				<?php 
							if(($item->project_status) == 1){
								$status = 'Submitted';
							}
		
							if(($item->end_date)== 'Specific Date'){
								$due_date = $item->date;
							}
							else{
								$due_date = $item->end_date;
							}

						?>

				<tr data-url="<?php echo base_url()?>index.php/ClientProject/updateProject/<?php echo $item->project_id ?>" style="cursor:pointer;">
				
				<td><div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="customCheck1">
					<label class="custom-control-label" for="customCheck1"></label>
				</div></td>
				
				<td><?php echo $item->name?></td>
				<td><?php echo $item->project_created_date?></td>
				<td><span class="badge badge-pill badge-primary"><?php echo $status?></span></td>
				<td><?php echo $item->project_progress?> %</td>			
				<td><?php echo $due_date?></td>
					
					
					<!-- <td>24 May 2022</td> -->
					
				</tr>
				
           <?php } ?> 
           
            
          </tbody>
        </table>
      </div><!-- component-section -->


      </div><!-- content-body -->
      

      <!-- <div class="content-footer">
        &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
      </div> -->
.

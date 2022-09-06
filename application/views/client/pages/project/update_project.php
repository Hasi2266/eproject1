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
	  <?php foreach ($projects as $project){?>
      <div class="pd-x-65 pd-b-15" >
      
      <div class="row px-3">
     <div class="col-md-3  shadow" style="border-radius: 13px;" >
      <h5>Project Name : <?php echo $project->name ?></h5>
      <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
      </div>
      <div class="col-md-3  shadow" style="border-radius: 13px;" >
        <h5>Project Status : <?php echo $initial ?></h5>
        <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
          </div>
          <div class="col-md-3 shadow" style="border-radius: 13px;" >
            <h5>Project Timelines</h5>
            <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
              </div>
              <div class="col-md-3   shadow" style="border-radius: 13px;" >
                <h5>Invoice</h5>
                <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p> 
                  </div>
      </div>

      <div class="row px-3 mt-5">
        <div class="col-md-3  shadow" style="border-radius: 13px;" >
       <h5>Proposal</h5>
       <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
         </div>
         <div class="col-md-3  shadow" style="border-radius: 13px;" >
          <h5>Contract</h5>
          <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p> 
             </div>
             <div class="col-md-3  shadow" style="border-radius: 13px;" >
              <h5>Project Type : <?php echo $project->type ?></h5> 
              <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
                 </div>
                 <div class="col-md-3  shadow" style="border-radius: 13px;" >
                  <h5>Category : <?php echo $project->category_id ?></h5>
                  <p>Date : 25 May 2022</p> 
                  <p>Due Date : 25 May 2022</p>
                     </div>
         </div>
      
      
    
    <div class=" px-5 pt-5 pb-5 mt-5 shadow" style="border-radius: 13px;" >
      <div class=" mt-2 w-100">
	  <h5 id="section2" class="mb-4">Requirement </h5>
		  <?php echo $project->requirement?>
     
     </div>

    </div><!-- component-section -->
    
       

			

		<div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;" >
        <div class=" mt-2 w-100">
          <h5 id="section2" class="mb-4">Skills</h5>
		  <?php echo $project->required_skills?>
         </div>
      </div>

		
      <div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;" >
        <div class=" mt-2 w-100">
          <h5 id="section2" class="mb-4">Services</h5>
		  <!-- <?php echo $project->services?> -->
			<?php foreach($service as $key => $value){
		
					echo $value.'<br/>';
					// echo '&nbsp; ';
			} ?>
         </div>
      </div>
			

     
      <div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;" >
        <div class=" mt-2 w-100">
          <h5 id="section2" class="mb-4">Packages</h5>
					<?php foreach($package as $key => $value){
						echo $value.'<br/>';
						// echo '  &nbsp; ';
					}?>
		  <!-- <?php echo $project->packages?> -->
         </div>
      </div>

      <div class=" px-5 shadow pt-5 pb-5 mt-5" style="border-radius: 13px;" >
        <table id="example1" class="table ">
          <thead>
            <tr>
              <th class="wd-9p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
                <input type="checkbox" class="custom-control-input" id="customCheck1" >
                <label class="custom-control-label" for="customCheck1"></label>
              </div></th>
              <th class="wd-15p">Name </th>
              <th class="wd-15p">Weight</th>
              <th class="wd-15p">Progress</th>
              <th class="wd-15p">Description</th>
              <th class="wd-15p">Start Date</th>
              <th class="wd-15p">End Date</th>
              
            </tr>
          </thead>
          <tbody>
           <?php  foreach($milestones as $item){?>
            <tr >
              <td><div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1"></label>
              </div></td>
              <td><?php echo $item->milestone_name?></td>
              <td><?php echo $item->milestone_weight?></td>
							<td><div class="progress" style="width:100px;">
                <div class="progress-bar" role="progressbar" style="width:<?php echo $item->milestone_progress?>px;" aria-valuenow="<?php echo $item->milestone_progress?>" aria-valuemin="0" aria-valuemax="100"><?php echo $item->milestone_progress?></div>
              </div></td>
							<td><?php echo $item->milestone_description?></td>
              <td><?php echo $item->start_date?></td>
              <td><?php echo $item->end_date?></td>
             
              <!-- <td><span class="badge badge-pill badge-primary"><?php echo $initial ?></span></td>
              <td>$90,560</td> -->
              
            </tr>
			<?php } ?>
          
           
           
            
          </tbody>
        </table>
      </div>

      

      
        <a href="<?php echo base_url();?>index.php/ClientProject"><button type="submit" class="btn btn-submit mt-5 mb-5" style="border-radius:10px">Back</button></a>
		
      <!-- Submit -->


      </div><!-- content-body -->
	  <?php } ?>

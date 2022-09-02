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
      
        <div class="row">
          <div class="px-3 "style="margin-left:53.6rem;" >
            <button type="button" class="btn btn-primary text-right text-uppercase py-2 "style="border-radius: 8px;">Primary</button>
          </div>
            <div class="">
              <button type="button" class="btn btn-primary text-right text-uppercase  py-2"style="border-radius: 8px;">Add to project</button>
            </div>
          

<!-- my -->

      
      </div>

      <div class="component-section px-5 shadow" style="border-radius: 13px;" >
        <!--btn-->
       <h3 class="text-dark text-uppercase mb-4">Proposal</h3>
       
       <table id="example1" class="table mb-4">
        <thead>
          <tr>
            <th class="wd-9p"><div class="custom-control custom-checkbox" style="border-radius: 8px;">
              <input type="checkbox" class="custom-control-input" id="customCheck1" >
              <label class="custom-control-label" for="customCheck1"></label>
            </div></th>
            
            <th class="wd-12p">Company</th>
            <th class="wd-12p">Project</th>
            <th class="wd-10p">Team</th>
            <th class="wd-12p">update</th>
            <th class="wd-12p">status</th>
            <th class="wd-12p">Created By</th>
            <th class="wd-12p">Created date</th>
            <th class="wd-12p">Approved By</th>
            <th class="wd-12p">Approved date</th>
          </tr>
        </thead>
        <tbody>
		<?php foreach($items as $item){ ?>

			<?php 
							if(($item->proposal_status) == 1){
								$status = 'Submitted';
							}
		
						?>
          <tr >
            <td><div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1"></label>
            </div></td>
            <td><?php echo $item->company_name?></td>
            <td><?php echo $item->name?></td>
            <td>Software Engineer</td>
						<td><?php echo $item->proposal_created_date?></td>
						<td><span class="badge badge-pill badge-primary"><?php echo $status?></span></td>
            <td>Admin</td>
            <td><?php echo $item->proposal_created_date?></td>
            <td>Edinburgh</td>
            <td>24 May 2022</td>
          </tr>

          <?php } ?>

        </tbody>
      </table>
      </div><!-- component-section -->


      </div><!-- content-body -->
      

      <div class="content-footer">
        &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
      </div>

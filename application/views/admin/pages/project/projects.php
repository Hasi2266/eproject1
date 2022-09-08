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
        </div>
        <!-- content-header -->

        <div class=" content-card-body pd-b-15">

            <div class="row">
                <!-- <div class="px-3 " style="margin-left:53.6rem;">
                    <a hreh="<?php echo base_url();?>"><button type="button" class="btn btn-primary text-right text-uppercase py-2 " style="border-radius: 8px;">New project</button>
                </div> -->
                <!-- <div class="">
                    <button type="button" class="btn btn-primary text-right text-uppercase  py-2" style="border-radius: 8px;">Add to project</button>
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
				<!-- <i class="fas fa-edit" style="margin-right:200px">Edit</i> -->
				
                <table id="example1" class="table1 table table-hover table-bottom">
						
                    <thead>
						
					
                        <tr>
						
                            <th class="wd-9p">
                                <!-- <div class="custom-control custom-checkbox" style="border-radius: 8px;">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $item->project_id ?>" value="<?php echo $item->project_id ?>">
                                    <label class="custom-control-label" for="<?php echo $item->project_id ?>"></label>
                                </div> -->
                            </th>
                            <!-- <th class="wd-12p">logo </th> -->
                            <th class="wd-9p">Company</th>
                            <th class="wd-12p">Project</th>
                            <th class="wd-12p">update</th>
                            <th class="wd-12p">status</th>
                            <th class="wd-12p">invoice</th>
                            <th class="wd-12p">Progress</th>
                            <th class="wd-12p">due date</th>
							
							
                        </tr>
                    </thead>
                    <tbody>
				<?php foreach($items as $item){?>
					
								<tr data-url="<?php echo base_url()?>index.php/AdminProject/addMilestone/<?php echo $item->project_id ?>" style="cursor:pointer;">
								
								<?php 
									if(($item->project_status) == 1){
										$status = 'Submitted';
									}
									else if(($item->project_status) == 2){
										$status = 'Confirmed ';
									}
									else if(($item->project_status) == 3){
										$status = 'In Progress ';
									}	
									else if(($item->project_status) == 4){
										$status = 'Hold ';
									}
									else{
										$status = 'Completed';
									}		

									if(($item->end_date)== 'Specific Date'){
										$due_date = $item->date;
									}
									else{
										$due_date = $item->end_date;
									}

								?>
									<td>
										<!-- <div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="<?php echo $item->project_id ?>" value="<?php echo $item->project_id ?>">
											<label class="custom-control-label" for="<?php echo $item->project_id ?>"></label>
										</div> -->
									</td>
									<!-- <td><img src="../assets/img/favicon.png" alt="..." class="img-thumbnail" width="50"></td> -->
									<td class="data"><?php echo $item->company_name?></td>
									<td class="data"><?php echo $item->name?></td>
									<td class="data"><?php echo $item->project_created_date?></td>
									<td><span class="badge badge-pill badge-info"><?php echo $status?></span></td>
									<td class="data">005</td>
									<td class="data"><?php echo $item->project_progress?> %</td>
									<td class="data">
										<div class="row">
											<?php echo $due_date?>
											<!-- <nav class="nav">
												<a href="#p" class="link-gray-500" style="text-align:right"><i data-feather="more-vertical" class="svg-16"></i></a>
											</nav> -->

											<!-- <div class="tab-pane fade" id="p" role="tabpanel" aria-labelledby="profile-tab5">
		<p>swws</p>
											</div> -->
										</div>
										
									</td>
									
									
									<!-- <td>
							<button class="save"> Save </button>
							<button class="edit"> Edit </button>
							<button class="delete"> Delete </button>
						</td> -->

								</tr>
						</div>
						
					</div>
					
					<?php } ?>
                       



                    </tbody>
                </table>
								</div>
            </div>
			
            <!-- component-section -->


        </div>
        <!-- content-body -->


        <!-- <div class="content-footer">
            &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
        </div> -->
        <!-- content-footer -->

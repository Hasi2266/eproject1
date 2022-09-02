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

        <div class="pd-x-65 pd-b-15">

            <div class="row">
                <!-- <div class="px-3 " style="margin-left:53.6rem;">
                    <a hreh="<?php echo base_url();?>"><button type="button" class="btn btn-primary text-right text-uppercase py-2 " style="border-radius: 8px;">New project</button>
                </div> -->
                <!-- <div class="">
                    <button type="button" class="btn btn-primary text-right text-uppercase  py-2" style="border-radius: 8px;">Add to project</button>
                </div> -->


                <!-- my -->



            </div>

            <div class="component-section px-5 shadow" style="border-radius: 13px;">
                <!--btn-->
                <h3 class="text-dark text-uppercase mb-4">Project</h3>

				<!-- <i class="fas fa-edit" style="margin-right:200px">Edit</i> -->

                <table id="example1" class="table1 table-hover">
						
                    <thead>
						
					
                        <tr>
						
                            <th class="wd-9p">
                                <!-- <div class="custom-control custom-checkbox" style="border-radius: 8px;">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $item->project_id ?>" value="<?php echo $item->project_id ?>">
                                    <label class="custom-control-label" for="<?php echo $item->project_id ?>"></label>
                                </div> -->
                            </th>
                            <!-- <th class="wd-12p">logo </th> -->
                            <th class="wd-12p">Company</th>
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
		
							if(($item->end_date)== 'Specific Date'){
								$due_date = $item->date;
							}
							else{
								$due_date = $item->end_date;
							}

						?>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $item->project_id ?>" value="<?php echo $item->project_id ?>">
                                    <label class="custom-control-label" for="<?php echo $item->project_id ?>"></label>
                                </div>
                            </td>
                            <!-- <td><img src="../assets/img/favicon.png" alt="..." class="img-thumbnail" width="50"></td> -->
                            <td class="data"><?php echo $item->company_name?></td>
                            <td class="data"><?php echo $item->name?></td>
                            <td class="data"><?php echo $item->project_created_date?></td>
                            <td><span class="badge badge-pill badge-primary"><?php echo $status?></span></td>
                            <td class="data">005</td>
                            <td class="data"><?php echo $item->project_progress?> %</td>
                            <td class="data"><?php echo $due_date?></td>
							<!-- <td>
                    <button class="save"> Save </button>
                    <button class="edit"> Edit </button>
                    <button class="delete"> Delete </button>
                </td> -->

                        </tr>
					<?php } ?>
                       



                    </tbody>
                </table>
            </div>
            <!-- component-section -->


        </div>
        <!-- content-body -->


        <div class="content-footer">
            &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
        </div>
        <!-- content-footer -->

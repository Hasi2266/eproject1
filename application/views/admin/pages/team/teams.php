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
                <div class="px-3 " style="margin-left:53.6rem;">
                    <button type="button" class="btn btn-primary text-right text-uppercase py-2 " style="border-radius: 8px;">New project</button>
                </div>
                <div class="">
                    <button type="button" class="btn btn-primary text-right text-uppercase  py-2" style="border-radius: 8px;">Add to project</button>
                </div>


                <!-- my -->



            </div>

            <div class="component-section px-5 shadow" style="border-radius: 13px;">
                <!--btn-->
                <h3 class="text-dark text-uppercase mb-4">Service</h3>

                <table id="example1" class="table1 table-hover">
                    <thead>
                        <tr>
                            <th class="wd-9p">
                                <div class="custom-control custom-checkbox" style="border-radius: 8px;">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </th>
                           
                            <th class="wd-12p">Team Name</th>
                            
                           
                           
                        </tr>
                    </thead>
                    <tbody>
				<?php foreach($items as $item){?>
                        <tr data-url="<?php echo base_url()?>index.php/AdminService/displayService/<?php echo $item->team_id ?>" style="cursor:pointer;">

						<!-- <?php 
							if(($item->currency) == 1){
								$currency = 'Rs';
								
							}
		
							else if(($item->currency) == 2){
								$currency = 'USD';
								
							}

						?> -->
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $item->team_id ?>">
                                    <label class="custom-control-label" for="<?php echo $item->team_id ?>"></label>
                                </div>
                            </td>
                            
                            <td><?php echo $item->name?></td>
                           
                           

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

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
                    <a href="<?php echo base_url();?>index.php/AdminCategory/addCategory"><button type="button" class="btn btn-primary text-right text-uppercase py-2" style="border-radius: 8px;">Add New Category</button></a>
                </div>
                <!-- <div class="">
                    <button type="button" class="btn btn-primary text-right text-uppercase  py-2" style="border-radius: 8px;">Add to project</button>
                </div> -->


                <!-- my -->



            </div>

            <div class="component-section px-5 shadow" style="border-radius: 13px;">
                <!--btn-->
                <h3 class="text-dark text-uppercase mb-4">categories</h3>

                <table id="example1" class="table1 table-hover">
                    <thead>
                        <tr>
                            <th class="wd-9p">
                                <div class="custom-control custom-checkbox" style="border-radius: 8px;">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </th>
                            <th class="wd-12p">Category Name </th>
							<th class="wd-12p">Category Name </th>
                           
                           
                        </tr>
                    </thead>
                    <tbody>
				<?php foreach($items as $item){?>
					<!-- data-url="<?php echo base_url()?>index.php/AdminService/displayService/<?php echo $item->category_id ?>" -->
                        <tr  style="cursor:pointer;">

						
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $item->category_id ?>">
                                    <label class="custom-control-label" for="<?php echo $item->category_id ?>"></label>
                                </div>
                            </td>
                            <td><?php echo $item->name?></td>
                           
							<td>
                    <!-- <button class="save"> Save </button>
                    <button class="edit"> Edit </button>
                    <button class="delete"> Delete </button> -->
                </td>
                           

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

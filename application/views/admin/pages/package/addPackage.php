

   
    <!-- sidebar -->

   
        <!-- header -->
        <div class="content-header">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item"><a href="#">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Service</li>
                    </ol>
                </nav>
                <!-- <h4 class="content-title content-title-sm">Create Service</h4> -->
            </div>
        </div>
        <!-- content-header -->
        <div class="content-body">
            <div class="row row-xs " style="margin: 20px 100px 0px 100px;">
                <div class="component-section no-code ">
                    <form action="<?php echo base_url();?>index.php/AdminPackage/createPackage"
                        class="shadow rounded  px-5 py-5 " style="border-radius: 30px !important; "
                        enctype="multipart/form-data" method="post">
                        <div class="row row-sm ">
                            <div class="col-sm-4  mg-t-30">
                                <label for="inputEmail4" class="form-label">Name</label>
                                <input type="text" class="form-control rounded py-4 shadow shadow service-input-box"
                                    name="name">
                            </div>
							<div class="col-sm-5 mg-t-30 mx-5 rounded " >
							<label for="inputEmail4" class="form-label">Choose Team</label>
							<select class="form-control shadow select2-no-search service-input-box" style="height:3rem;" name="team">
								<option value="" class="text-light">--Choose Team--</option>
								<?php foreach($teams as $item){?>
									<option value="<?php echo $item->team_id?>"><?php echo $item->name?></option>
								<?php	}?>
							</select>
                            </div>
                            <div class="col-sm-4 mg-t-30">
                                <label for="inputEmail4" class="form-label">Date</label>
                                <input type="text" class="form-control rounded py-4 shadow shadow service-input-box"
                                    id="datepicker" name="date">
                            </div>

                            <div class="col-sm-5 mx-5  mg-t-30  rounded">
                                <label for="inputEmail4" class="form-label">Created By</label>
                                <input type="text " class=" form-control py-4 shadow service-input-box "
                                    name="created_by">
                            </div>
                            <div class=" col-sm-10 mg-t-30">
                                <div class="control-group" id="fields">
                                    <div class="controls1">
                                        <div class="entry1 input-group upload-input-group">
                                            <input class="form-control py-4 mb-2 shadow" name="fields[]" type="text"
                                                style="border-radius:10px;margin-right: 60px;">
                                            <button class="btn btn-upload btn-secondary btn-add1 mt-1" type="button"
                                                style="margin-right: -70px;">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 mg-t-30 " style="padding-right: 100px; ">
                                <label for="inputEmail4" class="form-label">Description</label>
                                <textarea class="form-control border rounded pt-4 shadow shadow service-input-box"
                                    rows="4 " name="description"></textarea>
                            </div>
                            <div class="col-sm-3 mg-t-30 ">
                                <select class="form-control shadow select2-no-search service-input-box"
                                    style="height:3rem;" name="currency">
                                    <option class="text-light">--Choose Currency--</option>
                                    <option value="1">Rupee</option>
                                    <option value="2">USD</option>
                                </select>
                            </div>
                            <div class="col-sm-4 mg-t-30 " >
                                <input type="text " class="rounded form-control py-4 shadow shadow service-input-box"
                                    placeholder="Price" name="price">
                            </div>
							<div class="col-sm-3 mg-t-30 ">
                                <select class="form-control shadow select2-no-search service-input-box"
                                    style="height:3rem;" name="duration">
                                    <option class="text-light">--Choose --</option>
                                    <option value="1">Anually</option>
                                    <option value="2">Monthly</option>
                                </select>
                            </div>
                            <div class="col-md-12 mg-t-30 rounded mb-5">
                                <button type="submit" class="btn btn-secondary py-2 px-4 service-input-box">Create
                                    Package</button>
                            </div>


                        </div>
                    </form>
                    <!-- row -->
                </div>

            </div>



            <!-- component-section -->
            <!-- row -->
        </div>
        <!-- content-body -->
    </div>
    <!-- content -->

    
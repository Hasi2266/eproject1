
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
            <div class=" col-md-12">
                <div class="component-section no-code ">
                    <form action="<?php echo base_url();?>index.php/AdminCategory/saveCategory" method="post" class="bg-white shadow category-form border ">
					<h5 id="section1" class="tx-semibold p-4">Add Category</h5>
					<div class="row row-sm row-md justify-content-around p-4">
                            <div class="col-md-6 ">
                                <label for="inputEmail4" class="form-label">Name</label>
                                <input type="text " name="name" class="form-control rounded py-4 shadow shadow service-input-box">
                            </div>
                            <div class="col-md-6 mg-t-10 mg-sm-t-0 rounded ">
                                <label for="inputEmail4" class="form-label">Parent</label>
                                <input type="text " class=" form-control py-4 shadow service-input-box" name="parent_category">
                            </div>
                            <div class="col-md-12 mg-t-30 rounded mb-5">
                                <button type="submit" class="btn btn-secondary py-2 px-4 service-input-box">Create</button>
                            </div>
                        </div>
                    </form>
                    <!-- row -->
                </div>
            </div>


        </div>




        <!-- component-section -->
        <!-- row -->
    </div>

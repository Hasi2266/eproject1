



    
    <!-- sidebar -->

        <!-- header -->
        <div class="content-header">
            <div>
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item"><a href="#">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Service</li>
                    </ol>
                </nav> -->
                <!-- <h4 class="content-title content-title-sm">Create Service</h4> -->
            </div>
        </div>
        <!-- content-header -->
        <div class="card card-hover card-projects  card-task-one dashCardHover content-card-body mt-4" style="border-radius: 10px;margin-bottom:2rem !important;padding-bottom:3rem; " >
        <!--btn-->
				<div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0 px-1" style="margin-top:1px;margin-bottom:-6px">Update Category</h6>
									<!-- <nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav> -->
              	
								</div>
       
								<div class="card-body">
                        <!-- <h5 id="section1 " class="tx-semibold ">Input Box</h5>
                        <p class="mg-b-25 ">A basic form control with disabled and readonly mode.</p> -->
					<form  class="" action="<?php echo base_url();?>index.php/AdminService/saveService" enctype="multipart/form-data" method="post">
                        <div class="row row-sm">
							<div class="col-sm-4 mg-t-30">
                                <input type="text" class="borderRa form-control  py-2 service-input-box" id="datepicker" placeholder="Date" name="date" style="border-radius:8px">
                            </div>
                            <div class="col-sm-5 ml-auto mg-t-30  rounded " style="margin-right: 110px; ">
								<input type="text" name="created_by" class=" borderRa form-control  py-2 service-input-box" placeholder="Created By " style="border-radius:8px">
                            </div>
                            <div class="col-sm-4 mg-t-30 ">
                                <input type="text" name="name" class="borderRa form-control  py-2 service-input-box" placeholder="name " style="border-radius:8px">
                            </div>
                            <div class="col-sm-5 ml-auto mg-t-30  rounded wd-md-50p" style="margin-right: 110px;border-radius:8px ">
							<select class="form-control borderRa  service-input-box"  name="category">
								<option value="" class="text-light">--Choose Team--</option>
								<?php foreach($items as $item){?>
									<option value="<?php echo $item->team_id?>"><?php echo $item->name?></option>
								<?php	}?>
							</select>
                            </div>
                            <div class="col-sm-12 mg-t-30" style="padding-right: 120px; ">
                                <textarea class="form-control  borderRa py-2 service-input-box" rows="4" placeholder="Description " name="description" style="border-radius:8px"></textarea>
                            </div>
							
                            <div class="col-sm-6 mg-t-30 " style="padding-right: 120px;border-radius:8px ">
								<select class="form-control  borderRa service-input-box"  name="currency">
									<option class="text-light">--Choose Currency--</option>
									<option value="1" >LKR</option>
									<option value="2" >USD</option>	
								</select>  
                            </div>

							<div class="col-sm-6 mg-t-30 ml-auto" style="padding-right: 120px; ">
								<input type="text "class=" borderRa form-control  py-2 service-input-box" style="padding-right: 120px;border-radius:8px " placeholder="Price" name="price">
                            </div>
							
							<div class="col-md-12 mg-t-30 rounded mb-5">
								<div class="custom-file">
									<input type="file" class="custom-file-input " id="customFile" name="img" required>
									<label class="custom-file-label" for="customFile" style="border-radius:8px ">Choose file</label>
								</div>
                            </div>

							
							<button type="submit" class="btn btn-submit py-1 px-2 mt-2 mx-4" style="item-align:center">Create</button>
							
                        </div>
                        <!-- row -->
                    </div>
                </div>
								</div>
				</form>
								
            </div>



            <!-- component-section -->
            <!-- row -->
        </div>
        <!-- content-body -->
  
    <!-- content -->

    
<!-- <script src="<?php echo base_url();?>/lib/jquery/jquery.min.js "></script>
<script src="<?php echo base_url();?>/lib/bootstrap/js/bootstrap.bundle.min.js "></script>
<script src="<?php echo base_url();?>/lib/feather-icons/feather.min.js "></script>
<script src="<?php echo base_url();?>/lib/perfect-scrollbar/perfect-scrollbar.min.js "></script>
<script src="<?php echo base_url();?>/lib/js-cookie/js.cookie.js "></script>

<script src="<?php echo base_url();?>/assets/js/cassie.js "></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function() {

            'use strict'

        })
    </script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
 <script>
      $(function(){
        'use strict'

        // File Browser
      

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

      });
    </script>
</body>

</html> -->





    
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

                <div class=" col-md-9">
                    <div class="component-section no-code ">
                        <!-- <h5 id="section1 " class="tx-semibold ">Input Box</h5>
                        <p class="mg-b-25 ">A basic form control with disabled and readonly mode.</p> -->
					<form  class="" action="<?php echo base_url();?>index.php/AdminService/saveService" enctype="multipart/form-data" method="post">
                        <div class="row row-sm">
							<div class="col-sm-4 mg-t-30">
                                <input type="text" class="form-control rounded py-4 shadow shadow service-input-box" id="datepicker" placeholder="Date" name="date">
                            </div>
                            <div class="col-sm-5 ml-auto mg-t-30  rounded " style="margin-right: 110px; ">
								<input type="text" name="created_by" class="form-control rounded py-4 shadow shadow service-input-box" placeholder="Created By ">
                            </div>
                            <div class="col-sm-4 mg-t-30 ">
                                <input type="text" name="name" class="form-control rounded py-4 shadow shadow service-input-box" placeholder="name ">
                            </div>
                            <div class="col-sm-5 ml-auto mg-t-30  rounded wd-md-50p" style="margin-right: 110px; ">
							<select class="form-control shadow select2-no-search service-input-box" style="height:3rem;" name="category">
								<option value="" class="text-light">--Choose Team--</option>
								<?php foreach($items as $item){?>
									<option value="<?php echo $item->team_id?>"><?php echo $item->name?></option>
								<?php	}?>
							</select>
                            </div>
                            <div class="col-sm-12 mg-t-30" style="padding-right: 120px; ">
                                <textarea class="form-control border rounded pt-4 shadow shadow service-input-box" rows="4" placeholder="Description " name="description"></textarea>
                            </div>
                            <div class="col-sm-5 mg-t-30 " style="padding-right: 120px; ">
								<select class="form-control shadow select2-no-search service-input-box" style="height:3rem;" name="currency">
									<option class="text-light">--Choose Currency--</option>
									<option value="1" >Rupee</option>
									<option value="2" >USD</option>	
								</select>  
                            </div>
							<div class="col-sm-5 mg-t-30 ml-auto" style="padding-right: 120px; ">
								<input type="text " class="rounded form-control py-4 shadow shadow service-input-box" placeholder="Price" name="price">
                            </div>
							<div class="col-md-12 mg-t-30 rounded mb-5">
                                <button type="submit" class="btn btn-secondary py-2 px-4 service-input-box">Create Service</button>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                </div>
                <div class="col-md-3">
					<div class="custom-file">
							<input type="file" class="custom-file-input " id="customFile" name="img">
						<label class="custom-file-label" for="customFile" style="margin-top:150px;">Choose file</label>
					</div>
                    <!-- <div class="card rounded px-5 bg-light shadow border " style="margin:65px 0 0 0px;width: 10rem;height: 11rem;">
					
					</div> -->
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

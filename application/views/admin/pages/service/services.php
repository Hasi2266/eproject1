<div class="content-body pd-t-30 d-flex flex-column align-items-center">
        <!-- <div class="pricing-header mg-b-25 mg-md-b-35 mg-lg-b-45">
          <label class="content-label content-label-lg tx-10 tx-sm-11 tx-md-12 tx-primary mg-b-2 tx-spacing-2">Simple Pricing That Fit For Your Needs</label>
          <h1 class="tx-24 tx-md-32 tx-xl-36 tx-normal tx-color-01">Choose the right plans for your business</h1>
          <p class="tx-md-16 tx-color-03 mg-b-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
        </div> -->
        <div class="" style="margin-left:65px;">
          
          <ul class="nav nav-pillsService">

		  	<?php foreach($items as $item){
				
				?>

				
				<li class="nav-item">
					<a class="nav-link text-uppercase <?php if(($items1->team_id)== ($item->team_id)) {echo "active";}?>" data-toggle="pill" href="#<?php echo $item->name?>" role="tab" aria-controls="pills-<?php echo $item->name?>" aria-selected="true"><?php echo $item->name?></a>
				</li>


			<?php } ?> 

            <!-- <li class="nav-item ">
              <a class="nav-link active text-uppercase" data-toggle="pill" href="#flamingo" role="tab" aria-controls="pills-flamingo" aria-selected="true">Digital</a>
            </li> -->
            <!-- <li class="nav-item mx-2">
              <a class="nav-link text-uppercase" data-toggle="pill" href="#cuckoo" role="tab" aria-controls="pills-cuckoo" aria-selected="false">lab</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link text-uppercase" data-toggle="pill" href="#ostrich" role="tab" aria-controls="pills-ostrich" aria-selected="false">Studio</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link text-uppercase" data-toggle="pill" href="#tropicbird" role="tab" aria-controls="pills-ostrich" aria-selected="false">Commerce</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link text-uppercase" data-toggle="pill" href="#tropicbird" role="tab" aria-controls="pills-ostrich" aria-selected="false">Ostrich</a>
            </li> -->
            <div class="px-3 " style="margin-left:30rem;">
              <button type="button" class="btn btn-primary text-right text-uppercase py-2 "style="border-radius: 8px;">new project</button>
            </div>
              <div class="">
                <button type="button" class="btn btn-primary text-right text-uppercase  py-2"style="border-radius: 8px;">Add to project</button>
              </div>
          </ul>
                
                  
            <div class="tab-content mt-3">
				

				<?php foreach($items as $item1){?>

				<div class="tab-pane fade show <?php if(($items1->team_id) == ($item1->team_id)) {echo "active";}?>" id="<?php echo $item1->name?>" role="tabpanel" aria-labelledby="<?php echo $item1->name?>-tab">
					
							<div class="pricing-wrapper mg-lg-b-40">
								
									<div class="row row-xs mt-5">
										<?php  foreach($services as $service){?>
											<?php if(($service->category_id) == ($item1->team_id)){?>
												<div class="col-sm-6 col-md-4 ">
													<div class="card card-pricing shadow" style="border-radius: 8px; height: 23rem;">
														<div class="card-header">
															<div class="custom-control custom-checkbox checkbox-xl "style="margin-left:12rem ;margin-top:-8px ;margin-bottom:-20px">
																<input type="checkbox" class="custom-control-input" id="checkbox-1" checked="">
																<label class="custom-control-label" for="checkbox-1"></label>
																</div>
															
															<i data-feather="box"></i>
															<h4><?php echo $service->service_name?></h4>
															<p ><?php echo $service->description?></p>
														</div><!-- card-header -->
														<?php 
															if(($service->currency)==1){
																$currency = '$';
															}
															else{
																$currency = 'Rs.';
															}
														?>
														<div class="pricing-price" >
															<h1><span><?php echo $currency?></span><?php echo $service->price?><small>/month</small></h1>
														</div><!-- pricing-price -->
													
														<div class="card-footer mt-4">
															<button class="btn btn-block btn-brand-02 btn-uppercase tx-spacing-2 py-2" style="border-radius: 8px;">Add to project</button>
															<!-- <div class="tx-11 tx-sans tx-color-04 mg-t-10">Prices may vary depending on the options you need.</div> -->
														</div><!-- card-footer -->
													</div><!-- card -->
												</div><!-- col -->
											<?php	} ?>
										<?php	}?>
									</div><!-- row -->
								
							</div>
						
					
                </div>
				  
				 
                
				<?php }?>

               
             
          </div>
        </div>
        
      </div>

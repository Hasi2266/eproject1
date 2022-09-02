<!-- <style>
		.progress {
			width: 70px;
			height: 70px;
			background: white;
			position: relative;
			line-height: 10px;
			background: none;
			margin: right;
			box-shadow: none;
		
		}

		.progress::after {
			content: "";
			width: 100%;
			height: 100%;
			border-radius: 50%;
			border: 7px solid #eee;
			position: absolute;
			top: 0;
			left: 0;
		}

		.progress>span {
			width: 50%;
			height: 100%;
			overflow: hidden;
			position: absolute;
			top: 0;
			z-index: 1;
		}

		.progress .progress-left {
			left: 0;
		}

		.progress .progress-bar {
			width: 100%;
			height: 100%;
			background: none;
			border-width: 6px;
			border-style: solid;
			position: absolute;
			top: 0;
		}

		.progress .progress-left .progress-bar{
			border-color:  #eee;
			border-width:7px;
			left: 100%;
			border-top-right-radius: 80px;
			border-bottom-right-radius: 80px;
			border-left: 0;
			-webkit-transform-origin: center left;
			transform-origin: center left;
		}

		.progress .progress-right {
			right: 0;
		}

		.progress .progress-right .progress-bar {
			border-color: #049dff;
			border-width:7px;
			left: -100%;
			border-top-left-radius: 80px;
			border-bottom-left-radius: 80px;
			border-right: 0;
			-webkit-transform-origin: center right;
			transform-origin: center right;
			animation: loading-10 1.8s linear forwards;
		}


		.progress .progress-value {
			width: 100%;
			height: 100%;
			border-radius: 50%;
			background: #44484b;
			font-size: 22px;
			color: #fff;
			line-height: 75px;
			text-align: center;
			position: absolute;
			padding-top:10px;
			padding-left:5px;
		
		}


		/* .progress.blue .progress-bar{
			border-color: #eee;
		} */

		.progress .progress-left .progress-bar{
			border-color:none;
			animation: loading-11 1.3s linear forwards 1.8s;
			
		}

		/* @keyframes loading-10{
												0%{
														-webkit-transform: rotate(0deg);
														transform: rotate(0deg);
												}
												100%{
														-webkit-transform: rotate($item->project_progress);
														transform: rotate($item->project_progress);
												}
											} */
</style> -->


<div class="content-header justify-content-between" >
	<div>
	  <!-- <nav aria-label="breadcrumb">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="#">Pages</a></li>
		  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
		  <li class="breadcrumb-item active" aria-current="page">Projects &amp; Web Services</li>
		</ol>
	  </nav> -->
	  <div class="row">
		
	  <h4 class="content-title content-title-xs px-3">Welcome to Dashboard</h4>
	  <div class=" "  style="margin-left:71.5rem;margin-top:-1.5rem" >
		<a href="<?php echo base_url();?>index.php/ClientProject/cerateProject"><button type="button" class="btn btn-primary text-right  py-2"style="border-radius: 8px;">New Project</button></a>
	  </div>
	</div>
	</div>
  </div>
  
<div class="content-body">
	
        <div class="card card-hover card-task-one dashCardHover mb-5" style="border-radius: 10px;">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <h6 class="card-title">Projects</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value"><?php echo $noProjects?><span class="tx-success"><i class="icon ion-android-arrow-up"></i></span></h1>
                  <div class="chart-wrapper">
                    <!-- <div id="flotChart1" class="flot-chart"></div> -->
                  </div>
                </div>
                <p class="card-desc">skills that require mastery of many details in an ever-changing environment. </p>
              </div><!-- col -->
              <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
                <h6 class="card-title">Total Spend</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value">0<span class="tx-success"></span></h1>
                  <div class="chart-wrapper">
                    <!-- <div id="flotChart2" class="flot-chart"></div> -->
                  </div>
                </div>
                <p class="card-desc">are represented as fairly standardized skills in a relatively constant environment.</p>
              </div><!-- col -->
              <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                <h6 class="card-title">Invoices</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value">0<span class="tx-color-03"></span></h1>
                  <div class="chart-wrapper">
                    <!-- <div id="flotChart3" class="flot-chart"></div> -->
                  </div>
                </div>
                <p class="card-desc">represents the total amount of time users interact with a specific dimension item.</p>
              </div><!-- col -->
              <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
                <h6 class="card-title">Proposals</h6>
                <div class="d-flex align-items-center justify-content-between mg-b-10">
                  <h1 class="card-value"><?php echo $noProposals?></h1>
                  <div class="chart-wrapper">
                    <!-- <div id="flotChart4" class="flot-chart"></div> -->
                  </div>
                </div>
                <p class="card-desc">the total amount of time users interact with a specific dimension item.</p>
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->

        
        <div class="row row-sm mg-t-15 mg-sm-t-20">
          <div class="col-sm-6 col-xl-5">
            <div class="card card-hover card-todo dashCardHover mb-5 " style="border-radius:10px ;margin-right: 15px;">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">Project Status</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <div id="scroll1" class="pos-relative mb-2" style="height: 310px;">


              <ul  class="list-group list-group-flush mb-3"   >


							
							<?php foreach($items as $item){?>

								<?php 

							
									
									echo "<style>

									@keyframes loading-10{
										0%{
												-webkit-transform: rotate(0deg);
												transform: rotate(0deg);
										}
										100%{
													
												-webkit-transform: rotate($item->project_progress);
												transform: rotate($item->project_progress);
										}
									}
										
									@keyframes loading-11{
										
										
										0%{
												-webkit-transform: rotate(0deg);
												transform: rotate(0deg);
										}
										100%{
											border-color: #049dff;
												
												-webkit-transform: rotate($item->project_progress);
												
												transform: rotate($item->project_progress);
												
										}
									}
								
								
									</style>";

									?>
									
							<li class="list-group-item   mt-2  " >

							<div class=" card-hover card-project-two">
								<div class="card-header bg-transparent">
									
									<div>
									<div class="media">
									<div class="project-logo bg-green tx-white"><i data-feather="music"></i></div>
													<div class="media-body mg-l-10 mg-sm-l-15">
														<!-- <p class="tx-13 tx-color-04 mg-b-5"><?php echo $item->company_name?></p> -->
														<h5 class="tx-color-01 mg-b-0"><?php echo $item->name?></h5>
													</div><!-- media-body -->
												</div>
									<!-- <div class="project-logo bg-green tx-white"><i data-feather="music"></i></div><h6 class="mg-b-5"><?php echo $item->name?></h6> -->
										<!-- <span>Last updated: Yesterday 10:15am</span> -->
									</div>
									<!-- <nav class="nav nav-card-icon">
										<a href=""><i data-feather="check-square" class="svg-14"></i> 21</a>
										<a href=""><i data-feather="message-square" class="svg-14"></i> 85</a>
									</nav> -->
								</div><!-- card-header -->
								<div class="card-body">
									<!-- <p class="tx-13 tx-gray-700">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deser.</p> -->
									<div class="card-progress">
										<label class="content-label mg-b-0">Progress</label>
										<div class="progress">
											<div class="progress-bar bg-<?php if($item->project_progress >= 50){echo "green";}else{echo "danger";} ?> wd-<?php echo $item->project_progress?>p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<label class="content-label mg-b-0"><?php echo $item->project_progress?>%</label>
									</div>
								</div>
								<div class="card-footer bg-transparent">
									<div class="badge bg-blue tx-white"><?php echo $item->type?></div>
									<div class="project-date-end">End: Aug 15, 2019</div>
									<!-- <div class="avatar-group">
										<div class="avatar avatar-xxs"><img src="https://via.placeholder.com/300/637382/fff" class="rounded-circle" alt=""></div>
										<div class="avatar avatar-xxs"><img src="https://via.placeholder.com/300/637382/fff" class="rounded-circle" alt=""></div>
										<div class="avatar avatar-xxs"><span class="avatar-initial rounded-circle bg-dark">a</span></div>
									</div> -->
								</div><!-- card-footer -->
            	</div>
									<!-- <div class="list-group-header">	
											<a href="" class="link-03 mg-l-auto"><i data-feather="more-horizontal" class="svg-16"></i></a>
									</div>
									<div class="d-flex align-items-center justify-content-between">
												<div class="avatar-group">
													<h5 class="tx-16 mg-b-3"><a href="" class="link-01"><?php echo $item->name?></a></h5>
													<div class="media">

                                    <div class="project-logo bg-green tx-white"><i data-feather="music"></i></div>

                                    <div class="media-body mg-l-10 mg-sm-l-15">

                                        <p class="tx-13 tx-color-04 mg-b-5">Spotify, Inc.</p>

                                        <h5 class="tx-color-01 mg-b-0"><a href="" class="link-01"><?php echo $item->name?></a</h5>

                                    </div>

                                  

                                </div>
												</div>
											<div class="bg-white progress blue"  data-value=<?php echo $item->project_progress?>  style="margin-right:-1px ;">
											
											
											<span class="progress-left">
													<span class="progress-bar "></span>
											</span>
											<span class="progress-right">
														<span class="progress-bar"></span>
											</span>

											<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center"  >
												<div class="h4 font-weight-bold " ><?php echo $item->project_progress?><sup class="small" style="font-size:14px;">%</sup></div>
											</div>
										</div>
									</div> -->
                </li>
							<?php } ?>
               
              </ul>
              </div>
              
              
            </div><!-- card -->
          </div><!-- col -->
          

          <!-- Recent Projects -->
          <div class="col-xl-7 mg-t-15 mg-sm-t-20 mg-xl-t-0">
            <div class="card card-hover card-projects  dashCardHover" style="border-radius:10px;">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">Recent Projects</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div><!-- card-header -->
              <div id="scroll2" class="pos-relative  mb-2" style="height: 310px;">
              <ul class="list-group list-group-flush" >
								 
							<?php 
				
									$date_now =  date("Y-m-d");

									foreach($items as $item){

										if(($item->project_status) == 1){
											$status = 'Submitted';
										}
										
										$date = $item->project_created_date;
										$diff = abs(strtotime($date_now) - strtotime($date));

										$years = floor($diff / (365*60*60*24));
										$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
										$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

										// echo $months;echo '<br/>';
										// echo $days;echo '<br/>';

										if(($months <= 1 && $days <= 29)){ ?>
											<!-- echo $item->project_id; -->

											<li class="list-group-item  card-hove mt-2 mb-2" >
												<nav class="nav nav-card-icon">
													<a href=""><i data-feather="activity" class="svg-16"></i></a>
													<a href=""><i data-feather="bar-chart-2" class="svg-16"></i></a>
													<a href=""><i data-feather="chevron-down" class="svg-16"></i></a>
												</nav>
												<div class="media">
													<div class="project-logo bg-primary tx-white"><i data-feather="aperture"></i></div>
													<div class="media-body mg-l-10 mg-sm-l-15">
														<p class="tx-13 tx-color-04 mg-b-5"><?php echo $item->company_name?></p>
														<h5 class="tx-color-01 mg-b-0"><?php echo $item->name?></h5>
													</div><!-- media-body -->
												</div><!-- media -->
												<p class="project-desc"><?php echo $item->requirement?></p>
												<small class="project-deadline">Start Date: <?php echo $item->project_created_date?></small>
												<small class="project-deadline">End Date: <?php echo $item->project_created_date?></small>
											</li>
								
										<?php } ?>
								


										<?php } ?>
								
              </ul>
            </div>
                    </div>
          </div><!-- col -->

					<div class="card card-hover card-task-one dashCardHover mb-5" style="border-radius: 10px;margin-left: 10px;margin-right: 10px;width:80rem;">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12 col-md-3">
									<h4 class="text-dark  mb-3 mt-3 px-3">Projects</h4>
										<div id="scroll3" class="pos-relative" style="height: 310px;">
										<table id="example1" class="table " style="border-radius:10px ;font-size:14px">
											<thead>
												<tr>
													<th class="wd-9p">
														<!-- <div class="custom-control custom-checkbox" style="border-radius: 8px;">
														<input type="checkbox" class="custom-control-input" id="customCheck1" >
														<label class="custom-control-label" for="customCheck1"></label>
													</div> -->
												</th>
													<!-- <th class="wd-15p">logo</th> -->
													<th class="wd-15p">Company</th>
													<th class="wd-10p">Project</th>
													<th class="wd-15p">Update Date</th>
													<th class="wd-15p">Status</th>
													<th class="wd-12p">Progress</th>
													<th class="wd-15p">invoice</th>
													<th class="wd-15p">Due date</th>
												</tr>
											</thead>
											<tbody>
											

											<?php foreach($items as $item){?>

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
										<tr >
											<td><div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="<?php echo $item->project_id?>">
												<label class="custom-control-label" for="<?php echo $item->project_id?>"></label>
											</div></td>
											<!-- <td><img src="<?php echo base_url();?>/assets/img/favicon.png" alt="..." class="img-thumbnail" width="50"></td> -->
											<td><?php echo $item->company_name?></td>
											<td><?php echo $item->name?></td>
											<td><?php echo $item->project_created_date?></td>
											
							

									<td><span class="badge badge-pill badge-primary"><?php echo $status?></span></td>
										
			
												<td><?php echo $item->project_progress?> %</td>
												<td></td>
												<td><?php echo $due_date?></td>
											</tr>
					
									<?php } ?>   
										
										
											
										</tbody>
									</table>
								</div>
							</div>
						
						</div><!-- card-body -->
        	</div>

					
       <!-- col -->
					</div>
          <!-- Notifications -->
          <!-- <div class="col-sm-6 col-xl-3 col-md-4  order-sm-1 order-xl-0" >
            <div class="card card-hover card-notification-one dashCardHover" style="border-radius:10px ;width:22.5rem">
              <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-r-10">
                <h6 class="card-title mg-b-0">Notifications</h6>
                <nav class="nav">
                  <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
                  <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
                </nav>
              </div>card-header
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-pink"><i data-feather="clock" class="svg-14"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0">Add business hours to your <strong>Business Page</strong> so it's easy for people to plan a visit. <span>2 hours ago</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-warning"><i data-feather="calendar" class="svg-16"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0"><strong>Edsel Santillana</strong> invited you to join the event <strong>Annual Business Product Showcase</strong>. <span>Yesterday</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-primary"><i data-feather="calendar" class="svg-16"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0"><strong>Dyanne Aceron</strong> added some feedback to your event. <span>Yesterday</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                  <li class="list-group-item">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-blue"><i data-feather="shopping-bag" class="svg-16"></i></span>
                    </div>
                    <div class="list-body">
                      <p class="mg-b-0"><strong>Reynante Labares</strong> invited you to like his <strong>Online Shop</strong>. <span>Jul 31</span></p>
                    </div>
                    <nav class="nav">
                      <a href=""><i data-feather="more-vertical"></i></a>
                    </nav>
                  </li>
                </ul>
              </div>
							card-body
              <div class="card-footer bg-transparent">
                <a href="" class="link-03">Show All Notifications <i class="icon ion-android-arrow-forward"></i></a>
              </div>card-footer
            </div>card


          </div> -->
					
					<!-- col -->
          <!-- <div class="col-md-6 col-xl-4 mg-t-15 mg-sm-t-20">
            
          </div> -->
					<!-- col -->
        </div><!-- row -->
      </div>

<style>
#pool_members .event_client_pbox {
    grid-template-columns: 45fr 25fr 25fr 25fr 25fr;
}
.panel_main_heading
{
	display: flex;
    justify-content: space-between;
    align-items: center;
}
.panel_main_heading
{
	background: #42C500;
    color: #fff;
    text-align: center;
    height: 40px;
    padding: 5px;
    font-size: 18px;
    margin-top: 10px;
    font-weight: 300;
}
</style>
<div class="content-wrapper">
            <div style="clear:both; height:20px;"></div>
            <div style="clear:both; height:20px;"></div>
            <div class="clearfix"></div>

            <div class="col-sm-12">
                <h2 data-toggle="collapse" data-target="#pools_filter" class="detail_popup">Filters</h2>
				<div class="collapse" id="pools_filter">
				<div class="filter_category" id="pools_filter_bar">
                    <div class="col-sm-12 price_box">
                       <div class="clear20"></div>
						<div class="col-sm-4 form_padd_left">
                            <form autocomplete="off" action="/action_page.php">
                                <div class="autocomplete" style="width:100%;">
                                    <input id="input_name" type="text" name="" placeholder="Name">
                                </div>
                            </form>
                        </div>
						
						
                        
						<div class="col-sm-4 form_padd_left">
                            <select class="form-control">
								<option value="">Job Field</option>
								<option value="1">Project Manager</option>
								<option value="2">Software Engineer</option>
								<option value="3">Web Developer</option>
							</select>
                        </div>
						
						
						
						
						<div class="col-sm-4 form_padd_left">
                            <select class="form-control">
								<option value="">Intro Name</option>
								<option value="1">Intro 1</option>
								<option value="2">Intro 2</option>
								<option value="3">Intro 3</option>
								<option value="3">Intro 4</option>
								<option value="3">Intro 5</option>
							</select>
                        </div>
						
						<div class="clear10"></div>
						
						
						<div class="col-sm-4 form_padd_left">
                            <select class="form-control">
								<option value="">Status</option>
								<option value="1">Green</option>
								<option value="2">Sky Blue</option>
								<option value="3">Orange</option>
								<option value="3">Red</option>
							</select>
                        </div>
						
						<div class="col-sm-4 form_padd_left">
                            <select class="form-control">
								<option value="">Next Step</option>
								<option value="0">Written</option>
								<option value="1">Oral Interview</option>
							</select>
                        </div>
						
                    </div>

                    <div class="clear20"></div>

                    <div class="col-sm-12 price_box">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-4 form_padd_left">
                            <button type="button" class="listing_search pull-right" href="#">Search</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="clear20"></div>
                </div>
				</div>
            </div>
			
			<div class="clear20"></div>
            
			<div class="col-sm-12">
				<div id="pool_members" style="background: #fff; padding: 0px 15px;">
                    <div class="clear20"></div>
					
                    <!-- Harry New-->
                    <div class="col-sm-12 p0">
                        <div class="desktop_ceremony event_client_pbox ">
							<div class="event_client_price event_heading pool_head_main">
								<center>
									<label>Intros</label>
								</center>
							</div>
							<div class="event_client_price event_heading">
								<center>
									<span><i class="fa fa-tasks" aria-hidden="true"></i></span>
								</center>
							</div>

							<!-- <div class="event_client_price event_heading">
								<center>
									<span><i class="fa fa-briefcase" aria-hidden="true"></i></span>
								</center>
							</div> -->
							<div class="event_client_price event_heading">
								<center>
									<span><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
								</center>
							</div>
							<div class="event_client_price event_heading">
								<center>
									<span><i class="fa fa-step-forward" aria-hidden="true"></i></span>
								</center>
							</div>
							<div class="event_client_price event_heading">
								<center>
									<span><i class="fa fa-calendar" aria-hidden="true"></i> / <i class="fa fa-clock-o" aria-hidden="true"></i></span>
								</center>
							</div>
						</div>
						
						<!-- <div class="desktop_ceremony event_client_pbox" id="pool_job_category">
											
							<div class="event_client_price event_heading pool_head_main">
								<center>
									<label>Name</label>
								</center>
							</div>
							<div class="event_client_price event_heading pool_head_main">
								<center>
									<label>Step</label>
								</center>
							</div>

							<div class="event_client_price event_heading pool_head_main">
								<center>
									<label>Status</label>
								</center>
							</div>
							<div class="event_client_price event_heading pool_head_main">
								<center>
									<label>Next Step</label>
								</center>
							</div>
							<div class="event_client_price event_heading pool_head_main">
								<center>
									<label>Confirmed</label>
								</center>
							</div>
						</div> -->
						
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							
							<div class="panel panel-default">
								
								<div class="panel-heading" role="tab" id="headingOne">
									
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<div class="panel_main_heading">
											<label>Active Intros : 4</label>
											<label>Microsoft - Web Designer</label>
											<label>Job Open Days / Hours : 10/7</label>
										</div>
										<div class="clearfix"></div>
									</a>
								</div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										
										
										<div class="clear5"></div>
										
										<div id="job_inner_data">
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Richard	White</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step1.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-info"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Intro</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 days</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Sarah Brown</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step2.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-warning"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>interview</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>2 months</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Harry Green</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step3.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-success"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Offer</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>4 days</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Barry Orange</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step1.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-danger"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Intro</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 months</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Richard	White</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step2.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-info"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>interview</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 days</label>
												</center>
											</div>
										</div>
										
										<div class="col-sm-12 job_intro_action_btn p0">
											<button type="button" class="btn btn-lg">Create Intro</button>
											<button type="button" class="btn btn-lg">View Job Details </button>
											<button type="button" class="btn btn-lg">Assign Job to Recruiter</button>
										</div>
										
										</div>
									</div>
								
								</div>
							</div>
							
							
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<div class="panel_main_heading">
											<label>Active Intros : 3</label>
											<label>Apple - IOS Developer</label>
											<label>Job Open Days / Hours : 10/7</label>
										</div>
										<div class="clearfix"></div>
									</a>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										
										
										<div class="clear5"></div>
										
										<div id="job_inner_data">
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Richard	White</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step1.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-info"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Intro</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 days</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Sarah Brown</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step2.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-warning"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>interview</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>2 months</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Harry Green</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step3.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-success"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Offer</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>4 days</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Barry Orange</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step1.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-danger"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Intro</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 months</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Richard	White</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step2.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-info"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>interview</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 days</label>
												</center>
											</div>
										</div>
										
										<div class="col-sm-12 job_intro_action_btn p0">
											<button type="button" class="btn btn-lg">Create Intro</button>
											<button type="button" class="btn btn-lg">View Job Details </button>
											<button type="button" class="btn btn-lg">Assign Job to Recruiter</button>
										</div>
										
										</div>
									</div>
								
								</div>
							</div>
							
							
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<div class="panel_main_heading">
											<label>Active Intros : 4</label>
											<label>Apple INC. - Software Engineer</label>
											<label>Job Open Days / Hours : 4/7</label>
										</div>
										<div class="clearfix"></div>
									</a>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										
										
										<div class="clear5"></div>
										
										<div id="job_inner_data">
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Richard	White</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step1.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-info"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Intro</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 days</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Sarah Brown</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step2.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-warning"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>interview</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>2 months</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Harry Green</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step3.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-success"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Offer</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>4 days</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Barry Orange</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step1.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-danger"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Intro</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 months</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Richard	White</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step2.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-info"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>interview</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 days</label>
												</center>
											</div>
										</div>
										
										<div class="col-sm-12 job_intro_action_btn p0">
											<button type="button" class="btn btn-lg">Create Intro</button>
											<button type="button" class="btn btn-lg">View Job Details </button>
											<button type="button" class="btn btn-lg">Assign Job to Recruiter</button>
										</div>
										
										</div>
									</div>
								
								</div>
							</div>
						
							
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#node_collapse" aria-expanded="false" aria-controls="node_collapse">
										<div class="panel_main_heading">
											<label>Active Intros : 1</label>
											<label>IBM - React.Js Developer</label>
											<label>Job Open Days / Hours : 8/7</label>
										</div>
										<div class="clearfix"></div>
									</a>
								</div>
								<div id="node_collapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										
										
										<div class="clear5"></div>
										
										<div id="job_inner_data">
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Richard	White</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step1.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-info"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Intro</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 days</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Sarah Brown</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step2.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-warning"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>interview</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>2 months</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Harry Green</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step3.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-success"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Offer</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>4 days</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Barry Orange</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step1.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-danger"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Intro</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 months</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Richard	White</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step2.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-info"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>interview</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 days</label>
												</center>
											</div>
										</div>
										
										<div class="col-sm-12 job_intro_action_btn p0">
											<button type="button" class="btn btn-lg">Create Intro</button>
											<button type="button" class="btn btn-lg">View Job Details </button>
											<button type="button" class="btn btn-lg">Assign Job to Recruiter</button>
										</div>
										
										</div>
									</div>
								
								</div>
							</div>
						
							
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#react_collapse" aria-expanded="false" aria-controls="react_collapse">
										<div class="panel_main_heading">
											<label>Active Intros : 2</label>
											<label>Next Bridge - Php Developer</label>
											<label>Job Open Days / Hours : 6/7</label>
										</div>
										<div class="clearfix"></div>
									</a>
								</div>
								<div id="react_collapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										
										
										<div class="clear5"></div>
										
										<div id="job_inner_data">
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Richard	White</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step1.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-info"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Intro</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 days</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Sarah Brown</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step2.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-warning"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>interview</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>2 months</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Harry Green</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step3.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-success"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Offer</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>4 days</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Barry Orange</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step1.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-danger"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>Intro</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 months</label>
												</center>
											</div>
										</div>
										
										<div class="desktop_ceremony event_client_pbox" id="pool_job_category_data">
											<div class="event_client_price event_heading pool_head_main" data-toggle="modal" data-target="#intro_name_click">
												<center>
													<label>Richard	White</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label><img src="<?php echo base_url();?>public/admin/img/step2.png"></label>
												</center>
											</div>

											<div class="event_client_price event_heading pool_head_main">
												<center>
													<button type="button" class="btn-info"></button>
												</center>
											</div>
											
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>interview</label>
												</center>
											</div>
											<div class="event_client_price event_heading pool_head_main">
												<center>
													<label>6 days</label>
												</center>
											</div>
										</div>
										
										<div class="col-sm-12 job_intro_action_btn p0">
											<button type="button" class="btn btn-lg">Create Intro</button>
											<button type="button" class="btn btn-lg">View Job Details </button>
											<button type="button" class="btn btn-lg">Assign Job to Recruiter</button>
										</div>
										
										</div>
									</div>
								
								</div>
							</div>
						
						</div>
                        
                        <div class="clearfix"></div>
                    </div>

                    <div class="clear10"></div>
                </div>
            </div>

            <div class="clear20"></div>

            <div style="clear:both; height:20px;"></div>
            <div class="clearfix"></div>
        </div>
        <!-- /.content-wrapper -->
        <div class="modal fade" id="intro_name_click" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Intro Team Member</h2>
				</div>
				<div class="modal-body">
					<div class="talent_desktop_view">
							<div class="col-sm-2 p0 mobile_talent_image">
								<img src="<?php echo base_url();?>public/admin/dist/img/1.jpg" class="img-responsive" alt="">
							</div>

							<div class="col-sm-3 recutier_mob_head name_location_mobile">
								<div class="product-info">
									<h4 style="margin:0px;">Alexander Pierce</h4>
									<div class="clearfix"></div>
									<span class="product-description">
										<i class="fa fa-map-marker" aria-hidden="true"></i> San Franicso, CA
									</span>
								</div>
							</div>

							<div class="mobile_clearfix"></div>

							<div class="col-sm-10 p0_mobile candidate_info_tab">
								<div class="col-sm-6 p0 person_modal_mobile">
									<div class="col-sm-6 p0_mobile"><label>Mobile:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum</p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Current Company:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum</p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Current job start date:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum</p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Current Job title:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum</p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Qualifications:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum</p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Job Category:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Software Engineer</p></div>
									<div class="clearfix"></div>
								</div>

								<div class="col-sm-6 p0 person_modal_mobile">
									<div class="col-sm-6 p0_mobile"><label>Email:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum</p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Previous Company:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum</p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Previous job start date:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum</p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Previous Job title:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum</p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Skills:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Skill 1 , Skill 2</p></div>
									<div class="clearfix"></div>

								</div>
							</div>

							<div class="clear10"></div>
						</div>
						<div class="col-sm-12 p0 points_setting ">
							<h3>Person Description</h3>
							<p>Loreum Ipsum is the dummy text of the printing and typesetting industry.Loreum Ipsum is the dummy text of the printing and typesetting industry.Loreum Ipsum is the dummy text of the printing and typesetting industry.Loreum Ipsum is the dummy text of the printing and typesetting industry.Loreum Ipsum is the dummy text of the printing and typesetting industry.</p>
						</div>
						
						<div class="clear10"></div>
						<div class="col-sm-12 p0 points_setting ">
							<h3 style="margin-top: 0px;">Job Tags</h3>
							<div class="talent-file-card">
								<span class="badge badge-primary">JavaScript</span>
								<span class="badge badge-primary">Android</span>
								<span class="badge badge-primary">PHP</span>
								<span class="badge badge-primary">Node.js</span>
								<span class="badge badge-primary">Ruby</span>
								<span class="badge badge-primary">Paython</span>
								<span class="badge badge-primary">Bootstrap</span>
								<span class="badge badge-primary">React</span>
								<span class="badge badge-primary">Code Igniter</span>
								<span class="badge badge-primary">Laravel</span>
							</div>
						</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					
					<button type="button" class="btn btn-info btn-lg pull-right" data-dismiss="modal">Move</button>
					
					<button type="button" style="margin-right:5px;" class="btn btn-info btn-lg pull-right">Create Intro</button>
					<button type="button" style="margin-right:5px;" class="btn btn-info btn-lg pull-right" data-dismiss="modal">View Profile</button>
				</div>
			</div>
		</div>
	</div>
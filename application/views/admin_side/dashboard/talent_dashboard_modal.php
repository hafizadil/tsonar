<?php
	// echo "<pre>";print_r($talents);die();
foreach ($talents as $talent) {

?>

<div id="myModall3" class="modal fade" role="dialog">
		<div class="modal-dialog modal_wdith_intro">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<div class="col-sm-12 p0">
						<div class="desktop_modal_header">
						<div class="col-sm-3 recutier_mob_head">
							<div class="product-info">
								<h4 style="margin:0px;"><?php echo $talent->name;?></h4>
								<div class="clearfix"></div>
								<span class="product-description">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									<?php
                                        $locations =  fetch_values_name_id($talent->location);
                                        // echo "<pre>";print_r($locations);
                                        foreach ($locations as  $value) {
                                        	echo $value->value_name.", ";
                                        }
                                        ?>
								</span>
							</div>
						</div>

						<div class="col-sm-6 recutier_mob_content">
							<center>
								<p style="margin-top: 9px;">Next action: call with you at 4pm</p>
							</center>
						</div>

						<div class="col-sm-2 recutier_mob_toggle" style="text-align: right; padding-right: 0px;">
							<div class="dropdown" id="modal_dropdown">
								<button type="button" class="btn btn-primary dropdown-toggle" style="background-color:transparent; border:none;" data-toggle="dropdown">
								<img src="<?php echo base_url();?>public/admin/dist/img/menu.png" width="30" height="21" alt=""></button>
								<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
									<li class="dropdown-submenu">
										<a class="dropdown-item" tabindex="-1" href="#">Add</a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a href="#">Add to float </a></li>
											<li class="dropdown-item"><a href="#">Add to pool</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" tabindex="-1" href="#">Create </a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a href="#">Create job</a></li>
											<li class="dropdown-item"><a href="#">Create float</a></li>
											<li class="dropdown-item"><a href="#">Create pool</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" tabindex="-1" href="#">Send</a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a href="#">Send job for interest</a></li>
											<li class="dropdown-item"><a href="#">Request for information</a></li>
											<li class="dropdown-item"><a href="#">Request update</a></li>
											<li class="dropdown-item"><a href="#">Arrange call</a></li>
										</ul>
									</li>
									<li class="dropdown-item"><a href="#">Pool</a></li>
								</ul>
							</div>
						</div>

						<div class="col-sm-1">
							<button type="button" class="close modal_intro_close" data-dismiss="modal">&times;</button>
						</div>
						</div>

						<div class="mobile_modal_header">

						<div class="col-sm-6 recutier_mob_content">
							<center>
								<p style="margin-top: 5px;">Next action: call with you at 4pm</p>
							</center>
						</div>


						<div class="col-sm-2 recutier_mob_toggle" >
							<div class="dropdown" id="modal_dropdown">
								<button type="button" class="btn btn-primary dropdown-toggle" style="background-color:transparent; border:none;" data-toggle="dropdown">
								<img src="<?php echo base_url();?>public/admin/dist/img/menu.png" width="30" height="21" alt=""></button>
								<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
									<li class="dropdown-submenu">
										<a class="dropdown-item" tabindex="-1" href="#">Add</a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a href="#">Add to float </a></li>
											<li class="dropdown-item"><a href="#">Add to pool</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" tabindex="-1" href="#">Create </a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a href="#">Create job</a></li>
											<li class="dropdown-item"><a href="#">Create float</a></li>
											<li class="dropdown-item"><a href="#">Create pool</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" tabindex="-1" href="#">Send</a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a href="#">Send job for interest</a></li>
											<li class="dropdown-item"><a href="#">Request for information</a></li>
										</ul>
									</li>
									<li class="dropdown-item"><a href="#">Pool</a></li>
								</ul>
							</div>
						</div>

						<div class="col-sm-1 mobile_close_cross">
							<button type="button" class="close modal_intro_close" data-dismiss="modal">&times;</button>
						</div>


						</div>
					</div>


				</div>

				<div class="modal-body" style="padding-top:0px; padding-bottom:0px;">
					<div class="col-sm-12 modal_intro p0">
						<div class="clear20"></div>

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
									<div class="col-sm-6 p0_mobile"><p><?php echo $talent->mobile_no; ?></p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Current Company:</strong></div>
									<div class="col-sm-6 p0_mobile"><p><?php echo $talent->current_company; ?></p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Current job start date:</label></div>
									<div class="col-sm-6 p0_mobile"><p><?php echo $talent->current_job_sdate; ?></p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Current Job title:</label></div>
									<div class="col-sm-6 p0_mobile"><p><?php echo $talent->current_job_title; ?></p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Qualifications:</label></div>
									<div class="col-sm-6 p0_mobile"><p><?php echo $talent->qualification; ?></p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Job Feild:</label></div>
									<div class="col-sm-6 p0_mobile"><p>
											<?php
                                        $job_fields =  fetch_values_name_id($talent->job_field);
                                        // echo "<pre>";print_r($locations);
                                        foreach ($job_fields as  $job_field) {
                                        	echo $job_field->value_name.", ";
                                        }
                                        ?>
										</p></div>
									<div class="clearfix"></div>
								</div>

								<div class="col-sm-6 p0 person_modal_mobile">
									<div class="col-sm-6 p0_mobile"><label>Email:</label></div>
									<div class="col-sm-6 p0_mobile"><p><?php echo $talent->email; ?></p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Previous Company:</label></div>
									<div class="col-sm-6 p0_mobile"><p><?php echo $talent->prev_company; ?></p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Previous job start date:</label></div>
									<div class="col-sm-6 p0_mobile"><p><?php echo $talent->prev_job_sdate; ?></p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Previous Job title:</label></div>
									<div class="col-sm-6 p0_mobile"><p><?php echo $talent->prev_job_title; ?></p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Skills:</label></div>
									<div class="col-sm-6 p0_mobile"><p><?php echo $talent->skills; ?></p></div>
									<div class="clearfix"></div>

								</div>
							</div>

							<div class="clear10"></div>
						</div>

						<div class="talent_mobile_view">
							<div class="col-xs-3 p0">
								<img src="<?php echo base_url();?>public/admin/dist/img/1.jpg" class="img-responsive" alt="">
							</div>

							<div class="col-xs-9">
								<div class="product-info">
									<h4 style="margin:0px;">Alexander Pierce</h4>
									<div class="clearfix"></div>
									<span class="product-description">
										<i class="fa fa-map-marker" aria-hidden="true"></i> San Franicso, CA
									</span>
								</div>
								<div class="col-sm-10 p0_mobile candidate_info_tab">
								<div class="col-sm-6 p0 person_modal_mobile">
									<div class="col-sm-6 p0_mobile"><label>Mobile:</label></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum</p></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 p0_mobile"><label>Current Company:</strong></div>
									<div class="col-sm-6 p0_mobile"><p>Lorem Ipsum:</p></div>
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

							</div>

							<div class="mobile_clearfix"></div>


							<div class="clear10"></div>
						</div>

						<div class="col-sm-12 p0 points_setting ">
							<h3>Person Description</h3>
							<p>Loreum Ipsum is the dummy text of the printing and typesetting industry.Loreum Ipsum is the dummy text of the printing and typesetting industry.Loreum Ipsum is the dummy text of the printing and typesetting industry.Loreum Ipsum is the dummy text of the printing and typesetting industry.Loreum Ipsum is the dummy text of the printing and typesetting industry.</p>
						</div>

						<div class="clear10"></div>

						<div class="col-sm-12 p0 points_setting ">
							<h3 style="margin-top: 0px;">Recuiter Summary</h3>
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
						
						<div class="clear10"></div>

						<div class="col-sm-12 p0 points_setting ">
							<h3 style="margin-top: 0px;">Current search status</h3>

						</div>

						<div class="clear10"></div>

						<div class="">
							<form id="current_status_form">
								<div class="col-md-4 current_padd_left">
									<div class="form-group">
										<select class="active_select form-control" txt-attr="Current search status - ">
											<option value="">Current search status</option>
											<option value="1">Immediately available</option>
											<option value="1">Interested</option>
											<option value="1">Passive</option>
											<option value="1">Not Interested</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="active_select form-control" txt-attr="Current search status - ">
											<option value="">when will contact next time</option>
											<option value="1">Option 1</option>
											<option value="1">Option 2</option>
											<option value="1">Option 3</option>
										</select>
									</div>
								</div>

								<div class="col-md-4 current_padd_right">
									<div class="form-group form-control current_update_month">
										<label>next update 12 months</label>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-md-4 current_padd_left">
									<div class="form-group" id="current_location_border">
										<select class="test1 current_status_above" multiple="multiple">
											<option value="0">Auckland</option>
											<option value="1">Hamilton</option>
											<option value="2">Wellington</option>
											<option value="3">Christchurch</option>
											<option value="4">Regional</option>
											<option value="4">Other City</option>
											<option value="4">Home</option>
										</select>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<select class="active_select form-control" name="ftc" txt-attr="Notice period - ">
											<option value="">Notice period</option>
											<option value="1">1 Week</option>
											<option value="2">2 Weeks</option>
											<option value="2">3 Weeks</option>
											<option value="2">4 Weeks</option>
											<option value="2">5 Weeks</option>
											<option value="2">6 Weeks</option>
										</select>
									</div>
								</div>

								<div class="clearfix"></div>
							</form>
						</div>

						<!-- table_recuiter -->
						<div class="col-sm-12 p0 ">
							<h2 data-toggle="collapse" data-target="#demo3" id="detail_popup">Detail</h2>
							<div class="clear10"></div>
							<div id="demo3" class="collapse ">
								<div class="recutier_desktop_table">
									<table class="table table-hover table-bordered" id="button_checked" style="    border: none;">

										<thead>
											<th style="border: none; padding: 0px;" width="25%"></th>
											<th style="border: none; padding: 0px;" width="25%"></th>
											<th style="border: none; padding: 0px;" width="25%"></th>
											<th style="border: none; padding: 0px;" width="25%"></th>
										</thead>

										<tbody>

											<tr class="portion_heading">
												<td colspan="4">
													<center>
														<label>Current or most recent job details</label>
													</center>
												</td>
											</tr>

											<tr class="job_detail_collapse_tr">
												<td class="td_1_green_label">
													<input id="job_detail_collapse" type="checkbox" class="display_none_talent3"></input>
													<label for="job_detail_collapse">Job</label>
												</td>
												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Company" style="display: block !important;">
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Title" style="display: block !important;">
												</td>

												<td class="green_hover">
													<select class="active_select" txt-attr="Location - ">
														<option value="">Location</option>
														<option value="0">Auckland</option>
														<option value="1">Hamilton</option>
														<option value="2">Wellington</option>
														<option value="3">Christchurch</option>
														<option value="4">Regional</option>
														<option value="4">Other City</option>
														<option value="4">Home</option>
														<option value="4">International</option>
													</select>
												</td>
											</tr>

											<tr class="current_contract">
												<td class="td_1_green_label">
													<input id="proof40" type="checkbox" class="display_none_talent3"></input>
													<label for="proof40">Contract type</label>
												</td>
												<td class="green_hover">
													<input id="proof41" type="checkbox" class="display_none_talent3"></input>
													<label for="proof41">Permanent</label>
												</td>

												<td class="green_hover">
													<input id="tl_ind_cur_contr_ftc" type="checkbox" class="display_none_talent3">
													<label for="tl_ind_cur_contr_ftc">Fixed-term</label>
												</td>

												<td class="green_hover">
													<input id="tl_ind_cur_contr_contractor" type="checkbox" class="display_none_talent3">
													<label for="tl_ind_cur_contr_contractor">Contractor</label>
												</td>
											</tr>



											<tr class="current_pay_ind_talent" style="display: table-row !important;">
												<td class="td_1_green_label">
													<input id="proof44" type="checkbox" class="active_select"></input>
													<label for="proof44">Pay</label>
												</td>

												<td class="green_hover">
													<select name="" class="active_select" id="tl_ind_cur_pay_daily_pay" style="width: 100%; padding-left: 5px;" txt-attr="Pay daily - ">
														<option value="">Pay daily</option>
														<option value="1">$300</option>
														<option value="1">$325</option>
														<option value="1">$350</option>
														<option value="1">$375</option>
														<option value="1">$400</option>
														<option value="1">$425</option>
														<option value="1">$450</option>
														<option value="1">$475</option>
														<option value="1">$500</option>
														<option value="1">$525</option>
														<option value="1">$550</option>
														<option value="1">$575</option>
														<option value="1">$600</option>
														<option value="1">$625</option>
														<option value="1">$650</option>
														<option value="1">$675</option>
														<option value="1">$700</option>
														<option value="1">$725</option>
														<option value="1">$750</option>
														<option value="1">$775</option>
														<option value="1">$800</option>
														<option value="1">$825</option>
														<option value="1">$850</option>
														<option value="1">$875</option>
														<option value="1">$900</option>
														<option value="1">$925</option>
														<option value="1">$950</option>
														<option value="1">$975</option>
														<option value="1">$1,000</option>
														<option value="1">$1,025</option>
														<option value="1">$1,050</option>
														<option value="1">$1,075</option>
														<option value="1">$1,100</option>
														<option value="1">$1,125</option>
														<option value="1">$1,150</option>
														<option value="1">$1,175</option>
														<option value="1">$1,200</option>
														<option value="1">$1,225</option>
														<option value="1">$1,250</option>
														<option value="1">$1,275</option>
														<option value="1">$1,300</option>
														<option value="1">$1,325</option>
														<option value="1">$1,350</option>
														<option value="1">$1,375</option>
														<option value="1">$1,400</option>
														<option value="1">$1,425</option>
														<option value="1">$1,450</option>
														<option value="1">$1,475</option>
														<option value="1">$1,500</option>
														<option value="1">$1,525</option>
														<option value="1">$1,550</option>
														<option value="1">$1,575</option>
														<option value="1">$1,600</option>
														<option value="1">$1,625</option>
														<option value="1">$1,650</option>
														<option value="1">$1,675</option>
														<option value="1">$1,700</option>
														<option value="1">$1,725</option>
														<option value="1">$1,750</option>
														<option value="1">$1,775</option>
														<option value="1">$1,800</option>
														<option value="1">$1,825</option>
														<option value="1">$1,850</option>
														<option value="1">$1,875</option>
														<option value="1">$1,900</option>
														<option value="1">$1,925</option>
														<option value="1">$1,975</option>
														<option value="1">$2,000</option>
													</select>

													<select class="active_select form-control green_hover" id="tl_ind_cur_pay_annual_pay" txt-attr="Pay annual - ">
														<option value="">Pay annual</option>
														<option value="1">$50,000</option>
														<option value="1">$55,000</option>
														<option value="1">$60,000</option>
														<option value="1">$65,000</option>
														<option value="1">$70,000</option>
														<option value="1">$75,000</option>
														<option value="1">$80,000</option>
														<option value="1">$85,000</option>
														<option value="1">$90,000</option>
														<option value="1">$95,000</option>
														<option value="1">$100,000</option>
														<option value="1">$105,000</option>
														<option value="1">$110,000</option>
														<option value="1">$115,000</option>
														<option value="1">$120,000</option>
														<option value="1">$125,000</option>
														<option value="1">$130,000</option>
														<option value="1">$135,000</option>
														<option value="1">$140,000</option>
														<option value="1">$145,000</option>
														<option value="1">$150,000</option>
														<option value="1">$155,000</option>
														<option value="1">$160,000</option>
														<option value="1">$165,000</option>
														<option value="1">$170,000</option>
														<option value="1">$175,000</option>
														<option value="1">$180,000</option>
														<option value="1">$185,000</option>
														<option value="1">$190,000</option>
														<option value="1">$195,000</option>
														<option value="1">$200,000</option>
														<option value="1">$205,000</option>
														<option value="1">$210,000</option>
														<option value="1">$215,000</option>
														<option value="1">$220,000</option>
														<option value="1">$225,000</option>
														<option value="1">$230,000</option>
														<option value="1">$235,000</option>
														<option value="1">$240,000</option>
														<option value="1">$245,000</option>
														<option value="1">$250,000</option>
														<option value="1">$255,000</option>
														<option value="1">$260,000</option>
														<option value="1">$265,000</option>
														<option value="1">$270,000</option>
														<option value="1">$275,000</option>
														<option value="1">$280,000</option>
														<option value="1">$285,000</option>
														<option value="1">$290,000</option>
														<option value="1">$295,000</option>
														<option value="1">$300,000</option>
													</select>
												</td>


												<td class="current_pay_slct_end_dt green_hover">
													<!-- <input placeholder="Select end date" class="textbox-n " type="text" onfocus="(this.type='date')" id="date_picker"> -->
													<div class="ui calendar" id="example2">
														<div class="ui input left icon">
															<i class="calendar icon"></i>
															<input type="text" placeholder="Contract end date">
														</div>
													</div>
												</td>
												<td class="tal_ind_cur_pay_bons green_hover">
													<select class="active_select " txt-attr="Bonus - " style="width: 100%;">
														<option value="">Select bonus</option>
														<option value="1">No bonus</option>
														<option value="1">5% bonus</option>
														<option value="1">10% bonus</option>
														<option value="1">15% bonus</option>
														<option value="1">20% bonus</option>
														<option value="1">25% bonus</option>
														<option value="1">30% bonus</option>
														<option value="1">35% bonus</option>
														<option value="1">40%+ bonus</option>
													</select>
												</td>

												<td class="green_hover">
													<select class="test1 recutier_benefit_multiple" multiple="multiple">
														<option value="0">Benefit 1</option>
														<option value="1">Benefit 2</option>
														<option value="2">Benefit 3</option>
														<option value="3">Benefit 4</option>
														<option value="4">Benefit 5</option>
													</select>
												</td>

											</tr>

											<tr class="level_ind_talent">
												<td class="td_1_green_label">
													<input id="talent_level_version" type="checkbox" class="display_none_talent3">
													<label for="talent_level_version">Level</label>
												</td>

												<td valign="middle" class="green_hover">
													<input id="tal_ind_leader_of_leader" class="display_none_talent3" type="checkbox">
													<label for="tal_ind_leader_of_leader">Leader of leaders</label>
												</td>

												<td valign="middle" class="green_hover">
													<input id="tal_ind_leader_of_professional" class="display_none_talent3" type="checkbox">
													<label for="tal_ind_leader_of_professional">Leader of professionals</label>
												</td>
												<td valign="middle" class="green_hover">
													<input id="tal_ind_individual_professional" class="display_none_talent3" type="checkbox">
													<label for="tal_ind_individual_professional">Individual professional</label>
												</td>
											</tr>

											<tr class="tal_ind_div_level">
												<td class="td_1_green_label">
													<input id="team_talent_popup" type="checkbox" class="display_none_talent3">
													<label for="team_talent_popup">Team</label>
												</td>
												<td valign="middle" class="green_hover">
													<select class="active_select tal_ind_direct_report" txt-attr="Direct reports - ">
														<option value="">Direct reports</option>
														<option value="1">1</option>
														<option value="1">2</option>
														<option value="1">3</option>
														<option value="1">4</option>
														<option value="1">5</option>
														<option value="1">6</option>
														<option value="1">7</option>
														<option value="1">8</option>
														<option value="1">9</option>
														<option value="1">10</option>
														<option value="1">11</option>
														<option value="1">12+</option>
													</select>
												</td>

												<td class="green_hover">
													<select class="active_select tal_ind_size_total_func" txt-attr="Total size of function">
														<option value="">Total size of function</option>
														<option value="1">0-10</option>
														<option value="1">10-20</option>
														<option value="1">20-30</option>
														<option value="1">30-40</option>
														<option value="1">40-50</option>
														<option value="1">50-60</option>
														<option value="1">60-70</option>
														<option value="1">70-80</option>
														<option value="1">80-90</option>
														<option value="1">90-100</option>
														<option value="1">100+</option>
													</select>
												</td>

												<td></td>
											</tr>

											<tr class="portion_heading">
												<td colspan="4">
													<center>
														<label>Next Job</label>
													</center>
												</td>
											</tr>

											<tr class="contract-consider-pop">
												<td class="td_1_green_label">
													<input id="proof50" type="checkbox"></input>
													<label for="proof50">Contracts considered</label>
												</td>

												<td class="green_hover">
													<input id="tl_ind_contr_cons_perma" type="checkbox" class="display_none_talent3" />
													<label for="tl_ind_contr_cons_perma">Permanent</label>
												</td>

												<td class="green_hover">
													<input id="tl_ind_contr_cons_ftc" type="checkbox" class="display_none_talent3" />
													<label for="tl_ind_contr_cons_ftc">Fixed-term</label>
												</td>

												<td class="green_hover">
													<input id="tl_ind_contr_cons_contractor" type="checkbox" class="display_none_talent3" />
													<label for="tl_ind_contr_cons_contractor">Contractor</label>
												</td>
											</tr>

											<tr class="pay-desire-pop">
												<td class="td_1_green_label">
													<input id="proof54" type="checkbox"></input>
													<label for="proof54">Pay</label>
												</td>

												<td class="green_hover">
													<select name="" class="active_select" style="width: 100%; padding-left: 5px;" id="pay_dsr_anul_pop" txt-attr="Pay annual - ">
														<option value="">Pay annual</option>
														<option value="1">$50,000</option>
														<option value="1">$55,000</option>
														<option value="1">$60,000</option>
														<option value="1">$65,000</option>
														<option value="1">$70,000</option>
														<option value="1">$75,000</option>
														<option value="1">$80,000</option>
														<option value="1">$85,000</option>
														<option value="1">$90,000</option>
														<option value="1">$95,000</option>
														<option value="1">$100,000</option>
														<option value="1">$105,000</option>
														<option value="1">$110,000</option>
														<option value="1">$115,000</option>
														<option value="1">$120,000</option>
														<option value="1">$125,000</option>
														<option value="1">$130,000</option>
														<option value="1">$135,000</option>
														<option value="1">$140,000</option>
														<option value="1">$145,000</option>
														<option value="1">$150,000</option>
														<option value="1">$155,000</option>
														<option value="1">$160,000</option>
														<option value="1">$165,000</option>
														<option value="1">$170,000</option>
														<option value="1">$175,000</option>
														<option value="1">$180,000</option>
														<option value="1">$185,000</option>
														<option value="1">$190,000</option>
														<option value="1">$195,000</option>
														<option value="1">$200,000</option>
														<option value="1">$205,000</option>
														<option value="1">$210,000</option>
														<option value="1">$215,000</option>
														<option value="1">$220,000</option>
														<option value="1">$225,000</option>
														<option value="1">$230,000</option>
														<option value="1">$235,000</option>
														<option value="1">$240,000</option>
														<option value="1">$245,000</option>
														<option value="1">$250,000</option>
														<option value="1">$255,000</option>
														<option value="1">$260,000</option>
														<option value="1">$265,000</option>
														<option value="1">$270,000</option>
														<option value="1">$275,000</option>
														<option value="1">$280,000</option>
														<option value="1">$285,000</option>
														<option value="1">$290,000</option>
														<option value="1">$295,000</option>
														<option value="1">$300,000</option>
													</select>


													<select name="" class="active_select" id="tl_ind_pay_dsr_daily" style="width: 100%; padding-left: 5px;" txt-attr="Daily - ">
														<option value="">Pay daily</option>
														<option value="1">$300</option>
														<option value="1">$325</option>
														<option value="1">$350</option>
														<option value="1">$375</option>
														<option value="1">$400</option>
														<option value="1">$425</option>
														<option value="1">$450</option>
														<option value="1">$475</option>
														<option value="1">$500</option>
														<option value="1">$525</option>
														<option value="1">$550</option>
														<option value="1">$575</option>
														<option value="1">$600</option>
														<option value="1">$625</option>
														<option value="1">$650</option>
														<option value="1">$675</option>
														<option value="1">$700</option>
														<option value="1">$725</option>
														<option value="1">$750</option>
														<option value="1">$775</option>
														<option value="1">$800</option>
														<option value="1">$825</option>
														<option value="1">$850</option>
														<option value="1">$875</option>
														<option value="1">$900</option>
														<option value="1">$925</option>
														<option value="1">$950</option>
														<option value="1">$975</option>
														<option value="1">$1,000</option>
														<option value="1">$1,025</option>
														<option value="1">$1,050</option>
														<option value="1">$1,075</option>
														<option value="1">$1,100</option>
														<option value="1">$1,125</option>
														<option value="1">$1,150</option>
														<option value="1">$1,175</option>
														<option value="1">$1,200</option>
														<option value="1">$1,225</option>
														<option value="1">$1,250</option>
														<option value="1">$1,275</option>
														<option value="1">$1,300</option>
														<option value="1">$1,325</option>
														<option value="1">$1,350</option>
														<option value="1">$1,375</option>
														<option value="1">$1,400</option>
														<option value="1">$1,425</option>
														<option value="1">$1,450</option>
														<option value="1">$1,475</option>
														<option value="1">$1,500</option>
														<option value="1">$1,525</option>
														<option value="1">$1,550</option>
														<option value="1">$1,575</option>
														<option value="1">$1,600</option>
														<option value="1">$1,625</option>
														<option value="1">$1,650</option>
														<option value="1">$1,675</option>
														<option value="1">$1,700</option>
														<option value="1">$1,725</option>
														<option value="1">$1,750</option>
														<option value="1">$1,775</option>
														<option value="1">$1,800</option>
														<option value="1">$1,825</option>
														<option value="1">$1,850</option>
														<option value="1">$1,875</option>
														<option value="1">$1,900</option>
														<option value="1">$1,925</option>
														<option value="1">$1,975</option>
														<option value="1">$2,000</option>
													</select>
												</td>
												<td class="green_hover">
													<select id="" class="active_select bonus_expectation" txt-attr="Bonus expectation - ">
														<option value="">Bonus expectation</option>
														<option value="nobonus">No bonus</option>
														<option value="5">5% bonus</option>
														<option value="10">10% bonus</option>
														<option value="15">15% bonus</option>
														<option value="20">20% bonus</option>
														<option value="25">25% bonus</option>
														<option value="30">30% bonus</option>
														<option value="35">35% bonus</option>
														<option value="40">40%+ bonus</option>
													</select>
												</td>
												<td class="green_hover">
													<input id="flexible_pay_detail_expand" type="checkbox" class="display_none_talent3" />
													<label for="flexible_pay_detail_expand">Flexible on pay</label>
												</td>
											</tr>

											<tr class="talent_level_considered">
												<td class="td_1_green_label">
													<input id="talent_level_version_consider" type="checkbox" class="display_none_talent3">
													<label for="talent_level_version_consider">Level considered</label>
												</td>

												<td valign="middle" class="green_hover">
													<input id="tal_ind_leader_of_leader_next_job" class="display_none_talent3" type="checkbox">
													<label for="tal_ind_leader_of_leader_next_job">Leader of leaders</label>
												</td>

												<td valign="middle" class="green_hover">
													<input id="tal_ind_leader_of_professional_next_job" class="display_none_talent3" type="checkbox">
													<label for="tal_ind_leader_of_professional_next_job">Leader of professionals</label>
												</td>
												<td valign="middle" class="green_hover">
													<input id="tal_ind_individual_professional_next_job" class="display_none_talent3" type="checkbox">
													<label for="tal_ind_individual_professional_next_job">Individual professional</label>
												</td>
											</tr>

											<tr class="talent_location_main">
												<td class="td_1_green_label">
													<input id="talent_level_version_location" type="checkbox" class="display_none_talent3">
													<label for="talent_level_version_location">Locations</label>
												</td>

												<td valign="middle" class="green_hover">
													<select class="test1 location_considered_multiple" multiple="multiple">
														<option value="0">Auckland</option>
														<option value="1">Hamilton</option>
														<option value="2">Wellington</option>
														<option value="3">Christchurch</option>
														<option value="4">Regional</option>
														<option value="4">Other City</option>
														<option value="4">Home</option>
													</select>

												</td>

												<td valign="middle" class="green_hover">
													<!-- <input style="width: 100%; padding-left: 10px;" placeholder="Relocation date est." class="textbox-n" type="text" onfocus="(this.type='date')"  id="date">-->
													<div class="ui calendar" id="example1">
														<div class="ui input left icon">
															<i class="calendar icon"></i>
															<input type="text" placeholder="Relocation date est.">
														</div>
													</div>
												</td>

												<td valign="middle" class="green_hover">
													<input id="talent_popup_location_03" class="display_none_talent3" type="checkbox">
													<label for="talent_popup_location_03">Or relocation required</label>
												</td>
											</tr>

											<tr class="tl_ind_hours_wanted">
												<td class="td_1_green_label">
													<input id="proof56" type="checkbox" class="display_none_talent3"></input>
													<label for="proof56">Hours</label>
												</td>
												<td class="green_hover">
													<input id="tl_ind_hrs_wntd_ful_tme" type="checkbox" class="display_none_talent3"></input>
													<label for="tl_ind_hrs_wntd_ful_tme">Fulltime</label>
												</td>
												<td class="green_hover">
													<input id="tl_ind_hrs_wntd_part_tme" type="checkbox" class="display_none_talent3"></input>
													<label for="tl_ind_hrs_wntd_part_tme">Part time</label>
												</td>
												<td class="green_hover">
													<select name="" class="active_select tl_ind_hrs_wntd_per_week" style="width: 100%; padding-left: 5px;" txt-attr="Select hours - ">
														<option value="">Select hours</option>
														<option value="1">20</option>
														<option value="2">21</option>
														<option value="2">22</option>
														<option value="2">23</option>
														<option value="2">24</option>
														<option value="2">25</option>
														<option value="2">26</option>
														<option value="2">27</option>
														<option value="2">28</option>
														<option value="2">29</option>
														<option value="2">30</option>
														<option value="2">31</option>
														<option value="2">32</option>
														<option value="2">33</option>
														<option value="2">34</option>
														<option value="2">35</option>
													</select>

												</td>
											</tr>

											<tr id="talent_request_home_days" class="tl_ind_hrs_wntd_slct_dys">
												<td class="td_1_green_label">
													<input id="tl_ind_dt_select_any_days" type="checkbox" class="display_none_talent3"></input>
													<label for="tl_ind_dt_select_any_days">Select days</label>
												</td>
												<td colspan="3">
													<div class="panel with-nav-tabs panel-default">
														<div class="panel-heading">
															<ul class="nav nav-tabs">
																<ul class="nav nav-tabs" id="select_days_label">
																	<li>
																		<a href="#">
																		<input id="tl_ind_dt_select_any_days_1" type="checkbox" class="display_none_talent3">
																		<label for="tl_ind_dt_select_any_days_1">Any days</label>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																		<input id="tl_ind_dt_select_any_days_2" type="checkbox" class="display_none_talent3">
																		<label for="tl_ind_dt_select_any_days_2">Monday</label>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																		<input id="tl_ind_dt_select_any_days_3" type="checkbox" class="display_none_talent3">
																		<label for="tl_ind_dt_select_any_days_3">Tuesday</label>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																		<input id="tl_ind_dt_select_any_days_4" type="checkbox" class="display_none_talent3">
																		<label for="tl_ind_dt_select_any_days_4">Wednesday</label>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																		<input id="tl_ind_dt_select_any_days_5" type="checkbox" class="display_none_talent3">
																		<label for="tl_ind_dt_select_any_days_5">Thursday</label>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																		<input id="tl_ind_dt_select_any_days_6" type="checkbox" class="display_none_talent3">
																		<label for="tl_ind_dt_select_any_days_6">Friday</label>
																		</a>
																	</li>
																</ul>
															</ul>
														</div>
													</div>
												</td>
											</tr>



											<tr>
												<td class="td_1_green_label">
													<input id="proof76" type="checkbox"></input>
													<label for="proof76">Describe Ideal roles</label>
												</td>
												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Next role 1" style="display: block !important;">
												</td>
												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Next role 2" style="display: block !important;">
												</td>
												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Next role 3" style="display: block !important;">
												</td>
											</tr>

											<tr>
												<td class="td_1_green_label">
													<input id="proof80" type="checkbox"></input>
													<label for="proof80">Describe Ideal Company</label>
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Desired next company 1" style="display: block !important;">
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Desired next company 2" style="display: block !important;">
												</td>
												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Desired next company 3" style="display: block !important;">
												</td>
											</tr>


											<tr class="portion_heading">
												<td colspan="4">
													<center>
														<label>Talent Details</label>
													</center>
												</td>
											</tr>

											<tr class="tl_id_right_to_work_nz">
												<td class="td_1_green_label">
													<input id="nz_right" type="checkbox" class="display_none_talent3"></input>
													<label for="nz_right">Right to work in NZ</label>
												</td>
												<td class="green_hover">
													<input id="tl_ind_visa_perm" type="checkbox" class="display_none_talent3"></input>
													<label for="tl_ind_visa_perm">Permanent</label>
												</td>
												<td class="green_hover">
													<!-- <input id="tl_ind_visa_limited" type="checkbox" class="display_none_talent3"></input>
													<label for="tl_ind_visa_limited">Limited visa</label> -->
													<div class="ui calendar" id="limited_visa_expiry">
														<div class="ui input left icon">
															<i class="calendar icon"></i>
															<input type="text" placeholder="Limited visa - select expiry date">
														</div>
													</div>
												</td>
												<td class="green_hover">
													<input id="tl_ind_visa_required" type="checkbox" class="display_none_talent3"></input>
													<label for="tl_ind_visa_required">Visa required</label>
												</td>
											</tr>

											<tr>
												<td class="td_1_green_label">
													<input id="proof93" type="checkbox"></input>
													<label for="proof93">Key strengths</label>
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Key strengths 1" style="display: block !important;">
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Key strengths 2" style="display: block !important;">
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Key strengths 3" style="display: block !important;">
												</td>

											</tr>

											<tr>
												<td class="td_1_green_label">
													<input id="proof101" type="checkbox"></input>
													<label for="proof101">Areas developed</label>
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Areas developed" style="display: block !important;">
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Areas developed" style="display: block !important;">
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Areas developed" style="display: block !important;">
												</td>
											</tr>

											<tr>
												<td class="td_1_green_label">
													<input id="proof97" type="checkbox"></input>
													<label for="proof97">Further development identified</label>
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Further development identified" style="display: block !important;">
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Further development identified" style="display: block !important;">
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Further development identified" style="display: block !important;">
												</td>
											</tr>

											<tr class="ambition_leadership">
												<td class="td_1_green_label">
													<input id="ambition_01" type="checkbox" class="display_none_talent3"></input>
													<label for="ambition_01">Ambition for leadership promotion</label>
												</td>
												<td class="green_hover">
													<input id="ambition_02" type="checkbox" class="display_none_talent3"></input>
													<label for="ambition_02">None</label>
												</td>
												<td class="green_hover">
													<input id="ambition_03" type="checkbox" class="display_none_talent3"></input>
													<label for="ambition_03">within 2 years</label>
												</td>
												<td class="green_hover">
													<input id="ambition_04" type="checkbox" class="display_none_talent3"></input>
													<label for="ambition_04">within 5 years</label>
												</td>

											</tr>

											<tr>
												<td class="td_1_green_label">
													<input id="Involvement_01" type="checkbox"></input>
													<label for="Involvement_01">Involvement & activities outside work</label>
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Involvement & activities outside work" style="display: block !important;">
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Involvement & activities outside work" style="display: block !important;">
												</td>

												<td class="green_hover">
													<input class="form-control" type="text" placeholder="Involvement & activities outside work" style="display: block !important;">
												</td>
											</tr>

											<tr>
												<td class="td_1_green_label">
													<input id="video_link01" type="checkbox" class="display_none_talent3">
													<label for="video_link01">Video link</label>
												</td>
												<td colspan="3" valign="middle" class="green_hover">
													<input class="form-control" type="text" placeholder="Video Link" style="display: block !important;">
												</td>
											</tr>

											<tr id="date_time_tabs">
												<td valign="middle" class="pdg_talent_sub_left td_1_green_label" style="border-bottom: solid 0px #fff !important; vertical-align: baseline !important;">
													<input id="proof1161" type="checkbox" class="display_none_talent3">
													<label for="proof1161" data-placement="top" data-toggle="popover" data-trigger="hover" data-content="Red: Description _ Green: Description">Availablity </label>
												</td>

												<td colspan="3">
													<div class="panel with-nav-tabs panel-default">
														<div class="panel-heading">
															<ul class="nav nav-tabs">
																<li><a href="javascript:void(0);" attr-id="date_time_tab1" class="tl_ind_tm_all_act" onclick="hm_availability_click(this)">All</a></li>
																<li><a href="javascript:void(0);" attr-id="date_time_tab2"  class="tl_ind_tm_all_act" onclick="hm_availability_click(this)">Monday</a></li>
																<li><a href="javascript:void(0);" attr-id="date_time_tab3"  class="tl_ind_tm_all_act" onclick="hm_availability_click(this)">Tuesday</a></li>
																<li><a href="javascript:void(0);" attr-id="date_time_tab4"  class="tl_ind_tm_all_act" onclick="hm_availability_click(this)">Wednesday</a></li>
																<li><a href="javascript:void(0);" attr-id="date_time_tab5"  class="tl_ind_tm_all_act" onclick="hm_availability_click(this)">Thursday</a></li>
																<li><a href="javascript:void(0);" attr-id="date_time_tab6"  class="tl_ind_tm_all_act" onclick="hm_availability_click(this)">Friday</a></li>
															</ul>
														</div>

														<div class="panel-body">
															<div class="tab-content tl_ind_hm_tb_content" id="remove_phone_color">
																<div class="tab-pane fade in time_tab_desktop toggle_data_1" id="date_time_tab1">
																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="talent_pop_all_like001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like001">8:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="talent_pop_all_like002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like002">8:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="talent_pop_all_like003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like003">9:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="talent_pop_all_like004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like004">9:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="talent_pop_all_like005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like005">10:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="talent_pop_all_like006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="talent_pop_all_like007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like007">11:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="talent_pop_all_like008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like008">11:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="talent_pop_all_like009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like009">12:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="talent_pop_all_like0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0010">12:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="talent_pop_all_like0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0011">13:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="talent_pop_all_like0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0012">13:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="talent_pop_all_like0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0013">14:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="talent_pop_all_like0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0014">14:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="talent_pop_all_like0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0015">15:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="talent_pop_all_like0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0016">15:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="talent_pop_all_like0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0017">16:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="talent_pop_all_like0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0018">16:30</label>
																		</li>

																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="talent_pop_all_like0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0019">17:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="talent_pop_all_like0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0020">17:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="talent_pop_all_like0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0021">18:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="talent_pop_all_like0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0022">18:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="talent_pop_all_like0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0023">19:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="talent_pop_all_like0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_all_like0024">19:30</label>
																		</li>
																	</ul>
																</div>

																<div class="tab-pane fade in time_tab_desktop toggle_data_2" id="date_time_tab2">
																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="talent_pop_like001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like001">8:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_like002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like002">8:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_like003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like003">9:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_like004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like004">9:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_like005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like005">10:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_like006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="talent_pop_like007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like007">11:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_like008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like008">11:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_like009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like009">12:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_like0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0010">12:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_like0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0011">13:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_like0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0012">13:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="talent_pop_like0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0013">14:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_like0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0014">14:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_like0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0015">15:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_like0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0016">15:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_like0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0017">16:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_like0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0018">16:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="talent_pop_like0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0019">17:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_like0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0020">17:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_like0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0021">18:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_like0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0022">18:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_like0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0023">19:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_like0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_like0024">19:30</label>
																		</li>
																	</ul>
																</div>

																<div class="tab-pane fade in time_tab_desktop toggle_data_3" id="date_time_tab3">

																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="talent_pop_intro001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro001">8:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_intro002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro002">8:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_intro003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro003">9:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_intro004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro004">9:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_intro005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro005">10:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_intro006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro006">10:30</label>
																		</li>
																	</ul>
																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="talent_pop_intro007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro007">11:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_intro008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro008">11:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_intro009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro009">12:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_intro0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0010">12:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_intro0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0011">13:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_intro0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0012">13:30</label>
																		</li>
																	</ul>
																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="talent_pop_intro0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0013">14:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_intro0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0014">14:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_intro0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0015">15:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_intro0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0016">15:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_intro0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0017">16:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_intro0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0018">16:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="talent_pop_intro0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0019">17:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_intro0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0020">17:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_intro0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0021">18:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_intro0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0022">18:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_intro0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0023">19:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_intro0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_intro0024">19:30</label>
																		</li>
																	</ul>
																</div>

																<div class="tab-pane fade in time_tab_desktop toggle_data_4" id="date_time_tab4">
																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="talent_pop_meeting001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting001">8:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_meeting002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting002">8:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_meeting003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting003">9:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_meeting004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting004">9:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_meeting005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting005">10:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_meeting006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="talent_pop_meeting007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting007">11:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_meeting008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting008">11:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_meeting009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting009">12:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_meeting0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0010">12:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_meeting0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0011">13:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_meeting0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0012">13:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="talent_pop_meeting0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0013">14:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_meeting0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0014">14:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_meeting0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0015">15:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_meeting0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0016">15:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_meeting0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0017">16:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_meeting0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0018">16:30</label>
																		</li>
																	</ul>
																	<div class="clearfix"></div>
																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="talent_pop_meeting0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0019">17:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_meeting0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0020">17:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_meeting0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0021">18:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_meeting0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0022">18:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_meeting0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0023">19:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_meeting0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_meeting0024">19:30</label>
																		</li>
																	</ul>
																</div>

																<div class="tab-pane fade in time_tab_desktop toggle_data_5" id="date_time_tab5">

																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="talent_pop_call001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call001">8:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_call002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call002">8:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_call003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call003">9:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_call004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call004">9:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_call005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call005">10:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_call006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>
																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="talent_pop_call007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call007">11:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_call008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call008">11:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_call009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call009">12:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_call0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0010">12:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_call0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0011">13:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_call0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0012">13:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="talent_pop_call0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0013">14:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_call0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0014">14:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_call0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0015">15:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_call0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0016">15:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_call0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0017">16:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_call0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0018">16:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="talent_pop_call0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0019">17:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_call0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0020">17:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_call0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0021">18:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_call0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0022">18:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_call0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0023">19:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_call0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_call0024">19:30</label>
																		</li>
																	</ul>
																</div>

																<div class="tab-pane fade in time_tab_desktop toggle_data_6" id="date_time_tab6">
																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="talent_pop_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday001">8:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday002">8:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday003">9:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday004">9:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday005">10:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="talent_pop_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday007">11:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday008">11:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday009">12:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0010">12:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0011">13:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0012">13:30</label>
																		</li>

																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="talent_pop_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0013">14:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0014">14:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0015">15:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0016">15:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0017">16:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0018">16:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="talent_pop_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0019">17:00</label>
																		</li>
																		<li all-li-click="2">
																			<input id="talent_pop_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0020">17:30</label>
																		</li>
																		<li all-li-click="3">
																			<input id="talent_pop_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0021">18:00</label>
																		</li>
																		<li all-li-click="4">
																			<input id="talent_pop_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0022">18:30</label>
																		</li>
																		<li all-li-click="5">
																			<input id="talent_pop_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0023">19:00</label>
																		</li>
																		<li all-li-click="6">
																			<input id="talent_pop_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="" />
																			<label for="talent_pop_friday0024">19:30</label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</td>
											</tr>

											<tr class="talent_popup_buttons">
												<td colspan="4" style="border: none;">
													<center>
														<button type="button" class="btn btn-info btn-lg">Full cv</button>
														<button type="button" class="btn btn-info btn-lg">Request update</button>
														<button type="button" class="btn btn-info btn-lg">Action</button>
														<button type="button" class="btn btn-info btn-lg">Save</button>
													</center>
												</td>
											</tr>


                                    </tbody>

									</table>
								</div>

								<!-- Table_mobile_tab-->
								<div class="panel-group recutier_mobile_tab" id="bs-collapse-recutier">
									<div class="panel">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#bs-collapse-recutier" href="#one">
												<h4 class="panel-title">Search status<i class="fa fa-angle-down" aria-hidden="true"></i></h4>
											</a>
										</div>
										<div id="one" class="panel-collapse collapse">
											<div class="clear5"></div>
											<select class="active_select search_status_ind_tl_pop_dt_mb" txt-attr="Search status - ">
												<option value="">Search status</option>
												<option value="immediate_available">Immediately available</option>
												<option value="interested">Interested</option>
												<option value="passive">Passive</option>
												<option value="notinterested">Not interested</option>
											</select>
											<div class="clear5"></div>
										</div>
									</div>
									<!-- end of panel_1 -->

									<div class="panel">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#bs-collapse-recutier" href="#two">
												<h4 class="panel-title">Current or most recent job details<i class="fa fa-angle-down" aria-hidden="true"></i></h4>
											</a>
										</div>
										<div id="two" class="panel-collapse collapse">
											<div class="clear5"></div>
											<select class="active_select form-control cont_cons_ind_tl_pop_dt_mb"  txt-attr="Contract - ">
												<option value="">Contract</option>
												<option value="permanent">Permanent</option>
												<option value="ftc">Fixed-term employee</option>
												<option value="contractor">Contractor</option>
											</select>

											<div class="exp_end_dt_ind_tl_pop_dt_mb">
												<div class="ui calendar" id="date_mobile">
													<div class="ui input left icon">
														<i class="calendar icon"></i>
														<input type="text" placeholder="Select end date">
													</div>
												</div>
												<div class="clear5"></div>
												<div class="clear5"></div>
											</div>

											<select class="active_select form-control anul_pay_ind_tl_pop_dt_mb" txt-attr="Pay annual - ">
												<option value="">Pay - annual</option>
												<option value="1">$50,000</option>
												<option value="1">$55,000</option>
												<option value="1">$60,000</option>
												<option value="1">$65,000</option>
												<option value="1">$70,000</option>
												<option value="1">$75,000</option>
												<option value="1">$80,000</option>
												<option value="1">$85,000</option>
												<option value="1">$90,000</option>
												<option value="1">$95,000</option>
												<option value="1">$100,000</option>
												<option value="1">$105,000</option>
												<option value="1">$110,000</option>
												<option value="1">$115,000</option>
												<option value="1">$120,000</option>
												<option value="1">$125,000</option>
												<option value="1">$130,000</option>
												<option value="1">$135,000</option>
												<option value="1">$140,000</option>
												<option value="1">$145,000</option>
												<option value="1">$150,000</option>
												<option value="1">$155,000</option>
												<option value="1">$160,000</option>
												<option value="1">$165,000</option>
												<option value="1">$170,000</option>
												<option value="1">$175,000</option>
												<option value="1">$180,000</option>
												<option value="1">$185,000</option>
												<option value="1">$190,000</option>
												<option value="1">$195,000</option>
												<option value="1">$200,000</option>
												<option value="1">$205,000</option>
												<option value="1">$210,000</option>
												<option value="1">$215,000</option>
												<option value="1">$220,000</option>
												<option value="1">$225,000</option>
												<option value="1">$230,000</option>
												<option value="1">$235,000</option>
												<option value="1">$240,000</option>
												<option value="1">$245,000</option>
												<option value="1">$250,000</option>
												<option value="1">$255,000</option>
												<option value="1">$260,000</option>
												<option value="1">$265,000</option>
												<option value="1">$270,000</option>
												<option value="1">$275,000</option>
												<option value="1">$280,000</option>
												<option value="1">$285,000</option>
												<option value="1">$290,000</option>
												<option value="1">$295,000</option>
												<option value="1">$300,000</option>
											</select>

											<select class="active_select daily_pay_ind_tl_pop_dt_mb" txt-attr="Daily - ">
												<option value="">Daily</option>
												<option value="1">$300</option>
												<option value="1">$325</option>
												<option value="1">$350</option>
												<option value="1">$375</option>
												<option value="1">$400</option>
												<option value="1">$425</option>
												<option value="1">$450</option>
												<option value="1">$475</option>
												<option value="1">$500</option>
												<option value="1">$525</option>
												<option value="1">$550</option>
												<option value="1">$575</option>
												<option value="1">$600</option>
												<option value="1">$625</option>
												<option value="1">$650</option>
												<option value="1">$675</option>
												<option value="1">$700</option>
												<option value="1">$725</option>
												<option value="1">$750</option>
												<option value="1">$775</option>
												<option value="1">$800</option>
												<option value="1">$825</option>
												<option value="1">$850</option>
												<option value="1">$875</option>
												<option value="1">$900</option>
												<option value="1">$925</option>
												<option value="1">$950</option>
												<option value="1">$975</option>
												<option value="1">$1,000</option>
												<option value="1">$1,025</option>
												<option value="1">$1,050</option>
												<option value="1">$1,075</option>
												<option value="1">$1,100</option>
												<option value="1">$1,125</option>
												<option value="1">$1,150</option>
												<option value="1">$1,175</option>
												<option value="1">$1,200</option>
												<option value="1">$1,225</option>
												<option value="1">$1,250</option>
												<option value="1">$1,275</option>
												<option value="1">$1,300</option>
												<option value="1">$1,325</option>
												<option value="1">$1,350</option>
												<option value="1">$1,375</option>
												<option value="1">$1,400</option>
												<option value="1">$1,425</option>
												<option value="1">$1,450</option>
												<option value="1">$1,475</option>
												<option value="1">$1,500</option>
												<option value="1">$1,525</option>
												<option value="1">$1,550</option>
												<option value="1">$1,575</option>
												<option value="1">$1,600</option>
												<option value="1">$1,625</option>
												<option value="1">$1,650</option>
												<option value="1">$1,675</option>
												<option value="1">$1,700</option>
												<option value="1">$1,725</option>
												<option value="1">$1,750</option>
												<option value="1">$1,775</option>
												<option value="1">$1,800</option>
												<option value="1">$1,825</option>
												<option value="1">$1,850</option>
												<option value="1">$1,875</option>
												<option value="1">$1,900</option>
												<option value="1">$1,925</option>
												<option value="1">$1,975</option>
												<option value="1">$2,000</option>
											</select>

											<select id="" class="active_select slct_bons_ind_tl_pop_dt_mb" txt-attr="Bonus - ">
												<option value="">Select bonus</option>
												<option value="1">No bonus</option>
												<option value="1">5% bonus</option>
												<option value="1">10% bonus</option>
												<option value="1">15% bonus</option>
												<option value="1">20% bonus</option>
												<option value="1">25% bonus</option>
												<option value="1">30% bonus</option>
												<option value="1">35% bonus</option>
												<option value="1">40%+ bonus</option>
											</select>

											<select class="active_select form-control notc_per_ind_tl_pop_dt_mb" txt-attr="Notice period - ">
												<option value="">Notice period</option>
												<option value="imediate_available">Immediately available</option>
												<option value="1">1 Week</option>
												<option value="1">2 Weeks</option>
												<option value="1">3 Weeks</option>
												<option value="1">4 Weeks</option>
												<option value="1">5 Weeks</option>
												<option value="1">6 Weeks</option>
												<option value="1">7 Weeks</option>
												<option value="1">8 Weeks</option>
												<option value="1">9 Weeks</option>
												<option value="1">10 Weeks</option>
												<option value="1">11 Weeks</option>
												<option value="1">12 weeks+</option>
											</select>

											<select class="active_select lvel_led_ind_tl_pop_dt_mb" txt-attr="Level - ">
												<option value="">Level</option>
												<option value="leader of leaders">Leader of leaders</option>
												<option value="leader of professional">Leader of professionals</option>
												<option value="individual prefossional">Individual professional</option>
											</select>

											<select class="active_select direct_report_ind_tl_pop_dt_mb" txt-attr="Number of direct reports - ">
												<option value="">Number of direct reports</option>
												<option value="1">1</option>
												<option value="1">2</option>
												<option value="1">3</option>
												<option value="1">4</option>
												<option value="1">5</option>
												<option value="1">6</option>
												<option value="1">7</option>
												<option value="1">8</option>
												<option value="1">9</option>
												<option value="1">10</option>
												<option value="1">11</option>
												<option value="1">12+</option>
											</select>

											<select class="active_select size_total_func_ind_tl_pop_dt_mb" txt-attr="Size of total function - ">
												<option value="">Approx. size of total function</option>
												<option value="1">0-10</option>
												<option value="1">10-20</option>
												<option value="1">20-30</option>
												<option value="1">30-40</option>
												<option value="1">40-50</option>
												<option value="1">50-60</option>
												<option value="1">60-70</option>
												<option value="1">70-80</option>
												<option value="1">80-90</option>
												<option value="1">90-100</option>
												<option value="1">100+</option>
											</select>


											<select class="active_select form-control lst_pad_anual_bon_ind_tl_pop_dt_mb"  txt-attr="Last paid annual bonus - ">
												<option value="">Last paid annual bonus</option>
												<option value="1">Not applicable</option>
												<option value="1">5%</option>
												<option value="1">10%</option>
												<option value="1">15%</option>
												<option value="1">20%</option>
												<option value="1">25%</option>
												<option value="1">30%</option>
												<option value="1">35%</option>
												<option value="1">40%</option>
												<option value="1">45%</option>
												<option value="1">50%</option>
											</select>

											<select class="test1 recutr_bnf_multind_tl_pop_dt_mb" multiple="multiple">
												<option value="0">Benefit 1</option>
												<option value="1">Benefit 2</option>
												<option value="2">Benefit 3</option>
												<option value="3">Benefit 4</option>
												<option value="4">Benefit 5</option>
											</select>




										</div>
									</div>
									<!-- end of panel_2 -->

									<div class="panel">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#bs-collapse-recutier" href="#three">
												<h4 class="panel-title">Next job details<i class="fa fa-angle-down" aria-hidden="true"></i></h4>
											</a>
										</div>
										<div id="three" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="clear5"></div>
												<select class="test1 contract_consider" multiple="multiple">
													<option value="permanent">Permanent</option>
													<option value="ftc">Fixed-term employee</option>
													<option value="contractor">Contractor</option>
												</select>

												<div class="clear5"></div>


												<!-- <div class="exp_end_dt_ind_tl_pop_dt_mb">
													<input class="form-control" type="text" placeholder="Expected end date">
												</div> -->

												<div class="clear5"></div>
												<div class="clear5"></div>

												<select class="test1 level_consider" multiple="multiple">
													<option value="0">Leader of leaders</option>
													<option value="1">Leader of professionals</option>
													<option value="2">Individual professional</option>
												</select>
												<div class="clear5"></div>
												<div class="clear5"></div>


												<!-- <select class="active_select" txt-attr="Size of total function - ">
													<option value="">Approx. size of total function</option>
													<option value="1">0-10</option>
													<option value="1">10-20</option>
													<option value="1">20-30</option>
													<option value="1">30-40</option>
													<option value="1">40-50</option>
													<option value="1">50-60</option>
													<option value="1">60-70</option>
													<option value="1">70-80</option>
													<option value="1">80-90</option>
													<option value="1">90-100</option>
													<option value="1">100+</option>
												</select> -->



												<select class="test1 locations_considered" multiple="multiple">
													<option value="0">Auckland</option>
													<option value="1">Hamilton</option>
													<option value="2">Wellington</option>
													<option value="3">Christchurch</option>
													<option value="4">Regional</option>
													<option value="5">Other city</option>
													<option value="6">Home</option>
													<option value="7">International move</option>
												</select>

												<div class="clear5"></div>
												<div class="clear5"></div>

												<div id="talent_mobile_input">
													<div class="mobile_input">
														<input id="flex_hours_pop_010">
														<label for="flex_hours_pop_010" class="toggle_tick">
															Flexible on pay
															<span class="fa fa-check flexible_pay_tick" id="target_flexible_pay"></span>
														</label>
													</div>
												</div>

												<div class="clear5"></div>
												<div class="clear5"></div>

												<select class="active_select hrs_mb_ind_tl_pop_dt_mb" txt-attr="Hours - ">
													<option value="">Select hours</option>
													<option value="2">Full time</option>
													<option value="1">Part time</option>
												</select>

												<select class="active_select hrs_pr_week_ind_tl_pop_dt_mb" txt-attr="Select hours - ">
													<option value="">Select hours</option>
													<option value="1">20</option>
													<option value="2">21</option>
													<option value="2">22</option>
													<option value="2">23</option>
													<option value="2">24</option>
													<option value="2">25</option>
													<option value="2">26</option>
													<option value="2">27</option>
													<option value="2">28</option>
													<option value="2">29</option>
													<option value="2">30</option>
													<option value="2">31</option>
													<option value="2">32</option>
													<option value="2">33</option>
													<option value="2">34</option>
													<option value="2">35</option>
												</select>



												<select class="test1 hrs_days_mb_ind_tl_pop_dt_mb" multiple="multiple">
													<option value="0">Any days</option>
													<option value="0">Monday</option>
													<option value="1">Tuesday</option>
													<option value="2">Wednesday</option>
													<option value="3">Thursday</option>
													<option value="5">Friday</option>
												</select>

												<div class="clear5"></div>

												<!-- <div class="panel-heading sub_heading" style="padding:10px">
													<h4 class="panel-title key_panel" cls-attr="">People leadership</h4>
												</div>

												<div class="clear5"></div>
												<div class="clear5"></div>

												<select class="active_select form-control" id="">
													<option value="">Experience</option>
													<option value="none">None</option>
													<option value="current_role">Current role</option>
													<option value="past_role">Past role</option>
													<option value="current_past_roles">Current &amp; past roles</option>
												</select>

												<select class="active_select form-control" id="">
													<option value="">Typical direct team size</option>
													<option value="1">1+</option>
													<option value="2">2+</option>
													<option value="3">3+</option>
													<option value="4">4+</option>
													<option value="5">5+</option>
													<option value="6">6+</option>
													<option value="7">7+</option>
													<option value="8">8+</option>
													<option value="9">9+</option>
													<option value="10">10+</option>
												</select>

												<select class="active_select form-control" id="">
													<option value="">Leadership ambition</option>
													<option value="1">Very strong</option>
													<option value="1">Strong</option>
													<option value="1">Medium</option>
													<option value="1">Some</option>
													<option value="1">None</option>
												</select> -->

												<select name="" class="active_select pay_annual_ind_tl_pop_dt_mb" style="width: 100%; padding-left: 5px;" txt-attr="Pay annual - ">
													<option value="">Pay - annual</option>
													<option value="1">$50,000</option>
													<option value="1">$55,000</option>
													<option value="1">$60,000</option>
													<option value="1">$65,000</option>
													<option value="1">$70,000</option>
													<option value="1">$75,000</option>
													<option value="1">$80,000</option>
													<option value="1">$85,000</option>
													<option value="1">$90,000</option>
													<option value="1">$95,000</option>
													<option value="1">$100,000</option>
													<option value="1">$105,000</option>
													<option value="1">$110,000</option>
													<option value="1">$115,000</option>
													<option value="1">$120,000</option>
													<option value="1">$125,000</option>
													<option value="1">$130,000</option>
													<option value="1">$135,000</option>
													<option value="1">$140,000</option>
													<option value="1">$145,000</option>
													<option value="1">$150,000</option>
													<option value="1">$155,000</option>
													<option value="1">$160,000</option>
													<option value="1">$165,000</option>
													<option value="1">$170,000</option>
													<option value="1">$175,000</option>
													<option value="1">$180,000</option>
													<option value="1">$185,000</option>
													<option value="1">$190,000</option>
													<option value="1">$195,000</option>
													<option value="1">$200,000</option>
													<option value="1">$205,000</option>
													<option value="1">$210,000</option>
													<option value="1">$215,000</option>
													<option value="1">$220,000</option>
													<option value="1">$225,000</option>
													<option value="1">$230,000</option>
													<option value="1">$235,000</option>
													<option value="1">$240,000</option>
													<option value="1">$245,000</option>
													<option value="1">$250,000</option>
													<option value="1">$255,000</option>
													<option value="1">$260,000</option>
													<option value="1">$265,000</option>
													<option value="1">$270,000</option>
													<option value="1">$275,000</option>
													<option value="1">$280,000</option>
													<option value="1">$285,000</option>
													<option value="1">$290,000</option>
													<option value="1">$295,000</option>
													<option value="1">$300,000</option>
												</select>

												<select name="" class="active_select pay_daily_ind_tl_pop_dt_mb" style="width: 100%; padding-left: 5px;" txt-attr="Daily - ">
													<option value="">Daily</option>
													<option value="1">$300</option>
													<option value="1">$325</option>
													<option value="1">$350</option>
													<option value="1">$375</option>
													<option value="1">$400</option>
													<option value="1">$425</option>
													<option value="1">$450</option>
													<option value="1">$475</option>
													<option value="1">$500</option>
													<option value="1">$525</option>
													<option value="1">$550</option>
													<option value="1">$575</option>
													<option value="1">$600</option>
													<option value="1">$625</option>
													<option value="1">$650</option>
													<option value="1">$675</option>
													<option value="1">$700</option>
													<option value="1">$725</option>
													<option value="1">$750</option>
													<option value="1">$775</option>
													<option value="1">$800</option>
													<option value="1">$825</option>
													<option value="1">$850</option>
													<option value="1">$875</option>
													<option value="1">$900</option>
													<option value="1">$925</option>
													<option value="1">$950</option>
													<option value="1">$975</option>
													<option value="1">$1,000</option>
													<option value="1">$1,025</option>
													<option value="1">$1,050</option>
													<option value="1">$1,075</option>
													<option value="1">$1,100</option>
													<option value="1">$1,125</option>
													<option value="1">$1,150</option>
													<option value="1">$1,175</option>
													<option value="1">$1,200</option>
													<option value="1">$1,225</option>
													<option value="1">$1,250</option>
													<option value="1">$1,275</option>
													<option value="1">$1,300</option>
													<option value="1">$1,325</option>
													<option value="1">$1,350</option>
													<option value="1">$1,375</option>
													<option value="1">$1,400</option>
													<option value="1">$1,425</option>
													<option value="1">$1,450</option>
													<option value="1">$1,475</option>
													<option value="1">$1,500</option>
													<option value="1">$1,525</option>
													<option value="1">$1,550</option>
													<option value="1">$1,575</option>
													<option value="1">$1,600</option>
													<option value="1">$1,625</option>
													<option value="1">$1,650</option>
													<option value="1">$1,675</option>
													<option value="1">$1,700</option>
													<option value="1">$1,725</option>
													<option value="1">$1,750</option>
													<option value="1">$1,775</option>
													<option value="1">$1,800</option>
													<option value="1">$1,825</option>
													<option value="1">$1,850</option>
													<option value="1">$1,875</option>
													<option value="1">$1,900</option>
													<option value="1">$1,925</option>
													<option value="1">$1,975</option>
													<option value="1">$2,000</option>
												</select>

												<input class="form-control" type="text" placeholder="Describe ideal role">

												<div class="clear5"></div>
												<div class="clear5"></div>

												<input class="form-control" type="text" placeholder="Describe ideal company">
											</div>
										</div>
									</div>
									<!-- end of panel_3 -->

									<div class="panel">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#bs-collapse-recutier" href="#talent_mob">
												<h4 class="panel-title">Talent information <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
											</a>
										</div>
										<div id="talent_mob" class="panel-collapse collapse">
											<div class="panel-body">

												<div class="clear5"></div>

												<select class="active_select rht_to_wrk_nz_ind_tl_pop_dt_mb" txt-attr="Right to work in NZ - ">
													<option value="">Right to work in NZ</option>
													<option value="permanemt">Permanent</option>
													<option value="limited_visa">Limited visa</option>
													<option value="visarequired">Visa required</option>
												</select>

												<input class="form-control limited_vsaEnddt_ind_tl_pop_dt_mb" type="text" placeholder="Visa expiriy - 14/07/2020">
												<div class="clear5"></div>
												<div class="clear5"></div>
												<input class="form-control est_arr_date_ind_tl_pop_dt_mb" type="text" placeholder="Est. arrival date - 20/12/2019">

												<div class="clear5"></div>
												<div class="clear5"></div>

												<div class="panel-heading sub_heading" style="padding:10px">
													<h4 class="panel-title key_panel key_accountability_1" cls-attr="key_strng_ind_tl_pop_dt_mb">Key strength +</h4>
												</div>
												<div class="clear5"></div>
												<div class="key_strng_ind_tl_pop_dt_mb"></div>

												<div class="clear5"></div>


												<div class="panel-heading sub_heading" style="padding:10px">
													<h4 class="panel-title key_panel key_accountability_1" cls-attr="recent_devl_ind_tl_pop_dt_mb">Recent development +</h4>
												</div>
												<div class="clear5"></div>
												<div class="recent_devl_ind_tl_pop_dt_mb"></div>
												<div class="clear5"></div>

												<div class="panel-heading sub_heading" style="padding:10px">
													<h4 class="panel-title key_panel key_accountability_1" cls-attr="area_currently_dev_ind_tl_pop_dt_mb">Areas currently developing +</h4>
												</div>
												<div class="clear5"></div>
												<div class="area_currently_dev_ind_tl_pop_dt_mb"></div>
												<div class="clear5"></div>

												<!-- <input class="form-control" type="text" placeholder="Recent development">

												<div class="clear5"></div>
												<div class="clear5"></div>

												<input class="form-control" type="text" placeholder="Areas currently developing" /> -->
												<div class="clear5"></div>
												<div class="clear5"></div>
												<select class="active_select" txt-attr="Ambition for leadership - ">
													<option value="">Ambition for leadership promotion</option>
													<option value="1">None</option>
													<option value="1">within 2 years</option>
													<option value="1">within 5 years</option>
												</select>

												<select class="active_select lfe_styl_ind_tl_pop_dt_mb" txt-attr="Lifestyle flexibility - ">
													<option value="">Lifestyle flexibility</option>
													<option value="norequired">Not required</option>
													<option value="preferred">Preferred</option>
												</select>

												<input class="form-control lfe_styl_dtl_ind_tl_pop_dt_mb" type="text" placeholder="Enter details">


												<div class="clear5"></div>
												<div class="clear5"></div>

												<input class="form-control" type="text" placeholder="Involvement/activities outside of job">

												<div class="clear5"></div>
												<div class="clear5"></div>

												<input class="form-control" type="text" placeholder="video Link">
											</div>
										</div>
									</div>
									<!-- end of panel_4 -->

									<!--<div class="panel">
										<div class="panel-heading">
											<a data-toggle="collapse" data-parent="#bs-collapse-recutier" href="#search_assist">
												<h4 class="panel-title">Meeting availability <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
											</a>
										</div>
										<div id="search_assist" class="panel-collapse collapse">
											<div class="panel-body">
												<input class="form-control" type="text" placeholder="Hiring manager video Link"/>

												<div class="clear5"></div>
												<div class="clear5"></div>

												<input class="form-control" type="text" placeholder="General Interests"/>

												<div class="clear5"></div>
												<div class="clear5"></div>

												<input class="form-control" type="text" placeholder="Meeting availability"/>
											</div>
										</div>
									</div>-->
									<!-- end of panel_5 -->

									<div class="panel">
											<div class="panel-heading">
												<a data-toggle="collapse" data-parent="#bs-collapse" href="#talent_time_modal" class="collapsed" aria-expanded="false">
													<h4 class="panel-title">Meeting availability<i class="fa fa-angle-down" aria-hidden="true"></i></h4>
												</a>
											</div>
											<div id="talent_time_modal" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<div class="panel with-nav-tabs panel-default">
														<div class="panel-heading" style="background:#fff;">
															<ul class="nav nav-tabs">
																<li class="active"><a href="#time_talent_pop1" data-toggle="tab" aria-expanded="false">All</a></li>
																<li><a href="#time_talent_pop2" data-toggle="tab" aria-expanded="false">M</a></li>
																<li><a href="#time_talent_pop3" data-toggle="tab" aria-expanded="false">T</a></li>
																<li><a href="#time_talent_pop4" data-toggle="tab" aria-expanded="false">W</a></li>
																<li><a href="#time_talent_pop5" data-toggle="tab" aria-expanded="false">T</a></li>
																<li><a href="#time_talent_pop6" data-toggle="tab" aria-expanded="true">F</a></li>
															</ul>
														</div>

														<div class="panel-body">
															<div class="tab-content">
																<div class="tab-pane fade in active" id="time_talent_pop1">
																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="bill_full_like001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like001">8:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_full_like002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like002">8:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_full_like003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like003">9:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_full_like004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like004">9:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_full_like005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like005">10:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_full_like006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="bill_full_like007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like007">11:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_full_like008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like008">11:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_full_like009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like009">12:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_full_like0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0010">12:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_full_like0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0011">13:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_full_like0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0012">13:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="bill_full_like0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0013">14:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_full_like0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0014">14:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_full_like0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0015">15:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_full_like0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0016">15:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_full_like0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0017">16:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_full_like0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0018">16:30</label>
																		</li>

																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="bill_full_like0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0019">17:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_full_like0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0020">17:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_full_like0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0021">18:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_full_like0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0022">18:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_full_like0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0023">19:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_full_like0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_like0024">19:30</label>
																		</li>
																	</ul>
																</div>

																<div class="tab-pane fade" id="time_talent_pop2">

																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="bill_full_intro001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro001">8:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_full_intro002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro002">8:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_full_intro003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro003">9:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_full_intro004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro004">9:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_full_intro005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro005">10:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_full_intro006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="bill_full_intro007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro007">11:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_full_intro008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro008">11:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_full_intro009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro009">12:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_full_intro0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0010">12:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_full_intro0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0011">13:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_full_intro0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0012">13:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="bill_full_intro0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0013">14:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_full_intro0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0014">14:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_full_intro0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0015">15:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_full_intro0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0016">15:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_full_intro0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0017">16:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_full_intro0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0018">16:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="bill_full_intro0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0019">17:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_full_intro0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0020">17:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_full_intro0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0021">18:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_full_intro0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0022">18:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_full_intro0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0023">19:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_full_intro0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_full_intro0024">19:30</label>
																		</li>
																	</ul>
																</div>

																<div class="tab-pane fade" id="time_talent_pop3">
																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="bill_meeting001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_meeting001">8:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_meeting002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_meeting002">8:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_meeting003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_meeting003">9:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_meeting004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_meeting004">9:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_meeting005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_meeting005">10:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_meeting006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_meeting006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">

																		<li all-li-click="1">

																			<input id="bill_meeting007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting007">11:00</label>

																		</li>

																		<li all-li-click="2">

																			<input id="bill_meeting008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting008">11:30</label>

																		</li>

																		<li all-li-click="3">

																			<input id="bill_meeting009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting009">12:00</label>

																		</li>

																		<li all-li-click="4">

																			<input id="bill_meeting0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0010">12:30</label>

																		</li>

																		<li all-li-click="5">

																			<input id="bill_meeting0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0011">13:00</label>

																		</li>

																		<li all-li-click="6">

																			<input id="bill_meeting0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0012">13:30</label>

																		</li>

																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">

																		<li all-li-click="1">

																			<input id="bill_meeting0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0013">14:00</label>

																		</li>

																		<li all-li-click="2">

																			<input id="bill_meeting0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0014">14:30</label>

																		</li>

																		<li all-li-click="3">

																			<input id="bill_meeting0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0015">15:00</label>

																		</li>

																		<li all-li-click="4">

																			<input id="bill_meeting0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0016">15:30</label>

																		</li>

																		<li all-li-click="5">

																			<input id="bill_meeting0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0017">16:00</label>

																		</li>

																		<li all-li-click="6">

																			<input id="bill_meeting0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0018">16:30</label>

																		</li>

																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">

																		<li all-li-click="1">

																			<input id="bill_meeting0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0019">17:00</label>

																		</li>

																		<li all-li-click="2">

																			<input id="bill_meeting0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0020">17:30</label>

																		</li>

																		<li all-li-click="3">

																			<input id="bill_meeting0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0021">18:00</label>

																		</li>

																		<li all-li-click="4">

																			<input id="bill_meeting0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0022">18:30</label>

																		</li>

																		<li all-li-click="5">

																			<input id="bill_meeting0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0023">19:00</label>

																		</li>

																		<li all-li-click="6">

																			<input id="bill_meeting0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_meeting0024">19:30</label>

																		</li>

																	</ul>

																</div>

																<div class="tab-pane fade" id="time_talent_pop4">

																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="bill_call001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call001">8:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_call002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call002">8:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_call003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call003">9:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_call004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call004">9:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_call005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call005">10:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_call006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="bill_call007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call007">11:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_call008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call008">11:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_call009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call009">12:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_call0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0010">12:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_call0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0011">13:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_call0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0012">13:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="bill_call0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0013">14:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_call0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0014">14:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_call0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_call0015">15:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_call0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																			<label for="bill_call0016">15:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_call0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0017">16:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_call0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0018">16:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="bill_call0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0019">17:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_call0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0020">17:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_call0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0021">18:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_call0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0022">18:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_call0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0023">19:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_call0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_call0024">19:30</label>
																		</li>
																	</ul>
																</div>

																<div class="tab-pane fade" id="time_talent_pop5">
																	<ul class="today_time" all-click="1">
																		<li  all-li-click="1">
																			<input id="bill_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday001">8:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday002">8:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday003">9:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday004">9:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday005">10:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="bill_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday007">11:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday008">11:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday009">12:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0010">12:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0011">13:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0012">13:30</label>
																		</li>

																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="bill_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0013">14:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0014">14:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0015">15:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0016">15:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0017">16:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0018">16:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="bill_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0019">17:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="bill_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0020">17:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="bill_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0021">18:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="bill_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0022">18:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="bill_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0023">19:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="bill_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="bill_friday0024">19:30</label>
																		</li>
																	</ul>

																</div>

																<div class="tab-pane fade" id="time_talent_pop6">
																	<ul class="today_time" all-click="1">
																		<li all-li-click="1">
																			<input id="new_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday001">8:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="new_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday002">8:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="new_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday003">9:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="new_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday004">9:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="new_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday005">10:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="new_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday006">10:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="2">
																		<li all-li-click="1">
																			<input id="new_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday007">11:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="new_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday008">11:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="new_friday018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday018">12:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="new_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0010">12:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="new_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0011">13:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="new_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0012">13:30</label>
																		</li>

																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="3">
																		<li all-li-click="1">
																			<input id="new_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0013">14:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="new_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0014">14:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="new_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0015">15:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="new_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0016">15:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="new_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0017">16:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="new_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0018">16:30</label>
																		</li>
																	</ul>

																	<div class="clearfix"></div>

																	<ul class="today_time" all-click="4">
																		<li all-li-click="1">
																			<input id="new_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0019">17:00</label>
																		</li>

																		<li all-li-click="2">
																			<input id="new_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0020">17:30</label>
																		</li>

																		<li all-li-click="3">
																			<input id="new_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0021">18:00</label>
																		</li>

																		<li all-li-click="4">
																			<input id="new_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0022">18:30</label>
																		</li>

																		<li all-li-click="5">
																			<input id="new_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0023">19:00</label>
																		</li>

																		<li all-li-click="6">
																			<input id="new_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																			<label for="new_friday0024">19:30</label>
																		</li>
																	</ul>

																</div>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<!-- end of panel_6 -->
								</div>
								<!-- endof #bs-collapse  -->
							</div>
							
							<div class="clear10"></div>
							<div class="col-sm-12 p0 points_setting ">
								<h3>Updates</h3>
								<p>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</p>
								<p>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</p>
								<p>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</p>
								<div class="clear10"></div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="modal-footer">
					
					<button type="button" class="btn btn-info btn-lg pull-right" data-dismiss="modal">Save</button>
					<div class="dropdown open">
						<button type="button" class="btn btn-info btn-lg pull-right dropdown-toggle" style="margin-right: 5px;" data-toggle="dropdown" aria-expanded="true">Action</button>
						<ul class="dropdown-menu multi-level" id="action_btn" role="menu" aria-labelledby="dropdownMenu">
							<li class="dropdown-item"><a href="#">Create intro</a></li>
							<li class="dropdown-item"><a href="#">Request information</a></li>
							<li class="dropdown-item"><a href="#">Send job</a></li>
							<li class="dropdown-item"><a href="#">Add to pool</a></li>
						</ul>
					</div>
					<button type="button" style="margin-right:5px;" class="btn btn-info btn-lg pull-right">Full CV</button>
					<button type="button" style="margin-right:5px;" class="btn btn-info btn-lg pull-right" data-dismiss="modal">Edit</button>
				</div>
			</div>
		</div>
	</div>

<?php
	}
?>
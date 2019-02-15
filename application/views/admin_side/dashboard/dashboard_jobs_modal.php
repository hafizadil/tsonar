


<div class="modal" id="myModal5">
		<div class="modal-dialog modal_wdith_intro5">
			<div class="modal-content">
				<!-- Modal Header -->
				<?php
					// echo "<pre>";print_r($job_feilds);
					// print_r($job_locations);
					// print_r($);
					// foreach (json_decode($talent_requests_hiring_manager->availability_monday) as $value) {
					// 	$split_values =  explode("-",$value);
					// 	print_r($split_values);
					// }
				?>
				<div class="modal-header" style="padding: 5px 10px;">
					<div class="col-sm-1 modal_mobile_img">
						<img style="margin-top: 6px;" src="<?php echo base_url();?>uploads/<?php echo $talent_requests_hiring_manager->attachments;?>" width="50" height="50" alt="">
					</div>
                    <div class="col-sm-3 modal_mobile_content">
                        <div class="product-info">
                        	<?php
                        		// echo "<pre>"; print_r($val);
                        	?>
                            <a href="#" class="product-title" style="font-weight: 600;">
							<?php
								echo $talent_requests_hiring_manager->job_title;
							?>
							<div class="clearfix"></div>
							<?php
								if ($talent_requests_hiring_manager->clientbusiness_name!=='') 
								{
									echo $talent_requests_hiring_manager->clientbusiness_name;
								}
							?>
							</a>
                            <div class="clearfix"></div>
                            <span class="product-description">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<?php
									// foreach ($job_locations as $location) {
									// 	echo $location->value_name.' ';
									// }
								echo "TEST Location";
								?>
							</span>
                        </div>
                    </div>

					
					<div class="col-sm-3 modal_mobile_content">
                        <div class="product-info">
                            <a href="#" class="product-title" style="font-weight: 600;">$ 
                            	<?php
                            		if (!empty($talent_requests_hiring_manager->pay_amount_daily)) 
                            		{
                            			echo $talent_requests_hiring_manager->pay_amount_daily;
                            		}
                            		elseif (!empty($talent_requests_hiring_manager->pay_amount_annual)) 
                            		{
                            			echo $talent_requests_hiring_manager->pay_amount_annual;
                            		}
                            		else
                            		{
                            			echo "0";
                            		}
                            	?>
                            	
							<div class="clearfix"></div>
							</a>
                            <?php
                            if (!empty($talent_requests_hiring_manager->contract_type)) 
                            {
                            	echo $talent_requests_hiring_manager->contract_type;

                            }
                            else{
                            	echo 'Contract Type';
                            }
                            ?>
                            <div class="clearfix"></div>
                            
                            <span class="product-description">
							<?php
							if ($talent_requests_hiring_manager->hiringmanager_name!=='') 
							{
							
                            	echo $talent_requests_hiring_manager->hiringmanager_name;
                            }
                            else{
                            	echo "Hiring Manager Name";
                            }
                            ?>
							</span>
                        </div>
                    </div>
					<div class="col-sm-3 detail_modal_button">
						<button type="button" class="fetch_detail" style="margin-top: 11px;">Create Intro</button>
					</div>
                    <div class="col-sm-1 modal_mobile_dropdown">
                        
						<div class="dropdown" id="modal_dropdown">
							<button type="button" class="btn btn-primary dropdown-toggle" style="background-color:transparent; border:none; margin-top: 13px;" data-toggle="dropdown">
							<img src="<?php echo base_url();?>public/admin/dist/img/menu.png" width="30" height="21" alt=""></button>
							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li class="dropdown-submenu">
									<!-- <a class="dropdown-item" tabindex="-1" href="#">Add</a> -->
									<a class="dropdown-item" tabindex="-1" href="#">Create intro</a>
									<ul class="dropdown-menu">
										<li class="dropdown-item">
											<a href="#" data-toggle="modal" data-target="#basic_template">Basic Template</a>
										</li>
										<li class="dropdown-item">
											<a href="#" data-toggle="modal" data-target="#myModal_decline">Standard Template</a>
										</li> 
										<li class="dropdown-item">
											<a href="#" data-target="#myModal_job_detail_edit" data-toggle="modal">Advanced Template</a>
										</li>
									</ul>
								</li>
								
								<li class="dropdown-item"><a href="#">Link 2</a></li>
								<li class="dropdown-item"><a href="#">Link 3</a></li>
							</ul>
						</div>
                    </div>
					

					<div class="col-sm-1">
						<button type="button" class="close" data-dismiss="modal" style="font-size: 40px; opacity: 1; font-weight: 100; margin-top: 9px;">&times;</button>
					</div>
				</div>

				<!-- Modal body -->
				<div class="modal-body" style="padding-top:0px; padding-bottom:0px;">

                    <div class="clear10"></div>
                    
					
					<div id="clone_table_main">
                        <!-- Harry New-->
                        
						<div class="col-sm-12 p0 clone_table_heading">
							<div class="col-sm-3 p0_mobile"><label>Job Field:</label></div>
							<div class="col-sm-3 p0_mobile">
								<p>
								<?php	
									if (count($job_feilds) > 0) 
									{
										foreach ($job_feilds as $job_feilds) 
										{
											echo $job_feilds->value_name.' ';
										}			
									}
									else
									{
										echo "NO";
									}
                            	?>
			                    </p>
			                </div>
							<div class="col-sm-3 p0_mobile"><label>Level:</label></div>
							<div class="col-sm-3 p0_mobile">
								<p>
								    <?php
								    	if (!empty($talent_requests_hiring_manager->job_level)) {
								    		echo $talent_requests_hiring_manager->job_level;
								    	}
								    	else
								    	{
								    		echo "Job Field";
								    	}
								    ?>
                            	</p>
                            </div>
							<div class="clear10"></div>
						</div>
						
						<div class="col-sm-12 p0 clone_table_heading ">
							<div class="col-sm-12 p0 ">
								<h2>Intros</h2>
							</div>
							<div class="col-sm-6 p0">
								<div class="col-sm-6 modal_intro_location">
									<ul class="products-list product-list-in-box">
										<li class="item">
											<div class="product-img">
												<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">
											</div>
											<div class="product-info">
												<a href="#" data-toggle="" data-target="" class="product-title">
													<label>John Smith</label>
												</a>
												<span class="product-description">
													<i class="fa fa-map-marker" aria-hidden="true"></i>
													<label>San Franicso, CA</label>
												</span>

											</div>
										</li>
									</ul>
								</div>
								<div class="col-sm-6 modal_point_bullet">
									<div class="clear5"></div>
									<span class="label label-warning pull-right" style="margin-top: 4px; margin-right:5px; float:inherit !important;">&nbsp;</span>
									<a href="javascript:void(0)" class="product-title">
										<label>Software engineer</label>
									</a>
									<div class="clear5"></div>
									<div class="clear5"></div>
									<p>Loreum ipsum dolor amet</p>
									<p>Loreum ipsum dolor amet</p>
								</div>
							</div>
							<div class="col-sm-6 p0">
								<div class="col-sm-6 modal_intro_location">
									<ul class="products-list product-list-in-box">
										<li class="item">
											<div class="product-img">
												<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">
											</div>
											<div class="product-info">
												<a href="#" data-toggle="" data-target="" class="product-title">
													<label>John Smith</label>
												</a>
												<span class="product-description">
													<i class="fa fa-map-marker" aria-hidden="true"></i>
													<label>San Franicso, CA</label>
												</span>
											</div>
										</li>
									</ul>
								</div>
								<div class="col-sm-6 modal_point_bullet">
									<div class="clear5"></div>
									<span class="label label-warning pull-right" style="margin-top: 6px; margin-right:5px; float:inherit !important; background-color: #00c0ef !important;">&nbsp;</span>
									<a href="javascript:void(0)" class="product-title">
										<label>Software engineer</label>
									</a>
									<div class="clear5"></div>
									<div class="clear5"></div>
									<p>Loreum ipsum dolor amet</p>
									<p>Loreum ipsum dolor amet</p>
								</div>
							</div> 
							<div class="clear20"></div>
							<div class="col-sm-12 p0 ">
								<h2>Recruiter Notes</h2>
								<div class="form-group">
									<textarea class="form-control" rows="5" id="comment" style="max-width:100%;"></textarea>
								</div>
							</div>	
									<!-- Bilal -->
							 <div class="col-sm-12 p0 ">
								<h2>Selected Availability</h2>
								<div class="col-sm-12" id="request_buttons">
									<h4> Today 12th Jan</h4>
									<div class="col-sm-2">
										<button type="button" class="btn-info" align="center"> 2pm</button>
									</div>	
									<div class="col-sm-2">
										<button type="button" class="btn-info" align="center"> 2:30pm</button>
									</div>	
									<div class="col-sm-2">
										<button type="button" class="btn-info" align="center"> 3:30pm</button>
									</div>	
								</div>
								<div class="clear20"></div>
								<div class="col-sm-12" id="request_buttons">
									<h4> Today 13th Jan</h4>
									<div class="col-sm-2">
										<button type="button" class="btn-info" align="center"> 11am</button>
									</div>		
									<div class="col-sm-2">
										<button type="button" class="btn-info" align="center"> 3pm</button>
									</div>	
									<div class="col-sm-2">
										<button type="button" class="btn-info" align="center"> 3:30pm</button>
									</div>
									<div class="col-sm-2">
										<button type="button" class="btn-info" align="center"> 4pm</button>
									</div>	
								</div>		
							</div> 
							<div class="clear20"></div>
									<div class="col-sm-12 p0">
										<h2>Hiring manager availability</h2>
										<div class="panel with-nav-tabs panel-default">
											<div class="desktop_clone_table">
											<div class="" id="date_time_tabs">
												<ul class="nav nav-tabs">
													<li><a href="#date_time_tab_clone1" data-toggle="tab">All</a></li>
													<li><a href="#date_time_tab_clone2" data-toggle="tab">Monday</a></li>
													<li><a href="#date_time_tab_clone3" data-toggle="tab">Tuesday</a></li>
													<li><a href="#date_time_tab_clone4" data-toggle="tab">Wednesday</a></li>
													<li><a href="#date_time_tab_clone5" data-toggle="tab">Thursday</a></li>
													<li><a href="#date_time_tab_clone6" data-toggle="tab">Friday</a></li>
												</ul>
											</div>
											<?php
												$all_avail = json_decode($talent_requests_hiring_manager->availability_monday);
												$monday_avail = json_decode($talent_requests_hiring_manager->availability_monday);
												$tuesday_avail = json_decode($talent_requests_hiring_manager->availability_tuesday);
												$wednesday_avail = json_decode($talent_requests_hiring_manager->availability_wednesday);
												$thursday_avail = json_decode($talent_requests_hiring_manager->availability_thursaday);
												$friday_avail = json_decode($talent_requests_hiring_manager->availability_friday);
												$cobmined_Array='';
												$HM_availability = array(
													'1' => $all_avail,
													'2'	=> $monday_avail,
   												 	'3'	=> $tuesday_avail,
   												 	'4' => $wednesday_avail,
   												 	'5' => $thursday_avail,
   													'6'	=> $friday_avail
												);
												//echo "<pre>";print_r($HM_availability);
											?>
											<div class="panel-body ">
												<div class="tab-content" id="remove_phone_color">
												<?php
													$day = 1;
													$day_name='';
													// for ($i=1; $i <= 6; $i++)
													// 	{ 
													foreach ($HM_availability as $hm_key => $hm_value) 
													{	
														if ($day==1) {
															$day_name='all';
														}
														if ($day==2) {
															$day_name='mon';
														}
														if ($day==3) {
															$day_name='tue';
														}
														if ($day==4) {
															$day_name='wed';
														}
														if ($day==5) {
															$day_name='thu';
														}
														if ($day==6) {
															$day_name='fri';
														}
													?>
													<div class="tab-pane fade in" id="date_time_tab_clone<?php echo $hm_key;?>" class="time_tab_desktop">
														<?php
														$s='';
														$a = 0;
														$exploded_val='';
														foreach ($hiring_manager_availability_calendar  as $hmac ){

														if ($a==24)
														{
														 	$a=0;
														} 			
															
														?>		
															<ul class="today_time" all-click="<?php echo $hmac['ul_id']; ?>">
															<?php
															// echo '<pre>';print_r($HM_availability);
															for ($lop=1; $lop <= 6; $lop++) 
															{
																// echo "<pre>"; print_r(explode('-',$HM_availability[$lop][$a]));
																
																$s='slot_'.$lop;
																if (isset($HM_availability[$day][$a]) && !empty($HM_availability[$day][$a])) 
																{
																	$explod_val = explode('-',$HM_availability[$day][$a]);
																	if ($explod_val[1] == $hmac[$s]) {
																		$exploded_val = $explod_val[2];		
																	}
																	else
																	{
																		$exploded_val ='1';
																	} 
																}
																else
																	{
																		$exploded_val ='1';
																	}

																$a++;		
															?>
																<li all-li-click="<?php echo $lop;?>" style='background-image: url("http://tsonar.localhost.com/public/admin/dist/img/<?php echo $exploded_val;?>.png");' >
		                                                            <input id="dashboard_calendar_<?php echo $day_name;?>_<?php echo $hmac[$s]; ?>"  class="display_none_talent3" name="dashjobcalendar-<?php echo $day_name;?>-<?php echo $hmac[$s]; ?>" value="<?php echo $day_name;?>-<?php echo $hmac[$s]; ?>" type="checkbox" onclick="clickMe(this)" backround-attr="" meetup-attr="">
		                                                            <label for="dashboard_calendar_<?php echo $day_name;?>_<?php echo $hmac[$s]; ?>"><?php echo $hmac[$s]; ?></label>
		                                                        </li>
		                                                    <?php		
		                                                    }
		                                                    ?>        
															</ul>
															<div class="clearfix"></div>
														<?php
														}
														// echo $a;
														?>
													</div>
													<?php ++$day;
														}
													?>
												</div>
											</div>

											<div class="panel-body mobile_clone_table" id="hr_mange_time_popup_01">
												<div class="panel with-nav-tabs panel-default">
													<div class="panel-heading">
														<ul class="nav nav-tabs">
															<li class="active"><a href="#time_talent_pop_mobile1" data-toggle="tab" aria-expanded="false">All</a></li>
															<li><a href="#time_talent_pop_mobile2" data-toggle="tab" aria-expanded="false">M</a></li>
															<li><a href="#time_talent_pop_mobile3" data-toggle="tab" aria-expanded="false">T</a></li>
															<li><a href="#time_talent_pop_mobile4" data-toggle="tab" aria-expanded="false">W</a></li>
															<li><a href="#time_talent_pop_mobile5" data-toggle="tab" aria-expanded="false">T</a></li>
															<li><a href="#time_talent_pop_mobile6" data-toggle="tab" aria-expanded="true">F</a></li>
														</ul>
													</div>

													<div class="panel-body">
														<div class="tab-content">
															<div class="tab-pane fade in active" id="time_talent_pop_mobile1">
																<ul class="today_time" all-click="1">
																	<li all-li-click="1">
																		<input id="clone_time_01" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_01">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_02">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_03" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_03">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_04" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_04">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_05" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_05">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_06" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_06">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="2">
																	<li all-click="1">
																		<input id="bill_new_11_first01" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="bill_new_11_first01">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_08" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_08">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_09" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_09">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_10" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_10">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_11" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_11">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_12" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_12">13:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="3">
																	<li all-li-click="1">
																		<input id="clone_time_13" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_13">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_14" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_14">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_15" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_15">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_16" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_16">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_17" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_17">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_18" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_18">16:30</label>
																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="4">
																	<li all-li-click="1">
																		<input id="clone_time_19" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_19">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_20" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_20">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_21" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_21">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_22" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_22">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_23" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_23">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_24" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_24">19:30</label>
																	</li>
																</ul>
															</div>

															<div class="tab-pane fade" id="time_talent_pop_mobile2">
																<ul class="today_time" all-click="1">
																	<li all-li-click="1">
																		<input id="clone_time_25" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_25">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_26" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_26">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_27" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_27">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_28" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_28">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_29" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_29">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_48" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_48">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="2">
																	<li all-li-click="1">
																		<input id="bill_new_11_first03" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="bill_new_11_first03">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_31" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_31">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_32" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_32">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_33" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_33">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_34" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_34">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_35" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_35">13:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="3">
																	<li all-li-click="1">
																		<input id="clone_time_36" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_36">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_37" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_37">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_38" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_38">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_39" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_39">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_40" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_40">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_41" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_41">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="4">
																	<li all-li-click="1">
																		<input id="clone_time_42" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_42">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_43" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_43">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_44" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_44">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_45" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_45">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_46" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_46">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_47" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_47">19:30</label>
																	</li>
																</ul>
															</div>

															<div class="tab-pane fade" id="time_talent_pop_mobile3">
																<ul class="today_time" all-click="1">
																	<li all-li-click="1">
																		<input id="clone_time_49" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_49">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_50" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_50">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_51" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_51">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_52" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_52">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_53" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_53">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_54" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_54">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="2">
																	<li all-li-click="1">
																		<input id="bill_new_11_first" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="bill_new_11_first">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_56" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_56">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_57" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_57">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_58" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_58">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_59" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_59">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_60" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_60">13:30</label>
																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="3">

																	<li all-li-click="1">
																		<input id="clone_time_61" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_61">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_62" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_62">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_63" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_63">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_64" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_64">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_65" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_65">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_66" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_66">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="4">
																	<li all-li-click="1">
																		<input id="clone_time_67" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_67">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_68" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_68">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_69" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_69">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_70" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_70">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_71" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_71">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_72" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_72">19:30</label>
																	</li>
																</ul>
															</div>

															<div class="tab-pane fade" id="time_talent_pop_mobile4">
																<ul class="today_time" all-click="1">
																	<li all-li-click="1">
																		<input id="clone_time_73" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_73">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_74" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_74">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_75" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_75">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_76" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_76">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_77" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_77">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_78" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_78">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="2">
																	<li all-li-click="1">
																		<input id="bill_new_1100" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="bill_new_1100">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_80" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_80">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_81" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_81">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_82" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_82">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_83" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_83">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_84" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_84">13:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="3">
																	<li all-li-click="1">
																		<input id="clone_time_85" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_85">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_86" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_86">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_87" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_87">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_88" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_88">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_89" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_89">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_90" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_90">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="4">
																	<li all-li-click="1">
																		<input id="clone_time_91" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_91">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_92" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_92">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_93" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_93">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_94" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_94">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_95" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_95">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_96" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_96">19:30</label>
																	</li>
																</ul>
															</div>

															<div class="tab-pane fade" id="time_talent_pop_mobile5">
																<ul class="today_time" all-click="1">
																	<li all-li-click="1">
																		<input id="friday001_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday001_clone02">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="friday002_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday002_clone02">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="friday003_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday003_clone02">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="friday004_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday004_clone02">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="friday005_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday005_clone02">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="friday006_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday006_clone02">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time"all-click="2">
																	<li all-li-click="1">
																		<input id="bill_new_1010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="bill_new_1010">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="friday008_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday008_clone02">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="friday009_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday009_clone02">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="friday0010_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0010_clone02">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="friday0011_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0011_clone02">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="friday0012_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0012_clone02">13:30</label>
																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="3">
																	<li all-li-click="1">
																		<input id="friday0013_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0013_clone02">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="friday0014_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0014_clone02">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="friday0015_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0015_clone02">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="friday0016_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0016_clone02">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="friday0017_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0017_clone02">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="friday0018_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0018_clone02">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="4">
																	<li all-li-click="1">
																		<input id="friday0019_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0019_clone02">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="friday0020_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0020_clone02">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="friday0021_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0021_clone02">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="friday0022_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0022_clone02">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="friday0023_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0023_clone02">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="friday0024_clone02" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="friday0024_clone02">19:30</label>
																	</li>
																</ul>

															</div>

															<div class="tab-pane fade" id="time_talent_pop_mobile6">
																<ul class="today_time" all-click="1">
																	<li all-li-click="1">
																		<input id="clone_time_97" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_97">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_98" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_98">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_99" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_99">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_100" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_100">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_101" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_101">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_102" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_102">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="2">
																	<li all-li-click="1">
																		<input id="bill_new_1010_last" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="bill_new_1010_last">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_104" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_104">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_105" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_105">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_106" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_106">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_107" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_107">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_108" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_108">13:30</label>
																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="3">
																	<li all-li-click="1">
																		<input id="clone_time_109" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_109">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_110" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_110">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_111" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_111">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_112" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_112">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_113" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_113">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_114" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_114">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul class="today_time" all-click="4">
																	<li all-li-click="1">
																		<input id="clone_time_115" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_115">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clone_time_116" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_116">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clone_time_117" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_117">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clone_time_118" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_118">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clone_time_119" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_119">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clone_time_120" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clone_time_120">19:30</label>
																	</li>
																</ul>

															</div>

														</div>
													</div>
												</div>
											</div>

										</div>
									</div>

									
									<div class="clear20"></div>
						</div>
						
						<!-- <div class="col-sm-12 p0">
							<h2 data-toggle="collapse" data-target="#role_details_collapse" id="detail_popup">Detail</h2>
							
							<div class="clear10"></div>
							
							<div id="role_details_collapse" class="collapse">
								<div class="clone_table_heading">
							<div class="col-sm-12 p0">
								<div class="clone_portion_heading">
									<center>
										<label>Role details</label>
									</center>
								</div>
								<div class="clear10"></div>
								
								<div class="desktop_ceremony event_client_pbox">
									<h2>Client or bussiness area</h2>
									<div class="event_client_price event_heading">
										<center>
											<label>
											<?php
											if ($talent_requests_hiring_manager->clientbusiness_name!=='')
											{	
			                            		echo $talent_requests_hiring_manager->clientbusiness_name;
											}
			                            	?>
											</label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label>
												<?php
												if ($talent_requests_hiring_manager->clientbusiness_contactname) 
												{
				                            		echo $talent_requests_hiring_manager->clientbusiness_contactname;
												}
				                            	?>
											</label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label>
												<?php
												if ($talent_requests_hiring_manager->clientbusiness_email!=='') 
												{
				                            		echo $talent_requests_hiring_manager->clientbusiness_email;
				                            	}
				                            	?>
											</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Hiring Manager</h2>
									<div class="event_client_price event_heading">
										<center>
											<label>
												<?php
													if ($talent_requests_hiring_manager->hiringmanager_name!=='') 
													{
														echo $talent_requests_hiring_manager->hiringmanager_name; 
													}
												?>
											</label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label>
												<?php
												if ($talent_requests_hiring_manager->hiringmanager_email!=='') 
												{
													echo $talent_requests_hiring_manager->hiringmanager_email;
												}
												?>
											</label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label>
												<?php
												if ($talent_requests_hiring_manager->hiringmanager_jobtitle!=='') 
												{
												 echo $talent_requests_hiring_manager->hiringmanager_jobtitle; 
												}
												?>
												</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Job</h2>
									<div class="event_client_price event_heading">
										<center>
											<label>
												<?php
												if (count($job_feilds) > 0) 
												{
													foreach ($job_feilds as $job_feild)
													{
														echo $job_feild->value_name.' ';
													}
												}
			                    				?> 
			                    		</label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label>
												<?php
												echo $talent_requests_hiring_manager->job_title;;
												?>
											</label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><?php
												foreach ($job_locations as $location) {
													echo $location->value_name.' ';
												}
											?></label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Level</h2>
									<div class="event_client_price event_heading 
									<?php
										if($talent_requests_hiring_manager->job_level=='Leader of leaders')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>
									">
										<center>
											<label>Leader of leaders</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->job_level=='Leader of professionals')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?> ">
										<center>
											<label>Leader of professionals</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->job_level=='Individual professional')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Individual professional</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Team</h2>
									<div class="event_client_price event_heading">
										<center>
											<label>Direct reports - <?php
											if (!is_null($talent_requests_hiring_manager->team_direct_report)) 
											{
											$team_dir_rep = fetch_values_name_id($talent_requests_hiring_manager->team_direct_report);
			                            		foreach ($team_dir_rep as $team_dir_rep) 
			                            		{
			                            			echo $team_dir_rep->value_name;
			                            		}
			                            	}
											?></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label>Total size of function - 
												<?php
												if (!is_null($talent_requests_hiring_manager->team_total_functions)) 
												{
													$team_functions = fetch_values_name_id($talent_requests_hiring_manager->team_total_functions);
				                            		foreach ($team_functions as $team_function) 
				                            		{
				                            			echo $team_function->value_name;
				                            		}
			                            		}
											?> 
											</label>
										</center>
									</div>

								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Contract type</h2>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->contract_type=='Permanent')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Permanent</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->contract_type=='Fixed-term')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Fixed term</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->contract_type=='Contractor')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Contractor</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Contractor currently</h2>
									<div class="event_client_price event_heading event_active">
										<center>
											<label>Contractor - <?php
											if (!is_null($talent_requests_hiring_manager->contract_months)) 
											{ 
												echo $talent_requests_hiring_manager->contract_months;
											}
											?> Month</label>
										</center>
									</div>

								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Pay</h2>
									<div class="event_client_price event_heading">
										<center>
											<?php
												if ($talent_requests_hiring_manager->contract_type=='Permanent') 
												{ ?>
													<label>Pay annual -$
													<?php
													if (!is_null($talent_requests_hiring_manager->pay_amount_annual)) 
													{
														
													 $annual_pay_vals = fetch_values_name_id($talent_requests_hiring_manager->pay_amount_annual);
					                            		foreach ($annual_pay_vals as $annual_pay_val) 
					                            		{
					                            			echo $annual_pay_val->value_name;
					                            		}
					                            	}
												}
												elseif ($talent_requests_hiring_manager->contract_type=='Fixed-term' || $talent_requests_hiring_manager->contract_type=='Contractor') {
													?>
													<label>Pay Daily -$
														<?php
														if (!is_null($talent_requests_hiring_manager->pay_amount_daily)) {
													$daily_pay_vals = fetch_values_name_id($talent_requests_hiring_manager->pay_amount_daily);
					                            		foreach ($daily_pay_vals as $daily_pay_val) 
					                            		{
					                            			echo $daily_pay_val->value_name;
					                            		};
					                            	}
												}
											?>
											</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php if($talent_requests_hiring_manager->flexible_pay){echo 'event_active';} ?>">
										<center>
											<label>Flexible on pay</label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label>Bonus - <?php
											if (!is_null($talent_requests_hiring_manager->bonus)) 
											{
											$bonus = fetch_values_name_id($talent_requests_hiring_manager->bonus);
					                            		foreach ($bonus as $bonus) 
					                            		{
					                            			echo $bonus->value_name;
					                            		};
											}
											?>%</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Hours</h2>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->work_type=='full-time')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Full time</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->work_type=='part-time')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Part time</label>
										</center>
									</div>
									<div class="event_client_price event_heading ">
										<center>
											<label>Select hours - <?php
											if (!is_null($talent_requests_hiring_manager->work_hours)) {
											$work_hours = fetch_values_name_id($talent_requests_hiring_manager->work_hours);
					                            		foreach ($work_hours as $work_hour) 
					                            		{
					                            			echo $work_hour->value_name;
					                            		};
					                            	}
											?></label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox" id="select_days_clone_value">
									<h2>Select days</h2>
									<div class="event_client_price event_heading gray_remain_fields">
										<center>
											<label>Any days</label>
										</center>
									</div>
									<div class="event_client_price event_heading event_active">
										<center>
											<label>Monday</label>
										</center>
									</div>
									<div class="event_client_price event_heading event_active">
										<center>
											<label>Tuesday</label>
										</center>
									</div>
									<div class="event_client_price event_heading event_active">
										<center>
											<label>Wednesday</label>
										</center>
									</div>
									<div class="event_client_price event_heading event_active">
										<center>
											<label>Thursday</label>
										</center>
									</div>
									<div class="event_client_price event_heading gray_remain_fields">
										<center>
											<label>Friday</label>
										</center>
									</div>	
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Objectives</h2>
									<div class="event_client_price event_heading">
										<center>
											<label><?php echo $talent_requests_hiring_manager->objective_1?></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><?php echo $talent_requests_hiring_manager->objective_2?></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><?php echo $talent_requests_hiring_manager->objective_3?></label>
										</center>
									</div>
								</div>

								<div class="clone_portion_heading">
									<center>
										<label>Talent requirements</label>
									</center>
								</div>

								<div class="clear10"></div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Level capability</h2>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->level_capability=='top talent')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Top talent</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->level_capability=='solid performer')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Solid performer</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->level_capability=='High potential')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>High potential</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Experience</h2>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->experience=='equivalent')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Equivalent</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->experience=='Transferrable skills')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Transferrable skills</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->experience=='open minded')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Open minded</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Successor ready</h2>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->successor_ready=='with in 3 years')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Within 3 years</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->successor_ready=='after 3 years')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>After 3 years</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->successor_ready=='no requirement')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>No requirement</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Qualification</h2>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->qualifications=='required')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Required</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->qualifications=='preferred')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Preferred</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->qualifications=='no requirement')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>No requirement</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Specific skills</h2>
									<div class="event_client_price event_heading">
										<center>
											<label><?php echo $talent_requests_hiring_manager->specific_skill_1;?></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><?php echo $talent_requests_hiring_manager->specific_skill_2;?></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><?php echo $talent_requests_hiring_manager->specific_skill_3;?></label>
										</center>
									</div>
								</div>

								<div class="clone_portion_heading">
									<center>
										<label>Search Assistance</label>
									</center>
								</div>

								<div class="clear10"></div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Bonus buy-out</h2>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->bonus_buy_out=='none')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>None</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->bonus_buy_out=='possible')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Possible</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->bonus_buy_out=='yes')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Yes</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Relocation assistance</h2>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->relocation_assistance=='none')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>None</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->relocation_assistance=='Relocation costs')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Relocation Costs</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->relocation_assistance=='Visa sponsorship')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Visa sponsorship</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Home & flexible working</h2>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->flexible_working=='None')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>None</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->flexible_working=='Occasional')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Occasional</label>
										</center>
									</div>
									<div class="event_client_price event_heading <?php
										if($talent_requests_hiring_manager->flexible_working=='Fully flexible')
										{
											echo 'event_active';
										}
										else
										{
											echo 'gray_remain_fields';
										}
									?>">
										<center>
											<label>Fully flexible</label>
										</center>
									</div>
								</div>

								<div class="desktop_ceremony event_client_pbox">
									<h2>Referral or target candidate</h2>
									<div class="event_client_price event_heading">
										<center>
											<label><?php echo $talent_requests_hiring_manager->target_candidate_1;?></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><?php echo $talent_requests_hiring_manager->target_candidate_2;?></label>
										</center>
									</div>
									<div class="event_client_price event_heading">
										<center>
											<label><?php echo $talent_requests_hiring_manager->target_candidate_3;?></label>
										</center>
									</div>
								</div>

								<div id="full_width_label">
									<div class="desktop_ceremony event_client_pbox">
										<h2>Additional searh requirements</h2>
										<div class="event_client_price event_heading">
											<center>
												<label class="overflow_ellipsis"><?php echo $talent_requests_hiring_manager->additional_requirements;?></label>
											</center>
										</div>
									</div>

									<div class="desktop_ceremony event_client_pbox">
										<h2>Hiring manager video link</h2>
										<div class="event_client_price event_heading">
											<center>
												<label><?php echo $talent_requests_hiring_manager->video_link;?></label>
											</center>
										</div>
									</div>
									<div class="desktop_ceremony event_client_pbox">
										<h2>Attachments</h2>
										<div class="event_client_price event_heading">
											<center>
												<label><?php echo $talent_requests_hiring_manager->attachments;?></label>
											</center>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							
						</div>
						
							</div>
						</div> -->
						
						
						<div class="col-sm-12 p0">
							<div class="col-sm-12 mrg_bot_pop5 clone_desktop_buttons">
								<center>
									<button type="button" class="btn btn-info btn-lg btn_quick_popup">Open Job</button>
									<button type="button" class="btn btn-info btn-lg btn_request btn_quick_popup">Request information</button>
									<button type="button" class="btn btn-info btn-lg btn_request btn_quick_popup" data-toggle="modal" data-target="#send_to_agency">Send to agency</button>
									<button type="button" class="btn btn-info btn-lg btn_request btn_quick_popup">Send to Candidate</button>
									<button type="button" class="btn btn-info btn-lg btn_request btn_quick_popup">Save ONE</button>
								</center>
							</div>

							<div class="col-sm-12 mrg_bot_pop5 clone_mobile_buttons">
								<center>
									<button type="button" class="btn btn-info btn-lg btn_request btn_quick_mobile">Save</button>
									<button type="button" class="btn btn-info btn-lg btn_request btn_quick_mobile">Send to agency</button>
									<button type="button" class="btn btn-info btn-lg btn_request btn_quick_mobile">Send to Candidate</button>
									<button type="button" class="btn btn-info btn-lg btn_request btn_quick_mobile">Request information</button>
									<button type="button" class="btn btn-info btn-lg btn_quick_mobile">Open Job</button>
								</center>
							</div>
						</div>

						<div class="clearfix"></div>
                    </div>
                    <div class="clear10"></div>
                </div> 

               
				<!-- Modal footer -->
				<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
			</div>
		</div>
</div>

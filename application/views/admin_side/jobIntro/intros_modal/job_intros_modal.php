<div id="myModal_job_detail_edit" class="modal">

        <div class="modal-dialog modal_wdith_intro">
        	<?php
        		// echo "<pre>";print_r($talent_requests_intros);
        	?>
            <!-- Modal content-->

            <div class="modal-content">
				<div class="modal-header">
					<div class="col-sm-8 modal_intro detail_modal_head">
						<h2>Job Details</h2>
					</div>
					 <div class="col-sm-3 detail_modal_button">
						<button type="button" class="fetch_detail">Fetch detail</button>
					</div>

					<div class="col-sm-1 p0">
						<button type="button" class="close" data-dismiss="modal">×</button>
					</div>


				</div>

                <div class="clear10"></div>

                <div class="modal-body">
                	<div class="row ">
                		<div class="col-md-3 fa-wrap-multiple" id="intros_jobs_data_modal">
                			<select class="test1 intors_modal_multiple_jobs" id="intros_jobs_data_dropdown" >
								<?php
								if (count($talents_intros)>0) {
									foreach ($talents_intros as $talent) {
										?>
											<option value="<?php echo $talent->talent_id;  ?>"><?php echo $talent->name; ?></option>	
										<?php
									}
								}
								?>
							</select>
                		</div>
                		<div class="col-md-1"></div>
                		<div class="col-md-3 fa-wrap-multiple">
                			<select class="test1 intors_modal_multiple_talent" >
								<?php
								if (count($talent_requests_intros) > 0) {
									foreach ($talent_requests_intros as $talent_request) {
										?>
											<option value="<?php echo $talent_request->talent_request_id; ?>"><?php echo $talent_request->job_title; ?></option>		
										<?php
									}
								}
								?>
							</select>
                		</div>
                		<div class="col-md-1"></div>
                		<div class="col-md-3 fa-wrap-multiple">
                			<select class="test1 intors_modal_multiple_template">
								<option value="1">Basic Template</option>
								<option value="2">Standard Template</option>
								<option value="3">Advanced Template</option>
							</select>
                		</div>
                	</div>
                	<div class="clear10"></div>
                	<div class="row">
                		<div class="col-md-12 ">
                			<button class="btn btn-info btn-lg pull-right">Create Intro</button>
                		</div>
                	</div>
                	
                	<div class="clear10"></div>
                    <div class="col-sm-12 p0">

                        <h3 class="software_head">
							Software Engineer - Germany - Yearly - $ 20,000
						</h3>

                    </div>

                    <div class="clear10"></div>

                    <div class="col-sm-2 p0">
                        <img src="<?php echo base_url();?>public/admin/img/img_new.jpg" class="img-responsive" style="width:128px; height:128px;" alt="">
                    </div>

                    <div class="col-sm-10 p0">

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-2"><label>Name:</label></div>
							<div class="col-sm-1 checkbox_mobile">
								<div class="form-group">
									<input type="checkbox" id="intro_check_1">
									<label for="intro_check_1"></label>
								</div>
							</div>
                            <div class="col-sm-6 checkbox_input">
								<input type="text" class="form-control" placeholder="Name"/>
							</div>
                        </div>

                        <div class="clear5"></div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-2"><label>Location:</label></div>
							<div class="col-sm-1 checkbox_mobile">
								<div class="form-group">
									<input type="checkbox" id="intro_check_2">
									<label for="intro_check_2"></label>
								</div>
							</div>
							<div class="col-sm-6 checkbox_input">
								<input type="text" class="form-control" placeholder="Location"/>
							</div>
                        </div>

                        <div class="clear5"></div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-2"><label>Salary:</label></div>
                            <div class="col-sm-1 checkbox_mobile">
								<div class="form-group">
									<input type="checkbox" id="intro_check_3">
									<label for="intro_check_3"></label>
								</div>
							</div>
							<div class="col-sm-6 checkbox_input">
								<input type="text" class="form-control" placeholder="$ 20,000"/>
							</div>
                        </div>

                        <div class="clear5"></div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-2"><label>Contract:</label></div>
                            <div class="col-sm-1 checkbox_mobile">
								<div class="form-group">
									<input type="checkbox" id="intro_check_4">
									<label for="intro_check_4"></label>
								</div>
							</div>
							<div class="col-sm-6 checkbox_input">
								<select class="form-control">
									<option value="">Contract</option>
									<option value="1">Yearly</option>
									<option value="2">Mothly</option>
									<option value="3">Weekly</option>
								</select>
							</div>
                        </div>

                        <div class="clear5"></div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-2"><label>Flexi:</label></div>
                            <div class="col-sm-1 checkbox_mobile">
								<div class="form-group">
									<input type="checkbox" id="intro_check_5">
									<label for="intro_check_5"></label>
								</div>
							</div>
							<div class="col-sm-6 checkbox_input">
								<input type="text" class="form-control" placeholder="Flexibility"/>
							</div>
                        </div>

                        <div class="clear5"></div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-2"><label>Availability:</label></div>
                            <div class="col-sm-1 checkbox_mobile">
								<div class="form-group">
									<input type="checkbox" id="intro_check_6">
									<label for="intro_check_6"></label>
								</div>
							</div>
							<div class="col-sm-6 checkbox_input">
								<input type="text" class="form-control" placeholder="9 AM To 5 PM"/>
							</div>
                        </div>
						<div class="clear5"></div>
						<div class="col-sm-12 p0" style="">
                            <div class="col-sm-2"><label>Current:</label></div>
                            <div class="col-sm-1 checkbox_mobile">
								<div class="form-group">
									<input type="checkbox" id="intro_check_7">
									<label for="intro_check_7"></label>
								</div>
							</div>
							<div class="col-sm-6 checkbox_input">
								<input type="text" class="form-control" placeholder="Current"/>
							</div>
                        </div>

                        <div class="clear5"></div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-2"><label>Past:</label></div>
                            <div class="col-sm-1 checkbox_mobile">
								<div class="form-group">
									<input type="checkbox" id="intro_check_8">
									<label for="intro_check_8"></label>
								</div>
							</div>
							<div class="col-sm-6 checkbox_input">
								<input type="text" class="form-control" placeholder="Past"/>
							</div>
                        </div>

                        <div class="clear5"></div>

                        <div class="col-sm-12 p0" style="">
                            <div class="col-sm-2"><label>Education:</label></div>
                            <div class="col-sm-1 checkbox_mobile">
								<div class="form-group">
									<input type="checkbox" id="intro_check_9">
									<label for="intro_check_9"></label>
								</div>
							</div>
                            <div class="col-sm-6 checkbox_input">
								<input type="text" class="form-control" placeholder="Education"/>
							</div>
                        </div>
                    </div>

					<div class="clear20"></div>

					<div class="points_setting" id="">

						<div class="col-sm-6 responsible_padd_left">
							<h3>Responsibilities</h3>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_10">
									<label for="intro_check_10"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Bullet point"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_11">
									<label for="intro_check_11"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Bullet point"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_12">
									<label for="intro_check_12"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Bullet point"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_13">
									<label for="intro_check_13"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Bullet point"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_14">
									<label for="intro_check_14"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Bullet point"/>
							</div>
							<div class="clear5"></div>
						</div>

						<div class="col-sm-6 responsible_padd_right">
							<h3>Key Achievments</h3>
							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_15">
									<label for="intro_check_15"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Key achievments"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_16">
									<label for="intro_check_16"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Key achievments"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_17">
									<label for="intro_check_17"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Key achievments"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_18">
									<label for="intro_check_18"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Key achievments"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_19">
									<label for="intro_check_19"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Key achievments"/>
							</div>
							<div class="clear5"></div>
						</div>

						<div class="clear10"></div>

						<div class="col-sm-6 responsible_padd_left">
							<h3>Key Strengths</h3>
							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_20">
									<label for="intro_check_20"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Key strengths"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_21">
									<label for="intro_check_21"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Key strengths"/>
							</div>
							<div class="clear5"></div>

						</div>

						<div class="col-sm-6 responsible_padd_right">
							<h3>Areas developed</h3>
							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_22">
									<label for="intro_check_22"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Areas developed"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_23">
									<label for="intro_check_23"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Areas developed"/>
							</div>
							<div class="clear5"></div>

						</div>

						<div class="clear10"></div>

						<div class="col-sm-6 responsible_padd_left">
							<h3>Areas developing</h3>
							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_24">
									<label for="intro_check_24"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Areas developing"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_25">
									<label for="intro_check_25"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Areas developing"/>
							</div>
							<div class="clear5"></div>
						</div>

						<div class="col-sm-6 responsible_padd_right">
							<h3>Interview reason</h3>
							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_26">
									<label for="intro_check_26"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Interview reason 1"/>
							</div>
							<div class="clear5"></div>

							<div class="col-sm-1 checkbox_mobile_responsible">
								<div class="form-group">
									<input type="checkbox" id="intro_check_27">
									<label for="intro_check_27"></label>
								</div>
							</div>
							<div class="col-sm-11 checkbox_input_responsible">
								<input type="text" class="form-control" placeholder="Interview reason 2"/>
							</div>
							<div class="clear5"></div>
						</div>

						<div class="clear10"></div>

						<!--- Bilal --->
						<div id="date_time_tabs">
							<h3>HM Availability</h3>
							<div class="create_intro_desktop">
								<div class="panel with-nav-tabs panel-default">
									<div class="panel-heading">
										<ul class="nav nav-tabs">
											<li><a href="javascript:void(0);" attr-id="create_intro_pop1" class="hm_avail_intro_pop_desk" onclick="hm_availability_click(this)">All</a></li>
											<li><a href="javascript:void(0);" attr-id="create_intro_pop2" class="hm_avail_intro_pop_desk" onclick="hm_availability_click(this)">Monday</a></li>
											<li><a href="javascript:void(0);" attr-id="create_intro_pop3" class="hm_avail_intro_pop_desk" onclick="hm_availability_click(this)">Tuesday</a></li>
											<li><a href="javascript:void(0);" attr-id="create_intro_pop4" class="hm_avail_intro_pop_desk" onclick="hm_availability_click(this)">Wednesday</a></li>
											<li><a href="javascript:void(0);" attr-id="create_intro_pop5" class="hm_avail_intro_pop_desk" onclick="hm_availability_click(this)">Thursday</a></li>
											<li><a href="javascript:void(0);" attr-id="create_intro_pop6" class="hm_avail_intro_pop_desk" onclick="hm_availability_click(this)">Friday</a></li>
										</ul>
									</div>

									<div class="panel-body">
										<div class="tab-content hm_avail_intro_tab_cont_desk">
											<div class="tab-pane fade in " id="create_intro_pop1">
												<ul class="today_time" all-click="1">
													<li all-li-click="1">
														<input id="create_intro_all_pop_like001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_all_pop_like001">8:00</label>
													</li>
													<li all-li-click="2">
														<input id="create_intro_all_pop_like002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_all_pop_like002">8:30</label>
													</li>
													<li all-li-click="3">
														<input id="create_intro_all_pop_like003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_all_pop_like003">9:00</label>
													</li>
													<li all-li-click="4">
														<input id="create_intro_all_pop_like004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_all_pop_like004">9:30</label>
													</li>
													<li all-li-click="5">

														<input id="create_intro_all_pop_like005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like005">10:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_all_pop_like006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like006">10:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">

													<li all-li-click="1">

														<input id="create_intro_all_pop_like007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like007">11:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_all_pop_like008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like008">11:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_all_pop_like009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like009">12:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_all_pop_like0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0010">12:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_all_pop_like0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0011">13:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_all_pop_like0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0012">13:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">

													<li all-li-click="1">

														<input id="create_intro_all_pop_like0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0013">14:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_all_pop_like0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0014">14:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_all_pop_like0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0015">15:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_all_pop_like0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0016">15:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_all_pop_like0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0017">16:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_all_pop_like0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0018">16:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">

													<li all-li-click="1">

														<input id="create_intro_all_pop_like0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0019">17:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_all_pop_like0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0020">17:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_all_pop_like0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0021">18:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_all_pop_like0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0022">18:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_all_pop_like0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0023">19:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_all_pop_like0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_all_pop_like0024">19:30</label>

													</li>

												</ul>

											</div>

											<div class="tab-pane fade in" id="create_intro_pop2">
												<ul class="today_time" all-click="1">
													<li all-li-click="1">
														<input id="create_intro_pop_intro001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_intro001">8:00</label>
													</li>
													<li all-li-click="2">
														<input id="create_intro_pop_intro002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_intro002">8:30</label>
													</li>
													<li all-li-click="3">
														<input id="create_intro_pop_intro003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_intro003">9:00</label>
													</li>
													<li all-li-click="4">
														<input id="create_intro_pop_intro004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_intro004">9:30</label>
													</li>
													<li all-li-click="5">
														<input id="create_intro_pop_intro005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_intro005">10:00</label>
													</li>
													<li all-li-click="6">
														<input id="create_intro_pop_intro006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_intro006">10:30</label>
													</li>
												</ul>
												<div class="clearfix"></div>
												<ul class="today_time" all-click="2">
													<li all-li-click="1">
														<input id="create_intro_pop_intro007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_intro007">11:00</label>
													</li>
													<li all-li-click="2">
														<input id="create_intro_pop_intro008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_intro008">11:30</label>
													</li>
													<li all-li-click="3">
														<input id="create_intro_pop_intro009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_intro009">12:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_intro0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0010">12:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_intro0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0011">13:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_intro0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0012">13:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">

													<li all-li-click="1">

														<input id="create_intro_pop_intro0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0013">14:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_intro0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0014">14:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_intro0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0015">15:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_intro0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0016">15:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_intro0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0017">16:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_intro0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0018">16:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">

													<li all-li-click="1">

														<input id="create_intro_pop_intro0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0019">17:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_intro0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0020">17:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_intro0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0021">18:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_intro0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0022">18:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_intro0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0023">19:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_intro0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_intro0024">19:30</label>

													</li>

												</ul>

											</div>

											<div class="tab-pane fade in" id="create_intro_pop3">

												<ul class="today_time" all-click="1">

													<li all-li-click="1">

														<input id="create_intro_pop_meeting001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting001">8:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_meeting002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting002">8:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_meeting003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting003">9:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_meeting004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting004">9:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_meeting005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting005">10:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_meeting006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting006">10:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">

													<li all-li-click="1">

														<input id="create_intro_pop_meeting007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting007">11:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_meeting008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting008">11:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_meeting009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting009">12:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_meeting0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0010">12:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_meeting0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0011">13:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_meeting0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0012">13:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">

													<li all-li-click="1">

														<input id="create_intro_pop_meeting0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0013">14:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_meeting0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0014">14:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_meeting0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0015">15:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_meeting0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0016">15:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_meeting0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0017">16:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_meeting0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0018">16:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">

													<li all-li-click="1">

														<input id="create_intro_pop_meeting0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0019">17:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_meeting0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0020">17:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_meeting0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0021">18:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_meeting0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0022">18:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_meeting0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0023">19:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_meeting0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_meeting0024">19:30</label>

													</li>

												</ul>

											</div>

											<div class="tab-pane fade in" id="create_intro_pop4">

												<ul class="today_time" all-click="1">

													<li all-li-click="1">

														<input id="create_intro_pop_call001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call001">8:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_call002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call002">8:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_call003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call003">9:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_call004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call004">9:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_call005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call005">10:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_call006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call006">10:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">

													<li all-li-click="1">

														<input id="create_intro_pop_call007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call007">11:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_call008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call008">11:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_call009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call009">12:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_call0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0010">12:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_call0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0011">13:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_call0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0012">13:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">

													<li all-li-click="1">

														<input id="create_intro_pop_call0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0013">14:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_call0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0014">14:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_call0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0015">15:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_call0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0016">15:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_call0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0017">16:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_call0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0018">16:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">

													<li all-li-click="1">

														<input id="create_intro_pop_call0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0019">17:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_call0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0020">17:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_call0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0021">18:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_call0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0022">18:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_call0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0023">19:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_call0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_call0024">19:30</label>

													</li>

												</ul>

											</div>

											<div class="tab-pane fade in" id="create_intro_pop5">
												<ul class="today_time" all-click="1">
													<li all-li-click="1">
														<input id="create_intro_pop_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_friday001">8:00</label>
													</li>

													<li all-li-click="2">
														<input id="create_intro_pop_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_friday002">8:30</label>
													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday003">9:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday004">9:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday005">10:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday006">10:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">

													<li all-li-click="1">

														<input id="create_intro_pop_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday007">11:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday008">11:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday009">12:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0010">12:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0011">13:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0012">13:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">

													<li all-li-click="1">

														<input id="create_intro_pop_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0013">14:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0014">14:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0015">15:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0016">15:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0017">16:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0018">16:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">

													<li all-li-click="1">

														<input id="create_intro_pop_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0019">17:00</label>

													</li>

													<li all-li-click="2">

														<input id="create_intro_pop_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0020">17:30</label>

													</li>

													<li all-li-click="3">

														<input id="create_intro_pop_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0021">18:00</label>

													</li>

													<li all-li-click="4">

														<input id="create_intro_pop_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0022">18:30</label>

													</li>

													<li all-li-click="5">

														<input id="create_intro_pop_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0023">19:00</label>

													</li>

													<li all-li-click="6">

														<input id="create_intro_pop_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="create_intro_pop_friday0024">19:30</label>

													</li>

												</ul>

											</div>

											<div class="tab-pane fade in" id="create_intro_pop6">
												<ul class="today_time" all-click="1">
													<li all-li-click="1">
														<input id="create_intro_pop_1" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_1">8:00</label>
													</li>
													<li all-li-click="2">
														<input id="create_intro_pop_2" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_2">8:30</label>
													</li>
													<li all-li-click="3">
														<input id="create_intro_pop_3" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_3">9:00</label>
													</li>
													<li all-li-click="4">
														<input id="create_intro_pop_4" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_4">9:30</label>
													</li>
													<li all-li-click="5">
														<input id="create_intro_pop_5" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_5">10:00</label>
													</li>
													<li all-li-click="6">
														<input id="create_intro_pop_6" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_6">10:30</label>
													</li>
												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">
													<li all-li-click="1">
														<input id="create_intro_pop_7" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_7">11:00</label>
													</li>
													<li all-li-click="2">
														<input id="create_intro_pop_8" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_8">11:30</label>
													</li>
													<li all-li-click="3">
														<input id="create_intro_pop_9" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_9">12:00</label>
													</li>
													<li all-li-click="4">
														<input id="create_intro_pop_10" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_10">12:30</label>
													</li>
													<li all-li-click="5">
														<input id="create_intro_pop_11" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_11">13:00</label>
													</li>
													<li all-li-click="6">
														<input id="create_intro_pop_12" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_12">13:30</label>
													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">
													<li all-li-click="1">
														<input id="create_intro_pop_13" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_13">14:00</label>
													</li>
													<li all-li-click="2">
														<input id="create_intro_pop_14" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_14">14:30</label>
													</li>
													<li all-li-click="3">
														<input id="create_intro_pop_15" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_15">15:00</label>
													</li>
													<li all-li-click="4">
														<input id="create_intro_pop_16" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_16">15:30</label>
													</li>
													<li all-li-click="5">
														<input id="create_intro_pop_17" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_17">16:00</label>
													</li>
													<li all-li-click="6">
														<input id="create_intro_pop_18" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_18">16:30</label>
													</li>
												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">
													<li all-li-click="1">
														<input id="create_intro_pop_19" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_19">17:00</label>
													</li>
													<li all-li-click="2">
														<input id="create_intro_pop_20" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_20">17:30</label>
													</li>
													<li all-li-click="3">
														<input id="create_intro_pop_21" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_21">18:00</label>
													</li>
													<li all-li-click="4">
														<input id="create_intro_pop_22" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_22">18:30</label>
													</li>
													<li all-li-click="5">
														<input id="create_intro_pop_23" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_23">19:00</label>
													</li>
													<li all-li-click="6">
														<input id="create_intro_pop_24" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_24">19:30</label>
													</li>
												</ul>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="panel-group wrap mb-ntj_div" id="bs-collapse">
								<div class="panel">

									<div id="hr_mange_time" class="panel-collapse collapse in" aria-expanded="true" style="">
										<div class="panel-body" style="padding: 0px;">
											<div class="panel with-nav-tabs panel-default">
													<div class="panel-heading">
														<ul class="nav nav-tabs">
															<li class="active"><a href="#time_tab_mob1" data-toggle="tab" aria-expanded="false">All</a></li>
															<li><a href="#time_tab_mob2" data-toggle="tab" aria-expanded="false">M</a></li>
															<li><a href="#time_tab_mob3" data-toggle="tab" aria-expanded="false">T</a></li>
															<li><a href="#time_tab_mob4" data-toggle="tab" aria-expanded="false">W</a></li>
															<li><a href="#time_tab_mob5" data-toggle="tab" aria-expanded="false">T</a></li>
															<li><a href="#time_tab_mob6" data-toggle="tab" aria-expanded="true">F</a></li>
														</ul>
													</div>

													<div class="panel-body" style="padding: 0px;">
														<div class="tab-content all_clicks">
															<div class="tab-pane fade in active" id="time_tab_mob1">
																<ul all-click="1" class="today_time all-tab-tm-mb">
																	<li all-li-click="1">
																		<input id="click_like001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_like002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_like003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_like004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_like005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_like006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">
																	<li all-li-click="1">
																		<input id="click_like007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like007">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_like008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like008">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_like009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like009">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_like0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0010">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_like0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0011">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_like0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0012">13:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">
																	<li all-li-click="1">
																		<input id="click_like0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0013">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_like0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0014">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_like0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0015">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_like0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0016">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_like0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0017">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_like0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0018">16:30</label>
																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">
																	<li all-li-click="1">
																		<input id="click_like0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0019">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_like0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0020">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_like0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0021">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_like0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0022">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_like0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0023">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_like0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_like0024">19:30</label>
																	</li>
																</ul>
															</div>

															<div class="tab-pane fade" id="time_tab_mob2">

																<ul all-click="1" class="today_time">
																	<li all-li-click="1">
																		<input id="click_intro001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_intro002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_intro003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_intro004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_intro005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_intro006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">
																	<li all-li-click="1">
																		<input id="click_intro007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro007">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_intro008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro008">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_intro009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro009">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_intro0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0010">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_intro0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0011">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_intro0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0012">13:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">
																	<li all-li-click="1">
																		<input id="click_intro0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0013">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_intro0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0014">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_intro0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0015">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_intro0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0016">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_intro0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0017">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_intro0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0018">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">
																	<li all-li-click="1">
																		<input id="click_intro0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0019">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_intro0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0020">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_intro0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0021">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_intro0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0022">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_intro0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0023">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_intro0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_intro0024">19:30</label>
																	</li>
																</ul>
															</div>

															<div class="tab-pane fade" id="time_tab_mob3">
																<ul all-click="1" class="today_time">
																	<li all-li-click="1">
																		<input id="click_meeting001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_meeting001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_meeting002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_meeting002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_meeting003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_meeting003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_meeting004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_meeting004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_meeting005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_meeting005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_meeting006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_meeting006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">

																	<li all-li-click="1">

																		<input id="click_meeting007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting007">11:00</label>

																	</li>

																	<li all-li-click="2">

																		<input id="click_meeting008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting008">11:30</label>

																	</li>

																	<li all-li-click="3">

																		<input id="click_meeting009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting009">12:00</label>

																	</li>

																	<li all-li-click="4">

																		<input id="click_meeting0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0010">12:30</label>

																	</li>

																	<li all-li-click="5">

																		<input id="click_meeting0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0011">13:00</label>

																	</li>

																	<li all-li-click="6">

																		<input id="click_meeting0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0012">13:30</label>

																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">

																	<li all-li-click="1">

																		<input id="click_meeting0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0013">14:00</label>

																	</li>

																	<li all-li-click="2">

																		<input id="click_meeting0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0014">14:30</label>

																	</li>

																	<li all-li-click="3">

																		<input id="click_meeting0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0015">15:00</label>

																	</li>

																	<li all-li-click="4">

																		<input id="click_meeting0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0016">15:30</label>

																	</li>

																	<li all-li-click="5">

																		<input id="click_meeting0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0017">16:00</label>

																	</li>

																	<li all-li-click="6">

																		<input id="click_meeting0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0018">16:30</label>

																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">

																	<li all-li-click="1">

																		<input id="click_meeting0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0019">17:00</label>

																	</li>

																	<li all-li-click="2">

																		<input id="click_meeting0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0020">17:30</label>

																	</li>

																	<li all-li-click="3">

																		<input id="click_meeting0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0021">18:00</label>

																	</li>

																	<li all-li-click="4">

																		<input id="click_meeting0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0022">18:30</label>

																	</li>

																	<li all-li-click="5">

																		<input id="click_meeting0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0023">19:00</label>

																	</li>

																	<li all-li-click="6">

																		<input id="click_meeting0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_meeting0024">19:30</label>

																	</li>

																</ul>

															</div>

															<div class="tab-pane fade" id="time_tab_mob4">

																<ul all-click="1" class="today_time">
																	<li all-li-click="1">
																		<input id="click_call001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_call002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_call003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_call004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_call005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_call006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">
																	<li all-li-click="1">
																		<input id="click_call007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call007">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_call008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call008">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_call009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call009">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_call0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0010">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_call0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0011">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_call0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0012">13:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">
																	<li all-li-click="1">
																		<input id="click_call0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0013">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_call0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0014">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_call0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_call0015">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_call0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="click_call0016">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_call0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0017">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_call0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0018">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">
																	<li all-li-click="1">
																		<input id="click_call0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0019">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_call0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0020">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_call0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0021">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_call0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0022">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_call0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0023">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_call0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_call0024">19:30</label>
																	</li>
																</ul>
															</div>

															<div class="tab-pane fade" id="time_tab_mob5">
																<ul all-click="1" class="today_time">
																	<li all-li-click="1">
																		<input id="click_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">
																	<li all-li-click="1">
																		<input id="click_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday007">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday008">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday009">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0010">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0011">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0012">13:30</label>
																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">
																	<li all-li-click="1">
																		<input id="click_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0013">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0014">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0015">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0016">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0017">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0018">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">
																	<li all-li-click="1">
																		<input id="click_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0019">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="click_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0020">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0021">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="click_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0022">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="click_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0023">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="click_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday0024">19:30</label>
																	</li>
																</ul>

															</div>

															<div class="tab-pane fade" id="time_tab_mob6">
																<ul all-click="1" class="today_time">
																	<li all-li-click="1">
																		<input id="clk_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clk_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clk_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clk_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clk_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clk_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">
																	<li all-li-click="1">
																		<input id="clk_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday007">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clk_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday008">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clk_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday009">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clk_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0010">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clk_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0011">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clk_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0012">13:30</label>
																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">
																	<li all-li-click="1">
																		<input id="clk_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0013">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clk_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0014">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clk_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0015">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clk_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0016">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clk_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0017">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clk_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0018">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">
																	<li all-li-click="1">
																		<input id="clk_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0019">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="clk_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0020">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="clk_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0021">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="clk_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0022">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="clk_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0023">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="clk_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="clk_friday0024">19:30</label>
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


						</div>
						<!--- Bilal --->

						<div class="clear20"></div>

						<!--- Bilal user --->
						<div id="date_time_tabs">
							<h3>User Availability</h3>
							<div class="create_intro_desktop">
								<div class="panel with-nav-tabs panel-default">
									<div class="panel-heading">
										<ul class="nav nav-tabs">
											<li><a href="javascript:void(0);" attr-id="user_availibilty_intro1" class="user_avail_intro_pop_desk" onclick="hm_availability_click(this)">All</a></li>
											<li><a href="javascript:void(0);" attr-id="user_availibilty_intro2" class="user_avail_intro_pop_desk" onclick="hm_availability_click(this)">Monday</a></li>
											<li><a href="javascript:void(0);" attr-id="user_availibilty_intro3" class="user_avail_intro_pop_desk" onclick="hm_availability_click(this)">Tuesday</a></li>
											<li><a href="javascript:void(0);" attr-id="user_availibilty_intro4" class="user_avail_intro_pop_desk" onclick="hm_availability_click(this)">Wednesday</a></li>
											<li><a href="javascript:void(0);" attr-id="user_availibilty_intro5" class="user_avail_intro_pop_desk" onclick="hm_availability_click(this)">Thursday</a></li>
											<li><a href="javascript:void(0);" attr-id="user_availibilty_intro6" class="user_avail_intro_pop_desk" onclick="hm_availability_click(this)">Friday</a></li>
										</ul>
									</div>

									<div class="panel-body">
										<div class="tab-content user_avail_tab_content_desk">
											<div class="tab-pane fade in " id="user_availibilty_intro1">
												<ul class="today_time" all-click="1">
													<li all-li-click="1">
														<input id="user_availibilty_all_pop_like001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_availibilty_all_pop_like001">8:00</label>
													</li>
													<li all-li-click="2">
														<input id="user_availibilty_all_pop_like002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_availibilty_all_pop_like002">8:30</label>
													</li>
													<li all-li-click="3">
														<input id="user_availibilty_all_pop_like003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_availibilty_all_pop_like003">9:00</label>
													</li>
													<li all-li-click="4">
														<input id="user_availibilty_all_pop_like004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_availibilty_all_pop_like004">9:30</label>
													</li>
													<li all-li-click="5">

														<input id="user_availibilty_all_pop_like005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_availibilty_all_pop_like005">10:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_availibilty_all_pop_like006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_availibilty_all_pop_like006">10:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">

													<li all-li-click="1">

														<input id="user_create_intro_all_pop_like007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like007">11:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_all_pop_like008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like008">11:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_all_pop_like009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like009">12:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_all_pop_like0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0010">12:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_all_pop_like0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0011">13:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_all_pop_like0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0012">13:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">

													<li all-li-click="1">

														<input id="user_create_intro_all_pop_like0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0013">14:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_all_pop_like0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0014">14:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_all_pop_like0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0015">15:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_all_pop_like0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0016">15:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_all_pop_like0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0017">16:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_all_pop_like0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0018">16:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">

													<li all-li-click="1">

														<input id="user_create_intro_all_pop_like0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0019">17:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_all_pop_like0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0020">17:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_all_pop_like0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0021">18:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_all_pop_like0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0022">18:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_all_pop_like0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0023">19:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_all_pop_like0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_all_pop_like0024">19:30</label>

													</li>

												</ul>

											</div>

											<div class="tab-pane fade in" id="user_availibilty_intro2">
												<ul class="today_time" all-click="1">
													<li all-li-click="1">
														<input id="user_create_intro_pop_intro001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_intro001">8:00</label>
													</li>
													<li all-li-click="2">
														<input id="user_create_intro_pop_intro002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_intro002">8:30</label>
													</li>
													<li all-li-click="3">
														<input id="user_create_intro_pop_intro003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_intro003">9:00</label>
													</li>
													<li all-li-click="4">
														<input id="user_create_intro_pop_intro004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_intro004">9:30</label>
													</li>
													<li all-li-click="5">
														<input id="user_create_intro_pop_intro005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_intro005">10:00</label>
													</li>
													<li all-li-click="6">
														<input id="user_create_intro_pop_intro006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_intro006">10:30</label>
													</li>
												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">
													<li all-li-click="1">
														<input id="user_create_intro_pop_intro007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_intro007">11:00</label>
													</li>
													<li all-li-click="2">
														<input id="user_create_intro_pop_intro008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_intro008">11:30</label>
													</li>
													<li all-li-click="3">
														<input id="user_create_intro_pop_intro009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_intro009">12:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_intro0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0010">12:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_intro0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0011">13:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_intro0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0012">13:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">

													<li all-li-click="1">

														<input id="user_create_intro_pop_intro0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0013">14:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_intro0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0014">14:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_intro0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0015">15:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_intro0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0016">15:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_intro0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0017">16:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_intro0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0018">16:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">

													<li all-li-click="1">

														<input id="user_create_intro_pop_intro0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0019">17:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_intro0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0020">17:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_intro0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0021">18:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_intro0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0022">18:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_intro0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0023">19:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_intro0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_intro0024">19:30</label>

													</li>

												</ul>

											</div>

											<div class="tab-pane fade in" id="user_availibilty_intro3">

												<ul class="today_time" all-click="1">

													<li all-li-click="1">

														<input id="user_create_intro_pop_meeting001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting001">8:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_meeting002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting002">8:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_meeting003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting003">9:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_meeting004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting004">9:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_meeting005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting005">10:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_meeting006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting006">10:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">

													<li all-li-click="1">

														<input id="user_create_intro_pop_meeting007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting007">11:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_meeting008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting008">11:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_meeting009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting009">12:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_meeting0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0010">12:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_meeting0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0011">13:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_meeting0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0012">13:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">

													<li all-li-click="1">

														<input id="user_create_intro_pop_meeting0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0013">14:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_meeting0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0014">14:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_meeting0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0015">15:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_meeting0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0016">15:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_meeting0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0017">16:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_meeting0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0018">16:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">

													<li all-li-click="1">

														<input id="user_create_intro_pop_meeting0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0019">17:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_meeting0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0020">17:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_meeting0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0021">18:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_meeting0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0022">18:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_meeting0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0023">19:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_meeting0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_meeting0024">19:30</label>

													</li>

												</ul>

											</div>

											<div class="tab-pane fade in" id="user_availibilty_intro4">

												<ul class="today_time" all-click="1">

													<li all-li-click="1">

														<input id="user_create_intro_pop_call001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call001">8:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_call002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call002">8:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_call003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call003">9:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_call004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call004">9:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_call005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call005">10:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_call006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call006">10:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">

													<li all-li-click="1">

														<input id="user_create_intro_pop_call007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call007">11:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_call008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call008">11:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_call009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call009">12:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_call0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0010">12:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_call0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0011">13:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_call0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0012">13:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">

													<li all-li-click="1">

														<input id="user_create_intro_pop_call0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0013">14:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_call0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0014">14:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_call0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0015">15:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_call0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0016">15:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_call0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0017">16:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_call0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0018">16:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">

													<li all-li-click="1">

														<input id="user_create_intro_pop_call0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0019">17:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_call0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0020">17:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_call0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0021">18:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_call0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0022">18:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_call0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0023">19:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_call0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_call0024">19:30</label>

													</li>

												</ul>

											</div>

											<div class="tab-pane fade in" id="user_availibilty_intro5">
												<ul class="today_time" all-click="1">
													<li all-li-click="1">
														<input id="user_create_intro_pop_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_friday001">8:00</label>
													</li>

													<li all-li-click="2">
														<input id="user_create_intro_pop_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_friday002">8:30</label>
													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday003">9:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday004">9:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday005">10:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday006">10:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">

													<li all-li-click="1">

														<input id="user_create_intro_pop_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday007">11:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday008">11:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday009">12:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0010">12:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0011">13:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0012">13:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">

													<li all-li-click="1">

														<input id="user_create_intro_pop_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0013">14:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0014">14:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0015">15:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0016">15:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0017">16:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0018">16:30</label>

													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">

													<li all-li-click="1">

														<input id="user_create_intro_pop_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0019">17:00</label>

													</li>

													<li all-li-click="2">

														<input id="user_create_intro_pop_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0020">17:30</label>

													</li>

													<li all-li-click="3">

														<input id="user_create_intro_pop_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0021">18:00</label>

													</li>

													<li all-li-click="4">

														<input id="user_create_intro_pop_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0022">18:30</label>

													</li>

													<li all-li-click="5">

														<input id="user_create_intro_pop_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0023">19:00</label>

													</li>

													<li all-li-click="6">

														<input id="user_create_intro_pop_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

														<label for="user_create_intro_pop_friday0024">19:30</label>

													</li>

												</ul>

											</div>

											<div class="tab-pane fade in" id="user_availibilty_intro6">
												<ul class="today_time" all-click="1">
													<li all-li-click="1">
														<input id="user_create_intro_pop_1" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_1">8:00</label>
													</li>
													<li all-li-click="2">
														<input id="user_create_intro_pop_2" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_2">8:30</label>
													</li>
													<li all-li-click="3">
														<input id="user_create_intro_pop_3" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_3">9:00</label>
													</li>
													<li all-li-click="4">
														<input id="user_create_intro_pop_4" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_4">9:30</label>
													</li>
													<li all-li-click="5">
														<input id="user_create_intro_pop_5" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_5">10:00</label>
													</li>
													<li all-li-click="6">
														<input id="user_create_intro_pop_6" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_6">10:30</label>
													</li>
												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="2">
													<li all-li-click="1">
														<input id="user_create_intro_pop_7" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_7">11:00</label>
													</li>
													<li all-li-click="2">
														<input id="user_create_intro_pop_8" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_8">11:30</label>
													</li>
													<li all-li-click="3">
														<input id="user_create_intro_pop_9" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_9">12:00</label>
													</li>
													<li all-li-click="4">
														<input id="user_create_intro_pop_10" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_10">12:30</label>
													</li>
													<li all-li-click="5">
														<input id="user_create_intro_pop_11" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_11">13:00</label>
													</li>
													<li all-li-click="6">
														<input id="user_create_intro_pop_12" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_12">13:30</label>
													</li>

												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="3">
													<li all-li-click="1">
														<input id="user_create_intro_pop_13" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_13">14:00</label>
													</li>
													<li all-li-click="2">
														<input id="user_create_intro_pop_14" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_14">14:30</label>
													</li>
													<li all-li-click="3">
														<input id="user_create_intro_pop_15" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_15">15:00</label>
													</li>
													<li all-li-click="4">
														<input id="user_create_intro_pop_16" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_16">15:30</label>
													</li>
													<li all-li-click="5">
														<input id="user_create_intro_pop_17" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_17">16:00</label>
													</li>
													<li all-li-click="6">
														<input id="user_create_intro_pop_18" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_18">16:30</label>
													</li>
												</ul>

												<div class="clearfix"></div>

												<ul class="today_time" all-click="4">
													<li all-li-click="1">
														<input id="user_create_intro_pop_19" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="create_intro_pop_19">17:00</label>
													</li>
													<li all-li-click="2">
														<input id="user_create_intro_pop_20" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_20">17:30</label>
													</li>
													<li all-li-click="3">
														<input id="user_create_intro_pop_21" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_21">18:00</label>
													</li>
													<li all-li-click="4">
														<input id="user_create_intro_pop_22" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_22">18:30</label>
													</li>
													<li all-li-click="5">
														<input id="user_create_intro_pop_23" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_23">19:00</label>
													</li>
													<li all-li-click="6">
														<input id="user_create_intro_pop_24" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
														<label for="user_create_intro_pop_24">19:30</label>
													</li>
												</ul>
											</div>

										</div>
									</div>
								</div>
							</div>

							<div class="panel-group wrap mb-ntj_div" id="bs-collapse">
								<div class="panel">

									<div id="hr_mange_time" class="panel-collapse collapse in" aria-expanded="true" style="">
										<div class="panel-body" style="padding: 0px;">
											<div class="panel with-nav-tabs panel-default">
													<div class="panel-heading">
														<ul class="nav nav-tabs">
															<li class="active"><a href="#user_availibilty_mob1" data-toggle="tab" aria-expanded="false">All</a></li>
															<li><a href="#user_availibilty_mob2" data-toggle="tab" aria-expanded="false">M</a></li>
															<li><a href="#user_availibilty_mob3" data-toggle="tab" aria-expanded="false">T</a></li>
															<li><a href="#user_availibilty_mob4" data-toggle="tab" aria-expanded="false">W</a></li>
															<li><a href="#user_availibilty_mob5" data-toggle="tab" aria-expanded="false">T</a></li>
															<li><a href="#user_availibilty_mob6" data-toggle="tab" aria-expanded="true">F</a></li>
														</ul>
													</div>

													<div class="panel-body" style="padding: 0px;">
														<div class="tab-content all_clicks">
															<div class="tab-pane fade in active" id="user_availibilty_mob1">
																<ul all-click="1" class="today_time all-tab-tm-mb">
																	<li all-li-click="1">
																		<input id="user_mob_click_like001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_like002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_like003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_like004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_like005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_like006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_like007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like007">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_like008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like008">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_like009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like009">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_like0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0010">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_like0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0011">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_like0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0012">13:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_like0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0013">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_like0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0014">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_like0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0015">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_like0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0016">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_like0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0017">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_like0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0018">16:30</label>
																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_like0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0019">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_like0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0020">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_like0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0021">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_like0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0022">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_like0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0023">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_like0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_like0024">19:30</label>
																	</li>
																</ul>
															</div>

															<div class="tab-pane fade" id="user_availibilty_mob2">

																<ul all-click="1" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_intro001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_intro002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_intro003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_intro004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_intro005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_intro006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_intro007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro007">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_intro008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro008">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_intro009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro009">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_intro0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0010">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_intro0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0011">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_intro0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0012">13:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_intro0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0013">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_intro0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0014">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_intro0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0015">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_intro0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0016">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_intro0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0017">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_intro0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0018">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_intro0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0019">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_intro0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0020">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_intro0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0021">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_intro0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0022">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_intro0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0023">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_intro0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_intro0024">19:30</label>
																	</li>
																</ul>
															</div>

															<div class="tab-pane fade" id="user_availibilty_mob3">
																<ul all-click="1" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_meeting001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_meeting001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_meeting002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_meeting002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_meeting003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_meeting003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_meeting004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_meeting004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_meeting005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_meeting005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_meeting006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_meeting006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">

																	<li all-li-click="1">

																		<input id="user_mob_click_meeting007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting007">11:00</label>

																	</li>

																	<li all-li-click="2">

																		<input id="user_mob_click_meeting008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting008">11:30</label>

																	</li>

																	<li all-li-click="3">

																		<input id="user_mob_click_meeting009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting009">12:00</label>

																	</li>

																	<li all-li-click="4">

																		<input id="user_mob_click_meeting0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0010">12:30</label>

																	</li>

																	<li all-li-click="5">

																		<input id="user_mob_click_meeting0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0011">13:00</label>

																	</li>

																	<li all-li-click="6">

																		<input id="user_mob_click_meeting0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0012">13:30</label>

																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">

																	<li all-li-click="1">

																		<input id="user_mob_click_meeting0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0013">14:00</label>

																	</li>

																	<li all-li-click="2">

																		<input id="user_mob_click_meeting0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0014">14:30</label>

																	</li>

																	<li all-li-click="3">

																		<input id="user_mob_click_meeting0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0015">15:00</label>

																	</li>

																	<li all-li-click="4">

																		<input id="user_mob_click_meeting0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0016">15:30</label>

																	</li>

																	<li all-li-click="5">

																		<input id="user_mob_click_meeting0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0017">16:00</label>

																	</li>

																	<li all-li-click="6">

																		<input id="user_mob_click_meeting0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0018">16:30</label>

																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">

																	<li all-li-click="1">

																		<input id="user_mob_click_meeting0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0019">17:00</label>

																	</li>

																	<li all-li-click="2">

																		<input id="user_mob_click_meeting0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0020">17:30</label>

																	</li>

																	<li all-li-click="3">

																		<input id="user_mob_click_meeting0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0021">18:00</label>

																	</li>

																	<li all-li-click="4">

																		<input id="user_mob_click_meeting0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0022">18:30</label>

																	</li>

																	<li all-li-click="5">

																		<input id="user_mob_click_meeting0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0023">19:00</label>

																	</li>

																	<li all-li-click="6">

																		<input id="user_mob_click_meeting0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_meeting0024">19:30</label>

																	</li>

																</ul>

															</div>

															<div class="tab-pane fade" id="user_availibilty_mob4">

																<ul all-click="1" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_call001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_call002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_call003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_call004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_call005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_call006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_call007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call007">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_call008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call008">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_call009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call009">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_call0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0010">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_call0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0011">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_call0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0012">13:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_call0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0013">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_call0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0014">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_call0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_call0015">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_call0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">

																		<label for="user_mob_click_call0016">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_call0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0017">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_call0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0018">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_call0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0019">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_call0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0020">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_call0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0021">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_call0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0022">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_call0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0023">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_call0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_call0024">19:30</label>
																	</li>
																</ul>
															</div>

															<div class="tab-pane fade" id="user_availibilty_mob5">
																<ul all-click="1" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday007">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday008">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="click_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="click_friday009">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0010">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0011">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0012">13:30</label>
																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0013">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0014">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0015">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0016">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0017">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0018">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_click_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0019">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_click_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0020">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_click_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0021">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_click_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0022">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_click_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0023">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_click_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_click_friday0024">19:30</label>
																	</li>
																</ul>

															</div>

															<div class="tab-pane fade" id="user_availibilty_mob6">
																<ul all-click="1" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_clk_friday001" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday001">8:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_clk_friday002" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday002">8:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_clk_friday003" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday003">9:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_clk_friday004" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday004">9:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_clk_friday005" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday005">10:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_clk_friday006" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday006">10:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="2" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_clk_friday007" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday007">11:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_clk_friday008" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday008">11:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_clk_friday009" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday009">12:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_clk_friday0010" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0010">12:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_clk_friday0011" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0011">13:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_clk_friday0012" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0012">13:30</label>
																	</li>

																</ul>

																<div class="clearfix"></div>

																<ul all-click="3" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_clk_friday0013" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0013">14:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_clk_friday0014" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0014">14:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_clk_friday0015" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0015">15:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_clk_friday0016" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0016">15:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_clk_friday0017" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0017">16:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_clk_friday0018" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0018">16:30</label>
																	</li>
																</ul>

																<div class="clearfix"></div>

																<ul all-click="4" class="today_time">
																	<li all-li-click="1">
																		<input id="user_mob_clk_friday0019" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0019">17:00</label>
																	</li>

																	<li all-li-click="2">
																		<input id="user_mob_clk_friday0020" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0020">17:30</label>
																	</li>

																	<li all-li-click="3">
																		<input id="user_mob_clk_friday0021" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0021">18:00</label>
																	</li>

																	<li all-li-click="4">
																		<input id="user_mob_clk_friday0022" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0022">18:30</label>
																	</li>

																	<li all-li-click="5">
																		<input id="user_mob_clk_friday0023" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0023">19:00</label>
																	</li>

																	<li all-li-click="6">
																		<input id="user_mob_clk_friday0024" class="display_none_talent3" type="checkbox" onclick="clickMe(this)" backround-attr="">
																		<label for="user_mob_clk_friday0024">19:30</label>
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


						</div>
						<!--- Bilal user--->

						<div class="clear20"></div>

						<div class="col-md-6 col-sm-12 col-xs-12 p0">
							<div class="col-sm-8">
								<ul class="products-list product-list-in-box">
									<li class="item">
										<div class="product-img">
											<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">
										</div>

										<div class="product-info">
											<a href="#" class="product-title">Software engineer(Entry or Senior)</a>

											<span class="product-description">
												<i class="fa fa-map-marker" aria-hidden="true"></i>San Franicso, CA
											</span>
										</div>
									</li>
								</ul>
							</div>

							<div class="col-sm-4">
								<ul class="create_intro_feedbacks">
									<li>
										<span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
									<li>
										<span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
									<li>
										<span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
								</ul>
							</div>
						</div>



						<div class="col-md-6 col-sm-12 col-xs-12 p0">
							<div class="col-sm-8">
								<ul class="products-list product-list-in-box">
									<li class="item">
										<div class="product-img">
											<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">
										</div>

										<div class="product-info">
											<a href="#" class="product-title">Software engineer(Entry or Senior)</a>

											<span class="product-description">
												<i class="fa fa-map-marker" aria-hidden="true"></i>San Franicso, CA
											</span>
										</div>
									</li>
								</ul>
							</div>

							<div class="col-sm-4">
								<ul class="create_intro_feedbacks">
									<li>
										<span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
									<li>
										<span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
									<li>
										<span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
								</ul>
							</div>
						</div>



						<div class="col-md-6 col-sm-12 col-xs-12 p0">
							<div class="col-sm-8">
								<ul class="products-list product-list-in-box">
									<li class="item">
										<div class="product-img">
											<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">
										</div>

										<div class="product-info">
											<a href="#" class="product-title">Software engineer(Entry or Senior)</a>

											<span class="product-description">
												<i class="fa fa-map-marker" aria-hidden="true"></i>San Franicso, CA
											</span>
										</div>
									</li>
								</ul>
							</div>

							<div class="col-sm-4">
								<ul class="create_intro_feedbacks">
									<li>
										<span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
									<li>
										<span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
									<li>
										<span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
								</ul>
							</div>
						</div>



						<div class="col-md-6 col-sm-12 col-xs-12 p0">
							<div class="col-sm-8">
								<ul class="products-list product-list-in-box">
									<li class="item">
										<div class="product-img">
											<img src="<?php echo base_url();?>public/admin/dist/img/default-50x50.gif" alt="Product Image">
										</div>

										<div class="product-info">
											<a href="#" class="product-title">Software engineer(Entry or Senior)</a>

											<span class="product-description">
												<i class="fa fa-map-marker" aria-hidden="true"></i>San Franicso, CA
											</span>
										</div>
									</li>
								</ul>
							</div>

							<div class="col-sm-4">
								<ul class="create_intro_feedbacks">
									<li>
										<span class="label label-info pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
									<li>
										<span class="label label-warning pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
									<li>
										<span class="label label-success pull-right" style="margin-right:auto; float:inherit !important;">&nbsp;</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
                    <div class="clear20"></div>
                    <div class="clearfix"></div>
                </div>

                <div class="modal-footer">
					<button type="button" class="btn btn-info btn-lg" data-dismiss="modal">Save as draft</button>
					<button type="button" class="btn btn-info btn-lg" data-dismiss="modal">Create Intro</button>
					<button type="button" class="btn btn-info btn-lg" data-dismiss="modal">Add intro</button>
                </div>

            </div>

        </div>

    </div>